<div class="container-fluid p-0 pt-5 pb-5 position-relative bc_home_section_bg who_we mt-n8" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/img/homepage-testimonials.png'); background-position: top">
  <div class="eagle_icon position-absolute d-none d-md-block">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/eagle.png" class="img-fluid w-100 animated">
  </div>
  <div class="container pt-5 pb-0 px-md-4">
    <div class="row pt-5">
      <div class="col-md-12 text-center text-lg-center text-md-center pt-5 pb-md-5"><h3 class="position-relative bottom_line pt-4 mb-5">Who We Are</h3></div>
      <div class="col-xl-7 col-12 order-2 order-xl-1 mt-3 pb-4">
        <!-- Swiper -->
        <div class="swiper-container who_we_swiper">
          <div class="swiper-wrapper mb-5">

           <?php 
           $teams_args  = array( 'post_type' => 'bc_teams', 'posts_per_page' => -1, 'order'=> 'ASC','orderby' => 'menu_order', 'post_status'  => 'publish');

           $query = new WP_Query( $teams_args );
           if ( $query->have_posts() ) :
            while($query->have_posts()) : $query->the_post();
              $title = get_post_meta( get_the_ID(), 'teams_title', true );
              $message = get_post_meta( get_the_ID(), 'teams_message', true );
              $image = get_post_meta( get_the_id(), 'bc_team_custom_image', true );
              $mem_name = (get_field('first_name'))?get_field('first_name').' '.get_field('last_name'):get_the_title();
              $team_position = get_post_meta( get_the_id(), 'team_position', true );
              $show_on_homepage = get_post_meta( get_the_id(), 'show_on_homepage', true );
              // print_r($show_on_homepage);die('ss');
              // if ($show_on_homepage == 'true') {
              ?>
              <div class="swiper-slide">
              <a href="<?php the_permalink();?>">
                <div class="px-4">
                  <div class="text-center">
                    <div class="image position-relative d-inline-block mx-auto p-2 image_border">

                      <?php if (isset($image) && !empty($image)){?>
                        <img class="img-fluid rounded-circle" style="max-width:138px !important;" src="<?php echo $image ?>">
                      <?php }else{
                        echo '<img class="img-fluid rounded-circle" src="https://placehold.it/95x98">';
                      }?>
                    </div>
                  </div>
                  <span class="position-relative bc_color_primary bc_text_18 bc_line_height_22 bc_font_alt_1 bc_text_bold d-block text-capitalize text-center client_name"><?php echo $mem_name;?></span>
                  <p class="bc_color_secondary top_line bc_text_16 bc_font_alt_1 d-block mt-3 text-center bc_line_height_20 bc_text_normal position-relative"><?php echo $team_position;?></p>
                </div>
                </a>
              </div>
              <?php
              // }
            endwhile; 
            wp_reset_query();
          endif;
          ?>
                          
                        </div>
                        <!-- Add Pagination -->
                        <!-- <div class="swiper-pagination who_we_pagination "></div> -->
                        
                      </div>
                      <!-- Add Arrows -->
                      <div class="who_we_buttons">
                        <div class="swiper-button-next who_we_next bc_color_primary bc_text_30 bc_text_light bc_line_height_60"><i class="fal fa-2x fa-angle-right"></i></div>
                        <div class="swiper-button-prev who_we_prev bc_color_primary bc_text_30 bc_text_light bc_line_height_60"><i class="fal fa-2x fa-angle-left"></i></div>
                      </div>
                      <div class="fullteam d-md-none d-block text-center mb-0">
                        <a  href="<?php echo get_home_url();?>/our-team/" class="btn_secondary px-4 py-2 mt-4 mb-0 ">FULL TEAM</a>
                      </div>
                    </div>
                    <div class="col-xl-5 order-1 order-xl-2 mt-3 pb-md-0 pb-3 text-center text-xl-left team_text px-md-5">
                      <div class="px-md-3">
                        <h2>A Team of Passionate Experts</h2>
                        <p class="bc_sm_text_normal mt-4 mt-md-0">With roots back to 1981 XML has been passionate about assembling a team of experts not just in money management but also in listening and in sincere care for our client's well being. We currently have CFPs, CRPCs, MBAs working to improve our client's lives.</p>
                        <a href="<?php echo get_home_url();?>/our-team/" class="btn_secondary px-4 py-2 mt-4 mb-0 d-md-inline-block d-none">FULL TEAM</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <script type="text/javascript">

                var swiper = new Swiper('.who_we_swiper', {
                  slidesPerView: 3,
                  spaceBetween: 30,
                  slidesPerGroup: 3,
                  loop: true,
                  autoplay:true,
                  loopFillGroupWithBlank: true,
                  navigation: {
                    nextEl: '.who_we_next',
                    prevEl: '.who_we_prev',
                  },
                  breakpoints: {
                    540: {
                      slidesPerGroup: 1,
                      autoplay:true,
                      slidesPerView: 1,
                      spaceBetween: 20,
                    },
                    640: {
                      slidesPerGroup: 1,
                      autoplay:true,
                      slidesPerView: 2,
                      spaceBetween: 20,
                    },
                    768: {
                      slidesPerGroup: 2,
                      autoplay:true,
                      slidesPerView: 2,
                      spaceBetween: 40,
                    },
                    1024: {
                      autoplay:true,
                      slidesPerView: 2,
                      spaceBetween: 50,
                    },
                  }
                });

              </script>
