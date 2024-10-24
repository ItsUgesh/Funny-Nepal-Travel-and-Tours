<?php
// Register Custom Post Type
// function custom_post_type() {

// 	$labels = array(
// 		'name'                  => _x( 'Activities', 'Post Type General Name', 'wst-kit' ),
// 		'singular_name'         => _x( 'Activity', 'Post Type Singular Name', 'wst-kit' ),
// 		'menu_name'             => __( 'Activities', 'wst-kit' ),
// 		'name_admin_bar'        => __( 'Activities', 'wst-kit' ),
// 		'archives'              => __( 'Item Archives', 'wst-kit' ),
// 		'attributes'            => __( 'Item Attributes', 'wst-kit' ),
// 		'parent_item_colon'     => __( 'Parent Item:', 'wst-kit' ),
// 		'all_items'             => __( 'All Items', 'wst-kit' ),
// 		'add_new_item'          => __( 'Add New Item', 'wst-kit' ),
// 		'add_new'               => __( 'Add New', 'wst-kit' ),
// 		'new_item'              => __( 'New Item', 'wst-kit' ),
// 		'edit_item'             => __( 'Edit Item', 'wst-kit' ),
// 		'update_item'           => __( 'Update Item', 'wst-kit' ),
// 		'view_item'             => __( 'View Item', 'wst-kit' ),
// 		'view_items'            => __( 'View Items', 'wst-kit' ),
// 		'search_items'          => __( 'Search Item', 'wst-kit' ),
// 		'not_found'             => __( 'Not found', 'wst-kit' ),
// 		'not_found_in_trash'    => __( 'Not found in Trash', 'wst-kit' ),
// 		'featured_image'        => __( 'Featured Image', 'wst-kit' ),
// 		'set_featured_image'    => __( 'Set featured image', 'wst-kit' ),
// 		'remove_featured_image' => __( 'Remove featured image', 'wst-kit' ),
// 		'use_featured_image'    => __( 'Use as featured image', 'wst-kit' ),
// 		'insert_into_item'      => __( 'Insert into item', 'wst-kit' ),
// 		'uploaded_to_this_item' => __( 'Uploaded to this item', 'wst-kit' ),
// 		'items_list'            => __( 'Items list', 'wst-kit' ),
// 		'items_list_navigation' => __( 'Items list navigation', 'wst-kit' ),
// 		'filter_items_list'     => __( 'Filter items list', 'wst-kit' ),
// 	);
// 	$args = array(
// 		'label'                 => __( 'Activities', 'wst-kit' ),
// 		'description'           => __( 'Activities Description', 'wst-kit' ),
// 		'labels'                => $labels,
// 		'supports'              => ['title', 'editor', 'excerpt', 'thumbnail'],
// 		'show_in_rest'          => true,
// 		'hierarchical'          => false,
// 		'public'                => true,
// 		'show_ui'               => true,
// 		'show_in_menu'          => true,
// 		'menu_position'         => 5,
// 		'show_in_admin_bar'     => true,
// 		'show_in_nav_menus'     => true,
// 		'can_export'            => true,
// 		'has_archive'           => true,
// 		'exclude_from_search'   => false,
// 		'publicly_queryable'    => true,
// 		'capability_type'       => 'page',
// 		'menu_icon'				=> 'dashicons-location-alt'
// 	);
// 	register_post_type( 'Activity', $args );

// }
// add_action( 'init', 'custom_post_type', 0 );

// function custom_post_type_room() {

