<div class="container-fluid p-0 pt-5 pb-5 bc_hero_container bc_home_section_bg home_banner d-none d-md-block" style="background-image: url('<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_upload', false);?>'); background-position: bottom;">
    <div class="hero-overlay-gradient pt-5 pb-5">
        <div class="container px-md-4 pt-5 pb-5">
            <div class="row text-center text-lg-center text-md-center pt-md-5 pb-md-5">
                <div class="offset-md-1 col-md-10 col-xs-12 offset-lg-1 col-lg-10 col-sm-12 m-auto pt-md-5 pb-md-5">
                   <span class="pt-md-4 d-block h1 position-relative bottom_line bc_text_68 bc_line_height_52">Lifestyle Driven Advice</span>
                   <p class="px-lg-5 pb-5 pt-4 m-0 mx-auto w-75">It’s not just your money, it’s your life! We believe your money is a means to getting the most out of your life, and work with you to make that a reality.</p>
                </div>
            </div>
        </div>
    </div><!-- .hero-overlay-gradient-->
</div>


<div class="container-fluid p-0 pt-5 pb-5 bc_hero_container bc_home_section_bg home_banner d-md-none d-sm-block" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/banner-graphic-mobile.png');  background-position: bottom;">
    <div class="hero-overlay-gradient pt-5 pb-5">
        <div class="container px-md-4 pt-5 pb-5">
            <div class="row text-center text-lg-center text-md-center pt-md-5 pb-md-5">
                <div class="offset-md-2 col-md-8 col-xs-12 offset-lg-2 col-lg-8 col-sm-12 m-auto pt-md-5 pb-md-5">
                   <span class="pt-md-4 d-block position-relative bottom_line bc_text_40 bc_line_height_44 bc_text_thin bc_color_primary px-5">Lifestyle Driven Advice</span>
                   <p class="pt-4 mt-3 m-0 mx-md-5">It’s not just your money, it’s your life! We believe your money is a means to getting the most out of your life, and work with you to make that a reality.</p>
                </div>
            </div>
        </div>
    </div><!-- .hero-overlay-gradient-->
</div>

<style type="text/css">
.hero-image{background-color:<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_button_color', '#00395e');?>;color:<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_button_text_color', '#ffffff');?>;}

<?php if(bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_overlay_type', 'gradient') == 'gradient'){ ?>
    .hero-overlay-gradient{background: linear-gradient(<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_gradient_rotation', false ,false)."deg"; ?>, rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_gradient_start', false,false);?>), rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_gradient_end',false,false);?>));}
<?php }else if(bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_overlay_type', 'solid') == 'solid'){ ?>
    .hero-overlay-gradient{background: rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_overlay_solid_color', false ,false);?>);}
<?php }?>
</style>