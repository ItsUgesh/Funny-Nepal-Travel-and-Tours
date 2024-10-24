<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-wst
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Domine&family=Jim+Nightshade&family=Montserrat:wght@300&family=Quicksand:wght@300&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body>
	<?php
	$logo = get_field('wp_wst_logo', 'options')
	?>
	<nav class="navbar navbar-expand-lg ">
		<div class="container-fluid wow animate__animated animate__fadeInDown animate__delay-1.3s">
			<a class="navbar-brand zoom-image" href="<?php echo home_url(); ?>"><img src="<?php echo $logo['url']; ?>" alt=""></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<?php
				wp_nav_menu(array(
					'theme_location'    => 'menu-1',
					'depth'             => 2,
					'container'         => 'ul',
					'container_class'   => 'collapse navbar-collapse',
					'container_id'      => 'bs-example-navbar-collapse-1',
					'menu_class'        => 'nav navbar-nav mx-auto mb-2 mb-lg-0',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker(),
				));
				?>
				<form class="d-flex" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
					<input class="form-control me-2" type="search" placeholder="Enter Keywords" aria-label="Search" name="s" value="<?php echo get_search_query(); ?>">
					<button class="btn btn-outline-secondary" type="submit">Search</button>
				</form>
		

			</div>
		</div>
	</nav>