// 	$labels = array(
// 		'name'                  => _x( 'Rooms', 'Post Type General Name', 'wst-kit' ),
// 		'singular_name'         => _x( 'Room', 'Post Type Singular Name', 'wst-kit' ),
// 		'menu_name'             => __( 'Rooms', 'wst-kit' ),
// 		'name_admin_bar'        => __( 'Rooms', 'wst-kit' ),
// 		'archives'              => __( 'Item Archives', 'wst-kit' ),
// 		'attributes'            => __( 'Item Attributes', 'wst-kit' ),
// 		'parent_item_colon'     => __( 'Parent Item:', 'wst-kit' ),
// 		'all_items'             => __( 'All Items', 'wst-kit' ),
// 		'add_new_item'          => __( 'Add New Item', 'wst-kit' ),
// 		'add_new'               => __( 'Add New', 'wst-kit' ),
// 		'new_item'              => __( 'New Item', 'wst-kit' ),
// 		'edit_item'             => __( 'Edit Item', 'wst-kit' ),
// 		'update_item'           => __( 'Update Item', 'wst-kit' ),
// 		'view_item'             => __( 'View Item', 'wst-kit' ),
// 		'view_items'            => __( 'View Items', 'wst-kit' ),
// 		'search_items'          => __( 'Search Item', 'wst-kit' ),
// 		'not_found'             => __( 'Not found', 'wst-kit' ),
// 		'not_found_in_trash'    => __( 'Not found in Trash', 'wst-kit' ),
// 		'featured_image'        => __( 'Featured Image', 'wst-kit' ),
// 		'set_featured_image'    => __( 'Set featured image', 'wst-kit' ),
// 		'remove_featured_image' => __( 'Remove featured image', 'wst-kit' ),
// 		'use_featured_image'    => __( 'Use as featured image', 'wst-kit' ),
// 		'insert_into_item'      => __( 'Insert into item', 'wst-kit' ),
// 		'uploaded_to_this_item' => __( 'Uploaded to this item', 'wst-kit' ),
// 		'items_list'            => __( 'Items list', 'wst-kit' ),
// 		'items_list_navigation' => __( 'Items list navigation', 'wst-kit' ),
// 		'filter_items_list'     => __( 'Filter items list', 'wst-kit' ),
// 	);
// 	$args = array(
// 		'label'                 => __( 'Rooms', 'wst-kit' ),
// 		'description'           => __( 'Rooms Description', 'wst-kit' ),
// 		'labels'                => $labels,
// 		'supports'              => ['title', 'editor', 'excerpt', 'thumbnail'],
// 		'show_in_rest'          => true,
// 		'hierarchical'          => false,
// 		'public'                => true,
// 		'show_ui'               => true,
// 		'show_in_menu'          => true,
// 		'menu_position'         => 5,
// 		'show_in_admin_bar'     => true,
// 		'show_in_nav_menus'     => true,
// 		'can_export'            => true,
// 		'has_archive'           => true,
// 		'exclude_from_search'   => false,
// 		'publicly_queryable'    => true,
// 		'capability_type'       => 'page',
// 		'menu_icon'				=> 'dashicons-admin-multisite'
// 	);
// 	register_post_type( 'room', $args );

// }
// add_action( 'init', 'custom_post_type_room', 0 );



