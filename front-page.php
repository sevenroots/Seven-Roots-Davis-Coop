<?php
/**
 * The template for displaying front page
 *
 * @package Seven-Roots-Davis-Coop
 */
get_header();
$whats_fresh_img_1 = esc_attr( get_option('whats-fresh-img-1'));
$whats_fresh_img_2 = esc_attr( get_option('whats-fresh-img-2'));
$whats_fresh_img_3 = esc_attr( get_option('whats-fresh-img-3'));
$whats_fresh_link_1 = esc_attr( get_option('whats-fresh-link-1'));
$whats_fresh_link_2 = esc_attr( get_option('whats-fresh-link-2'));
$whats_fresh_link_3 = esc_attr( get_option('whats-fresh-link-3'));
$carousel_img_1 = esc_attr( get_option('carousel-img-1'));
$carousel_img_2 = esc_attr( get_option('carousel-img-2'));
$carousel_img_3 = esc_attr( get_option('carousel-img-3'));


?>
    <?php
    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
    $thumb_url = $thumb_url_array[0];
    ?>
    <div class="full-background"> 
        <div id="landing-text">
            <h2 class="text-uppercase mb-0">Fresh. Local.<br />Sustainable.</h2>
            <a href="#" class="text-uppercase">More</a>
            
        </div>
        <div class="landing-footer">
            <p class="text-uppercase text-center mb-0">
                <?php rjc_simple_format('address', 'clr-primary') ?>
                <span class="seperator">|</span>
                <?php rjc_simple_format('phonenumber', 'clr-primary') ?>
                <span class="seperator">|</span>
                <?php rjc_simple_format('hours', 'clr-primary') ?>
            </p>
        </div>
    </div>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">

    <div class="carousel-item active" style="background: url(<?php echo $carousel_img_1 ?>) no-repeat center center fixed; background-size:cover;">
    </div>
    <div class="carousel-item" style="background: url(<?php echo $carousel_img_2 ?>) no-repeat center center fixed; background-size:cover;">
    </div>
    <div class="carousel-item" style="background: url(<?php echo $carousel_img_3 ?>) no-repeat center center fixed; background-size:cover;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


	<div id="primary" class="content-area container">
		<main id="main" class="site-main">
            <?php
                $seven_roots_davis_coop_description = get_bloginfo( 'description', 'display' );
                if ( $seven_roots_davis_coop_description || is_customize_preview() ) :
            ?>

            <div id="whats-fresh-header-section" class="text-center">
                <h3 id="whats-fresh-header">What's Fresh</h3>
                <i class="fa fa-chevron-down"></i>
            </div>

            <div class="row" style="position:relative;">
                    
                    <div id="whats-fresh-fullbar">&nbsp; </div>
                    <div class="col-sm-4">
                        <div class="whats-fresh-placehold" style="background-image: url(<?php echo $whats_fresh_img_1 ?>);">
                            
                        </div>
                        <div class="whats-fresh-title text-center">
                            <a href="<?php print $whats_fresh_link_1 ?>" class="text-uppercase"><?php rjc_simple_format('whats-fresh-txt-1', 'clr-secondary') ?></a>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="whats-fresh-placehold" style="background-image: url(<?php echo $whats_fresh_img_2 ?>);">
                            
                        </div>
                        <div class="whats-fresh-title text-center">
                             <a href="<?php print $whats_fresh_link_2 ?>" class="text-uppercase"><?php rjc_simple_format('whats-fresh-txt-2', 'clr-secondary') ?></a>
                         </div>
                    </div>
 
                    <div class="col-sm-4">
                        <div class="whats-fresh-placehold" style="background-image: url(<?php echo $whats_fresh_img_3 ?>);">
                       </div>
                        <div class="whats-fresh-title text-center">
                             <a href="<?php print $whats_fresh_link_3 ?>" class="text-uppercase"><?php rjc_simple_format('whats-fresh-txt-3', 'clr-secondary') ?></a>
                      </div>
 
                    </div>
 
            </div>
<!--
            <div class="whats-fresh clearfix">
                <div class="whats-fresh-item">
                    <div class="whats-fresh-placehold" style="background-image: url(<?php echo $whats_fresh_img_1 ?>);">
                        <div class="whats-fresh-title text-center">
                            <a href="<?php print $whats_fresh_link_1 ?>" class="text-uppercase"><?php rjc_simple_format('whats-fresh-txt-1', 'clr-secondary') ?></a>
                        </div>
                    </div>

                </div>
                <div class="whats-fresh-item">
                    <div class="whats-fresh-placehold" style="background-image: url(<?php echo $whats_fresh_img_2 ?>);">
                        <div class="whats-fresh-title text-center">
                            <a href="<?php print $whats_fresh_link_2 ?>" class="text-uppercase"><?php rjc_simple_format('whats-fresh-txt-2', 'clr-secondary') ?></a>
                        </div>   
                    </div>                 
                </div>
                <div class="whats-fresh-item">
                    <div class="whats-fresh-placehold" style="background-image: url(<?php echo $whats_fresh_img_3 ?>);">
                        <div class="whats-fresh-title text-center">
                            <a href="<?php print $whats_fresh_link_3 ?>" class="text-uppercase"><?php rjc_simple_format('whats-fresh-txt-3', 'clr-secondary') ?></a>
                        </div>  
                    </div>                 
                </div>
            </div>
-->
			<h3 class="site-description"><?php echo $seven_roots_davis_coop_description; /* WPCS: xss ok. */ ?></h3>
            <?php endif; ?>

            <?php
            while ( have_posts() ) :
                the_post();
                
                the_content();

            endwhile; // End of the loop.
            ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
