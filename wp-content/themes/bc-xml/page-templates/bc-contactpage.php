<?php
/**
 * Template Name: ContactPage Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header('variant-announcement-bar');?>

<main role="main">
  <?php get_template_part( 'page-templates/common/bc-banner-section' ); ?> 
   <div class="container-fluid py-5 m-0">
     <div class="container">
       <div class="row no-gutters">
         <div class="col-lg-8">
           <div class="row no-gutters">
             <div class="col-lg-12 mb-4 pl-md-4">
                <h1 class="bc_sm_text_48 bc_sm_line_height_48"> let’s talk </h1>
                <p class="bc_sm_text_20 bc_sm_line_height_34 mb-3">Many busy successful people are uncertain about the financial advice they are receiving. We provide lifestyle driven advice on what matters most to you so that you can pursue a life according to your design.</p>
                <h2 class="text-capitalize mt-4 bc_sm_text_36 bc_sm_line_height_36"> Our Offices </h2>
                <p class="bc_sm_text_20 bc_sm_line_height_34"> Three locations to better serve our clients.</p>
             </div>
             <div class="col-md-6 mb-5 pl-md-4">
                <h3> ROCKVILLE, MD </h3>
                <p class="mb-0 bc_sm_text_20 bc_sm_line_height_34"> One Preserve Parkway <br> Suite 120 <br> Rockville, MD 20852 <br></p>
                <p class="bc_text_bold mb-0 bc_sm_text_20 bc_sm_line_height_34">T: 301.770.5234</p>
                <p class="bc_text_bold mb-0 bc_sm_text_20 bc_sm_line_height_34">F: 301.770.4929</p>
                <a href="https://www.google.com/maps/place/XML+Financial+Group/@39.0656663,-77.1508142,17z/data=!3m1!4b1!4m5!3m4!1s0x89b7cd0097273a09:0x38e3cb52aadc4be1!8m2!3d39.0656663!4d-77.1486255" target="_blank" class="bc_text_bold bc_text_20 bc_line_height_34"> MAP > </a>
             </div>
             <div class="col-md-6 text-right  mb-5">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rockville.jpg" class="img-fluid" alt="rockville">
             </div>
             <div class="col-md-6  mb-5 pl-md-4">
                <h3> FALLS CHURCH, VA </h3>
                <p class="mb-0 bc_sm_text_20 bc_sm_line_height_34"> 7600 Leesburg Pike <br> Suite 120 East <br> Falls Church, VA 22043</p>
                <p class="bc_text_bold mb-0 bc_sm_text_20 bc_sm_line_height_34">T:   703.790.5999</p>
                <p class="bc_text_bold mb-0 bc_sm_text_20 bc_sm_line_height_34">or: 703.827.2300</p>
                <p class="bc_text_bold mb-0 bc_sm_text_20 bc_sm_line_height_34">F:   703.749.8588</p>
                <p class="bc_text_bold mb-0 bc_sm_text_20 bc_sm_line_height_34">or: 704.827.2314</p>
                <a href="https://www.google.com/maps/place/7600+Leesburg+Pike+%23120,+Falls+Church,+VA+22043,+USA/data=!4m2!3m1!1s0x89b64ad9b15ed109:0xb7e7a4b2af37d0c7?sa=X&ved=2ahUKEwirhbyonLPpAhVUAXIKHc5oBWcQ8gEwAHoECAsQAQ" target="_blank" class="bc_text_bold bc_text_20 bc_line_height_34"> MAP > </a>
             </div>
             <div class="col-md-6 text-right  mb-5">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fallschurch.jpg" class="img-fluid" alt="rockville">
             </div>
             <div class="col-md-6 mb-5 pl-md-4">
                <h3> BRECKENRIDGE, CO </h3>
                <p class="mb-0 bc_sm_text_20 bc_sm_line_height_34"> 208 S. Ridge Street <br> P.O. Box 3813 <br> Breckenridge, CO 80424 </p>
                <p class="bc_text_bold mb-0 bc_sm_text_20 bc_sm_line_height_34">T: 970.668.5700</p>
                <p class="bc_text_bold mb-0 bc_sm_text_20 bc_sm_line_height_34">F: 970.668.5701</p>
                <a href="https://www.google.com/maps/place/208+S+Ridge+St,+Breckenridge,+CO+80424,+USA/@39.4804752,-106.0453713,18z/data=!4m8!1m2!2m1!1sBRECKENRIDGE,+CO+208+S.+Ridge+Street+P.O.+Box+3813+Breckenridge,!3m4!1s0x876af666f7a1ce47:0x57addaa63eb7f64!8m2!3d39.4804735!4d-106.0444352" target="_blank" class="bc_text_bold bc_text_20 bc_line_height_34"> MAP > </a>
             </div>
             <div class="col-md-6 text-right mb-5">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/xml-colorado-office.jpg" class="img-fluid" alt="rockville">
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   <div class="container-fluid m-0 pb-5">
     <div class="container">
       <div class="row no-gutters">
          <div class="col-lg-12 px-md-4">
            <h2 class="bc_sm_text_36 bc_sm_line_height_36">Contact Us</h2>
            <p class="bc_sm_text_20 bc_sm_line_height_34">Do you have questions? We would love to begin a conversation.</p>
          </div>
          <div class="col-lg-12 text-center">
            <div class="entry-content bc_hero_form_body">
              <?php echo do_shortcode('[gravityform id=25 ajax=true]')?>
            </div>
            <!-- <span class="bc_line_height_64 bc_text_50 bc_font_alt_1 bc_color_brown bc_text_light">Standard Bootstrap <br> Contact Form <br> goes here</span> -->
          </div>
       </div>
     </div>
   </div>
</main>
<?php get_footer();?>
