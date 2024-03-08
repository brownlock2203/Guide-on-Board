<?php
namespace GOB;

use WP_REST_Controller;

/**
 * REST_API Handler
 */
class Api extends WP_REST_Controller {

    /**
     * [__construct description]
     */
    public function __construct() {
        $this->includes();

        add_action( 'rest_api_init', [ $this, 'register_routes' ] );
    }

    /**
     * Include the controller classes
     *
     * @return void
     */
    private function includes() {

        if ( !class_exists( __NAMESPACE__ . '\Api\Example'  ) ) {
            require_once __DIR__ . '/Api/Example.php';
        }

        if ( !class_exists( __NAMESPACE__ . '\Api\gob_taxonomie'  ) ) {
            require_once __DIR__ . '/Api/gob_taxonomie.php';
        }

        if ( !class_exists( __NAMESPACE__ . '\Api\gob_post_types'  ) ) {
            require_once __DIR__ . '/Api/gob_post_types.php';
        }

        if ( !class_exists( __NAMESPACE__ . '\Api\section_post_type'  ) ) {
            require_once __DIR__ . '/Api/section_post_type.php';
        }
    
    }

    /**
     * Register the API routes
     *
     * @return void
     */
    public function register_routes() {

        (new Api\Example())->register_routes();
        
        (new Api\gob_taxonomie())->register_routes();
        
        (new Api\gob_post_types())->register_routes();

        (new Api\section_post_type())->register_routes();

    }

}
