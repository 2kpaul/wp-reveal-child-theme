<?php

/*** Child Theme Function  ***/

if ( ! function_exists( 'eltd_child_theme_enqueue_scripts' ) ) {
	function eltd_child_theme_enqueue_scripts() {
		$parent_style = 'readanddigest-default-style';

		wp_enqueue_style( 'readanddigest-default-child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ) );
	}

	add_action( 'wp_enqueue_scripts', 'eltd_child_theme_enqueue_scripts' );
}