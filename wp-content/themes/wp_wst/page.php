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
 * @package wp-wstone
 */

get_header();

$featured_img = ('' != get_the_post_thumbnail() ? get_the_post_thumbnail_url($post->ID, 'full') : get_template_directory_uri() . '/assets/images/12.jpg');
if (!is_front_page()) {

?>
	<!-- page header -->
	<section class="ws-title" style="background-image: url(<?php echo $featured_img; ?>);" data-stellar-background-ratio="0.5">
		<h3><?php the_title(); ?></h3>
	</section>
<?php } ?>
<?php
while (have_posts()) :
	the_post();
	get_template_part('template-parts/content', 'page');
endwhile;
get_footer();
