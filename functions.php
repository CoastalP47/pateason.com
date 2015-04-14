<?php
//enqueue scripts
function pateason_scripts(){
	wp_enqueue_style( 'pateason-style', get_template_directory_uri().'/assets/stylesheets/pateason.css' );
	wp_enqueue_script( 'pateason-libs', get_template_directory_uri() . '/assets/js/pateason_lib.js', '', '1.0.0', true );
	wp_enqueue_script( 'foundation', get_template_directory_uri() . '/assets/js/foundation.min.js', '', '5.5.1', true );
	wp_enqueue_script( 'pateason-script', get_template_directory_uri() . '/assets/js/pateason.js', '', '1.0.0', true );
} add_action( 'wp_enqueue_scripts', 'pateason_scripts' );


//register menus
function pateason_register_menus(){
	register_nav_menus( 
		array(
			'main_nav' => 'Main Navigation'
		)
	);
} add_action('init', 'pateason_register_menus');