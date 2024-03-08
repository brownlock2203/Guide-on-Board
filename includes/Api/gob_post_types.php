<?php
namespace GOB\Api;

use WP_REST_Controller;

/**
 * REST_API Handler
 */
class gob_post_types extends WP_REST_Controller {

    /**
     * [__construct description]
     */
    public function __construct() {
        $this->namespace = 'gob/v1';
        $this->rest_base = 'gob-categorie/(?P<categorie_id>\d+)/gob-guides';
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
                        'callback'            => array( $this, 'get_guides' ),
                        'permission_callback' => array( $this, 'get_items_permissions_check' ),
                        'args'                => array(
                            'categorie_id' => array(
                                'type' => 'integer',
                                'required' => true,
                            )
                        )
                    ),
                    array(
                        'methods'             => \WP_REST_Server::CREATABLE,
                        'callback'            => array( $this, 'create_guide' ),
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

        register_rest_route(
            $this->namespace,
            '/' . $this->rest_base."/(?P<guide_id>\d+)",
            array(
                array(
                    'methods'             => \WP_REST_Server::READABLE,
                    'callback'            => array( $this, 'get_guide' ),
                    'permission_callback' => array( $this, 'get_items_permissions_check' ),
                    'args'                => array(
                        'categorie_id' => array(
                            'type' => 'integer',
                            'required' => true,
                        ),
                        'guide_id' => array(
                            'type' => 'integer',
                            'required' => true,
                        )
                    )
                ),
                array(
                    'methods'             => \WP_REST_Server::EDITABLE,
                    'callback'            => array( $this, 'update_guide' ),
                    'permission_callback' => array( $this, 'get_items_permissions_check' ),
                    'args'                => array(
                        'categorie_id' => array(
                            'type' => 'integer',
                            'required' => true,
                        ),
                        'guide_id' => array(
                            'type' => 'integer',
                            'required' => true,
                        )
                    )
                ),
                array(
                    'methods'             => \WP_REST_Server::DELETABLE,
                    'callback'            => array( $this, 'delete_guide' ),
                    'permission_callback' => array( $this, 'get_items_permissions_check' ),
                    'args'                => array(
                        'categorie_id' => array(
                            'type' => 'integer',
                            'required' => true,
                        ),
                        'guide_id' => array(
                            'type' => 'integer',
                            'required' => true,
                        )
                    )
                ),

            )
            
        );

    }



    /**
     * Create a collection of guides.
     *
     * @param WP_REST_Request $request Full details about the request.
     *
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */

    public function create_guide( $request ) {
        
        $guide_data = json_decode($request -> get_body(),true);

        $categorie_id = $request -> get_param( 'categorie_id' );

        $title = $guide_data['title'];

        $content = $guide_data['content'];

        // $categorie_id = $guide_data['categorie_id'];

        $post_id = wp_insert_post( array(

            'post_title'   => $title,
            
            'post_content' => $content,
            
            'post_status'  => 'publish',
    
            'post_type'    => 'gob-guides',

            // 'tax_input'    => array(

            //     'gob-categorie' => array( $categorie_id ),
            
            // ),

        ) );

        // var_dump($post_id);

        if( !is_wp_error($post_id) ){

            $result = wp_set_object_terms($post_id, $categorie_id, 'gob-categorie', true);

            // var_dump($result);
    
            if(is_wp_error($result)) {
                
                wp_delete_post($post_id, true);

                return rest_ensure_response(["success" => false, "message" => "Error setting terms: " . $result->get_error_message()]);
    
            }    

            return rest_ensure_response(["success" =>true, "message" => "Configuration created with success", "post_id" =>$post_id]);
        
        } else{

            return rest_ensure_response(["success" => false, "message" => "registration failed"]);

        }

    }

    

    /**
     * Get guide id of one guide.
     *
     * @param WP_REST_Request $request Full details about the request.
     *
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */

    public function get_guide($request) {

        $guide_id = $request -> get_param( 'guide_id' );

        $categorie_id = $request -> get_param( 'categorie_id' );

        // var_dump($guide_id);

        // var_dump($categorie_id);

        $term_list = wp_get_post_terms($guide_id, 'gob-categorie');

        // var_dump($term_list);

        if (in_array($categorie_id, wp_list_pluck($term_list, 'term_id'))) {

            $post = get_post($guide_id);

            if($post && !is_wp_error($post)) {
    
                $response_data = array (
    
                    'ID'            => $post -> ID,
    
                    'post_title'    => $post -> post_title,
    
                    'post_content'  => $post -> post_content,
    
                );
                    
                    // var_dump($post);

                    // var_dump($response_data);

                return rest_ensure_response($response_data);
                    
            } else {
    
                return rest_ensure_response(["success" =>false, "message" => 'Guide not found or not valid']);
    
            }

        } else {

            return rest_ensure_response(["success" => false, "message" => 'Guide does not belong to the specified category']);
            
        }
    
    }



    /**
     * Edit on guide.
     *
     * @param WP_REST_Request $request Full details about the request.
     *
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */

    public function update_guide( $request ) {

        $guide_data = json_decode($request -> get_body(),true);

        $guide_id = $request -> get_param( 'guide_id' );

        $args = array(

            'ID'            => $guide_id,

            'post_title'    => $guide_data['title'],
            
            'post_content'  => $guide_data['content'],

        );

        $updated = wp_update_post( $args );

        if( !is_wp_error($updated) ) {

            return rest_ensure_response(["success" =>true, "message" => "Configuration successful", "parent_id" => $guide_id]);

        } else {

            return rest_ensure_response(["success" => false, "message" => "registration failed"]);
            
        }

    }



    /**
     * Get all guides.
     *
     * @param WP_REST_Request $request Full details about the request.
     *
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */

    public function delete_guide( $request ) {

        $guide_id = $request -> get_param( 'guide_id' );

        if( $guide_id != 0 ) {

            $remove_guide = wp_delete_post($guide_id, true);

            if( $remove_guide != null && $remove_guide != false ) {

                return rest_ensure_response(["success" => true, "message" => "The guide was well removed"]);

            } else {

                return rest_ensure_response(["success" => false, "message" => "Deleting the guide failed"]);

            }

        } else {

            return rest_ensure_response(["success" => false, "message" => "Deleting the guide failed"]);

        }

    }



    /**
     * Get all guides.
     *
     * @param WP_REST_Request $request Full details about the request.
     *
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */

    public function get_guides( $request ) {

        $categorie_id = $request->get_param('categorie_id');

        // var_dump($categorie_id);

        $guides = get_posts( array (

            'post_type' => 'gob-guides',
            
            'tax_query' => array(
            
                array(
            
                    'taxonomy' => 'gob-categorie',
            
                    'field'    => 'term_id',
            
                    'terms'    => $categorie_id,
            
                ),
        
            ),

            'posts_per_page' => -1,
        
        ));

        
        $formatted_guides = array();

        foreach ($guides as $guide) {
        
            $formatted_guides[] = array(
            
                'id' => $guide->ID,
            
                'title' => $guide->post_title,
            
                'content' => $guide->post_content,
        
            );

            // var_dump($formatted_guides[]);
    
        }

        return rest_ensure_response($formatted_guides);

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
