<?php
/**
 * Template Name: Promotions Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
global $post;
?>
<main>
  <div class="container-fluid px-0 m-0 subpage_banner">
   <div class="row no-gutters">
            <div class="col-12" <?php if (has_post_thumbnail() ) {     $image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id() ), 'single-post-thumbnail' ); ?> style="min-height:391px;background-repeat: no-repeat; background-image: url('<?php echo $image[0]; ?>');"<?php  } else { ?> style="min-height:391px; background-repeat: no-repeat;background-image: url('<?php echo get_stylesheet_directory_uri();?>/img/contact-banner.jpg');"  <?php }?>>
   
             </div>
       </div>
    </div>
    
<div class="container-fluid py-5 m-0">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-8">
				<div class="row text-center">
                <?php
                $args  = array( 'post_type' => 'bc_promotions', 'posts_per_page' => -1, 'order'=> 'DESC','post_status'  => 'publish');
                $query = new WP_Query( $args );
                if ( $query->have_posts() ) :
                while($query->have_posts()) : $query->the_post();
                    
                    $promotion_type = get_post_meta(get_the_ID(), 'promotion_type', TRUE);
                    if($promotion_type == 'Builder'){
                    $date = get_post_meta( get_the_ID(), 'promotion_expiry_date1', true );
                    if(strtotime($date) >= strtotime(current_time('m/d/Y'))){
                        $title = get_post_meta( get_the_ID(), 'promotion_title1', true );
                        $color = get_post_meta( get_the_ID(), 'promotion_color', true );
                        $subheading = get_post_meta( get_the_ID(), 'promotion_subheading', true );
                        $footer_heading = get_post_meta( get_the_ID(), 'promotion_footer_heading', true ); ?>
                        <div class="col-md-4 col-lg-4 p-2 text-center">
                            <a href="<?php the_permalink(get_the_ID()); ?>" target="_blank">
                                <div class="bc_color_secondary bc_color_primary_bg p-3 mb-3" style="background-color: <?php echo $color;?>">
                                    <div class="py-4 px-3 pt-0 border-white bc_coupon_container">
                                        <span class="pb-3  bc_font_alt_1 bc_text_36 d-block"><?php echo $title; ?></span>
                                        <span class="bc_text_30 d-block my-2"><?php echo $subheading;?></span>
                                        <span class="mt-3 bc_text_16">expires <?php echo $date;?></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php }
                    }else if($promotion_type == 'Image'){
                        $date2 = get_post_meta( get_the_ID(), 'promotion_expiry_date2', true );
                        if(strtotime($date2) >= strtotime(current_time('m/d/Y'))){
                            $title2 = get_post_meta( get_the_ID(), 'promotion_title2', true );
                            $promotion_custom_image = get_post_meta( get_the_ID(), 'promotion_custom_image', true ); ?>
                            <div class="col-md-4 col-lg-4 p-2 text-center">
                                <a href="<?php the_permalink(get_the_ID()); ?>" target="_blank">
                                    <img class="img-fluid" class="img-fluid" src="<?php echo $promotion_custom_image;?>" />
                                </a>
                            </div>
                    <?php }
                    }
                endwhile; 
                wp_reset_query();
                endif;
                ?>
                </div>
			</div>
        <!-- The Content ends --> 
        <!-- right sidebar starts -->
        <?php get_template_part( 'sidebar-templates/sidebar', 'subpagerightsidebar' ); ?>
        <!-- right sidebar ends -->
        </div>
    </div>
</div>
        <!--  Include Heating Services Features file here -->
        <?php get_template_part( 'page-templates/common/bc-heating-services-features' ); ?>

        <?php get_template_part( 'page-templates/common/bc-dont-see-service' ); ?>
        
        
    <!--  Include blogs file here -->
    <?php echo do_shortcode('[bc-blog-slider]');?>
    <?php //get_template_part( 'page-templates/common/blogs' ); ?>

    <!--  Include testimonial file here -->
    <?php get_template_part( 'page-templates/common/testimonials' ); ?>
</main>
<?php get_footer();?>