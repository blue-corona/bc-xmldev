<?php
/**
 * Template Name: HomePage Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();
?>

  <main role="main">
    <?php 
        if(bc_get_theme_mod('bc_theme_home_options', 'bc_hero_type', false, 'background_image') == 'background_image'){
            get_template_part( 'page-templates/hero-section/bc-hero-banner' );
        }else if(bc_get_theme_mod('bc_theme_home_options', 'bc_hero_type', false, 'image_slider') == 'image_slider'){
            get_template_part( 'page-templates/hero-section/bc-hero-swiper' );
        }
        else if(bc_get_theme_mod('bc_theme_home_options', 'bc_hero_type', false, 'video') == 'video'){
            get_template_part( 'page-templates/hero-section/bc-hero-video' );
        }
    ?>
    <div class="container-fluid p-0 pt-5 pb-5 mt-n5 what_we_do">
        <div class="container px-md-4">
            <div class="row text-center text-lg-center text-md-center ">
                <div class="offset-md-2 col-md-8 col-12 offset-lg-2 col-lg-8 col-sm-12 px-3">
                    <h3>What We Believe</h3>

                    <div class="pt-4 pb-4 what-we-video" data-toggle="modal" data-target="#exampleModal">
                        <span><i class="fas fa-caret-right"></i></span>
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-testimonials.png" class="img-fluid w-75 mx-auto">
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            ...
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 


   


    
    <?php 
 //    if ( have_posts() ) : 
 //     while ( have_posts() ) : the_post();
    //      the_content();
    //  endwhile;
    // endif;
    ?>


    
    <?php //get_template_part( 'page-templates/common/bc-locations-section' ); ?>
    
    <!--  Include coupons file here -->
    <?php //get_template_part( 'page-templates/common/coupons' ); ?>

    <!--  Include testimonial file here -->
    <?php //get_template_part( 'page-templates/common/testimonials' ); ?>
    <!-- Include affiliations file here -->
    <?php //get_template_part( 'page-templates/common/affiliations' ); ?>
   

</main>
<?php function serviceAreaJavascript() {?>
<script type="text/javascript">
jQuery(document).ready(function(){
    jQuery(".hide_div").hide();
    jQuery("#minus").toggle();
    jQuery(".abc").click(function(){
        jQuery("#minus").toggle();
        jQuery("#plus").toggle();
        jQuery(".hide_div").toggle(500);
    });
});


</script>
<?php }
add_action( 'wp_footer' , 'serviceAreaJavascript' );?>
<?php get_footer(); ?>