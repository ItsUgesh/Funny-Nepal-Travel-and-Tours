<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp-wst
 */

?>

<div class="container-fluid no-result">

	<h3 class="page-title wow animate__animated animate__fadeInUp animate__delay-1.3s"><?php esc_html_e('Nothing Found', 'wp-wst'); ?></h3>


	<div class="page-content wow animate__animated animate__fadeInUp animate__delay-1.3s">
		<?php
		if (is_home() && current_user_can('publish_posts')) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'wp-wst'),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url(admin_url('post-new.php'))
			);

		elseif (is_search()) :
		?>

			<p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'wp-wst'); ?></p>
			<div class=" mt-4 col-md-4 p-0">
				<form class="d-flex" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="s" value="<?php echo get_search_query(); ?>">
					<button class="btn btn-outline-secondary" type="submit">Search</button>
				</form>
			</div>

		<?php

		else :
		?>

			<p><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'wp-wst'); ?></p>
			<div class=" mt-4 col-md-4 p-0">
				<form class="d-flex" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="s" value="<?php echo get_search_query(); ?>">
					<button class="btn btn-outline-secondary" type="submit">Search</button>
				</form>
			</div>
		<?php
		endif;
		?>
	</div><!-- .page-content -->
</div><!-- .no-results -->