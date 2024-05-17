<?php
/**
 * Electronik functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Electronik
 */

 add_filter( 'script_loader_tag', 'scripts_as_es6_modules', 10, 3	 );
 function scripts_as_es6_modules( $tag, $handle, $src ) {
	 if ( 'index-c6b02868' === $handle|| 'bd' === $handle || 'function' === $handle) {
		 return str_replace( '<script type="text/javascript"', '<script type="module"', $tag );
	 }
 
	 return $tag;
 }
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'index-e5cf6991', get_template_directory_uri() . '/assets/index-e5cf6991.css');
	add_theme_support('post-thumbnails');
	
	wp_enqueue_script( 'index-c6b02868', get_template_directory_uri() . '/assets/index-c6b02868.js' ,[],true);
	wp_enqueue_script( 'bd', get_template_directory_uri() . '/assets/bd.js' ,["index-c6b02868"],true);

} );


?>