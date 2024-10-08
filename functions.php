<?php
 
// Load custom styles
function load_custom_styles() {
    wp_enqueue_style( 'custom-styles', get_template_directory_uri() . '/css/custom.css' );
}
add_action( 'wp_enqueue_scripts', 'load_custom_styles' ); 