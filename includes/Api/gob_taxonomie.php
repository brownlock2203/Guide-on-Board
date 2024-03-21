<?php
namespace GOB\Api;

use WP_REST_Controller;

/**
 * REST_API Handler
 */
class gob_taxonomie extends WP_REST_Controller {

    /**
     * [__construct description]
     */
    public function __construct() {
        $this->namespace = 'gob/v1';
        $this->rest_base = 'gob-categorie';
    }

    /**
     * Register the routes
     *
     * @return void
     */
    public function register_routes() {
        register_rest_route(
            $this->namespace,
            '/' . $this->rest_base,
            array(
                array(
                    'methods'             => \WP_REST_Server::READABLE,
                    'callback'            => array( $this, 'get_items' ),
                    'permission_callback' => array( $this, 'get_items_permissions_check' ),
                ),
                array(
                    'methods'             => \WP_REST_Server::CREATABLE,
                    'callback'            => array( $this, 'create_items' ),
                    'permission_callback' => array( $this, 'get_items_permissions_check' ),
                ),
            )
        );

        register_rest_route(
            $this->namespace,
            '/' . $this->rest_base."/(?P<categorie_id>\d+)",
            array(
                array(
                    'methods'             => \WP_REST_Server::READABLE,
                    'callback'            => array( $this, 'get_item' ),
                    'permission_callback' => array( $this, 'get_items_permissions_check' ),
                    'args'                => array(
                        'categorie_id' => array(
                            'type' => 'integer',
                            'required' => true,
                        )
                    )
                ),
                array(
                    'methods'             => \WP_REST_Server::EDITABLE,
                    'callback'            => array( $this, 'update_item' ),
                    'permission_callback' => array( $this, 'get_items_permissions_check' ),
                    'args'                => array(
                        'categorie_id' => array(
                            'type' => 'integer',
                            'required' => true,
                        )
                    )
                ),
                array(
                    'methods'             => \WP_REST_Server::DELETABLE,
                    'callback'            => array( $this, 'delete_item' ),
                    'permission_callback' => array( $this, 'get_items_permissions_check' ),
                    'args'                => array(
                        'categorie_id' => array(
                            'type' => 'integer',
                            'required' => true,
                        )
                    )
                ),

            )
            
        );
    }

    /**
     * create category of items.
     *
     * @param WP_REST_Request $request Full details about the request.
     *
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */

    public function create_items( $request ) {

        $taxonomy_data = json_decode($request->get_body(),true);

        $terms = wp_insert_term( $taxonomy_data["name"],'gob-categorie',

            array(

                'description' => $taxonomy_data["description"],

                'slug' => $taxonomy_data["name"]

            )
        );

        if(! is_wp_error($terms)){

            $term_id = $terms['term_id'];

            $save = add_term_meta($term_id, 'thumbnail_id', $taxonomy_data["image"], true);

            return rest_ensure_response(["success" =>true, "message" => "Configuration created with success", "term_id" =>$save]);
        } else{

            return rest_ensure_response(["success" => false, "message" => "registration failed"]);

        }
    }

    /**
     * get category id of an item.
     *
     * @param WP_REST_Request $request Full details about the request.
     *
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */

    public function get_item($request) {

        $id = $request -> get_param( 'categorie_id' );

        if($id != 0) {
            $term = get_term($id, 'gob-categorie');

            if($term && !is_wp_error($term)){

                $term_id = $term->term_id;

                $name = $term->name;

                $description = $term->description;

                $thumbnail_id = get_term_meta($term_id, 'thumbnail_id', true);

                $response_data = array(
                    
                    'id' => $term_id,
                    
                    'name' => $name,
                    
                    'description' => $description,
                    
                    'image' => $thumbnail_id,
                
                );

                return rest_ensure_response($response_data);
                
            } else{

                return rest_ensure_response(["success" =>false, "message" => 'Not valid']);

            }

        }else{

            return rest_ensure_response(["success" =>false, "message" => 'Custom ID']);

        }
    }

    /**
     * edit category of items.
     *
     * @param WP_REST_Request $request Full details about the request.
     *
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */

    public function update_item( $request ) {

        $taxonomy_data = json_decode($request->get_body(),true);
        
        $term_id = $request -> get_param('categorie_id');

        $args = array(

            'ID' => $term_id,

            'name' => $taxonomy_data["name"],
            
            'description' => $taxonomy_data["description"],

            'image' => $taxonomy_data["image"],
            
        );
        
        $updateTerms = wp_update_term($term_id, 'gob-categorie', $args);

        if(!is_wp_error($updateTerms)){

            $save = update_term_meta($term_id, 'thumbnail_id', $taxonomy_data["image"], true);

            return rest_ensure_response(["success" =>true, "message" => "Configuration successful", "parent_id" => $term_id]);
        
        } else{

            return rest_ensure_response(["success" => false, "message" => "registration failed"]);

        }
    }


    /**
     * remove gob category of items.
     *
     * @param WP_REST_Request $request Full details about the request.
     *
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */

    public function delete_item( $request ) {
        $id = $request -> get_param( 'categorie_id' );

        if($id != 0) {

            $removeTerm = wp_delete_term($id, 'gob-categorie');

            if($removeTerm != null && $removeTerm != false) {

                return rest_ensure_response(["success" => true, "message" => "The category was well removed"]);

            } else {

                return rest_ensure_response(["success" => false, "message" => "Deleting the category failed"]);

            }

        } else {
            
            return rest_ensure_response(["success" => false, "message" => "Deleting the category failed"]);
        
        }
    
    }


    /**
     * Get all gob category of items.
     *
     * @param WP_REST_Request $request Full details about the request.
     *
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */

    public function get_items($request) {
        
        $order = $request->get_param('order');

        $terms = get_terms(array(

            'taxonomy' => 'gob-categorie',
            
            'hide_empty' => false,
            
            'order' => $order ? : 'DESC',
            
            'orderby' => 'ID',

            'number' => 0,
            
            's' => sanitize_text_field($request->get_param('search')),
        
        ));

        if (is_wp_error($terms)) {

            return rest_ensure_response(array(

                'success' => false,
                
                'message' => 'Error retrieving taxonomy terms.',
            
            ));

        }

        $categories = array();
        
        foreach ($terms as $term) {

            $thumbnail = get_term_meta($term->term_id, 'thumbnail_id', true);

            $categories[] = array(

                'id' => $term->term_id,
                        
                'name' => $term->name,
                        
                'description' => $term->description,

                'image' => $thumbnail

            );
        }

            return rest_ensure_response(array(

                'success' => true,
                
                'categories' => $categories,
            
            ));

    }



    /**
     * Checks if a given request has access to read the items.
     *
     * @param  WP_REST_Request $request Full details about the request.
     *
     * @return true|WP_Error True if the request has read access, WP_Error object otherwise.
     */
    public function get_items_permissions_check( $request ) {
        return true;
    }

    /**
     * Retrieves the query params for the items collection.
     *
     * @return array Collection parameters.
     */
    public function get_collection_params() {
        return [];
    }
}
