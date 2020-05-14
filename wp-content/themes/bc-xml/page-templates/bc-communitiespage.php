<?php
/**
 * Template Name: CommunitiesPage Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();?>

<main>
<?php get_template_part( 'page-templates/common/bc-banner-section' ); ?> 
    <div class="container-fluid py-5 p-0 m-0">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-12">
                  <h1><?php the_title()?></h1>
                   <?php 
                      if ( have_posts() ) :
                      while ( have_posts() ) :  the_post();
                          the_content();
                      endwhile;
                      endif;
                    ?> 
                </div> 

              <!-- Community Members -->

                <div class="col-lg-12">
                  <div class="swiper-button-next members-button-next d-none d-lg-block">
                      <i class="far fa-chevron-right bc_text_30 bc_line_height_34 bc_color_primary"></i>
                  </div>
                  <div class="swiper-button-prev members-button-prev d-none d-lg-block">
                    <i class="far fa-chevron-left  bc_text_30 bc_line_height_34 bc_color_primary"></i>
                  </div>
                  <div class="swiper-container community-members-swiper mx-md-5 pb-3 mt-lg-5">
                    <div class="swiper-wrapper pb-2">
                      <div class="swiper-slide">
                        <div class="members px-3 pt-3 pb-4 border position-relative overflow-hidden">
                          <div class="img bc_color_lightgray_bg">
                            
                          </div>
                          <span class="bc_font_alt_1 bc_text_22 bc_line_height_26 bc_text_bold bc_color_primary border-bottom pb-2 mt-3 d-block">Full Name</span>
                          <span class="bc_font_alt_1 bc_text_20 bc_line_height_24 bc_text_normal bc_color_secondary my-2 d-block">Title</span>
                          <div class="position-absolute detail p-3">
                            <span class="bc_text_18 bc_line_height_30 text-white bc_font_default bc_text_normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </span>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="members px-3 pt-3 pb-4 border position-relative overflow-hidden">
                          <div class="img bc_color_lightgray_bg">
                            
                          </div>
                          <span class="bc_font_alt_1 bc_text_22 bc_line_height_26 bc_text_bold bc_color_primary border-bottom pb-2 mt-3 d-block">Full Name</span>
                          <span class="bc_font_alt_1 bc_text_20 bc_line_height_24 bc_text_normal bc_color_secondary my-2 d-block">Title</span>
                          <div class="position-absolute detail p-3">
                            <span class="bc_text_18 bc_line_height_30 text-white bc_font_default bc_text_normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </span>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="members px-3 pt-3 pb-4 border position-relative overflow-hidden">
                          <div class="img bc_color_lightgray_bg">
                            
                          </div>
                          <span class="bc_font_alt_1 bc_text_22 bc_line_height_26 bc_text_bold bc_color_primary border-bottom pb-2 mt-3 d-block">Full Name</span>
                          <span class="bc_font_alt_1 bc_text_20 bc_line_height_24 bc_text_normal bc_color_secondary my-2 d-block">Title</span>
                          <div class="position-absolute detail p-3">
                            <span class="bc_text_18 bc_line_height_30 text-white bc_font_default bc_text_normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </span>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="members px-3 pt-3 pb-4 border position-relative overflow-hidden">
                          <div class="img bc_color_lightgray_bg">
                            
                          </div>
                          <span class="bc_font_alt_1 bc_text_22 bc_line_height_26 bc_text_bold bc_color_primary border-bottom pb-2 mt-3 d-block">Full Name</span>
                          <span class="bc_font_alt_1 bc_text_20 bc_line_height_24 bc_text_normal bc_color_secondary my-2 d-block">Title</span>
                          <div class="position-absolute detail p-3">
                            <span class="bc_text_18 bc_line_height_30 text-white bc_font_default bc_text_normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination team-pagination member-pagination d-md-none"></div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo do_shortcode('[bc-testimonial]');?>
   
 <?php get_template_part( 'page-templates/common/wondering-if-there' ); ?> 
</main>
<script type="text/javascript">
  var swiperMember = new Swiper('.community-members-swiper', {
    navigation: {
        nextEl: '.members-button-next',
        prevEl: '.members-button-prev',
    },
     slidesPerView: 3,
        loop: true,
        speed: 400,
        // autoplay: true,
        paginationClickable: true,
        spaceBetween: 50,
        pagination: {
            el: '.member-pagination',
            type: 'bullets',
            clickable: true,
        },
        breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
      }     
    });
  
</script>
<?php get_footer();?>