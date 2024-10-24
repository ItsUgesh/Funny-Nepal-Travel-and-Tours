<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp-wst
 */

if (is_singular()) {
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php
			if (is_singular()) :
				the_title('<h2 class="entry-title">', '</h2>');
			else :
				the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
			endif;

			?>
		</header><!-- .entry-header -->
		<div class="entry-meta">
			<?php
			//wp_wst_posted_on();
			wp_wst_posted_by();
			?>
		</div><!-- .entry-meta -->
		<figure>
			<?php wp_wst_post_thumbnail('full');
			?>
		</figure>

		<?php //if ( 'post' === get_post_type() ) :
		?>
		<?php //endif; 
		?>

		<div class="entry-content">
			<?php
			the_content(
				sprintf(
					wp_kses(
						__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'wp-wst'),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post(get_the_title())
				)
			);
			/*
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-wst' ),
					'after'  => '</div>',
				)
			);*/
			?>
		</div><!-- .entry-content -->
	</article><!-- #post-<?php //the_ID(); 
							?> -->
<?php
} else 
//echo '<div class="row">';
{
	$column = get_field('blog_column', 'option');
?>
	
		<?php if ($column == 'three-column') { ?>
			<div class="col-md-4">
			<?php } else {
			?>
				<div class="col-md-6 ">
				<?php } ?>
				<div class="blog-item p-2 ">
					<figure class="wow fadeInUp">
						<?php
						if (has_post_thumbnail()) {
							the_post_thumbnail('home-blog-size', ['class' => 'img-fluid']);
						}
						?>
					</figure>
					<p class="date wow fadeInUp"><i class="far fa-calendar-alt"></i> <?php echo get_the_date() ?></p>
					<?php the_title('<h3><a href="' . esc_url(get_permalink()) . '" class="wow fadeInUp" rel="bookmark">', '</a></h3>'); ?>
					<?php //the_excerpt(); 
					?>
				</div>
				</div>
			<?php } ?>
