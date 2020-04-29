<?php
/**
 * Template Name: CommunitiesPage Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();?>

<main>
    <div class="container-fluid px-0 m-0 subpage_banner">
        <div class="row no-gutters">
            <div class="col-12">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/communities.jpg" class="img-fluid w-100" alt="Contact-banner">
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 m-0">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-12">
                    <h1>Starting out - Solid Foundation</h1>
                    <p>Great work considering how best to position yourself for the future. We get that yes, someday, you want to retire, but there are also things you want to do now. You aren’t living for a future retirement, but rather want to maximize your entire life. We can work thru that together, building on lessons learned from others in a similar situation, but making it your own.</p>

                    <ul class="bullete_style pl-5">
                        <li> How to I balance retirement, investing, paying off debt and maybe buying a home? 
                        <li>Which type of retirement account is right for me?</li>
                        <li>How do we make sense of our company benefits?</li>
                        <li>Do I really need to think about insurance?</li>
                        <li>How does anyone afford to have kids?!</li>
                        <li>Daycare is so expensive, should one of us stay home?</li>
                        <li>Can I be a little frivolous and travel?</li>
                    </ul>
                    <div class="mt-5 py-5 border-top">
                      <h2>Community Members</h2>
                      <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat</p>
                      <div class="swiper-container community-members-swiper px-5 pb-3 mt-5">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <div class="members px-3 pt-3 pb-5 border">
                              <div class="img">
                                
                              </div>
                              <span class="bc_font_alt_1 bc_text_22 bc_line_height_26 bc_font_bold bc_color_primary border-bottom pb-2 mt-2 d-block">Full Name</span>
                              <span class="bc_font_alt_1 bc_text_22 bc_line_height_26 bc_text_normal bc_color_secondary mt-2 d-block">Titl</span>
                            </div>
                          </div>
                          <div class="swiper-slide">Resize me!</div>
                          <div class="swiper-slide">Resize me!</div>
                          <div class="swiper-slide">Resize me!</div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination team-pagination d-lg-none"></div>
                        <div class="swiper-button-next members-button-next"></div>
                        <div class="swiper-button-prev members-button-prev"></div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid graphic_lines pb-5">
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
            el: '.choose-units-pagination',
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