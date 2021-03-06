<?php
/**
 * The header for our theme.
 *
 * @package Inhabitent_Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html('Skip to content'); ?></a>
		<?php
		function white_header()
		{
			if (is_page('about') || is_singular('adventure') || is_front_page()) {
				return 'site-header-container-white';
			}
		}
		?>
		<header id="masthead" class="site-header" role="banner">
			<div class="site-header-container <?php echo white_header(); ?>">
				<div class="header-container">
					<div class="site-branding">
						<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
						<a href="<?php echo home_url(); ?>">
							<h1>Inhabitent</h1>
						</a>
					</div><!-- .site-branding -->

					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fas fa-bars"></i><i class="fas fa-bars"></i></button>
						<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
						<span class="header-search">
							<?php get_search_form(); ?>
						</span>
					</nav><!-- #site-navigation -->
				</div>
			</div>
		</header><!-- #masthead -->
		<div id="content" class="site-content">