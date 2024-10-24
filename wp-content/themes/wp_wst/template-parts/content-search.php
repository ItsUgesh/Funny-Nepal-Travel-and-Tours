<?php

/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp-wst
 */

?>

	<div class="col-md-4 post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="blog-item p-2 ">
			<figure class="wow fadeInUp">
				<?php
				if (has_post_thumbnail()) {
					the_post_thumbnail('home-blog-size', ['class' => 'img-fluid']);
				}
				?>
			</figure>
			<?php if ('post' === get_post_type()) : ?>
				<p class="date wow fadeInUp"><i class="far fa-calendar-alt"></i> <?php echo get_the_date() ?></p>
			<?php endif; ?>
			<?php the_title(sprintf('<h3 class="entry-title"><a href="%s" rel="bookmark" class="text-dark">', esc_url(get_permalink())), '</a></h3>'); ?>

		</div>
	</div>