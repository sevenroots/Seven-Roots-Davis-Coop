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
            <div id="whats-fresh-header-section" class="text-center">
                <h3 id="whats-fresh-header">What's Fresh</h3>
                <i class="fa fa-chevron-down"></i>
            </div>
            <div class="whats-fresh container clearfix">
                <div id="whats-fresh-fullbar">&nbsp; </div>
                <div class="whats-fresh-item">
                    <div class="whats-fresh-placehold">
                    </div>
                    <div class="whats-fresh-title text-center">
                        <a href="#" class="text-uppercase"><strong>Local</strong> Farms</a>
                    </div>
                </div>
                <div class="whats-fresh-item">
                    <div class="whats-fresh-placehold">
                    </div>
                    <div class="whats-fresh-title text-center">
                        <a href="#" class="text-uppercase">On Sale Now</a>
                    </div>                    
                </div>
                <div class="whats-fresh-item">
                    <div class="whats-fresh-placehold">
                    </div>
                    <div class="whats-fresh-title text-center">
                        <a href="#" class="text-uppercase">Classes + Events</a>
                    </div>                   
                </div>
            </div>
			<h3 class="site-description"><?php echo $seven_roots_davis_coop_description; /* WPCS: xss ok. */ ?></h3>
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
