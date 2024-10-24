<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp-wst
 */

get_header();
$featured_img = ('' != get_the_post_thumbnail() ? get_the_post_thumbnail_url($post->ID, 'full') : get_template_directory_uri() . '/assets/images/12.jpg');
?>
<section class="ws-title parallax" style="background-image: url(<?php echo $featured_img; ?>);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-1 col-sm-7">
				<h1>Recent Post </h1>
		
			</div>
			<div class="col-md-3 col-sm-5">
				<div class="b-search">
					<form action="" method="post">
						<div class="mb-2 text-white">SEARCH</div>
						<div class="input-group">
							<input type="text" name="s" id="s" class="form-control" placeholder="Enter Keywords" value="">
							<button class="btn btn-warning" type="submit" id="button-addon2"><i class="fas fa-search" aria-hidden="true"></i></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ws-block blog">
	<div class="container">
		<!-- <div class="row"> -->
			<?php
			if (have_posts()) {
			?>
				<main class="row">
				<?php
				/* Start the Loop */
				while (have_posts()) {
					the_post();

					/*
									 * Include the Post-Type-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
									 */
					get_template_part('template-parts/content', get_post_type());
				}

				the_posts_navigation();
			} else {

				get_template_part('template-parts/content', 'none');
			}
				?>
				</main>

		<!-- </div> -->
	</div>
</section>

<?php
get_footer();
