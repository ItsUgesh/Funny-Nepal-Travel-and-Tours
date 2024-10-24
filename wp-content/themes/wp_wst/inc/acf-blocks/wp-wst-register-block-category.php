<?php
function wp_wst_block_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'ws-blocks',
				'title' => __( 'WS Blocks', 'ws-blocks' ),
			),
		)
	);
}
// add_filter( 'block_categories', 'wp_wst_block_category', 10, 2);
add_filter( 'block_categories_all', 'wp_wst_block_category', 10, 2);