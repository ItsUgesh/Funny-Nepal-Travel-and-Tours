<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package wp-wst
 */

get_header();

$featured_img = ( '' != get_the_post_thumbnail() ? get_the_post_thumbnail_url($post->ID, 'full') : get_template_directory_uri() . '/assets/images/404.png' );
if (!is_front_page()) {
	
?>
<!-- page header -->
<section class="ws-title parallax" style="background-image: url(<?php echo $featured_img; ?>);"  data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<h3  class="wow slideInUp text-uppercase">404 not found</h3>
			</div>
		</div>
	</div>
</section>
<?php } ?>
	<main id="primary" class="site-main">

		<section class="ws-block">
			<div class="container text-center">
					<h2 class="text-danger page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'wp-wst' ); ?></h2>
	
				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'wp-wst' ); ?></p>
					<div class="mt-4">
						<?php get_search_form();?>
					</div>
					<div class="btn-wraper mt-5">
						<a href="<?php echo home_url(); ?>" title="Back to Homepage" class="btn btn-outline-success">Back to Homepage</a>
					</div>
				</div><!-- .page-content -->
			</div>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
