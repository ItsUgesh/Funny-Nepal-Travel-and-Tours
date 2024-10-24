<?php
/*This is the page that will be responsible to display ever treks that will be posted */
get_header();
$featured_img = ('' != get_the_post_thumbnail() ? get_the_post_thumbnail_url($post->ID, 'full') : get_template_directory_uri() . '/assets/images/12.jpg');

if (have_posts()) {
	while (have_posts()) : the_post();

		if (!is_front_page()) {

?>
			<!-- page header -->
			<section class="ws-title" style="background-image: url(<?php echo $featured_img; ?>);" data-stellar-background-ratio="0.5">
				<h2><?php //the_title(); 
					?></h2>
			</section>

		<?php
		} ?>

		<?php

		the_content();

		?>
<?php

	endwhile;
	wp_reset_postdata();
}

get_footer();
