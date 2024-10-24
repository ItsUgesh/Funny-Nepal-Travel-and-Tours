<?php 
function wp_wst_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'wp-wst' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'wp-wst' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	//contact page
	register_sidebar(
		array(
			'name'          => esc_html__( 'Contact Information', 'wp-wst' ),
			'id'            => 'sidebar-222',
			'description'   => esc_html__( 'Add widgets here.', 'wp-wst' ),
			'before_widget' => '<section id="%1$s" class="widget contact %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	
	$wp_wst_footer_type = get_field('wp_wst_footer_type', 'option');
	if( $wp_wst_footer_type === 'footer-with-accordion' || $wp_wst_footer_type === 'footer-without-accordion') {
	$no_of_widget = get_field('no_of_widget', 'option');
	$dynamic_widget_areas = array(
        "Footer Widget 1",
        "Footer Widget 2",
        "Footer Widget 3",
        );
        if($no_of_widget === '6') {
			array_push($dynamic_widget_areas, 
		        "Footer Widget 4",
		        "Footer Widget 5",
		        "Footer Widget 6"
		        );
        }
        
        if ( function_exists('register_sidebar') ) {
			$index = 1;
		    foreach ($dynamic_widget_areas as $widget_area_name) {
		        register_sidebar(array(
		        	'name'=> $widget_area_name,
		        	'id'            => 'footer-widget-'.$index,
		        	'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget'  => '</div>',
		        	'before_title' => '<h4 class="widget-title">',
		        	'after_title' => '</h4>',
		        ));
		        $index++;
		    }
		    
		}
	}
	
}
add_action( 'widgets_init', 'wp_wst_widgets_init' );