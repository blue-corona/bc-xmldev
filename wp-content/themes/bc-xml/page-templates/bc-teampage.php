<?php
/**
 * Template Name: teamPage Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();?>

<main>
    <div class="container-fluid px-0 m-0 subpage_banner">
        <div class="row no-gutters">
            <div class="col-12">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/team-banner.jpg" class="img-fluid w-100" alt="Contact-banner">
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 p-0 m-0">
        <div class="container">
            
        </div>
    </div>

    <div class="container-fluid px-0 m-0 bc_color_tertiary_bg">
      <div class="graphic_lines  pb-5">
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