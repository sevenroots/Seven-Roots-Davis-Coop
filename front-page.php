<?php
/**
 * The template for displaying front page
 *
 * @package Seven-Roots-Davis-Coop
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <?php
                $seven_roots_davis_coop_description = get_bloginfo( 'description', 'display' );
                if ( $seven_roots_davis_coop_description || is_customize_preview() ) :
            ?>
            <div class="whats-new container clearfix">
                <div class="whats-new-item">
                    <div class="whats-new-placehold">
                    </div>
                    <div class="whats-new-title text-center">
                        <a href="#" class="text-uppercase">Local Farms</a>
                    </div>
                </div>
                <div class="whats-new-item">
                    <div class="whats-new-placehold">
                    </div>
                    <div class="whats-new-title text-center">
                        <a href="#" class="text-uppercase">On Sale Now</a>
                    </div>                    
                </div>
                <div class="whats-new-item">
                    <div class="whats-new-placehold">
                    </div>
                    <div class="whats-new-title text-center">
                        <a href="#" class="text-uppercase">Classes + Events</a>
                    </div>                   
                </div>
            </div>
			<p class="site-description"><?php echo $seven_roots_davis_coop_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
            <div class="container p-0 clearfix featured-image-row">
                <div class="placehold-image">
                </div>
                <div class="placehold-image">
                </div>
                <div class="placehold-image">
                </div>
                <div class="placehold-image">
                </div>
                <div class="placehold-image">
                </div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
