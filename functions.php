<?php
/**
 ** activation theme
 **/

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// Suppression version Wordpress

remove_action("wp_head","wp_generator");

?>