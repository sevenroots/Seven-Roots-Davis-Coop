<?php
/**
 * The template for displaying front page
 *
 * @package Seven-Roots-Davis-Coop
 */
get_header();
?>
    <?php
    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
    $thumb_url = $thumb_url_array[0];
    ?>
    <div class="full-background" style="background: url('<?php echo $thumb_url ?>') no-repeat center center fixed; background-size:cover;">
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
            <?php 

            $args = array(
                'posts_per_page' => 1,
                'post__in'  => get_option( 'sticky_posts' ),
                'ignore_sticky_posts' => 1
            );
            $my_query = new WP_Query( $args );

            $do_not_duplicate = array();
            while ( $my_query->have_posts() ) : $my_query->the_post();
                $do_not_duplicate[] = $post->ID; ?>

            <div id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?> >
            <?php
                the_content( sprintf(
                    wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'seven-roots-davis-coop' ),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    get_the_title()
                ) );
                ?>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); //VERY VERY IMPORTANT?>

                    <!--
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
                -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
