<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cassieunderscore
 */

get_header();
?>




<!-- wrap content in this if using field -->
<?php 
if (function_exists('get_field')) {
$featured_slider = get_field('featured_slider');

?>


<div class="slider">
	<?php 

		foreach ( $featured_slider as $featured_slide) {
			$header = $featured_slide['heading'];
			$content = $featured_slide['content'];
			$image = $featured_slide['image'];

			// var_dump($header);
	
		
	?>

		<div class="slide" style="background-image:url(<?php echo$image['url']; ?>)">
			<h1><?php echo$header; ?></h1>
			<p><?php echo$content; ?></p>

		</div>

		<?php 
}
?>

</div>

<?php
}

?>
	

	<div id="primary" class="content-area">
		<main id="main" class="site-main">





	<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>


<?php
if ( function_exists('get_field') ) {
	$form_id = get_field("form_id");
	$form_shortcode = get_field("form_shortcode");

	if ($form_id || $form_shortcode) {
		?> 
		<section class="contact-form">
			<div class="grid-container">
				<div class="grid-x grid-margin-x grid-margin-y">
					<div class= "cell small-12 medium-6">
						<h2>Form Id</h2>
						<?php echo do_shortcode('[ws_form id="' . $form_id . '"]') ?>
					</div>
					<div class="cell small-12 medium-6">
						<?php echo $form_shortcode; ?>
					</div>
			</div>
	</section>
		<?php
	}

}

?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
