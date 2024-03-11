<?php
namespace GOB\Api;

use WP_REST_Controller;

/**
 * REST_API Handler
 */
class section_post_type extends WP_REST_Controller {

    /**
     * [__construct description]
     */
    public function __construct() {
        $this->namespace = 'gob/v1';
        $this->rest_base = 'gob-categorie/(?P<categorie_id>\d+)/gob-guides/(?P<guide_id>\d+)/gob-sections';
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
                        'callback'            => array( $this, 'get_sections' ),
                        'permission_callback' => array( $this, 'get_items_permissions_check' ),
                        'args'                => array(
                            'categorie_id' => array(
                                'type' => 'integer',
                                'required' => true,
                            ),
                            'guide_id' => array(
                                'type' => 'integer',
                                'required' => true,
                            ),
                        )
                    ),
                    array(
                        'methods'             => \WP_REST_Server::CREATABLE,
                        'callback'            => array( $this, 'create_section' ),
                        'permission_callback' => array( $this, 'get_items_permissions_check' ),
                        'args'                => array(
                            'categorie_id' => array(
                                'type' => 'integer',
                                'required' => true,
                            ),
                            'guide_id' => array(
                                'type' => 'integer',
                                'required' => true,
                            ),
                        )
                    ),
                )
            );

        register_rest_route(
            $this->namespace,
            '/' . $this->rest_base."/(?P<section_id>\d+)",
            array(
                array(
                    'methods'             => \WP_REST_Server::READABLE,
                    'callback'            => array( $this, 'get_section' ),
                    'permission_callback' => array( $this, 'get_items_permissions_check' ),
                    'args'                => array(
                        'categorie_id' => array(
                            'type' => 'integer',
                            'required' => true,
                        ),
                        'guide_id' => array(
                            'type' => 'integer',
                            'required' => true,
                        ),
                        'section_id' => array(
                            'type' => 'integer',
                            'required' => true,
                        ),
                    )
                ),
                array(
                    'methods'             => \WP_REST_Server::EDITABLE,
                    'callback'            => array( $this, 'update_section' ),
                    'permission_callback' => array( $this, 'get_items_permissions_check' ),
                    'args'                => array(
                        'categorie_id' => array(
                            'type' => 'integer',
                            'required' => true,
                        ),
                        'guide_id' => array(
                            'type' => 'integer',
                            'required' => true,
                        ),
                        'section_id' => array(
                            'type' => 'integer',
                            'required' => true,
                        ),
                    )
                ),
                array(
                    'methods'             => \WP_REST_Server::DELETABLE,
                    'callback'            => array( $this, 'delete_section' ),
                    'permission_callback' => array( $this, 'get_items_permissions_check' ),
                    'args'                => array(
                        'categorie_id' => array(
                            'type' => 'integer',
                            'required' => true,
                        ),
                        'guide_id' => array(
                            'type' => 'integer',
                            'required' => true,
                        ),
                        'section_id' => array(
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

    public function create_section( $request ) {
        
        $section_data = json_decode($request -> get_body(),true);

        $categorie_id = $request -> get_param( 'categorie_id' );
        
        $guide_id = $request -> get_param( 'guide_id' );

        $title = $section_data['title'];

        $content = $section_data['content'];

        // $parent_id = $section_data[$guide_id];

        // $categorie_id = $guide_data['categorie_id'];

        $data = array(

            'post_title'   => $title,
            
            'post_content' => $content,
            
            'post_status'  => 'publish',
    
            'post_type'    => 'gob-sections',

            'post_parent'   => $guide_id,

            'sous_section' => $section_data['sous_section'],
                    
            'etape'        => $section_data['etape'],
                
        );

        // update_post_meta($section_id, 'sous_sections', $data);

        
        $section_id = wp_insert_post($data);

            if ( !is_wp_error($section_id) ) {

                // wp_set_post_parent($section_id, $guide_id);
            
                // wp_set_object_terms($section_id, $categorie_id, 'gob-categorie', true);

                // $data = array(

                //     'sous_section' => $section_data['sous_section'],
                    
                //     'etape'        => $section_data['etape'],
                
                // );

                $meta_key = 'sous_sections_' . $section_id;
        
                update_post_meta($section_id, $meta_key, $data);
            
                return rest_ensure_response(["success" =>true, "message" => "Configuration created with success", "section_id" =>$section_id, "parent_id"=>$guide_id, "meta_key" =>$meta_key ]);
                    
            } else {
            
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

    public function get_section($request) {

        $section_id = $request -> get_param( 'section_id' );

        $guide_id = $request -> get_param( 'guide_id' );

        if($section_id != 0) {

            $meta_key = 'sous_sections_' . $section_id;

            $meta_value = get_post_meta( $section_id, $meta_key, true );

            $response_data = array (
    
                'ID'            => $section_id,
    
                'post_title'    =>get_the_title($section_id),
    
                'post_content'  => get_post_field('post_content', $section_id),
                    
                'post_parent'   => $guide_id,
                
                'sous_section'  => isset( $meta_value['sous_section'] ) ? $meta_value['sous_section'] : '',

                'etape'         => isset( $meta_value['etape'] ) ? $meta_value['etape'] : '',        

            );

                return rest_ensure_response($response_data);

            } else {

                return rest_ensure_response(["success" =>false, "message" => 'Section not found']);

            }                    
    
    }



    /**
     * Edit on guide.
     *
     * @param WP_REST_Request $request Full details about the request.
     *
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */

    public function update_section( $request ) {

        $section_data = json_decode($request -> get_body(),true);

        $section_id = $request -> get_param( 'section_id' );

        $args = array(

            'ID'            => $section_id,

            'post_title'    => $section_data['title'],
            
            'sous_section' => $section_data['sous_section'],
                    
            'etape'        => $section_data['etape'],


        );
        

        $updated = wp_update_post( $args );
        
        $meta_key = 'sous_sections_' . $section_id;
                
        update_post_meta($section_id, $meta_key, $args);

        if( !is_wp_error($updated) ) {

            return rest_ensure_response(["success" =>true, "message" => "Configuration successful", "parent_id" => $section_id, "results" => $args]);

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

    public function delete_section( $request ) {

        $section_id = $request -> get_param( 'section_id' );

        if( $section_id != 0 ) {

            $remove_section = wp_delete_post($section_id, true);

            if( $remove_section != null && $remove_section != false ) {

                return rest_ensure_response(["success" => true, "message" => "The section was well removed"]);

            } else {

                return rest_ensure_response(["success" => false, "message" => "Deleting the section failed"]);

            }

        } else {

            return rest_ensure_response(["success" => false, "message" => "Deleting the section failed"]);

        }

    }



    /**
     * Get all guides.
     *
     * @param WP_REST_Request $request Full details about the request.
     *
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */

    public function get_sections( $request ) {

        $guide_id = $request -> get_param( 'guide_id' );
        
        $sections = get_posts( array (

            'post_type' => 'gob-sections',

            'posts_per_page' => -1,

            'post_parent' => $guide_id,
    
            'post_status'   => 'publish',

        ));


        $formatted_sections = array();

        foreach ($sections as $section) {

            $meta_key       = 'sous_sections_' . $section->ID;
        
            $meta_value     = get_post_meta( $section->ID, $meta_key, true );
        
            $section_data = array(
            
                'id' => $section->ID,
            
                'title' => $section->post_title,
            
                'content' => $section->post_content,

                'sous_section' => isset( $meta_value['sous_section'] ) ? $meta_value['sous_section'] : '',

                'etape'        => isset( $meta_value['etape'] ) ? $meta_value['etape'] : '',
        
            );

            // $meta_values = get_post_meta($section->ID);

            // foreach ($meta_values as $meta_key => $meta_value) {

            //     $meta_value = maybe_unserialize($meta_value[0]);
            
            //     $section_data[$meta_key] = $meta_value;
        
            // }

            $formatted_sections[] = $section_data;
    
        }

        return rest_ensure_response($formatted_sections);

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
