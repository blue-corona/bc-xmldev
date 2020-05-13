 <div class="swiper-container bc_hero_swiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="container-fluid p-0 pt-5 pb-5 bc_hero_container bc_home_section_bg home_banner d-none d-md-block" style="background-image: url('<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_slider_image_one', false);?>')">
                <div class="hero-overlay-gradient-one pt-5 pb-5">
                  <div class="container px-md-4 pt-5 pb-5">
                    <div class="row text-center text-lg-center text-md-center pt-md-5 pb-md-5">
                        <div class="offset-md-1 col-md-10 col-xs-12 offset-lg-1 col-lg-10 col-sm-12 m-auto pt-md-5 pb-md-5">
                            <?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_overlay_text_one', ' <span class="pt-md-4 d-block h1 position-relative bottom_line bc_text_68 bc_line_height_52">Lifestyle Driven Advice</span>


                            <p class="px-lg-5 pb-5 pt-4 m-0 mx-auto w-75">It’s not just your money, it’s your life! We believe your money is a means to getting the most out of your life, and work with you to make that a reality.</p>');?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-slide">
        <div class="container-fluid p-0 pt-5 pb-5 bc_hero_container bc_home_section_bg home_banner d-none d-md-block" style="background-image: url('<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_slider_image_two', false);?>')">
            <div class="hero-overlay-gradient-two pt-5 pb-5">
              <div class="container px-md-4 pt-5 pb-5">
                <div class="row text-center text-lg-center text-md-center pt-md-5 pb-md-5">
                    <div class="offset-md-1 col-md-10 col-xs-12 offset-lg-1 col-lg-10 col-sm-12 m-auto pt-md-5 pb-md-5">
                        <?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_overlay_text_two', ' <span class="pt-md-4 d-block h1 position-relative bottom_line bc_text_68 bc_line_height_52">Lifestyle Driven Advice</span>


                        <p class="px-lg-5 pb-5 pt-4 m-0 mx-auto w-75">It’s not just your money, it’s your life! We believe your money is a means to getting the most out of your life, and work with you to make that a reality.</p>');?>

                    </div>

                </div>
            </div>                 
        </div>
    </div>
</div>
<div class="swiper-slide">
    <div class="container-fluid p-0 pt-5 pb-5 bc_hero_container bc_home_section_bg home_banner d-none d-md-block" style="background-image: url('<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_slider_image_three', false);?>')">
        <div class="hero-overlay-gradient-three pt-5 pb-5">
            <div class="container px-lg-4 pt-4">
                <div class="container px-md-4 pt-5 pb-5">
                <div class="row text-center text-lg-center text-md-center pt-md-5 pb-md-5">
                    <div class="offset-md-1 col-md-10 col-xs-12 offset-lg-1 col-lg-10 col-sm-12 m-auto pt-md-5 pb-md-5">
                            <?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_overlay_text_three', '<span class="bc_text_bold bc_font_alt_1 bc_line_height_64 bc_color_white bc_text_45 bc_text_shadow text-uppercase text-center d-block">We make your</span>
                                <span class="bc_text_bold bc_font_alt_1 bc_line_height_64 bc_color_quinary d-block bc_text_45 bc_text_shadow_second text-uppercase text-center mt-n3 ">home work</span>
                                <p class="text-center bc_font_alt_1 bc_color_white bc_text_shadow bc_text_xbold bc_line_height_28 bc_text_24 mt-4 d-none d-md-block">On call 24/7 for all your <br> HVAC, air conditioning, <br> and plumbing needs.</p>');?>
                            </div>
                        </div>  
                 </div>
             </div>
         </div>
     </div>
 </div>
</div>
<div class="swiper-paginations text-center position-absolute bc_hero_swiper_pagination" style="z-index:1;"></div>
</div>
<?php function heroSwiperJs() {?>
    <script>
        var bcHeroSwiper = new Swiper('.bc_hero_swiper', {
          pagination: {
            el: '.bc_hero_swiper_pagination',
            clickable:true,
        },
        autoHeight: true, 
        <?php if (bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_auto_rotate_slide_one', 'enabled') == 'enabled') { ?>
            autoplay: {
                delay: <?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_slider_rotation_time_one', 25000);?>,
                disableOnInteraction: true,
            },
        <?php } else { ?>
            autoplay:false,

        <?php } ?>
    });
</script>
<?php }  add_action( 'wp_footer' , 'heroSwiperJs' );?>


<style type="text/css">
    /*First Slider Properties*/
    .hero-slide-one{background-color:<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_button_color_one', '#00395e');?>;color:<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_button_text_color_one', '#ffffff');?>;}
    .hero-slide-two{background-color:<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_button_color_two', '#00395e');?>;color:<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_button_text_color_two', '#ffffff');?>;}
    .hero-slide-three{background-color:<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_button_color_three', '#00395e');?>;color:<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_button_text_color_three', '#ffffff');?>;}

    <?php if(bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_overlay_type_one', 'gradient') == 'gradient'){ ?>
        .hero-overlay-gradient-one{background: linear-gradient(<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_gradient_rotation_one', false ,false)."deg"; ?>, rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_gradient_start_one', false,false);?>), rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_gradient_end_one',false,false);?>));}

    <?php }else if(bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_overlay_type_one', 'solid') == 'solid'){ ?>
        .hero-overlay-gradient-one{background: rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_overlay_solid_color_one', false ,false);?>);}
    <?php }?>
    /*Second Slider Properties*/
    <?php if(bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_overlay_type_two', 'gradient') == 'gradient'){ ?>
        .hero-overlay-gradient-two{background: linear-gradient(<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_gradient_rotation_two', false ,false)."deg"; ?>, rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_gradient_start_two', false,false);?>), rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_gradient_end_two',false,false);?>));}
    <?php }else if(bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_overlay_type_two', 'solid') == 'solid'){ ?>
        .hero-overlay-gradient-two{background: rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_overlay_solid_color_two', false ,false);?>);}
    <?php }?>
    /*Third Slider Properties*/
    <?php if(bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_overlay_type_three', 'gradient') == 'gradient'){ ?>
        .hero-overlay-gradient-three{background: linear-gradient(<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_gradient_rotation_three', false ,false)."deg"; ?>, rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_gradient_start_three', false,false);?>), rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_gradient_end_three',false,false);?>));}
    <?php }else if(bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_overlay_type_three', 'solid') == 'solid'){ ?>
        .hero-overlay-gradient-three{background: rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_overlay_solid_color_three', false ,false);?>);}
    <?php }?>
</style>
