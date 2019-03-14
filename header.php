<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cassieunderscore
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cassieunderscore' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$cassieunderscore_description = get_bloginfo( 'description', 'display' );
			if ( $cassieunderscore_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $cassieunderscore_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'cassieunderscore' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary-menu',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->


<?php if (get_theme_mod( 'cassieunderscore_facebook_url' )) { ?>
	<a class="icon facebook" href="<?php echo get_theme_mod('cassieunderscore_facebook_url'); ?> ">Facebook</a>
	<?php

} ?>


	</header><!-- #masthead -->

	<div id="content" class="site-content">
