<?php
/*
Plugin Name: Guide on board
Description: The ultimate custom neon and channel sign configurator for woocommerce.
Our custom neon signs configurator allows you to extend your business of personalization of neon signs by offering you a nice configurator to allow your customers to customize signs in neon, acrylic, metal, 2D and 3D, thanks to a highly configurable sign product builder.

Version: 1.0
Author: Dani Web
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: textdomain
Domain Path: /languages
*/

/**
 * Copyright (c) 2023 Vertim Coders. All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 * 
 * Inspired by: https://github.com/tareq1988/vue-wp-starter
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 * **********************************************************************
 */

// don't call the file directly
if ( !defined( 'ABSPATH' ) ) exit;

/**
 * guide_on_board class
 *
 * @class guide_on_board The class that holds the entire guide_on_board plugin
 */
final class guide_on_board {

    /**
     * Plugin version
     *
     * @var string
     */
    public $version = '1.0';

    /**
     * Holds various class instances
     *
     * @var array
     */
    private $container = array();

    /**
     * Constructor for the guide_on_board class
     *
     * Sets up all the appropriate hooks and actions
     * within our plugin.
     */
    public function __construct() {

        $this->define_constants();

        register_activation_hook( __FILE__, array( $this, 'activate' ) );
        register_deactivation_hook( __FILE__, array( $this, 'deactivate' ) );

        add_action( 'plugins_loaded', array( $this, 'init_plugin' ) );

        add_action('init', array($this, 'create_GOB_post_types'));

        add_action('init', array($this, 'create_GOB_taxonomies'));

        add_action('init', array($this, 'create_GOB_meta'));

        // add_action('rest_api_init', array($this, 'create_endpoint'));
    }

    /**
     * Initializes the guide_on_board() class
     *
     * Checks for an existing guide_on_board() instance
     * and if it doesn't find one, creates it.
     */
    public static function init() {
        static $instance = false;

        if ( ! $instance ) {
            $instance = new guide_on_board();
        }

        return $instance;
    }
    

    /**
     * Magic getter to bypass referencing plugin.
     *
     * @param $prop
     *
     * @return mixed
     */
    public function __get( $prop ) {
        if ( array_key_exists( $prop, $this->container ) ) {
            return $this->container[ $prop ];
        }

        return $this->{$prop};
    }

    /**
     * Magic isset to bypass referencing plugin.
     *
     * @param $prop
     *
     * @return mixed
     */
    public function __isset( $prop ) {
        return isset( $this->{$prop} ) || isset( $this->container[ $prop ] );
    }

    /**
     * Define the constants
     *
     * @return void
     */
    public function define_constants() {
        define( 'GOB_VERSION', $this->version );
        define( 'GOB_FILE', __FILE__ );
        define( 'GOB_PATH', dirname( GOB_FILE ) );
        define( 'GOB_INCLUDES', GOB_PATH . '/includes' );
        define( 'GOB_URL', plugins_url( '', GOB_FILE ) );
        define( 'GOB_ASSETS', GOB_URL . '/assets' );
    }

    /**
     * Load the plugin after all plugis are loaded
     *
     * @return void
     */
    public function init_plugin() {
        $this->includes();
        $this->init_hooks();
    }

    /**
     * Placeholder for activation function
     *
     * Nothing being called here yet.
     */
    public function activate() {

        $installed = get_option( 'gob_installed' );

        if ( ! $installed ) {
            update_option( 'gob_installed', time() );
        }

        update_option( 'gob_version', BOG_VERSION );
    }

    /**
     * Placeholder for deactivation function
     *
     * Nothing being called here yet.
     */
    public function deactivate() {

    }

    /**
     * Include the required files
     *
     * @return void
     */
    public function includes() {

        require_once GOB_INCLUDES . '/Assets.php';

        if ( $this->is_request( 'admin' ) ) {
            require_once GOB_INCLUDES . '/Admin.php';
        }

        if ( $this->is_request( 'frontend' ) ) {
            require_once GOB_INCLUDES . '/Frontend.php';
        }

        if ( $this->is_request( 'ajax' ) ) {
            // require_once GOB_INCLUDES . '/class-ajax.php';
        }

        require_once GOB_INCLUDES . '/Api.php';
    }

    /**
     * Initialize the hooks
     *
     * @return void
     */
    public function init_hooks() {

        add_action( 'init', array( $this, 'init_classes' ) );

        // Localize our plugin
        add_action( 'init', array( $this, 'localization_setup' ) );
    }

