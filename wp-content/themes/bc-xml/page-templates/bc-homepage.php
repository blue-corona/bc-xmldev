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
    <!-- background image use shortcode for mobile use background-image:url('../img/what-we-mobile.png');--->
    <div class="container-fluid bc_home_section_bg p-0 pt-5 pb-5 what_we_do" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/img/what-we.png'); background-position: bottom; ">

        <div class="container pt-5 pb-5 px-lg-5">
            <div class="row text-center text-lg-center text-md-center p-lg-5 px-0">
                <div class="col-12 offset-lg-2 col-lg-8 col-sm-12 pt-5 pb-5 px-2 px-md-0">
                    <h3 class="position-relative bottom_line mb-5">What We Believe</h3>
                    <div class="mx-md-5 mx-4 position-relative bg-white overflow-hidden what_we_video" data-toggle="modal" data-target="#exampleModal">
                        <div class="row">
                            <div class="offset-lg-1 col-lg-10 offset-md-1 col-md-10 mt-n3 pb-md-5 pb-3 d-flex justify-content-center align-items-center">
                                <span class="position-absolute d-block play_icon text-center mt-md-5 mt-4">
                                    <i class="fas fa-3x fa-play-circle bc_color_primary"></i>
                                </span>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/what-we-icon.png" class="img-fluid  mx-auto mt-md-n4 mt-n3 w-75">

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
                            <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/403803057" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
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
                    <div class="swiper-container how_we_swiper h-100">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide bg-white" >
                              <div class="row align-items-center">
                                    <div class="offset-md-1 col-md-5 col-12">
                                        <div class="pl-md-5 text-center text-md-left">
                                            <p class="text-uppercase">team driven<span class="d-block bc_color_primary bc_text_40 bc_text_semibold bc_line_height_38">investing</span></p>
                                            <p>“No one knows everything.” We try to make informed, rational decisions that align your investments with your lifestyle.</p>
                                            <a href="#" class="btn_primary py-2 px-3 mt-4">LEARN HOW</a>
                                        </div>
                                    </div>
                                    <div class="col-md-5 d-none d-md-block">
                                        <div class="image position-relative d-inline-block mx-auto p-3 image_border">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/investing.png" class="img-fluid" alt="team" >
                                        </div>
                                    </div>
                              </div>
                          </div>
                          <div class="swiper-slide bg-white">
                              <div class="row align-items-center">
                                    <div class="offset-md-1 col-md-5 col-12">
                                        <div class="pl-md-5 text-center text-md-left">
                                            <p class="text-uppercase">360<span class="d-block bc_color_primary bc_text_40 bc_text_semibold bc_line_height_38">SUPPORT</span></p>
                                            <p>“We have a person for that”. If it’s important to you, we are here to help, beyond just investments and planning.</p>
                                            <a href="#" class="btn_primary py-2 px-3 mt-4">LEARN HOW</a>
                                        </div>
                                    </div>
                                    <div class="col-md-5 d-none d-md-block">
                                        <div class="image position-relative d-inline-block mx-auto p-3 image_border">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/investing.png" class="img-fluid" alt="team" >
                                        </div>
                                    </div>
                              </div>
                          </div>
                          <div class="swiper-slide bg-white">
                              <div class="row align-items-center">
                                    <div class="offset-md-1 col-md-5 col-12">
                                        <div class="pl-md-5 text-center text-md-left">
                                            <p class="text-uppercase"><span class="d-block bc_color_primary bc_text_40 bc_text_semibold bc_line_height_38">QUALIFIED</span></p>
                                            <p>“We’ve got the credentials.”</p>
                                            <a href="#" class="btn_primary py-2 px-3 mt-4">Meet the team</a>
                                        </div>
                                    </div>
                                    <div class="col-md-5 d-none d-md-block">
                                        <div class="image position-relative d-inline-block mx-auto p-3 image_border">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/investing.png" class="img-fluid" alt="team" >
                                        </div>
                                    </div>
                              </div>
                          </div>
                          <div class="swiper-slide bg-white">
                              <div class="row align-items-center">
                                    <div class="offset-md-1 col-md-5 col-12">
                                        <div class="pl-md-5 text-center text-md-left">
                                            <p class="text-uppercase">Community<span class="d-block bc_color_primary bc_text_40 bc_text_semibold bc_line_height_38">CENTRIC</span></p>
                                            <p>“Our clients are not clones.”</p>
                                            <a href="#" class="btn_primary py-2 px-3 mt-4">Learn more about how we advise our community</a>
                                        </div>
                                    </div>
                                    <div class="col-md-5 d-none d-md-block">
                                        <div class="image position-relative d-inline-block mx-auto p-3 image_border">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/investing.png" class="img-fluid" alt="team" >
                                        </div>
                                    </div>
                              </div>
                          </div>
                          <div class="swiper-slide bg-white">
                              <div class="row align-items-center">
                                    <div class="offset-md-1 col-md-5 col-12">
                                        <div class="pl-md-5 text-center text-md-left">
                                            <p class="text-uppercase"><span class="d-block bc_color_primary bc_text_40 bc_text_semibold bc_line_height_38">INDEPENDENT</span></p>
                                            <p>“We think for ourselves.”</p>
                                            <a href="#" class="btn_primary py-2 px-3 mt-4">Read about our beliefs and how we invest in our community</a>
                                        </div>
                                    </div>
                                    <div class="col-md-5 d-none d-md-block">
                                        <div class="image position-relative d-inline-block mx-auto p-3 image_border">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/investing.png" class="img-fluid" alt="team" >
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

    <!-- background image use shortcode --->
    <div class="container-fluid p-0">
      <div class="who_we_head position-relative bc_home_section_bg " style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/greybg.png'); background-position: center;">
      </div>
    </div>

    <!-- background image use shortcode--->
    <div class="container-fluid p-0 pt-5 pb-5 position-relative bc_home_section_bg who_we mt-n8" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/img/testimonials.png'); background-position: top">
      <div class="eagle_icon position-absolute d-none d-md-block">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/eagle.png" class="img-fluid w-100 animated">
      </div>
        <div class="container p-5 px-md-4">
            <div class="row pt-5">
                <div class="col-md-12 text-center text-lg-center text-md-center pt-4 pb-md-5"><h3 class="position-relative bottom_line mb-5">Who We Are</h3></div>
                <div class="col-md-7 col-12 order-2 order-md-1 mt-3 pb-5">
                  <!-- Swiper -->
                    <div class="swiper-container who_we_swiper">
                      <div class="swiper-wrapper mb-5">
                          <div class="swiper-slide">
                            <div class="px-4">
                                <div class="text-center">
                                  <div class="image position-relative d-inline-block mx-auto p-2">
                                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/brett-headshot.png">
                                  </div>
                                </div>
                                <span class="position-relative bottom_line_2 bc_color_primary bc_text_18 bc_line_height_22 bc_font_alt_1 bc_text_bold d-block text-capitalize text-center client_name">Brett Bernstein, CFP®</span>
                                <p class="bc_color_secondary bc_text_16 bc_font_alt_1 d-block mt-2 text-center bc_line_height_40 bc_text_normal">CEO & Co-founder</p>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="px-4">
                              <div class="text-center">
                                <div class="image position-relative d-inline-block mx-auto p-2">
                                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rob-headshot.png">
                                </div>
                              </div>
                              <span class="position-relative bottom_line_2 bc_color_primary bc_text_18 bc_line_height_22 bc_font_alt_1 bc_text_bold d-block text-capitalize text-center client_name">Rob Kantor</span>
                              <p class="bc_color_secondary bc_text_16 bc_font_alt_1 d-block mt-2 text-center bc_line_height_40 bc_text_normal">CIO & Co-founder</p>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="px-4">
                              <div class="text-center">
                                <div class="image position-relative d-inline-block mx-auto p-2">
                                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/curtis-headshot.png">
                                  </div>
                                </div>
                                <span class="position-relative bottom_line_2 bc_color_primary bc_text_18 bc_line_height_22 bc_font_alt_1 bc_text_bold d-block text-capitalize text-center client_name">Curtis Congdon, CRPC®, CFP®</span>
                                <p class="bc_color_secondary bc_text_16 bc_font_alt_1 d-block mt-2 text-center bc_line_height_40 bc_text_normal">President</p>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="px-4">
                                <div class="text-center">
                                  <div class="image position-relative d-inline-block mx-auto p-2">
                                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/brett-headshot.png">
                                  </div>
                                </div>
                                <span class="position-relative bottom_line_2 bc_color_primary bc_text_18 bc_line_height_22 bc_font_alt_1 bc_text_bold d-block text-capitalize text-center client_name">Brett Bernstein, CFP®</span>
                                <p class="bc_color_secondary bc_text_16 bc_font_alt_1 d-block mt-2 text-center bc_line_height_40 bc_text_normal">CEO & Co-founder</p>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="px-4">
                              <div class="text-center">
                                <div class="image position-relative d-inline-block mx-auto p-2">
                                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rob-headshot.png">
                                </div>
                              </div>
                              <span class="position-relative bottom_line_2 bc_color_primary bc_text_18 bc_line_height_22 bc_font_alt_1 bc_text_bold d-block text-capitalize text-center client_name">Rob Kantor</span>
                              <p class="bc_color_secondary bc_text_16 bc_font_alt_1 d-block mt-2 text-center bc_line_height_40 bc_text_normal">CIO & Co-founder</p>
                            </div>
                          </div>
                          
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination who_we_pagination "></div>
                        
                    </div>
                    <!-- Add Arrows -->
                        <div class="who_we_buttons">
                            <div class="swiper-button-next who_we_next bc_color_primary bc_text_30 bc_text_light bc_line_height_60"><i class="fal fa-2x fa-angle-right"></i></div>
                            <div class="swiper-button-prev who_we_prev bc_color_primary bc_text_30 bc_text_light bc_line_height_60"><i class="fal fa-2x fa-angle-left"></i></div>
                        </div>
                </div>
                <div class="col-md-5 order-1 order-md-2 mt-3 pb-5 text-center text-md-left team_text px-md-5">
                    <h2>A Team of Passionate Experts</h2>
                    <p>With roots back to 1981 XML has been passionate about assembling a team of experts not just in money management but also in listening and in sincere care for our client's well being. We currently have CFPs, CRPCs, MBAs working to improve our Client's lives.</p>
                    <a href="#" class="btn_secondary px-4 py-2 mt-4 mb-5">FULL TEAM</a>
                </div>
            </div>
        </div>
    </div>
   
    <div class="container-fluid px-0 borde_b_primary mt-n9">
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
        nextEl: '.who_we_next',
        prevEl: '.who_we_prev',
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
          slidesPerView: 2,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 2,
          spaceBetween: 50,
        },
    }
 });
</script>
<?php }
add_action( 'wp_footer' , 'serviceAreaJavascript' );?>
<?php get_footer(); ?>