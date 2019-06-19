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
					<a href="#">Calendar</a>
					<span>|</span>
					<a href="#">Employment</a>
					<span>|</span>
					<a href="#">Contact</a>
					<span>|</span>
					<a href="#">Suggestion Box</a>
					<span>|</span>
					<a href="#">Media</a>
				</div>
				<div id="address" class="text-center">
					<?php $address = esc_attr( get_option( 'address' ) ); ?>
					<p class="text-uppercase"><?php print $address ?><span>|</span> (530) 758-2667 <span>|</span> Open Daily 7am – 10pm</p>
				</div>
				<div class="copyright text-center">	&copy; <?php echo date("Y"); ?> Davis Food Co-op. All rights reserved.</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
