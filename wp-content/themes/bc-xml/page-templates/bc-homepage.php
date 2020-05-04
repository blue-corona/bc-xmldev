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
    <div class="container-fluid p-0 pt-5 pb-5 what_we_do">
        <div class="container pt-5 pb-5 px-lg-5">
            <div class="row text-center text-lg-center text-md-center p-lg-5 px-0">
                <div class="col-12 offset-lg-2 col-lg-8 col-sm-12 pt-5 pb-5 px-2 px-md-0">
                    <h3 class="position-relative bottom_line mb-5">What We Believe</h3>
                    <div class="mx-md-5 mx-4 position-relative bg-white overflow-hidden what_we_video" data-toggle="modal" data-target="#exampleModal">
                        <div class="row">
                            <div class="offset-lg-2 col-lg-8 mt-n3 pb-md-5 pb-3">
                                <span class="position-absolute play_icon text-center">
                                    <i class="fas fa-caret-right"></i>
                                </span>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/what-we-icon.png" class="img-fluid  mx-auto mt-md-n5 mt-n3">

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

    <div class="container-fluid p-0 pt-5 pb-5">
        <div class="container px-md-4">
            <div class="row">
                <div class="col-md-12 text-center text-lg-center text-md-center"><h3 class="position-relative bottom_line mb-5">How We Work</h3></div>
                <div class="col-md-12 m-md-4">
                    <div class="swiper-container how_we_swiper">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide bg-white" >
                              <div class="row align-items-center">
                                    <div class="offset-md-1 col-md-5 col-12">
                                        <div class="pl-md-5 text-center text-md-left">
                                            <p class="text-uppercase">team driven<span class="d-block">investing</span></p>
                                            <p>“No one knows everything.” We try to make informed, rational decisions that align your investments with your lifestyle.</p>
                                            <a href="#" class="btn_primary py-2 px-3 mt-4">LEARN HOW</a>
                                        </div>
                                    </div>
                                    <div class="col-md-5 d-none d-md-block">
                                        <div class="image position-relative d-inline-block mx-auto p-3">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/investing.jpg" class="img-fluid" alt="team" >
                                        </div>
                                    </div>
                              </div>
                          </div>
                          <div class="swiper-slide bg-white">
                              <div class="row align-items-center">
                                    <div class="offset-md-1 col-md-5 col-12">
                                        <div class="pl-md-5 text-center text-md-left">
                                            <p class="text-uppercase">360<span class="d-block">SUPPORT</span></p>
                                            <p>“We have a person for that”. If it’s important to you, we are here to help, beyond just investments and planning.</p>
                                            <a href="#" class="btn_primary py-2 px-3 mt-4">LEARN HOW</a>
                                        </div>
                                    </div>
                                    <div class="col-md-5 d-none d-md-block">
                                        <div class="image position-relative d-inline-block mx-auto p-3">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/investing.jpg" class="img-fluid" alt="team" >
                                        </div>
                                    </div>
                              </div>
                          </div>
                          <div class="swiper-slide bg-white">
                              <div class="row align-items-center">
                                    <div class="offset-md-1 col-md-5 col-12">
                                        <div class="pl-md-5 text-center text-md-left">
                                            <p class="text-uppercase"><span class="d-block">QUALIFIED</span></p>
                                            <p>“We’ve got the credentials.”</p>
                                            <a href="#" class="btn_primary py-2 px-3 mt-4">Meet the team</a>
                                        </div>
                                    </div>
                                    <div class="col-md-5 d-none d-md-block">
                                        <div class="image position-relative d-inline-block mx-auto p-3">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/investing.jpg" class="img-fluid" alt="team" >
                                        </div>
                                    </div>
                              </div>
                          </div>
                          <div class="swiper-slide bg-white">
                              <div class="row align-items-center">
                                    <div class="offset-md-1 col-md-5 col-12">
                                        <div class="pl-md-5 text-center text-md-left">
                                            <p class="text-uppercase">Community<span class="d-block">CENTRIC</span></p>
                                            <p>“Our clients are not clones.”</p>
                                            <a href="#" class="btn_primary py-2 px-3 mt-4">Learn more about how we advise our community</a>
                                        </div>
                                    </div>
                                    <div class="col-md-5 d-none d-md-block">
                                        <div class="image position-relative d-inline-block mx-auto p-3">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/investing.jpg" class="img-fluid" alt="team" >
                                        </div>
                                    </div>
                              </div>
                          </div>
                          <div class="swiper-slide bg-white">
                              <div class="row align-items-center">
                                    <div class="offset-md-1 col-md-5 col-12">
                                        <div class="pl-md-5 text-center text-md-left">
                                            <p class="text-uppercase"><span class="d-block">INDEPENDENT</span></p>
                                            <p>“We think for ourselves.”</p>
                                            <a href="#" class="btn_primary py-2 px-3 mt-4">Read about our beliefs and how we invest in our community</a>
                                        </div>
                                    </div>
                                    <div class="col-md-5 d-none d-md-block">
                                        <div class="image position-relative d-inline-block mx-auto p-3">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/investing.jpg" class="img-fluid" alt="team" >
                                        </div>
                                    </div>
                              </div>
                          </div>
                        </div>
                        
                        <div class="swiper-pagination how_we_pagination"></div>
                       
                    </div>
                </div>                
            </div>
        </div>
    </div>
    
    <div class="container-fluid p-0">
      <div class="grey-bg"></div>
    </div>

    <div class="container-fluid p-0 pt-5 pb-5 who_we">
        <div class="container px-md-4">
            <div class="row">
                <div class="col-md-12 text-center text-lg-center text-md-center"><h3 class="position-relative bottom_line mb-5">Who We Are</h3></div>
                <div class="col-md-7 col-12 order-2 order-md-1 mt-3">
                  <!-- Swiper -->
                    <div class="swiper-container who_we_swiper">
                        <div class="swiper-wrapper mb-5">
                          <div class="swiper-slide">
                            <div class="px-4">
                                <div class="image position-relative d-inline-block mx-auto p-3">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/brett-headshot.jpg">
                                </div>
                                <h3 class="position-relative bottom_line_2 bc_color_primary bc_text_18 bc_line_height_22 bc_font_alt_1 bc_text_bold d-block text-capitalize text-center">Brett Bernstein, CFP®</h3>
                                <p class="bc_color_secondary bc_text_16 bc_line_height_50 bc_font_alt_1 d-block mt-2 text-center">CEO & Co-founder</p>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="px-4">
                                <div class="image position-relative d-inline-block mx-auto p-3">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rob-headshot.jpg">
                                </div>
                                <h3 class="position-relative bottom_line_2 bc_color_primary bc_text_18 bc_line_height_22 bc_font_alt_1 bc_text_bold d-block text-capitalize text-center">Rob Kantor</h3>
                                <p class="bc_color_secondary bc_text_16 bc_line_height_50 bc_font_alt_1 d-block mt-2 text-center">CIO & Co-founder</p>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="px-4"> <div class="image position-relative d-inline-block mx-auto p-3">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/curtis-headshot.jpg">
                                </div>
                                <h3 class="position-relative bottom_line_2 bc_color_primary bc_text_18 bc_line_height_22 bc_font_alt_1 bc_text_bold d-block text-capitalize text-center">Curtis Congdon, CRPC®, CFP®</h3>
                                <p class="bc_color_secondary bc_text_16 bc_line_height_50 bc_font_alt_1 d-block mt-2 text-center">President</p>
                            </div>
                          </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination who_we_pagination "></div>
                        <!-- Add Arrows -->
                        <div class="who_we_buttons">
                            <div class="swiper-button-next"><i class="fal fa-angle-right"></i></div>
                            <div class="swiper-button-prev"><i class="fal fa-angle-left"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 order-1 order-md-2 mt-3">
                    <h2 class="text-capitalize">A Team of <span class="d-block">Passionate Experts</span></h2>
                    <p>With roots back to 1981 XML has been passionate about assembling a team of experts not just in money management but also in listening and in sincere care for our client's well being. We currently have CFPs, CRPCs, MBAs working to improve our Client's lives.</p>
                    <a href="#" class="btn_secondary px-4 py-2 mt-4">FULL TEAM</a>
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

var swiper = new Swiper('.how_we_swiper', {
      direction: 'vertical',
      spaceBetween: 30,
      effect: 'fade',
      pagination: {
        el: '.how_we_pagination',
        clickable: true,
      },
      breakpoints:{
        767:{
          direction: 'horizontal',
        }
      }
});
var swiper = new Swiper('.who_we_swiper', {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 1,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: '.who_we_pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        540: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 50,
        },
    }
 });
</script>
<?php }
add_action( 'wp_footer' , 'serviceAreaJavascript' );?>
<?php get_footer(); ?>