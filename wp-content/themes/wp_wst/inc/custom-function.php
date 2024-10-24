<?php
// To upload SVG
function wp_wst_mime_types($mimes) {
 $mimes['svg'] = 'image/svg+xml';
 return $mimes;
}
add_filter('upload_mimes', 'wp_wst_mime_types');

// To hide ACF field for sub level menu
function wp_wst_acf_parent_menu_show() {
  echo '<style>
    .acf-menu-item-fields {
	    display: none!important;
	}
	.menu-item-depth-0 .acf-menu-item-fields {
	    display: block!important;
	}
  </style>';
}
add_action('admin_head', 'wp_wst_acf_parent_menu_show');


/**
* debug helper
*/
function vr($data){
	echo "<pre>";
	var_dump($data);
	echo "</pre>";
}
function pr($data){
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}


// add_action( 'pre_get_posts', 'set_posts_per_page_for_blog' );
// /* Change number of post per page for post */
// // global $ppp;
// $ppp = get_field( 'number_of_post_to_display', 'option' );

// function set_posts_per_page_for_blog( $query ) {
// 	 //$GLOBALS['ppp'] = $ppp;
//  if ( !is_front_page() && is_home() ) {
 
// 	$query->set( 'posts_per_page', $ppp );
//   }
// }






// render wrapper element for guttenburg core blocks

add_filter( 'render_block', 'wrap_core_block', 10, 2 );
function wrap_core_block( $block_content, $block ) {
	$blockslist = array('archives',
	'audio',
	'buttons',
	'calendar',
	'categories',
	'code',
	'columns',
	'coverImage',
	'embed',
	'file',
	'freeform',
	'gallery',
	'heading',
	'html',
	'image',
	'latestComments',
	'latestPosts',
	'list',
	'more',
	'media-text',
	'nextpage',
	'paragraph',
	'preformatted',
	'pullquote',
	'quote',
	'rss',
	'reusableBlock',
	'separator',
	'shortcode',
	'spacer',
	'subhead',
	'search',
	'tag-cloud',
	'table',
	'textColumns',
	'verse',
	'video',
	'form',
	'facebook',
	'youtube',
	'instagram',
	'twitter');
	
	foreach ($blockslist as $item) {
		if (  'core/' . $item === $block['blockName'] || 'core-embed/' . $item === $block['blockName'] || 'gravityforms/' . $item === $block['blockName'] ) {
			
			$block_content = '<div class="wp-core-block block-'.  $item .'">' . $block_content . '</div>';
		  }
	}
  
  return $block_content;
}

// Changes Gravity Forms Ajax Spinner (next, back, submit) to a transparent image
// this allows you to target the css and create a pure css spinner like the one used below in the style.css file of this gist.
add_filter( 'gform_ajax_spinner_url', 'spinner_url', 10, 2 );
function spinner_url( $image_src, $form ) {
    return  'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7'; // relative to you theme images folder

  }

add_image_size( 'home-blog-size', 525, 260, true );
add_image_size( 'home-gallery-size', 350, 380, true );
add_image_size( 'gallery-size', 250, 250, true );
