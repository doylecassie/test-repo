<?php
/**
 * cassieunderscore Theme Customizer
 *
 * @package cassieunderscore
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function cassieunderscore_customize_register( $wp_customize ) {

// social media section 
$wp_customize -> add_section (
	'cassieunderscore_social_media',
	array(
		'title' => 'Social Media',
		'capability' => 'edit_theme_options',
	)
);


//social media setting 

$wp_customize -> add_setting(
	'cassieunderscore_facebook_url',
	array(
		'default' => 'https://facebook.com',
		'transport' => 'refresh',
	)
	);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'cassieunderscore_facebook_url',
		array(
			'label' => 'Facebook',
			'type' => 'text',
			'section' => 'cassieunderscore_social_media',
		)
	)
);

//social media control 




	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';


	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'cassieunderscore_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'cassieunderscore_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'cassieunderscore_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function cassieunderscore_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function cassieunderscore_customize_partial_blogdescription() {
	bloginfo( 'description' );
}


