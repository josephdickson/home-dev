<?php
/**
 * Enqueue scripts and styles.
 */
function foundation_6_child_scripts() {
	wp_enqueue_style( 'foundation-style-css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'foundation-6-child-style', get_stylesheet_directory_uri() . '/style.css' );


}
add_action( 'wp_enqueue_scripts', 'foundation_6_child_scripts' );
