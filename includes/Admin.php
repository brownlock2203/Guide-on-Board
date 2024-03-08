<?php
namespace GOB;

/**
 * Admin Pages Handler
 */
class Admin {

    public function __construct() {
        add_action( 'admin_menu', [ $this, 'admin_menu' ] );

    }

    /**
     * Register our menu page
     *
     * @return void
     */

    

    public function admin_menu() {
        global $submenu;

        $capability = 'manage_options';
        $slug       = 'gob';

        $hook = add_menu_page( __( 'GOB', 'GOB' ), __( 'GOB', 'GOB' ), $capability, $slug, [ $this, 'plugin_page' ], 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48IS0tIFVwbG9hZGVkIHRvOiBTVkcgUmVwbywgd3d3LnN2Z3JlcG8uY29tLCBHZW5lcmF0b3I6IFNWRyBSZXBvIE1peGVyIFRvb2xzIC0tPgo8c3ZnIGZpbGw9IiMwMDAwMDAiIHdpZHRoPSI4MDBweCIgaGVpZ2h0PSI4MDBweCIgdmlld0JveD0iMCAwIDEwMDAgMTAwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNOTcxIDE1Mkw1MjYgNTVxLTIwLTUtNDEtMi0yOSA2LTQ5IDI4TDczIDQ3MXEtMzQgMzctNTIuNSA4NC41VDIgNjUzdjE2cTAgNTIgMzAgOTMuNXQ3OSA1Ny41bDQyNyAxNDZxMjQgOCA0OC41IDF0NDAuNS0yN2wzNTItNDMycTEwLTEzIDctMzAtNS0xOS0xNi00MC0xMC0xNi0xMS0yNi41dDAtMjEuNXExLTYgNC0yMGwzLTEwcTMtMTYtMy41LTI4VDkzOSAzMTdxLTEzLTMtMjMgNS04IDYtMTkgMjItOCAxNC0xMC41IDM5dDMuNSA0N3E0IDExIDEwIDMwIDQgMTEtNCAyMEw1ODMgODY0cS04IDktMjAuNSAxM3QtMjQuNSAwTDE0MyA3NTNxLTI3LTktNDQtMzEuNVQ4MiA2NzB2LTMycS0yLTIwIDYtMzN0MjItMTcuNSAyOC0uNWwzOTIgMTE4cTcgMiAxNCAyaDFxMjEgMCAzNi0xN2w0MDgtNDc4cTktMTAgOS0yM3YtMnEwLTEyLTcuNS0yMlQ5NzEgMTUyek00MjQgNDkzcS0xNiAxOC00MiAyNi41dC00NyA0LTI0LjUtMjAgMTIuNS0zMyA0Mi0yNiA0Ny0zLjUgMjQuNSAyMC0xMi41IDMyem0zMjMtMjE3cS0yNCAyNi01NiA0MS0zNiAxNy0xMDYgMzEtNDQgOS02NCAxOS0xNCA3LTQzIDM1LTggOC0xOSA1bC0xMi0zcS0zLTEtNC00dDEtNXEyMi0yNCAzNy0zNSAxNy0xNCA1Ny0zNC41dDU5LTM0LjVsMTItOHEyNi0xNyAzNi0yOCAxNi0xNyAyMi41LTI5dDQtMjEuNS0xMy0xN1Q2MzYgMTc4cS0xOC00LTM1IDEtNyAxLTE0LjUgNXQtMTEgOC01LjUgMTRsLTEgNXEtMyAxMS00IDE1LTMgOC04IDEzLTE1IDE2LTI5IDIwLTE4IDYtMzQuNSAyLjVUNDc0IDI0NXEtMS04IDAtMTcgMy0xMSAxMC0xOSAxMy0xNCAzNS0yNCAxOC04IDQ4LTE3IDI4LTggNTkuNS05dDU5LjUgNXE1NSAxMyA3MSA0NSA3IDE2IDYgMzMtMiAxOS0xNiAzNHoiLz48L3N2Zz4=' );

        if ( current_user_can( $capability ) ) {
            $submenu[ $slug ][] = array( __( 'App', 'GOB' ), $capability, 'admin.php?page=' . $slug . '#/' );
            $submenu[ $slug ][] = array( __( 'Options', 'GOB' ), $capability, 'admin.php?page=' . $slug . '#/options' );
        }

        add_action( 'load-' . $hook, [ $this, 'init_hooks'] );
    }

    /**
     * Initialize our hooks for the admin page
     *
     * @return void
     */
    public function init_hooks() {
        add_action( 'admin_enqueue_scripts', [ $this, 'enqueue_scripts' ] );
    }

    /**
     * Load scripts and styles for the app
     *
     * @return void
     */
    public function enqueue_scripts() {
        wp_enqueue_style( 'gob-admin' );
        wp_enqueue_style( 'gob-style' );
        wp_enqueue_script( 'gob-admin' );
        wp_enqueue_media();
    }

    /**
     * Render our admin page
     *
     * @return void
     */
    public function plugin_page() {
        echo '<div class="wrap"><div id="gob-admin-app"></div></div>';
        $rest_url = get_rest_url()."gob/v1";
        wp_localize_script( 'gob-admin','gob_rest_url', $rest_url);
    }
}
