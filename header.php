<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Seven-Roots-Davis-Coop
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'seven-roots-davis-coop' ); ?></a>

	<header id="masthead" class="site-header container-fluid fixed-top">
		<div class="container d-flex">
			<div class="site-branding">
				<?php
				the_custom_logo();
				?>
			</div><!-- .site-branding -->
			<nav id="site-navigation" class="main-navigation">
				<div id="social-links" class="clearfix">
					<i class="fa fa-instagram"></i>
					<i class="fa fa-twitter-square"></i>
					<i class="fa fa-facebook-square"></i>
					<i class="fa fa-search"></i>
				</div>
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'seven-roots-davis-coop' ); ?></button>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'container'		 => false,
					'menu_class'	 => 'menu nav-menu',
				) );
				?>
			</nav><!-- #site-navigation -->
		</div><!-- .container -->
	</header><!-- #masthead -->

	<div id="content" class="site-content <?php if (!is_front_page()) echo 'container'  ?>">
