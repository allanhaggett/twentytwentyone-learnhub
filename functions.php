<?php
/* enqueue scripts and style from parent theme */
   
function twentytwentyone_styles() {
	wp_enqueue_style( 'child-style', get_stylesheet_uri(),
	array( 'twenty-twenty-one-style' ), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'twentytwentyone_styles');

/**
 * Modify search query
 *
 * @param WP_Query $query
 *
 * @return void
 */
function theme_modify_search( $query ) {
 
    if( is_admin() ) {
		return;
	}
		
	if( $query->is_main_query() ) {
		if( isset( $_GET, $_GET['post_type'] ) ) {
			$query->set( 'post_type', $_GET['post_type'] );
		}
	}
 
}
add_action( 'pre_get_posts', 'theme_modify_search' );