<?php

/**
 * wp-wst functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wp-wst
 */

define('WST_PARENT_URL', get_template_directory_uri());
define('WST_IMAGES_DIR', WST_PARENT_URL . '/assets/images/');

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.1.1');
}

if (!function_exists('wp_wst_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function wp_wst_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on wp-wst, use a find and replace
		 * to change 'wp-wst' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('wp-wst', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'wp-wst'),
				'menu-2' => esc_html__('Footer Menu', 'wp-wst'),
				'menu-3' => esc_html__('Custom-menu', 'wp-wst'),
			)
		);
		// register_nav_menus( array(
		// 	'primary' => __( 'Primary', 'wp-wst' ),
		// ) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'wp_wst_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action('after_setup_theme', 'wp_wst_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_wst_content_width()
{
	$GLOBALS['content_width'] = apply_filters('wp_wst_content_width', 640);
}
add_action('after_setup_theme', 'wp_wst_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
require get_template_directory() . '/inc/register-widget.php';

/**
 * Enqueue scripts and styles.
 */
function wp_wst_scripts()
{

	wp_enqueue_style('ws-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css', array(), _S_VERSION);
	wp_enqueue_style('owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', array(), _S_VERSION);
	wp_enqueue_style('all-main', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css', array(), _S_VERSION);
	wp_enqueue_style('fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css', array(), _S_VERSION);
	//wp_enqueue_style( 'magnific-popup', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css', array(), _S_VERSION );
	wp_enqueue_style('ws-animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), _S_VERSION);
	wp_enqueue_style('ws-main-css', WST_PARENT_URL . '/assets/stylesheets/base.css', array(), _S_VERSION);
	//wp_enqueue_style( 'wp-wstone-style', get_stylesheet_uri(), array(), _S_VERSION );





	// wp_style_add_data( 'wp-wstone-style', 'rtl', 'replace' );
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery-latest', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', array(), _S_VERSION, false);
	wp_enqueue_script('proper-js', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js', array(), _S_VERSION, false);
	wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js', array(), _S_VERSION, false);
	wp_enqueue_script('jquery-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array(), _S_VERSION, false);
	//wp_enqueue_script( 'magnific-popup-js', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js', array(), _S_VERSION, false );		
	wp_enqueue_script('stellar-js', WST_PARENT_URL . '/assets/javascripts/jquery.stellar.min.js', array(), _S_VERSION, false);
	wp_enqueue_script('fancybox-js', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js', _S_VERSION, false);
	wp_enqueue_script('wow-js', WST_PARENT_URL . '/assets/javascripts/wow.min.js', array(), _S_VERSION, false);
	wp_enqueue_script('template-js', WST_PARENT_URL . '/assets/javascripts/template.js', array(), _S_VERSION, false);
	//wp_enqueue_script('jquery');

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'wp_wst_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}


/**
 * Custom theme Functions.
 */
require get_template_directory() . '/inc/custom-function.php';
require get_template_directory() . '/inc/cpt.php';

/**
 * Custom theme option additions(Header/Footer/Social Networks).
 */
require get_template_directory() . '/inc/custom-theme-option.php';

/**
 * Custom AFC filters.
 */
require get_template_directory() . '/inc/acf-filters/nav-mega-menu.php';

/**
 * Custom AFC Gutenberg block category.
 */
require get_template_directory() . '/inc/acf-blocks/wp-wst-register-block-category.php';

/**
 * Custom AFC Gutenberg blocks.
 */
require get_template_directory() . '/inc/acf-blocks/wp-wst-register-acf-blocks.php';

/**
 * Custom render callback function for AFC Gutenberg blocks.
 */
require get_template_directory() . '/inc/acf-blocks/wp-wst-render-callback.php';
// require get_template_directory() . '/inc/ws-walker.php';

/**
 * Register Custom Navigation Walker
 */
function register_navwalker()
{
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');
