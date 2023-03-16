<?php

add_theme_support( 'custom-logo');
add_theme_support( 'title-tag' );


// Load in our CSS
function parcelly_enqueue_styles() {

    wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/assets/css/custom.css' );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ) , '1.0', true );
	wp_enqueue_script( 'tool-js', get_template_directory_uri() . '/assets/js/tool.js', array( 'jquery' ) , '1.0', true );

}
add_action( 'wp_enqueue_scripts', 'parcelly_enqueue_styles' );

//Nav Menu
if ( ! function_exists( 'plugin_register_nav_menu' ) ) {

	function plugin_register_nav_menu(){
		register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'parcelly' ),
			'footer_menu' => __( 'Footer Menu', 'parcelly' ),
		) );
	}
	add_action( 'after_setup_theme', 'plugin_register_nav_menu');
}