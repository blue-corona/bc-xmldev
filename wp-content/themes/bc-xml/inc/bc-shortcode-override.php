<?php
/*- overriding plugins shortcode -*/

add_action('wp_head', 'bc_promotion_shortcode_custom');
function bc_promotion_shortcode_custom() {
	remove_shortcode('bc-testimonial');
	add_shortcode('bc-testimonial', 'custom_testimonial_shortcode');

    remove_shortcode('bc-promotion');
    add_shortcode('bc-promotion', 'custom_promotion_shortcode');

    remove_shortcode('bc-geotargeting');
    add_shortcode('bc-geotargeting', 'custom_geotargeting_shortcode');

}


function custom_geotargeting_shortcode ( $atts ) {
    $categoryIds = null;
    $args  = array( 'post_type' => 'bc_locations', 'posts_per_page' => -1,'post_status'  => 'publish','orderby'=>'title','order'=>'ASC');
    if(isset($atts['category_id'])) {
        $categoryIds = explode(',', $atts['category_id']);
        $taxArgs = array(
                        array(
                            'taxonomy' => 'bc_location_category', //double check your taxonomy name in you dd 
                            'field'    => 'id',
                            'terms'    => $categoryIds,
                        ),
                        );
        $args['tax_query'] = $taxArgs;
    }
    
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) :
        if(isset($atts['withrowwrapper']) == 1) { echo "<div class='row bc_geolocation_list'>"; }
        while($query->have_posts()) : $query->the_post();
        $state = get_post_meta( get_the_ID() , 'custom_state' , true );
        ?>
            <div class="col-md-3 bc_geolocation_list_item">
                <h5 class="nav-item mr-5">
                    <a class="bc_color_quinary bc_color_quinary_hover nav-link" href="<?php the_permalink(); ?>"><?php echo ( $query->post->custom_city ? $query->post->custom_city : the_title() ); ?>, <?php echo $state?> </a>
                </h5>
            </div>
        <?php
        endwhile; 
        if(isset($atts['withrowwrapper']) == 1) 
            { echo "</div>"; }
        wp_reset_query();
    endif;
}


