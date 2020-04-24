<div class="d-lg-none show-on-touch">
    <div class="container-fluid m-0 px-0">
        <div class="container p-0">
            <div class="row no-gutters">
                <div class=" col-8 mr-0 p-2">
                	<a href="<?php echo get_home_url();?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mobile-logo.png" class="img-fluid bc_branding_logo" alt="logo">
                	</a>
                </div>
                <div class=" col-2 pl-0 text-center m-auto">
                	<button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="pl-0 navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
                        <em class="fa fa-bars navbar-toggler-icon"></em>
                    </button>
                </div>
                <div class="col-2 bc_color_primary_bg text-center pt-3">
                    <i class="fas fa-phone text-white bc_text_24 bc_line_height_24"></i>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part( 'page-templates/common/bc-nav-menu' ); ?>
    <!-- <div class="container-fluid">
        <div class="row">
            <div class="col-6 m-0 p-0">
                <button class="btn rounded-0 w-100 py-3 bc_color_tertiary_bg bc_color_secondary_hover bc_color_secondary bc_branding_btn_1" >
                    <i class="fa fa-calendar-plus-o " style="font-size:1em" aria-hidden="true"></i>&nbsp;Schedule Service
                </button>
            </div>
            <div class="col-6 m-0 p-0">
                <button class="btn rounded-0 w-100 py-3 bc_color_info_bg bc_color_secondary bc_color_secondary_hover bc_branding_btn_2">
                    <i aria-hidden="true" class="fa fa-mobile" style="font-size:1.2em"></i>&nbsp; <span class="d-none hide-on-touch d-lg-block">Call:</span> <strong><?php //echo bc_get_theme_mod('bc_theme_options', 'bc_phone',false, '(555) 555-5555');?></strong>
                </button>
            </div>
        </div>
    </div> -->
</div>
<script type="text/javascript">
    jQuery('#navbarSupportedContent').on('hidden.bs.collapse', function () {
        toggleIcon();        
    })
    jQuery('#navbarSupportedContent').on('show.bs.collapse', function () {
        toggleIcon();
    })
    function toggleIcon(){
        jQuery(".navbar-toggler-icon").toggleClass('fa-bars');
        jQuery(".navbar-toggler-icon").toggleClass('fa-times');
    }
</script>