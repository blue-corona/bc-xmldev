<?php 
global $template; 
$page_template = basename($template); 
?>
<div class="container-fluid px-0 m-0 <?php if( $page_template == 'bc-communitiespage.php') { echo 'bc_color_light_bg'; }?> <?php if(is_home() || is_front_page()) { echo 'bc_color_light_bg'; } ?>">
    <div class="graphic_lines pb-5">
      <div class="container">
          <div class="row no-gutters py-lg-5">
              <div class="col-lg-10 px-lg-4 offset-lg-1 text-center  py-lg-5">
                  <h2 class="position-relative bc_text_36 bc_line_height_36 mt-5 bc_font_default bc_text_thin text-white bottom_line1 d-block px-xl-0 px-lg-5 mx-xl-4 mx-lg-5 bc_sm_text_32 bc_sm_line_height_32 pt-lg-5">Wondering if there might be something more you and your money could do?</h2>
                  <p class="bc_text_20 bc_line_height_34 bc_font_alt_1 bc_text_light text-white d-block mt-4 pt-1 px-xl-0 px-lg-5 mx-xl-4 mx-lg-5 bc_sm_text_18 bc_sm_line_height_30">There are several different ways to connect with us. Chose whichever you are most comfortable with. </p>
                  <a href="<?php echo get_home_url();?>/contact/" class="btn_secondary bc_line_height_26 px-4 py-2 mt-4">let’s talk </a>
              </div>
          </div>
      </div>
    </div>
</div>
