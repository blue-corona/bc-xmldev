<?php
/**
 * Template Name: Team Page Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();?>

<main>
    <div class="container-fluid px-0 m-0 subpage_banner">
        <div class="row no-gutters">
            <div class="col-12">
              <?php if (has_post_thumbnail() ) {
      $image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id() ), 'single-post-thumbnail' ); ?>
             <img src="<?php echo $image[0]; ?>" class="img-fluid w-100" alt="Contact-banner">
           <?php }else{ ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/team-banner.jpg" class="img-fluid w-100" alt="Contact-banner">
                   <?php }?>
                <div class="gradient position-absolute"></div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 p-0 m-0">
        <div class="container">
            <div class="row no-gutters">
              <div class="col-lg-12">
                <!-- <h1>our team</h1>
                <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt <a href="#"> hyperlink example </a> ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint </p> -->
                 <h1><?php the_title()?></h1>
                   <p> <?php 
                    if ( have_posts() ) :
                    while ( have_posts() ) :  the_post();
                        the_content();
                    endwhile;
                    endif;
                    ?> 

</p>
                <p class="text-right mt-4"><a href="#" class="btn_secondary bc_line_height_26 py-2 px-4">reset all</a>
                </p>
              </div>
            </div>
            <div class="row m-0">
              <div class="col-12">
                <span class="bc_text_24 bc_line_height_26 bc_font_default bc_text_light d-block bc_color_secondary text-uppercase mt-4">Filter by team</span>
              </div>
              <div class="col-lg-3 mt-3">
                <button class="Filter_btn bc_color_primary bg-white bc_text_20 bc_line_height_28" autofocus>All</button>
              </div>
              <div class="col-lg-3 mt-3 text-center">
                <button class="Filter_btn bc_color_primary bg-white bc_text_20 bc_line_height_28">Leadership Team</button>
              </div>
              <div class="col-lg-3 mt-3 text-center">
                <button class="Filter_btn bc_color_primary bg-white bc_text_20 bc_line_height_28">Operations Team</button>
              </div>
              <div class="col-lg-3 mt-3 text-center">
                <button class="Filter_btn bc_color_primary bg-white bc_text_20 bc_line_height_28">Wealth Advisors</button>
              </div>
              <div class="col-12 mt-2">
                <hr class="mb-3">
                <span class="bc_text_24 bc_line_height_26 bc_font_default bc_text_light d-block bc_color_secondary text-uppercase mt-4">Filter by location</span>
              </div>
              <div class="col-lg-3 mt-3">
                <button class="Filter_btn bc_color_primary bg-white bc_text_20 bc_line_height_28 border_primary">All</button>
              </div>
              <div class="col-lg-3 mt-3 text-center">
                <button class="Filter_btn bc_color_primary bg-white bc_text_20 bc_line_height_28">Rockville, MD</button>
              </div>
              <div class="col-lg-3 mt-3 text-center">
                <button class="Filter_btn bc_color_primary bg-white bc_text_20 bc_line_height_28">Falls Church, VA</button>
              </div>
              <div class="col-lg-3 mt-3 text-center">
                <button class="Filter_btn bc_color_primary bg-white bc_text_20 bc_line_height_28">Breckenridge, CO</button>
              </div>

      <div class="col-lg-4 mt-5">
                <div class="members px-3 pt-3 pb-4 border position-relative overflow-hidden">
                    <div class="">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/brett-square.jpg" class="img-fluid" alt="brett-square">
                    </div>
                    <span class="bc_font_alt_1 bc_text_24 bc_line_height_28 bc_text_bold bc_color_primary border-bottom pb-2 mt-3 d-block">Brett Bernstein CFP®</span>
                    <span class="bc_font_alt_1 bc_text_22 bc_line_height_41 bc_text_normal bc_color_secondary my-2 d-block">CIO & Co-founder</span>
                    <div class="position-absolute detail p-3 text-center">
                      <a href="#" class="bc_text_20 bc_line_height_48 text-white bc_font_default bc_text_normal no_hover_underline text-uppercase">View Full Bio <i class="fal fa-chevron-circle-right bc_font_default bc_text_20 bc_line_height_48"></i> </a>
                    </div>
                  </div>
              </div>
              <div class="col-lg-4 mt-5">
                <div class="members px-3 pt-3 pb-4 border position-relative overflow-hidden">
                    <div class="">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rob-square.jpg" class="img-fluid" alt="brett-square">
                    </div>
                    <span class="bc_font_alt_1 bc_text_24 bc_line_height_28 bc_text_bold bc_color_primary border-bottom pb-2 mt-3 d-block">Rob Kantor</span>
                    <span class="bc_font_alt_1 bc_text_22 bc_line_height_41 bc_text_normal bc_color_secondary my-2 d-block">CIO & Co-founder</span>
                    <div class="position-absolute detail p-3 text-center">
                      <a href="#" class="bc_text_20 bc_line_height_48 text-white bc_font_default bc_text_normal no_hover_underline text-uppercase">View Full Bio <i class="fal fa-chevron-circle-right bc_font_default bc_text_20 bc_line_height_48"></i> </a>
                    </div>
                  </div>
              </div>
              <div class="col-lg-4 mt-5">
                <div class="members px-3 pt-3 pb-4 border position-relative overflow-hidden">
                    <div class="">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/curtis-square.jpg" class="img-fluid" alt="brett-square">
                    </div>
                    <span class="bc_font_alt_1 bc_text_24 bc_line_height_28 bc_text_bold bc_color_primary border-bottom pb-2 mt-3 d-block">Curtis Congdon, CRPC®, CFP®</span>
                    <span class="bc_font_alt_1 bc_text_22 bc_line_height_41 bc_text_normal bc_color_secondary my-2 d-block">CIO & Co-founder</span>
                    <div class="position-absolute detail p-3 text-center">
                      <a href="#" class="bc_text_20 bc_line_height_48 text-white bc_font_default bc_text_normal no_hover_underline text-uppercase">View Full Bio <i class="fal fa-chevron-circle-right bc_font_default bc_text_20 bc_line_height_48"></i> </a>
                    </div>
                  </div>
              </div>
              <div class="col-lg-4 mt-4">
                <div class="members px-3 pt-3 pb-4 border position-relative overflow-hidden">
                    <div class="img bc_color_lightgray_bg">
                      
                    </div>
                    <span class="bc_font_alt_1 bc_text_24 bc_line_height_28 bc_text_bold bc_color_primary border-bottom pb-2 mt-3 d-block">Full Name</span>
                    <span class="bc_font_alt_1 bc_text_22 bc_line_height_41 bc_text_normal bc_color_secondary my-2 d-block">Titel</span>
                    <div class="position-absolute detail p-3 text-center">
                      <a href="#" class="bc_text_20 bc_line_height_48 text-white bc_font_default bc_text_normal no_hover_underline text-uppercase">View Full Bio <i class="fal fa-chevron-circle-right bc_font_default bc_text_20 bc_line_height_48"></i> </a>
                    </div>
                  </div>
              </div>
              <div class="col-lg-4 mt-4">
                <div class="members px-3 pt-3 pb-4 border position-relative overflow-hidden">
                    <div class="img bc_color_lightgray_bg">
                      
                    </div>
                    <span class="bc_font_alt_1 bc_text_24 bc_line_height_28 bc_text_bold bc_color_primary border-bottom pb-2 mt-3 d-block">Full Name</span>
                    <span class="bc_font_alt_1 bc_text_22 bc_line_height_41 bc_text_normal bc_color_secondary my-2 d-block">Titl</span>
                    <div class="position-absolute detail p-3 text-center">
                      <a href="#" class="bc_text_20 bc_line_height_48 text-white bc_font_default bc_text_normal no_hover_underline text-uppercase">View Full Bio <i class="fal fa-chevron-circle-right bc_font_default bc_text_20 bc_line_height_48"></i> </a>
                    </div>
                  </div>
              </div>
              <div class="col-lg-4 mt-4">
                <div class="members px-3 pt-3 pb-4 border position-relative overflow-hidden">
                    <div class="img bc_color_lightgray_bg">
                      
                    </div>
                    <span class="bc_font_alt_1 bc_text_24 bc_line_height_28 bc_text_bold bc_color_primary border-bottom pb-2 mt-3 d-block">Full Name</span>
                    <span class="bc_font_alt_1 bc_text_22 bc_line_height_41 bc_text_normal bc_color_secondary my-2 d-block">Titl</span>
                    <div class="position-absolute detail p-3 text-center">
                      <a href="#" class="bc_text_20 bc_line_height_48 text-white bc_font_default bc_text_normal no_hover_underline text-uppercase">View Full Bio <i class="fal fa-chevron-circle-right bc_font_default bc_text_20 bc_line_height_48"></i> </a>
                    </div>
                  </div>
              </div>
            </div>
        </div>
    </div>

    <!-- <div class="container-fluid px-0 m-0 borde_b_primary mt-5">
      <div class="graphic_lines pb-5">
          <div class="container">
              <div class="row no-gutters">
                  <div class="col-lg-10 px-lg-4 offset-lg-1 text-center">
                      <span class="position-relative bc_text_36 bc_line_height_36 mt-5 bc_font_default bc_text_thin text-white bottom_line1 d-block">Wondering if there might be something more you and your money could do?</span>
                      <span class="bc_text_20 bc_line_height_34 bc_font_alt_1 bc_text_light text-white d-block mt-4 pt-1">There are several different ways to connect with us. Chose whichever you are most <br> comfortable with. </span>
                      <a href="#" class="btn_secondary bc_line_height_26 px-4 py-2 mt-4">let’s talk </a>
                  </div>
              </div>
          </div>
        </div>
    </div> -->
      <?php get_template_part( 'page-templates/common/Wondering-if-there' ); ?> 
</main>
<script type="text/javascript">
  var swiperService = new Swiper('.community-members-swiper', {
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
            el: '.team-pagination',
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
  var swiperService = new Swiper('.testimonials-swiper', {
    navigation: {
        nextEl: '.testimonials-button-next',
        prevEl: '.testimonials-button-prev',
    },
     slidesPerView: 1,
        loop: true,
        speed: 400,
        // autoplay: true,
        paginationClickable: true,
        spaceBetween: 50,
        pagination: {
            el: '.team-pagination',
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
