<?php
/**
 * Twenty Twenty-Five Child Theme functions
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue parent theme stylesheet, child stylesheet, and Google Fonts
 */
function twentytwentyfive_child_enqueue_styles() {
	wp_enqueue_style(
		'parent-style',
		get_template_directory_uri() . '/style.css',
		array(),
		wp_get_theme( 'twentytwentyfive' )->get( 'Version' )
	);

	wp_enqueue_style(
		'twentytwentyfive-child-google-fonts',
		'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@500;600;700&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'child-style',
		get_stylesheet_uri(),
		array( 'parent-style', 'twentytwentyfive-child-google-fonts' ),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'twentytwentyfive_child_enqueue_styles' );

/**
 * Add favicon
 */
function twentytwentyfive_child_favicon() {
	$favicon = get_stylesheet_directory_uri() . '/faviconcookie.png';
	echo '<link rel="icon" type="image/png" href="' . esc_url( $favicon ) . '">';
}
add_action( 'wp_head', 'twentytwentyfive_child_favicon' );