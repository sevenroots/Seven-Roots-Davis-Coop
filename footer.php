<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Seven-Roots-Davis-Coop
 */
$address = esc_attr( get_option( 'address' ) ); 
$phonenumber = esc_attr( get_option( 'phonenumber' ) ); 
$hours_brief = esc_attr( get_option( 'hours-brief' ) ); 
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info d-flex flex-row justify-content-center">
			<span class="text-uppercase align-self-center">Join our email list</span>
			<input class="align-self-center" type="text" name="email" value="">
			<a class="text-uppercase text-center align-self-center" href="#" >Put me on <br />the list!</a>
		</div><!-- .site-info -->
		<div class="footer-submenu-section" >
			<div class="wrapper">
				<div class="main-submenu d-flex flex-row justify-content-center">
					<?php

					$menuParameters = array(
					'theme_location' => 'menu-2',
					'container'		 => false,
					'echo'			 => false,	
					'depth'          => 0,
					'after' => '<span class="nav-sep">|</span>'
					);
					echo strip_tags(wp_nav_menu( $menuParameters ), '<a><span>' );
					?>
				</div>
				<div id="address" class="text-center">
					<p class="text-uppercase"><?php print $address ?><span>|</span><?php print $phonenumber ?><span>|</span><?php print $hours_brief ?></p>
				</div>
				<div class="copyright text-center">	&copy; <?php echo date("Y"); ?> Davis Food Co-op. All rights reserved.</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
