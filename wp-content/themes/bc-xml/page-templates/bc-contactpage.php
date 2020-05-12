<?php
/**
 * Template Name: ContactPage Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header('variant-announcement-bar');?>

<main role="main">
  <div class="container-fluid px-0 m-0 subpage_banner">
        <div class="row no-gutters">
            <div class="col-12">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/contact-banner.jpg" class="img-fluid w-100" alt="Contact-banner">
                <div class="gradient position-absolute"></div>
            </div>
        </div>
    </div>
   <div class="container-fluid m-0 py-5">
     <div class="container">
       <div class="row no-gutters">
         <div class="col-lg-8">
           <div class="row no-gutters">
             <div class="col-lg-12 mb-4 pl-md-4">
                <h1 class="bc_sm_text_48 bc_sm_line_height_48"> let’s talk </h1>
                <h2 class="text-capitalize mt-4 bc_sm_text_36 bc_sm_line_height_36"> Our Offices </h2>
                <p class="bc_sm_text_20 bc_sm_line_height_34"> Three locations to better serve our clients </p>
             </div>
             <div class="col-md-6 mb-5 pl-md-4">
                <h3> ROCKVILLE, MD </h3>
                <p class="mb-0 bc_sm_text_20 bc_sm_line_height_34"> One Preserve Parkway <br> Suite 120 <br> Rockville, MD 20852 <br></p>
                <p class="bc_text_bold mb-0 bc_sm_text_20 bc_sm_line_height_34">T: 555-555-5555</p>
                <p class="bc_text_bold mb-0 bc_sm_text_20 bc_sm_line_height_34">F: 555-555-5555</p>
                <a href="#" class="bc_text_bold bc_text_20 bc_line_height_34"> MAP > </a>
             </div>
             <div class="col-md-6 text-right  mb-5">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rockville.jpg" class="img-fluid" alt="rockville">
             </div>
             <div class="col-md-6  mb-5 pl-md-4">
                <h3> FALLS CHURCH, VA </h3>
                <p class="mb-0 bc_sm_text_20 bc_sm_line_height_34"> 7600 Leesburg Pike <br> Suite 120 East <br> Falls Church, VA 22043</p>
                <p class="bc_text_bold mb-0 bc_sm_text_20 bc_sm_line_height_34">T: 555-555-5555</p>
                <p class="bc_text_bold mb-0 bc_sm_text_20 bc_sm_line_height_34">F: 555-555-5555</p>
                <a href="#" class="bc_text_bold bc_text_20 bc_line_height_34"> MAP > </a>
             </div>
             <div class="col-md-6 text-right  mb-5">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fallschurch.jpg" class="img-fluid" alt="rockville">
             </div>
             <div class="col-md-6 mb-5 pl-md-4">
                <h3> BRECKENRIDGE, CO </h3>
                <p class="mb-0 bc_sm_text_20 bc_sm_line_height_34"> 208 S. Ridge Street <br> P.O. Box 3813 <br> Breckenridge, CO 80424 </p>
                <p class="bc_text_bold mb-0 bc_sm_text_20 bc_sm_line_height_34">T: 555-555-5555</p>
                <p class="bc_text_bold mb-0 bc_sm_text_20 bc_sm_line_height_34">F: 555-555-5555</p>
                <a href="#" class="bc_text_bold bc_text_20 bc_line_height_34"> MAP > </a>
             </div>
             <div class="col-md-6 text-right mb-5">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/breckenridge.jpg" class="img-fluid" alt="rockville">
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
            <h2>Contact Us</h2>
            <p>Do you have questions? We would love to begin a conversation.</p>
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
