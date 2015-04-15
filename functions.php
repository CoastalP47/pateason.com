<?php
//theme support
add_theme_support( 'post-thumbnails' ); 

//enqueue scripts
function pateason_scripts(){
	wp_enqueue_style( 'pateason-style', get_template_directory_uri().'/assets/stylesheets/pateason.css' );
	wp_enqueue_script( 'pateason-libs', get_template_directory_uri() . '/assets/js/pateason_lib.js', '', '1.0.0', true );
	wp_enqueue_script( 'foundation', get_template_directory_uri() . '/assets/js/foundation.min.js', '', '5.5.1', true );
	wp_enqueue_script( 'pateason-script', get_template_directory_uri() . '/assets/js/pateason.js', '', '1.0.0', true );
	wp_localize_script( 'pateason-script', 'pateason_wp',
            array( 
            	'ajax_url' => admin_url( 'admin-ajax.php' )
            )
        );
} add_action( 'wp_enqueue_scripts', 'pateason_scripts' );


//register menus
function pateason_register_menus(){
	register_nav_menus( 
		array(
			'main_nav' => 'Main Navigation'
		)
	);
} add_action('init', 'pateason_register_menus');


//search ajax
add_action( 'wp_ajax_search_results', 'search_results' );
add_action( 'wp_ajax_nopriv_search_results', 'search_results' );
function search_results(){
	$s = $_POST['search'];
	$output = '';

	$args = array(
		's' 		=> $s,
		'post_type' => 'post'
	);
	$posts = new WP_Query($args);
	if($posts->have_posts()){
		while($posts->have_posts()){
			$posts->the_post();
			global $post;
			$output .= '<div class="search_result">
							<a class="clearfix" href="'.get_permalink($psot->ID).'">
								<h5>'.$post->post_title.'</h5>
								<span>'.$post->post_excerpt.'</span>
							</a>
						</div>';
		}
	}else{
		$output = "<p class='text-center'>No Posts found for <em>$s</em></p>";
	}

	wp_die($output);
}

//infinite scroll ajax
