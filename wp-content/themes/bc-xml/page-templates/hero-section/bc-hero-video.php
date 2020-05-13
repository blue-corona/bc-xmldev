<div class="container-fluid p-0 pt-5 pb-5 bc_hero_container bc_home_section_bg home_banner d-none d-md-block" style="position:relative;">
    <iframe width="100%" height="100%" class="position-absolute" src="<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_video', 'bc_video_url', false);?>"  frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <div class="hero-overlay-gradient-video pt-5 pb-5"></div>
    <div class="container px-md-4 pt-5 pb-5">
            <div class="row text-center text-lg-center text-md-center pt-md-5 pb-md-5">
                <div class="offset-md-1 col-md-10 col-xs-12 offset-lg-1 col-lg-10 col-sm-12 m-auto pt-md-5 pb-md-5">
               
                <?php echo bc_get_theme_mod('bc_theme_home_options', 'background_video', 'bc_video_overlay_text', ' <span class="pt-md-4 d-block h1 position-relative bottom_line bc_text_68 bc_line_height_52">Lifestyle Driven Advice</span>
                        
                   
                    <p class="px-lg-5 pb-5 pt-4 m-0 mx-auto w-75">It’s not just your money, it’s your life! We believe your money is a means to getting the most out of your life, and work with you to make that a reality.</p>');?>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
<?php if(bc_get_theme_mod('bc_theme_home_options', 'background_video', 'bc_video_overlay_type', 'gradient') == 'gradient'){ ?>
    .hero-overlay-gradient-video{background: linear-gradient(<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_video', 'bc_video_gradient_rotation', false ,false)."deg"; ?>, rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_video', 'bc_video_gradient_start', false,false);?>), rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_video', 'bc_video_gradient_end',false,false);?>));height: 100%; pointer-events: none; position:absolute; top:0; width: 100%}

<?php }else if(bc_get_theme_mod('bc_theme_home_options', 'background_video', 'bc_video_overlay_type', 'solid') == 'solid'){ ?>
    .hero-overlay-gradient-video{background: rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_video', 'bc_video_overlay_color', false ,false);?>);height: 100%; pointer-events: none; position:absolute; top:0; width: 100%}
<?php }?>
.hero-video{background-color:<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_video', 'bc_video_button_color', '#00395e');?>;color:<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_video', 'bc_video_button_text_color', '#ffffff');?>;}
</style>
