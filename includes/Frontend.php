<?php
namespace GOB;

/**
 * Frontend Pages Handler
 */
class Frontend {

    public function __construct() {
        add_shortcode( 'gob', [ $this, 'render_frontend' ] );
    }

    /**
     * Render frontend app
     *
     * @param  array $atts
     * @param  string $content
     *
     * @return string
     */
    public function render_frontend( $atts, $content = '' ) {
        wp_enqueue_style( 'gob-frontend' );
        wp_enqueue_style( 'gob-style' );
        wp_enqueue_script( 'gob-frontend' );

        $content .= '<div id="gob-frontend-app"></div>';

        return $content;
    }
}
