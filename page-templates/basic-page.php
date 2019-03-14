<?php
/**
 * The template for displaying all pages
 * 
 * Template Name: Basic Page
 * Template Post Type: page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cfea
 */

// imports the header
get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<!-- offest - put everything inside here we don't want max width -->
			<div class="grid-x">
				<div class="cell large-12 medium-12 small-12 contactTitle">
					<h2>Contact Us</h2>
				</div>
				<div class="cell large-offset-2 medium-12 small-12 contactForm">
					<?php
                echo do_shortcode('[ws_form id="1"]');
            ?>
				</div>
			</div>
			<!-- offset enf-->


		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->


	<?php
// imports the footer
get_footer();
