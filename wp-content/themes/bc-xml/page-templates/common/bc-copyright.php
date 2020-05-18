<?php
/**
 * Copyright
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<?php echo bc_get_theme_mod('bc_theme_options', 'footer','copyright_text', '<div class=" container-fluid pb-3 pb-md-0" style="background: #e3e4e9;">
  	<div class="container pb-5 pt-2 py-lg-0 pb-md-0 px-0 text-center text-md-left">
  		 <div class="bc_color_primary bc_sm_text_13 bc_text_16 bc_line_height_50 bc_sm_line_height_18 bc_text_normal bc_font_alt_1 bp-3">
          <span class="bc_color_primary bc_sm_text_13 bc_text_heavy bc_text_16 bc_line_height_50 bc_sm_line_height_18 bc_text_normal bc_font_alt_1"> © </span> '.date("Y").'  XML FINANCIAL GROUP      <span class="d-none d-lg-inline-block"> &nbsp;|&nbsp; </span> <br class="d-lg-none"> </span>
          <span class="d-lg-inline-block bc_color_primary --imp bc_text_16 bc_line_height_50 bc_sm_text_13 bc_sm_line_height_18 bc_text_normal bc_font_alt_1"> WEB DESIGN BY
          <a class="bc_color_primary bc_color_quinary_hover bc_text_normal no_hover_underline text-uppercase" href="https://www.bluecorona.com" target="_blank"><img src="'.get_template_directory_uri().'/img/bc_logo.png">&nbsp;Blue Corona</a> </span>
          <span class="d-inline-block bc_color_primary bc_sm_text_13 bc_text_16 bc_line_height_50 bc_sm_line_height_18 bc_text_normal bc_font_alt_1">  &nbsp;|&nbsp; </span>
          <a class="bc_color_primary bc_color_quinary_hover bc_text_normal no_hover_underline bc_text_16 bc_line_height_50 bc_sm_text_13 bc_sm_line_height_18 bc_text_normal bc_font_alt_1 bc_color_secondary_hover text-uppercase" href="#" data-toggle="modal" data-target="#disclaimer">Disclaimer</a>
       </div>
  	</div>
</div>');?>

<div class="container-fluid p-0 bc_color_primary_bg d-md-none fixed-bottom">
    <div class="container p-0">
        <div class="row no-gutters">
            <div class="col-md-12 text-center">
                <a href="#" data-toggle="modal" data-target="#myModal_mobile" class="px-3 py-3 no_hover_underline bc_font_default bc_text_22 bc_line_height_26 text-white bc_text_light bc_color_primary_hove bc_color_primary_bg d-block"> LET’S TALK</a>
            </div>
        </div>
    </div>
</div>

<div class="h-100 modal fade w-100 p-0" id="myModal_mobile" tabindex="-1" role="dialog" aria-labelledby="disclaimerLabel" aria-hidden="true" style="    overflow-y: inherit !important;">
  <div class="modal-dialog modal-dialog-centered m-0 mh-100 w-100 vw-100 mw-100" role="document" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/img/mobile-pop-bg.jpg'); background-position: right bottom;background-repeat: no-repeat !important;    background-size: cover !important;">
    <div class="modal-content rounded-0 bc_home_section_bg position-relative border-0 h-100 vh-100" style="background:none;">
      <div class="modal-header" style="z-index: 9; ">
        <button type="button" class="close mt-n4 text-white bc_text_36 bc_line_height_50 bc_text_light" data-dismiss="modal" aria-label="Close" style="opacity: 1">
          <i class="fal fa-times bc_color_white"></i>
        </button>
      </div>
      <div class="modal-body p-0 ">
        <div class="">
                    <div class=" col-md-12 col-lg-9 col-sm-12 col-xs-12 offset-lg-2 text-center py-4">
                       <span class="d-block bc_text_36 bc_line_height_36 text-white bc_font_alt_1 text-center bc_text_light text-uppercase">
            lorem ipsum      </span>
                        <div class="entry-content bc_hero_form_body">
                           <?php echo do_shortcode('[gravityform id=15 ajax=true]')?>
                        </div>
                    </div>
                </div>
      </div>
    </div>
  </div>
</div>
