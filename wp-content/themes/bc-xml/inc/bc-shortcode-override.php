<?php
/*- overriding plugins shortcode -*/

add_action('wp_head', 'bc_promotion_shortcode_custom');
function bc_promotion_shortcode_custom() {
	remove_shortcode('bc-testimonial');
	add_shortcode('bc-testimonial', 'custom_testimonial_shortcode');


}

function custom_testimonial_shortcode($atts , $content = null){
    static $count = 0;
    $count++;
    add_action( 'wp_footer' , function() use($count){
    ?>
    <script>
    var swiperTestimonials = new Swiper('#bc_testimonials-swiper_<?php echo $count ?>', {
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
            el: '.testimonials-pagination',
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
    <?php });

    $Ids = null;
    $args  = array( 'post_type' => 'bc_testimonials', 'posts_per_page' => -1, 'order'=> 'DESC','post_status'  => 'publish');
    
    ob_start();
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) : ?>

<div class="container-fluid py-5 px-0 testimonials">
    <div class="eagle_icon testimonial_icon position-absolute d-none d-md-block">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-testimonials.png" class="img-fluid w-100 animated">
      </div>
        <div class="container">
            <div class="row no-gutters">
              <div class="col-lg-10 offset-lg-1 text-center pt-lg-5">
                <span class="bc_text_28 bc_line_height_28 bc_font_default bc_color_primary bc_text_light bottom_line d-block position-relative mt-3 text-uppercase">testimonials</span>
                <div class="col-lg-12">
                  <div class="swiper-button-next testimonials-button-next d-none d-lg-block">
                      <i class="far fa-chevron-right bc_text_30 bc_line_height_34 bc_color_primary"></i>
                  </div>
                  <div class="swiper-button-prev testimonials-button-prev d-none d-lg-block">
                    <i class="far fa-chevron-left  bc_text_30 bc_line_height_34 bc_color_primary"></i>
                  </div>
                  <div id="bc_testimonials-swiper_<?php echo $count;?>" class="swiper-container testimonials-swiper mx-md-5 pb-3 mt-5">
                    <div class="swiper-wrapper pb-3">
                        <?php 
                        while( $query->have_posts() ) {
                        $query->the_post();
                        $name = get_post_meta( get_the_id(), 'testimonial_name', true );
                        $title = get_post_meta( get_the_id(), 'testimonial_title', true );
                        $message = get_post_meta( get_the_id(), 'testimonial_message', true );
                        $image = get_post_meta( get_the_id(), 'testimonial_custom_image', true );
                        ?>
                        <div class="swiper-slide">
                            <p>“<?php echo $message;?>"</p>
                        </div>
                        <?php }?>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination team-pagination testimonials-pagination"></div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
<?php 
endif;
$output = ob_get_clean();
return $output;
}
