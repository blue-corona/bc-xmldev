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
                    <h3 class="position-relative bottom_line mb-5">What We Believe</h3>
                    <div class="mx-5 what_we_video position-relative bg-white overflow-hidden" data-toggle="modal" data-target="#exampleModal">
                        <div class="row">
                            <div class="offset-2 col-md-8 mt-n3 pb-5">
                                <span class="position-absolute"><i class="fas fa-caret-right text-white"></i></span>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/what-we-icon.png" class="img-fluid w-100 mx-auto mt-n5">
                            </div>
                        </div>
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


   
    <div class="container-fluid px-0 m-0 borde_b_primary mt-5">
      <div class="graphic_lines pb-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-10 px-lg-4 offset-lg-1 text-center">
                    <span class="position-relative bc_text_36 bc_line_height_36 mt-5 bc_font_default bc_text_thin text-white bottom_line1 d-block">Wondering if there might be something more you and your money could do?</span>
                    <span class="bc_text_20 bc_line_height_34 bc_font_alt_1 bc_text_light text-white d-block mt-4 pt-1">There are several different ways to connect with us. Chose whichever you are most <br> comfortable with. </span>
                    <a href="#" class="btn_secondary px-4 py-2 mt-4">let’s talk </a>
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