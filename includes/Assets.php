<?php
namespace GOB;

/**
 * Scripts and Styles Class
 */
class Assets {

    function __construct() {

        if ( is_admin() ) {
            add_action( 'admin_enqueue_scripts', [ $this, 'register' ], 5 );
        } else {
            add_action( 'wp_enqueue_scripts', [ $this, 'register' ], 5 );
        }
    }

    /**
     * Register our app scripts and styles
     *
     * @return void
     */
    public function register() {
        $this->register_scripts( $this->get_scripts() );
        $this->register_styles( $this->get_styles() );
    }

    /**
     * Register scripts
     *
     * @param  array $scripts
     *
     * @return void
     */
    private function register_scripts( $scripts ) {
        // Return if JS folder not exists
        if (!is_dir(GOB_PATH . '/assets/js')) {
            return;
        }

        foreach ( $scripts as $handle => $script ) {
            $deps      = isset( $script['deps'] ) ? $script['deps'] : false;
            $in_footer = isset( $script['in_footer'] ) ? $script['in_footer'] : false;
            $version   = isset( $script['version'] ) ? $script['version'] : GOB_VERSION;

            wp_register_script( $handle, $script['src'], $deps, $version, $in_footer );
        }
    }

    /**
     * Register styles
     *
     * @param  array $styles
     *
     * @return void
     */
    public function register_styles( $styles ) {
        foreach ( $styles as $handle => $style ) {
            $deps = isset( $style['deps'] ) ? $style['deps'] : false;

            wp_register_style( $handle, $style['src'], $deps, GOB_VERSION );
        }
    }

    /**
     * Get all registered scripts
     *
     * @return array
     */
    public function get_scripts() {
        // Return if JS folder not exists
        if (!is_dir(GOB_PATH . '/assets/js')) {
            return;
        }

        $prefix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '.min' : '';

        $scripts = [
            'gob-runtime' => [
                'src'       => GOB_ASSETS . '/js/runtime.js',
                'version'   => filemtime( GOB_PATH . '/assets/js/runtime.js' ),
                'in_footer' => true
            ],
            'gob-vendor' => [
                'src'       => GOB_ASSETS . '/js/vendors.js',
                'version'   => filemtime( GOB_PATH . '/assets/js/vendors.js' ),
                'in_footer' => true
            ],
            'gob-frontend' => [
                'src'       => GOB_ASSETS . '/js/frontend.js',
                'deps'      => [ 'jquery', 'gob-vendor', 'gob-runtime' ],
                'version'   => filemtime( GOB_PATH . '/assets/js/frontend.js' ),
                'in_footer' => true
            ],
            'gob-admin' => [
                'src'       => GOB_ASSETS . '/js/admin.js',
                'deps'      => [ 'jquery', 'gob-vendor', 'gob-runtime' ],
                'version'   => filemtime( GOB_PATH . '/assets/js/admin.js' ),
                'in_footer' => true
            ]
        ];

        return $scripts;
    }

    /**
     * Get registered styles
     *
     * @return array
     */
    public function get_styles() {

        $styles = [
            'gob-style' => [
                'src' =>  GOB_ASSETS . '/css/style.css'
            ],
            'gob-frontend' => [
                'src' =>  GOB_ASSETS . '/css/frontend.css'
            ],
            'gob-admin' => [
                'src' =>  GOB_ASSETS . '/css/admin.css'
            ],
        ];

        return $styles;
    }

}