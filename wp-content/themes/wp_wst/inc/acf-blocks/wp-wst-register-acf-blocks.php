<?php

add_action('acf/init', 'wpwst_init_block_types');
function wpwst_init_block_types()
{

	// Check function exists.
	if (function_exists('acf_register_block_type')) {

		// register a testimonial block.
		acf_register_block_type(array(
			'name'				=> 'wp-wst-testimonial',
			'title'				=> __('Wst: Testimonial'),
			'description'		=> __('Custom testimonial block.'),
			'render_callback'	=> 'wpwst_block_render_callback',
			'category'			=> 'ws-blocks',
			'icon'				=> 'admin-comments',
			'keywords'			=> array('testimonial', 'quote'),
			'mode'				=> 'edit',
			'supports'			=> array(
				'mode'			=> 'false',
				'align'			=> false,
			),
		));

		// register a main screen block.
		acf_register_block_type(array(
			'name'				=> 'wp-wst-screen',
			'title'				=> __('Wst: Main Screen'),
			'description'		=> __('Custom Carousel block.'),
			'render_callback'	=> 'wpwst_block_render_callback',
			'category'			=> 'ws-blocks',
			'icon'				=> 'admin-page',
			'keywords'			=> array('carousel', 'slider'),
			'mode'				=> 'edit',
			'supports'			=> array(
				'mode'			=> 'false',
				'align'			=> false,
			),
		));

		// register a welcome block.
		acf_register_block_type(array(
			'name'				=> 'wp-wst-welcome',
			'title'				=> __('Wst: Welcome Block'),
			'description'		=> __('Custom Welcome block.'),
			'render_callback'	=> 'wpwst_block_render_callback',
			'category'			=> 'ws-blocks',
			'icon'				=> 'table-col-before',
			'keywords'			=> array('information', 'welcome'),
			'mode'				=> 'edit',
			'supports'			=> array(
				'mode'			=> 'false',
				'align'			=> false,
			),
		));


		// register a cards block.
		acf_register_block_type(array(
			'name'				=> 'wp-wst-travelcard',
			'title'				=> __('Wst: Travel Card'),
			'description'		=> __('Custom Card Block.'),
			'render_callback'	=> 'wpwst_block_render_callback',
			'category'			=> 'ws-blocks',
			'icon'				=> 'grid-view',
			'keywords'			=> array('travel', 'cards'),
			'mode'				=> 'edit',
			'supports'			=> array(
				'mode'			=> 'false',
				'align'			=> false,
			),
		));

		// register a section block.
		acf_register_block_type(array(
			'name'				=> 'wp-wst-section',
			'title'				=> __('Wst: Section Part'),
			'description'		=> __('Custom Section Block.'),
			'render_callback'	=> 'wpwst_block_render_callback',
			'category'			=> 'ws-blocks',
			'icon'				=> 'columns',
			'keywords'			=> array('section', 'information'),
			'mode'				=> 'edit',
			'supports'			=> array(
				'mode'			=> 'false',
				'align'			=> false,
			),
		));

		// register a tour block.
		acf_register_block_type(array(
			'name'				=> 'wp-wst-tours',
			'title'				=> __('Wst: Tours Part'),
			'description'		=> __('Custom Tour Block.'),
			'render_callback'	=> 'wpwst_block_render_callback',
			'category'			=> 'ws-blocks',
			'icon'				=> 'menu-alt3',
			'keywords'			=> array('tour', 'travel'),
			'mode'				=> 'edit',
			'supports'			=> array(
				'mode'			=> 'false',
				'align'			=> false,
			),
		));

		// register a normal block.
		acf_register_block_type(array(
			'name'				=> 'wp-wst-normal',
			'title'				=> __('Wst: Normal Block'),
			'description'		=> __('Custom Normal Block.'),
			'render_callback'	=> 'wpwst_block_render_callback',
			'category'			=> 'ws-blocks',
			'icon'				=> 'media-text',
			'keywords'			=> array('text', 'description'),
			'mode'				=> 'edit',
			'supports'			=> array(
				'mode'			=> 'false',
				'align'			=> false,
			),
		));
	}
}
