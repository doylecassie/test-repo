<?php
/**
 * cassieunderscore functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cassieunderscore
 */

/**
 * Theme setup.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Enqueue scripts and styles.
 */
function cassieunderscore_scripts() {
	wp_enqueue_style( 'cassieunderscore-style', get_stylesheet_uri() );

	wp_enqueue_style('slick-css', get_template_directory_uri() . '/assets/css/vendor/slick-css', array(), '1.8.1');
	wp_enqueue_style('slick-theme-css', get_template_directory_uri() . '/assets/css/vendor/slick-theme-css', array(), '1.8.1');
	wp_enqueue_style('app-css', get_template_directory_uri() . '/assets/css/app.css', array(), null);

	wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/js/vendor/slick.js', array('jquery'), '1.8.1', true);

	wp_enqueue_script('app-js', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), null, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cassieunderscore_scripts' );

wp_enqueue_style( 'foundation-css', get_template_directory_uri() . '/assets/css/vendor/foundation.css', array(), '6.5.1' );

wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/assets/js/vendor/foundation.js', array( 'jquery' ), '6.5.1', true );

wp_enqueue_script( 'what-input-js', get_template_directory_uri() . '/assets/js/vendor/what-input.js', array( 'foundation-js' ), '5.1.2', true );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