function custom_promotion_shortcode($atts , $content = null){
    static $count = 0;
    $count++;
    add_action( 'wp_footer' , function() use($count){
    ?>
    <script>
    // Promotion slider js
    var couponSwiper = new Swiper('#bc_promotion_swiper_<?php echo $count ?>', {
        navigation: {
            nextEl: '.promotion-btn-next',
            prevEl: '.promotion-btn-prev',
        },
        speed: 400,
        loop: true,
        slidesPerView: 2,
        spaceBetween: 65,
        pagination: {
            el: '.promotion-pagination',
            type: 'bullets',
            clickable: true,
        },
        breakpoints: {
            640: {
              slidesPerView: 1,
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
    <?php });

    $Ids = null;
    $args  = array( 'post_type' => 'bc_promotions', 'posts_per_page' => -1, 'order'=> 'DESC','post_status'  => 'publish');

    if(isset($atts['coupon_id'])) {
        $Ids = explode(',', $atts['coupon_id']);
        $postIds = $Ids;
        $args['post__in'] = $postIds;
    }
    ob_start();
    $query = new WP_Query( $args );
        if ( $query->have_posts() ) : ?>


<div class="container-fluid py-5 m-0">
    <div class="container p-0">
        <div class="swiper-container px-lg-5 promotion-swiper" id="bc_promotion_swiper_<?php echo $count ?>">
            <div class="swiper-wrapper">
            <?php
            while($query->have_posts()) : $query->the_post();

            $promotion_type = get_post_meta(get_the_ID(), 'promotion_type', TRUE);
            if($promotion_type == 'Builder'){
            $date = get_post_meta( get_the_ID(), 'promotion_expiry_date1', true );
            if(strtotime($date) >= strtotime(current_time('m/d/Y'))){
                $title = get_post_meta( get_the_ID(), 'promotion_title1', true );
                $color = get_post_meta( get_the_ID(), 'promotion_color', true );
                $subheading = get_post_meta( get_the_ID(), 'promotion_subheading', true );
                $footer_heading = get_post_meta( get_the_ID(), 'promotion_footer_heading', true ); ?>
                <div class="bc_cursor_pointer swiper-slide bc_color_secondary_bg" onclick="window.location.href ='<?php the_permalink(get_the_ID()); ?>'">
                    <div class="bc_color_secondary p-3">
                        <div class="border-white bc_coupon_container text-center py-4 px-3 pt-0 ">
                            <span class="mb-2 d-block bc_font_alt_1 bc_text_36 bc_line_height_36 bc_color_quinary text-uppercase"><?php echo $title; ?></span>
                           <span class="bc_text_72 bc_line_height_60 bc_font_alt_1 bc_text_heavy  bc_color_quinary my-4 d-block text-uppercase"><?php echo $subheading;?></span>
                           <span class="bc_text_20 bc_line_height_36 bc_font_default d-block mb-2 bc_text_normal bc_color_quinary text-uppercase"><?php echo $footer_heading;?></span>
                            <span class="bc_text_20 bc_line_height_36 bc_font_default d-block bc_text_normal bc_color_quinary ">Offer Expires Soon<!-- Expires <?php echo $date;?> --></span>
                        </div>
                    </div>
                </div>
                <?php }
                }else if($promotion_type == 'Image'){
                    $date2 = get_post_meta( get_the_ID(), 'promotion_expiry_date2', true );
                    if(strtotime($date2) >= strtotime(current_time('m/d/Y'))){
                        $title2 = get_post_meta( get_the_ID(), 'promotion_title2', true );
                        $promotion_custom_image = get_post_meta( get_the_ID(), 'promotion_custom_image', true ); ?>
                        <div class="bc_cursor_pointer swiper-slide" onclick="window.location.href ='<?php the_permalink(get_the_ID()); ?>'">
                            <div class="bc_color_secondary">
                                <img class="img-fluid" src="<?php echo $promotion_custom_image;?>">
                            </div>
                        </div>
                <?php }
                    }
                ?>
                <?php
                endwhile; 
                wp_reset_query();
                endif;
                ?>
            </div>
            <div class="d-none d-lg-block">
                <div class="af-swiper-button-next promotion-btn-next swiper-button-next d-none d-lg-block" tabindex="0" role="button" aria-label="Next slide"><i class="far fa-chevron-right bc_text_36"></i></div>
                <div class="af-swiper-button-prev promotion-btn-prev swiper-button-prev d-none d-lg-block" tabindex="0" role="button" aria-label="Previous slide"> <i class="far fa-chevron-left bc_text_36"></i></div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination d-md-none promotion-pagination"></div>

            <div class="col-lg-3 my-auto text-center text-md-left d-md-none py-3">
                <div class="help-button px-0 bg-transparent">
                    <a href="<?php echo get_home_url();?>/special-offers/" class="bc_text_24 bc_sm_text_20 bc_font_alt_2 bc_text_normal bc_line_height_50 no_hover_underline bc_color_quinary_hover tertiary_color_hover_btn_bg bc_color_secondary_bg rounded-pill bc_color_quinary py-3 px-4 shadow no_hover_underline">View All Special Offer</a>
                </div>
            </div>

        </div>
    </div>
</div> 

<?php 
$output = ob_get_clean();
return $output;
}

function custom_testimonial_shortcode($atts , $content = null){?>


<div class="container-fluid py-5 px-0 testimonials">
    <div class="testimonial_icon position-absolute d-none d-md-block">
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
                  <div class="swiper-container testimonials-swiper mx-md-5 pb-3 mt-5">
                    <div class="swiper-wrapper pb-3">
                          <!-- loop start -->
                <?php 
                $args = array('post_type' => 'bc_testimonials');
                                $testimonial = new WP_Query( $args );
                                if( $testimonial->have_posts() ) {
                                  while( $testimonial->have_posts() ) {
                                    $testimonial->the_post();
                                $name = get_post_meta( get_the_id(), 'testimonial_name', true );
                                $title = get_post_meta( get_the_id(), 'testimonial_title', true );
                                $message = get_post_meta( get_the_id(), 'testimonial_message', true );
                                $image = get_post_meta( get_the_id(), 'testimonial_custom_image', true );
                            ?>
                     
                      <div class="swiper-slide">
                        <p>“<?php echo $message;?>"</p>
                      </div>
                       <?php
                    }
                }
                ?>
                <!-- loop end -->
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination team-pagination"></div>
                  </div>
                  <!-- <a href="#" class="btn_secondary bc_line_height_26 px-5 py-3 mt-3">read all</a> -->
                </div>
              </div>
            </div>
        </div>
    </div>


<?php
}


add_shortcode('video-tips','bc_video_tips');
function bc_video_tips(){
    ob_start();
    return '<div class="container-fluid videos-section position-relative p-0" style="background-image: url('.get_stylesheet_directory_uri()."/img/pattern4.png".'); background-size: 100% 100%;">
            <div class="positon-absolute" style="left: 0; right: 0; top: 0; bottom: 0; background-color:rgba(235, 235, 235, .88);">
                <span class="d-block bc_font_alt_1 bc_text_36 bc_line_height_40 bc_color_primary bc_text_medium text-center pt-5 mb-3 text-uppercase">Video Tips</span>
                <div class="container pb-5 pt-4 p-0">
                    <div class="modal fade" id="basicExampleModalone" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <iframe width="100%" height="360" src="https://www.youtube.com/embed/eVS_ZOwmPdY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="basicExampleModaltwo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                     <iframe width="100%" height="360" src="https://www.youtube.com/embed/-bY02NKA-JU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="basicExampleModalthree" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <iframe width="100%" height="360" src="https://www.youtube.com/embed/g-ffcSSnHc0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="basicExampleModalfour" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <iframe width="100%" height="360" src="https://www.youtube.com/embed/dfO0xlKANEw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="basicExampleModalfive" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <iframe width="100%" height="360" src="https://www.youtube.com/embed/o2QCGEj79_k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="basicExampleModalsix" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                     <iframe width="100%" height="360" src="https://www.youtube.com/embed/KCdUfkJG8N8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="basicExampleModalseven" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <iframe width="100%" height="360" src="https://www.youtube.com/embed/nmhj5WNhxMc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="basicExampleModaleight" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                     <iframe width="100%" height="360" src="https://www.youtube.com/embed/dfO0xlKANEw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="basicExampleModalnine" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <iframe width="100%" height="360" src="https://www.youtube.com/embed/Sy2GGrC7ayM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-container videos-swipper px-lg-5">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="text-center">
                                    <!-- Button trigger modal -->
                                    <a data-toggle="modal" class="" data-target="#basicExampleModalone">
                                        <img src="'.get_stylesheet_directory_uri().'/img/video_heat.jpg" class="bc_cursor_pointer rounded-circle" alt="video_heat" >
                                    </a>
                                    <span class="bc_text_36 bc_line_height_40  bc_text_light bc_color_primary text-uppercase bc_font_alt_1 d-block mt-4">Heating Tips </span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="text-center">
                                    <!-- Button trigger modal -->
                                    <a data-toggle="modal" class="" data-target="#basicExampleModaltwo">
                                        <img src="'.get_stylesheet_directory_uri().'/img/video_cool.jpg" class="bc_cursor_pointer rounded-circle" alt="video_cool">
                                    </a>
                                    <span class="bc_text_36 bc_line_height_40  bc_text_light bc_color_primary text-uppercase bc_font_alt_1 d-block mt-4"> Cooling Tips </span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="text-center">
                                    <!-- Button trigger modal -->
                                    <a data-toggle="modal" class="" data-target="#basicExampleModalthree">
                                        <img src="'.get_stylesheet_directory_uri().'/img/video_plumb.jpg" class="bc_cursor_pointer rounded-circle" alt="video_plumb" >
                                    </a>
                                    <span class="bc_text_36 bc_line_height_40  bc_text_light bc_color_primary text-uppercase bc_font_alt_1 d-block mt-4">Plumbing Tips </span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="text-center">
                                    <!-- Button trigger modal -->
                                    <a data-toggle="modal" class="" data-target="#basicExampleModalfour">
                                        <img src="'.get_stylesheet_directory_uri().'/img/video_drain.jpg" class="bc_cursor_pointer rounded-circle" alt="video_drain" >
                                    </a>
                                    <span class="bc_text_36 bc_line_height_40  bc_text_light bc_color_primary text-uppercase bc_font_alt_1 d-block mt-4">Drain Cleaning Tips </span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="text-center">
                                    <!-- Button trigger modal -->
                                    <a data-toggle="modal" class="" data-target="#basicExampleModalfive">
                                        <img src="'.get_stylesheet_directory_uri().'/img/video_safety.jpg" class="bc_cursor_pointer rounded-circle" alt="video_safety" >
                                    </a>
                                    <span class="bc_text_36 bc_line_height_40  bc_text_light bc_color_primary text-uppercase bc_font_alt_1 d-block mt-4"> Safety Tips</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="text-center">
                                    <!-- Button trigger modal -->
                                    <a data-toggle="modal" class="" data-target="#basicExampleModalsix">
                                        <img src="'.get_stylesheet_directory_uri().'/img/video_water.jpg" class="bc_cursor_pointer rounded-circle" alt="video_water" >
                                    </a>
                                    <span class="bc_text_36 bc_line_height_40  bc_text_light bc_color_primary text-uppercase bc_font_alt_1 d-block mt-4">Water Heater Tips </span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="text-center">
                                    <!-- Button trigger modal -->
                                    <a data-toggle="modal" class="" data-target="#basicExampleModalseven">
                                        <img src="'.get_stylesheet_directory_uri().'/img/video_healthy.jpg" class="bc_cursor_pointer rounded-circle" alt="video_healthy" >
                                    </a>
                                    <span class="bc_text_36 bc_line_height_40  bc_text_light bc_color_primary text-uppercase bc_font_alt_1 d-block mt-4">Healthy Air & Water Tips </span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="text-center">
                                    <!-- Button trigger modal -->
                                    <a data-toggle="modal" class="" data-target="#basicExampleModaleight">
                                        <img src="'.get_stylesheet_directory_uri().'/img/video_drain.jpg" class="bc_cursor_pointer rounded-circle" alt="video_drain">
                                    </a>
                                    <span class="bc_text_36 bc_line_height_40  bc_text_light bc_color_primary text-uppercase bc_font_alt_1 d-block mt-4">Water & Sewer Line Replacement Tips</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="text-center">
                                    <!-- Button trigger modal -->
                                    <a data-toggle="modal" class="" data-target="#basicExampleModalnine">
                                        <img src="'.get_stylesheet_directory_uri().'/img/video_general.jpg" class="bc_cursor_pointer rounded-circle" alt="video_general">
                                    </a>
                                    <span class="bc_text_36 bc_line_height_40  bc_text_light bc_color_primary text-uppercase bc_font_alt_1 d-block mt-4">General Tips </span>
                                </div>
                            </div>
                        </div>
                        <div class="d-none d-lg-block">
                            <div class="af-swiper-button-next videos-btn-next swiper-button-next d-none d-lg-block" tabindex="0" role="button" aria-label="Next slide"><i class="far fa-chevron-right bc_text_36"></i></div>
                            <div class="af-swiper-button-prev videos-btn-prev swiper-button-prev d-none d-lg-block" tabindex="0" role="button" aria-label="Previous slide"> <i class="far fa-chevron-left bc_text_36"></i></div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination d-md-none videos-pagination"></div>
                    </div>
                    <a href="'.get_home_url().'/video-tips/'.'" class="bc_text_24 btn-mob mt-4 mx-auto d-table bc_font_alt_2 bc_text_normal bc_line_height_50 shadow no_hover_underline bc_color_quinary_hover secondary_color_hover_btn_bg bc_color_secondary_bg rounded-pill bc_color_quinary py-2 px-5">View All HELP Video Tips </a>
                </div>
            </div>
        </div>';
    $output = ob_get_clean();
    return $output;
}