function custom_post_type_tour() {

	$labels = array(
		'name'                  => _x( 'Tours', 'Post Type General Name', 'wst-kit' ),
		'singular_name'         => _x( 'Tour', 'Post Type Singular Name', 'wst-kit' ),
		'menu_name'             => __( 'Tours', 'wst-kit' ),
		'name_admin_bar'        => __( 'Tours', 'wst-kit' ),
		'archives'              => __( 'Item Archives', 'wst-kit' ),
		'attributes'            => __( 'Item Attributes', 'wst-kit' ),
		'parent_item_colon'     => __( 'Parent Item:', 'wst-kit' ),
		'all_items'             => __( 'All Items', 'wst-kit' ),
		'add_new_item'          => __( 'Add New Item', 'wst-kit' ),
		'add_new'               => __( 'Add New', 'wst-kit' ),
		'new_item'              => __( 'New Item', 'wst-kit' ),
		'edit_item'             => __( 'Edit Item', 'wst-kit' ),
		'update_item'           => __( 'Update Item', 'wst-kit' ),
		'view_item'             => __( 'View Item', 'wst-kit' ),
		'view_items'            => __( 'View Items', 'wst-kit' ),
		'search_items'          => __( 'Search Item', 'wst-kit' ),
		'not_found'             => __( 'Not found', 'wst-kit' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'wst-kit' ),
		'featured_image'        => __( 'Featured Image', 'wst-kit' ),
		'set_featured_image'    => __( 'Set featured image', 'wst-kit' ),
		'remove_featured_image' => __( 'Remove featured image', 'wst-kit' ),
		'use_featured_image'    => __( 'Use as featured image', 'wst-kit' ),
		'insert_into_item'      => __( 'Insert into item', 'wst-kit' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'wst-kit' ),
		'items_list'            => __( 'Items list', 'wst-kit' ),
		'items_list_navigation' => __( 'Items list navigation', 'wst-kit' ),
		'filter_items_list'     => __( 'Filter items list', 'wst-kit' ),
	);
	$args = array(
		'label'                 => __( 'Tours', 'wst-kit' ),
		'description'           => __( 'Tours Description', 'wst-kit' ),
		'labels'                => $labels,
		'supports'              => ['title', 'editor', 'excerpt', 'thumbnail'],
		'show_in_rest'          => true,
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'menu_icon'				=> 'dashicons-admin-multisite'
	);
	register_post_type( 'Tours', $args );

}
add_action( 'init', 'custom_post_type_Tour', 0 );

// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Treks', 'Post Type General Name', 'wst-kit' ),
		'singular_name'         => _x( 'Trek', 'Post Type Singular Name', 'wst-kit' ),
		'menu_name'             => __( 'Treks', 'wst-kit' ),
		'name_admin_bar'        => __( 'Treks', 'wst-kit' ),
		'archives'              => __( 'Item Archives', 'wst-kit' ),
		'attributes'            => __( 'Item Attributes', 'wst-kit' ),
		'parent_item_colon'     => __( 'Parent Item:', 'wst-kit' ),
		'all_items'             => __( 'All Items', 'wst-kit' ),
		'add_new_item'          => __( 'Add New Item', 'wst-kit' ),
		'add_new'               => __( 'Add New', 'wst-kit' ),
		'new_item'              => __( 'New Item', 'wst-kit' ),
		'edit_item'             => __( 'Edit Item', 'wst-kit' ),
		'update_item'           => __( 'Update Item', 'wst-kit' ),
		'view_item'             => __( 'View Item', 'wst-kit' ),
		'view_items'            => __( 'View Items', 'wst-kit' ),
		'search_items'          => __( 'Search Item', 'wst-kit' ),
		'not_found'             => __( 'Not found', 'wst-kit' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'wst-kit' ),
		'featured_image'        => __( 'Featured Image', 'wst-kit' ),
		'set_featured_image'    => __( 'Set featured image', 'wst-kit' ),
		'remove_featured_image' => __( 'Remove featured image', 'wst-kit' ),
		'use_featured_image'    => __( 'Use as featured image', 'wst-kit' ),
		'insert_into_item'      => __( 'Insert into item', 'wst-kit' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'wst-kit' ),
		'items_list'            => __( 'Items list', 'wst-kit' ),
		'items_list_navigation' => __( 'Items list navigation', 'wst-kit' ),
		'filter_items_list'     => __( 'Filter items list', 'wst-kit' ),
	);
	$args = array(
		'label'                 => __( 'Treks', 'wst-kit' ),
		'description'           => __( 'Treks Description', 'wst-kit' ),
		'labels'                => $labels,
		'supports'              => ['title', 'editor', 'excerpt', 'thumbnail'],
		'show_in_rest'          => true,
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'menu_icon'				=> 'dashicons-location-alt'
	);
	register_post_type( 'Trek', $args );
}
add_action( 'init', 'custom_post_type', 0 );