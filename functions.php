<?php
	
function brutal_child_scripts() {
	// Enqueue Google Fonts: Work Sans and Crimson Text
	wp_enqueue_style( 'brutal-fonts', 'https://fonts.googleapis.com/css?family=Zilla+Slab+Highlight:400,400i,700|Open+Sans:400,400i,700|Rokkitt:400,400i,700');

	$parent_style = 'brutal-style'; 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

    wp_enqueue_style( 'brutal-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}	
add_action( 'wp_enqueue_scripts', 'brutal_child_scripts' );

?>