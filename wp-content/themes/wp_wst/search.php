<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package wp-wst
 */

get_header();
$featured_img = ( '' != get_the_post_thumbnail() ? get_the_post_thumbnail_url($post->ID, 'full') : get_template_directory_uri() . '/assets/images/12.jpg' );
if (!is_front_page()) {
	
?>
<!-- page header -->
<section class="ws-title parallax" style="background-image: url(<?php echo $featured_img; ?>);"  data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<h3  class="wow slideInUp text-uppercase">Search Results</h3>
		
			</div>
		</div>
	</div>
</section>
<?php } ?>
<div class="container-fluid archive">
	<div class="row justify-content-around">
		<?php
		if (have_posts()) :
			while (have_posts()) : the_post();
		?>
				<div class="my-4 wow animate__animated animate__fadeInUp animate__delay-1.3s">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
					</a>
					<p><i class="fas fa-calendar"></i><?php echo get_the_date('j M, Y'); ?></p>
					<a href="<?php the_permalink(); ?>">
						<h3><?php the_title(); ?></h3>
					</a>
				</div>
		<?php
			endwhile;
			the_posts_navigation();
		else :
			get_template_part('template-parts/content', 'none');
		endif;
		?>
	</div>
</div>

<?php
get_footer();
