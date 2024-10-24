<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wp-wst
 */
get_header();
$featured_img = ('' != get_the_post_thumbnail() ? get_the_post_thumbnail_url($post->ID, 'full') : get_template_directory_uri() . '/assets/images/12.jpg');
?>
<!-- page header -->
<section class="ws-title parallax" style="background-image: url(<?php echo $featured_img; ?>);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-1 col-sm-7">
				<h2>Recent Post </h2>
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
<!-- Details -->
<section id="primary" class="ws-block blog">
	<div class="container">
		<div class="row">
			<main class="col-md-8 col-lg-9 pr-lg-4">
				<?php
				while (have_posts()) :
					the_post();

					get_template_part('template-parts/content', get_post_type());

					$tags = get_the_tags();
					if ($tags) {
						$html = '<p class="tags py-3">TAGS: ';
						foreach ($tags as $tag) {
							$tag_link = get_tag_link($tag->term_id);
							$html .= " <a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
							$html .= "{$tag->name}</a>";
						}
						$html .= '</p>';
						echo $html;
					}

				/*the_post_navigation(
								array(
									'prev_text' => '<div class="icon-wrapper icon-previous d-flex align-items-center justify-content-center"><svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.8579 2.99995L2.71573 17.1421L16.8579 31.2842" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="nav-subtitle weight-700 d-block">' . esc_html__( 'Previous blog', 'ws-org' ) . '</span> <span class="nav-title d-none d-md-block">%title</span>',
									'next_text' => '<div class="icon-wrapper icon-previous ml-auto d-flex align-items-center justify-content-center"><svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.8579 2.99995L2.71573 17.1421L16.8579 31.2842" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="nav-subtitle weight-700 d-block">' . esc_html__( 'Next blog', 'ws-org' ) . '</span> <span class="nav-title d-none d-md-block">%title</span>',
								)
							);*/

				// If comments are open or we have at least one comment, load up the comment template.
				/*if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;*/

				endwhile; // End of the loop.
				?>
			</main>
			<aside class="col-md-4 col-lg-3">
				<?php get_sidebar(); ?>
			</aside>
		</div>
	</div>
</section>
<?php
get_footer();