    /**
     * Instantiate the required classes
     *
     * @return void
     */
    public function init_classes() {

        if ( $this->is_request( 'admin' ) ) {
            $this->container['admin'] = new GOB\Admin();
        }

        if ( $this->is_request( 'frontend' ) ) {
            $this->container['frontend'] = new GOB\Frontend();
        }

        if ( $this->is_request( 'ajax' ) ) {
            // $this->container['ajax'] =  new GOB\Ajax();
        }

        $this->container['api'] = new GOB\Api();
        $this->container['assets'] = new GOB\Assets();
    }

    /**
     * Initialize plugin for localization
     *
     * @uses load_plugin_textdomain()
     */
    public function localization_setup() {
        load_plugin_textdomain( 'gob', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
    }

    /**
     * What type of request is this?
     *
     * @param  string $type admin, ajax, cron or frontend.
     *
     * @return bool
     */
    private function is_request( $type ) {
        switch ( $type ) {
            case 'admin' :
                return is_admin();

            case 'ajax' :
                return defined( 'DOING_AJAX' );

            case 'rest' :
                return defined( 'REST_REQUEST' );

            case 'cron' :
                return defined( 'DOING_CRON' );

            case 'frontend' :
                return ( ! is_admin() || defined( 'DOING_AJAX' ) ) && ! defined( 'DOING_CRON' );
        }
    }

    public function create_GOB_post_types() {
        
        register_post_type('gob-guides', array(
            'show_in_rest' => true,
            'supports' => array('title', 'editor','thumbnail', 'excerpt', 'comments', 'revisions'),
            'rewrite' => array('slug' => 'gob-guides'),
            'has_archive' => true,
            'public' => false,
            'taxonomies' => array('gob-categorie'),
            'labels' => array(
                'name' => 'Guides',
                'all_items' => 'All guides',
                'edit_item' => 'Edit Guides',
                'add_new_item' => 'Add new Guides',
                'singular_name' => 'Guides'
            ),
            'menu_icon' => 'dashicons-book',
        ));

        register_post_type('gob-sections', array(
            'show_in_rest' => true,
            'supports' => array('title', 'editor','thumbnail', 'excerpt', 'comments', 'revisions'),
            'rewrite' => array('slug' => 'gob-sections'),
            'has_archive' => true,
            'public' => false,
            'labels' => array(
                'name' => 'Section',
                'all_items' => 'All Sections',
                'edit_item' => 'Edit Section',
                'add_new_item' => 'Add new Section',
                'singular_name' => 'Section'
            ),
            'menu_icon' => 'dashicons-book',
        ));

    }
    
    public function create_GOB_taxonomies() {

        register_taxonomy('gob-categorie', 'gob-guides', array(
            'public' => true,
            'show_ui' => true,
			'label' => 'Categories',
			'hierarchical' => true,
            'query_var' => true,
			'rewrite' => array('slug' => 'gob-categories'),
			'show_admin_column' => true,
			'show_in_rest' => true,
			'labels' => array(
				'name' => 'Categories',
				'singular_name' => 'Categorie',
				'all_items' => 'All Categorie',
				'edit_item' => 'Edit Categorie',
				'view_item' => 'View Categorie',
				'update_item' => 'Update Categorie',
				'add_new_item' => 'Add New Categorie',
				'new_item_name' => 'New Categorie Name',
				'search_items' => 'Search Categorie',
				'popular_items' => 'Popular PlayAuthorslists',
				'separate_items_with_commas' => 'Separate Categories with comma',
				'choose_from_most_used' => 'Choose from most used Categories',
				'not_found' => 'No Categories found',
				'menu_name' => 'Categories',
            ),
            'capabilities' => array(
                'manage_terms' => 'manage_categories', // Assurez-vous que cela est correct
                'edit_terms' => 'manage_categories',
                'delete_terms' => 'manage_categories',
                'assign_terms' => 'edit_posts',
            ),
		));
    }

    public function create_GOB_meta() {

        register_meta('post', 'sous_sections', array(

            'show_in_rest' => true,
            'type' => 'string',
            'single' => true

        ));
        
    }

    // public function create_endpoint() {
    //     register_rest_route('wp/v2', '/Categorie', array(
    //         'methods' => 'GET',
    //         'callback' => 'categories_callback'
    //     ));    
    // }

    // public function categories_callback() {

    //     $categories = get_terms('Categorie', array('hide_empty' => false));

    //     $formatted_categories = array();

    //     foreach ($categories as $category) {

            
    //         $formatted_categories[] = array(
            
    //             'id' => $category->term_id,
            
    //             'name' => $category->name,
    //             // Ajoutez d'autres champs si nécessaire
    //         );
    //     }
    
    //     return rest_ensure_response($formatted_categories);
    
    // }

} // guide_on_board

$some = guide_on_board::init();