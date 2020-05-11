<?php
/**
 * Template Name: SubPage-Siderbar Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
global $post;
?>
<main>
    <div class="container-fluid px-0 m-0 subpage_banner">
        <div class="row no-gutters">
            <div class="col-12">
                 <?php if (has_post_thumbnail() ) {
      $image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id() ), 'single-post-thumbnail' ); ?>
             <img src="<?php echo $image[0]; ?>" class="img-fluid w-100" alt="Contact-banner">
           <?php }else{ ?>
             <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/contact-banner.jpg" class="img-fluid w-100" alt="Contact-banner">
           <?php }?>
            <div class="gradient position-absolute"></div>
              <!--   <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/contact-banner.jpg" class="img-fluid w-100" alt="Contact-banner">
                <div class="gradient position-absolute"></div> -->
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 m-0">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-8">
                    <h1><?php the_title()?></h1>
                   <p> <?php 
                    if ( have_posts() ) :
                    while ( have_posts() ) :  the_post();
                        the_content();
                    endwhile;
                    endif;
                    ?> 

                   </p>
                 <!--  
                    <h1>Heading Goes Here</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt <a href="#">hyperlink example</a> ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                    <h2 class="mt-4">Subheading Goes Here</h2>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, hyperlink example qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam. </p>
                    <a href="#" class="btn_primary py-1 px-3 mt-4 bc_line_height_50">CTA GOES HERE</a>
                    <h3 class="mt-5 pl-4 mb-2">Bulleted List Example</h3>
                    <div class="bullets_style">
                      <ul class="pl-4" >
                          <li class="bc_line_height_40"> Sed ut perspiciatis unde</li>
                          <li class="bc_line_height_40"> Omnis iste natus error sit</li>
                          <li class="bc_line_height_40"> Voluptatem accusantium</li>
                          <li class="bc_line_height_40"> Doloremque laudantium</li>
                          <li class="bc_line_height_40"> Totam rem aperiam amet</li>
                      </ul>
                    </div>
                    <div id="accordion" class="accordion w-100 border-bottom mt-4">
                      <div class="card rounded-0 mb-0">
                          <div class="card-header position-relative border-bottom-0 bg-white cursor_pointer" data-toggle="collapse" href="#collapse1">
                              <h3 class="card-title bc_color_primary"> Title Goes Here </h3>
                          </div>
                          <div id="collapse1" class="card-body collapse position-relative show" data-parent="#accordion">
                              <p class="text-gray"> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, hyperlink example qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam. </p>
                          </div>
                          <div class="card-header position-relative border-top border-bottom-0 bg-white border-t1 collapsed cursor_pointer" data-parent="#accordion" data-toggle="collapse" href="#collapse2">
                              <h3 class="card-title bc_color_primary"> Title Goes Here </h3>
                          </div>
                          <div id="collapse2" class="card-body collapse position-relative " data-parent="#accordion">
                              <p class="text-gray"> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                          </div>

                          <div class="card-header position-relative border-top border-bottom-0 bg-white border-t1 collapsed cursor_pointer" data-parent="#accordion" data-toggle="collapse" href="#collapse3">
                              <h3 class="card-title bc_color_primary"> Title Goes Here </h3>
                          </div>
                          <div id="collapse3" class="card-body collapse position-relative " data-parent="#accordion">
                              <p class="text-gray"> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                          </div>

                          <div class="card-header position-relative border-top bg-white border-bottom-0 collapsed cursor_pointer" data-parent="#accordion" data-toggle="collapse" href="#collapse4">
                              <h3 class="card-title bc_color_primary"> Title Goes Here </h3>
                          </div>
                          <div id="collapse4" class="card-body collapse position-relative " data-parent="#accordion">
                              <p class="text-gray"> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                          </div>
                      </div>
                    </div> -->
                </div>
                      
               <div class="col-lg-4 pl-lg-4">
                  <?php get_template_part( 'sidebar-templates/sidebar-subpagerightsidebar' ); ?>
                 <!--    <div class="how_we_work position-relative overflow-hdden bc_color_lightgray_bg text-center px-4 pt-5 pb-4">
                        <span></span>
                        <h3 class="position-relative bottom_line bc_color_dark_primary bc_text_normal">how we work</h3>
                        <p class="mt-5 bc_color_dark_primary bc_text_24 bc_text_normal">We’re here to help you make investments that align with your lifestyle.</p>
                      <a href="#" class="btn_primary bc_line_height_26 py-2 px-3 mt-4">learn how</a>
                    </div> -->
                   <!-- <div class="who_we_are mt-5 pt-lg-5 text-center">
                       <h3 class="position-relative bottom_line text-uppercase bc_text_normal">who we are</h3>
                       <div class="swiper-container team-swiper pb-3 mt-4">
                             <div class="swiper-wrapper pb-2">
                                <div class="swiper-slide text-center p-4">
                                    <div class="image position-relative d-inline-block mx-auto p-3">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/brett-headshot.jpg" class="img-fluid" alt="Contact-banner">
                                    </div>
                                     <span class="position-relative bottom_line_2 bc_color_primary bc_text_24 bc_line_height_50 bc_font_alt_1 bc_text_bold d-block">Brett Bernstein, CFP<sup>®</sup> </span>
                                    <span class="bc_color_secondary bc_text_24 bc_line_height_50 bc_font_alt_1 d-block mt-2">CEO & Co-founder</span>
                                </div>
                                <div class="swiper-slide text-center p-4">
                                    <div class="image position-relative d-inline-block mx-auto p-3">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/brett-headshot.jpg" class="img-fluid" alt="Contact-banner">
                                    </div>
                                     <span class="position-relative bottom_line_2 bc_color_primary bc_text_24 bc_line_height_50 bc_font_alt_1 bc_text_bold d-block">Brett Bernstein, CFP<sup>®</sup> </span>
                                    <span class="bc_color_secondary bc_text_24 bc_line_height_50 bc_font_alt_1 d-block mt-2">CEO & Co-founder</span>
                                </div>
                                <div class="swiper-slide text-center p-4">
                                    <div class="image position-relative d-inline-block mx-auto p-3">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/brett-headshot.jpg" class="img-fluid" alt="Contact-banner">
                                    </div>
                                     <span class="position-relative bottom_line_2 bc_color_primary bc_text_24 bc_line_height_50 bc_font_alt_1 bc_text_bold d-block">Brett Bernstein, CFP<sup>®</sup> </span>
                                    <span class="bc_color_secondary bc_text_24 bc_line_height_50 bc_font_alt_1 d-block mt-2">CEO & Co-founder</span>
                                </div>
                                <div class="swiper-slide text-center p-4">
                                    <div class="image position-relative d-inline-block mx-auto p-3">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/brett-headshot.jpg" class="img-fluid" alt="Contact-banner">
                                    </div>
                                     <span class="position-relative bottom_line_2 bc_color_primary bc_text_24 bc_line_height_50 bc_font_alt_1 bc_text_bold d-block">Brett Bernstein, CFP<sup>®</sup> </span>
                                    <span class="bc_color_secondary bc_text_24 bc_line_height_50 bc_font_alt_1 d-block mt-2">CEO & Co-founder</span>
                                </div>
                            </div> -->
                            <!-- Add Pagination -->
                            <!-- <div class="swiper-pagination team-pagination"></div>
                        </div>
                        <a href="#" class="btn_secondary bc_line_height_26 px-4 py-2 mt-3">FULL TEAM</a>
                    </div> -->
                  <!--   <div class="resources px-4 py-5 mt-5 text-center">
                        <h3 class="position-relative bottom_line text-uppercase bc_text_normal">resources</h3>
                        <p class="mt-5 bc_color_dark_primary bc_text_24 bc_text_normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                        <a href="#" class="btn_primary bc_line_height_26 px-3 py-2 mt-3">learn how</a>
                    </div> -->
                </div> 
            </div>
        </div>
    </div>

  <!--  <div class="container-fluid px-0 m-0 borde_b_primary mt-5">
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
    var swiperTestimonial = new Swiper('.team-swiper', {
      slidesPerView: 1,
      loop: true,
      speed: 400,
      // autoplay: true,
      paginationClickable: true,
      pagination: {
        el: '.team-pagination',
        type: 'bullets',
        clickable: true,
      },
    });

</script>

<?php get_footer();?>