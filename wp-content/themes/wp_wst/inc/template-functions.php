<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package wp-wst
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function wp_wst_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'wp_wst_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function wp_wst_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'wp_wst_pingback_header' );

function get_all_pacakges($args)
{
	if ($args['order'] == 1) {
		$args = array(
			'post_type' => 'tours',
			'destination' => $args['slug'],
			'posts_per_page' => -1
		);

		if ($args['order'] == 1) {
			$args = array(
				'post_type' => 'treks',
				'destination' => $args['slug'],
				'posts_per_page' => -1
			);
		}
}
}

