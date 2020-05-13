<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<!-- Footer -->
<footer class="page-footer font-small blue borde_top_primary ">
    <div class="container-fluid bc_color_info_bg">
    <!-- Include servicearea file here -->
    <?php if ( is_front_page() ) {?>
        <?php //get_template_part( 'page-templates/common/servicearea' ); ?>
    <?php }else{?>
        <!-- <div class="container py-3"></div> -->
    <?php } ?>
    </div>
    <!-- Footer Links -->
    <div class="container-fluid text-md-left p-0 pt-5">
        <div class="container py-3">
            <div class="row no-gutters">
                <div class="col-lg-4 pr-lg-4 mt-5 mt-md-0 text-center text-md-left">
                    <div class="footer_logo position-relative text-center">
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/XML-Logo-footer.jpg" class="img-fluid d-block mx-auto" alt="logo">
                        </a>
                    </div>
                    <span class="bc_text_16 bc_line_height_28 bc_font_alt_1 bc_color_primary d-block mt-5 mb-3">Securities offered through Lara, May & Associates, LLC, Member <span class="
                            bc_color_secondary">FINRA / SIPC </span> Headquartered at 7600 Leesburg Pike, Suite 120 East, Falls Church, VA 22043, 555-555-5555</span>
                    <div class="socil-icon position-relative">
                        <i class="fab fa-facebook-f bc_color_secondary bc_text_19 mr-2"></i>
                        <i class="fab fa-twitter bc_color_secondary bc_text_19 mr-2"></i>
                        <i class="fab fa-linkedin-in bc_color_secondary bc_text_19"></i>
                    </div>
                </div>
                <div class="col-lg-2 text-center text-md-left mt-5 mt-md-0">
                    <span class="bc_text_26 bc_line_height_26 bc_font_default bc_text_light bc_color_primary">Locations</span>
                    <span class="bc_sm_line_height_50">
                        <span class="d-block bc_text_18 bc_line_height_40 bc_sm_line_height_50 bc_font_alt_1 bc_text_light bc_color_secondary mt-3 text-uppercase">Rockville, MD</span>
                        <a href="#" class="d-block bc_text_18 bc_line_height_20 bc_font_alt_1 bc_text_light bc_color_primary bc_color_primary_hover mb-1"> T: 555-555-5555</a>
                        <a href="#" class="d-block bc_text_18 bc_line_height_20 bc_font_alt_1 bc_text_light bc_color_primary bc_color_primary_hover mb-1">F: 555-555-5555</a>
                        <span class="d-block bc_text_18 bc_line_height_40 bc_sm_line_height_50 bc_font_alt_1 bc_text_light bc_color_secondary mt-3 text-uppercase"> Falls Church, VA </span>
                        <a href="#" class="d-block bc_text_18 bc_line_height_20 bc_font_alt_1 bc_text_light bc_color_primary bc_color_primary_hover mb-1"> T: 555-555-5555</a>
                        <a href="#" class="d-block bc_text_18 bc_line_height_20 bc_font_alt_1 bc_text_light bc_color_primary bc_color_primary_hover mb-1"> LMA: 555-555-5555</a>
                        <a href="#" class="d-block bc_text_18 bc_line_height_20 bc_font_alt_1 bc_text_light bc_color_primary bc_color_primary_hover mb-1">F: 555-555-5555</a>
                        <a href="#" class="d-block bc_text_18 bc_line_height_20 bc_font_alt_1 bc_text_light bc_color_primary bc_color_primary_hover mb-1"> LMA: 555-555-5555</a>
                        <span class="d-block bc_text_18 bc_line_height_40 bc_font_alt_1 bc_text_light bc_color_secondary mt-3 text-uppercase bc_sm_line_height_50"> Breckenridge, CO</span>
                        <a href="#" class="d-block bc_text_18 bc_line_height_20 bc_font_alt_1 bc_text_light bc_color_primary bc_color_primary_hover mb-1"> T: 555-555-5555</a>
                        <a href="#" class="d-block bc_text_18 bc_line_height_20 bc_font_alt_1 bc_text_light bc_color_primary bc_color_primary_hover mb-1"> F: 555-555-5555</a>
                    </span>
                </div>
                <div class="col-lg-2 d-none d-lg-block pl-lg-2 mt-5 mt-md-0">
                    <span class="d-block bc_text_26 bc_line_height_26 bc_font_default bc_text_light bc_color_primary">Company</span>
                    <a href="#" class="d-block bc_text_16 bc_line_height_40 bc_font_alt_1 bc_text_light bc_color_primary bc_color_primary_hover mt-3"> Team </a>
                    <a href="#" class="d-block bc_text_16 bc_line_height_40 bc_font_alt_1 bc_text_light bc_color_primary bc_color_primary_hover"> Beliefs</a>
                    <a href="#" class="d-block bc_text_16 bc_line_height_40 bc_font_alt_1 bc_text_light bc_color_primary bc_color_primary_hover"> Communities</a>
                    <a href="#" class="d-block bc_text_16 bc_line_height_40 bc_font_alt_1 bc_text_light bc_color_primary bc_color_primary_hover"> Resources</a>
                    <a href="#" class="d-block bc_text_16 bc_line_height_40 bc_font_alt_1 bc_text_light bc_color_primary bc_color_primary_hover"> Let’s Talk</a>
                    <a href="#" class="d-block bc_text_16 bc_line_height_40 bc_font_alt_1 bc_text_light bc_color_primary bc_color_primary_hover"> Portfolio Logins</a>
                    <a href="#" class="d-block bc_text_16 bc_line_height_40 bc_font_alt_1 bc_text_light bc_color_primary bc_color_primary_hover"> Broker Check</a>
                </div>
                <div class="col-lg-2 mt-4 d-md-none text-center mt-5 mt-md-0">
                    <span class="d-block bc_text_26 bc_line_height_26 bc_font_default bc_text_light bc_color_primary">Logins</span>
                    <a href="#" class="d-block bc_text_16 bc_line_height_26 bc_font_alt_1 bc_text_light bc_color_primary bc_color_primary_hover mt-3"> Broker Check </a>
                    <a href="#" class="d-block bc_text_16 bc_line_height_26 bc_font_alt_1 bc_text_light bc_color_primary bc_color_primary_hover"> Fidelity</a>
                    <a href="#" class="d-block bc_text_16 bc_line_height_26 bc_font_alt_1 bc_text_light bc_color_primary bc_color_primary_hover"> XML Vault</a>
                    <a href="#" class="d-block bc_text_16 bc_line_height_26 bc_font_alt_1 bc_text_light bc_color_primary bc_color_primary_hover"> First Clearing</a>
                    <a href="#" class="d-block bc_text_16 bc_line_height_26 bc_font_alt_1 bc_text_light bc_color_primary bc_color_primary_hover"> Wealth Portal</a>
                </div>
                <div class="col-lg-4 d-none d-lg-block mt-5 mt-md-0">
                    <span class="d-block bc_text_26 bc_line_height_26 bc_font_default bc_text_light bc_color_primary">Connect</span>
                    <span class="d-block mt-2 bc_text_18 bc_line_height_60 bc_font_alt_1 bc_text_16 bc_text_light bc_color_primary">Newsletter Signup</span>
                    <div class="form">
                        <?php echo do_shortcode('[gravityform id=16 ajax=true]')?>
                    </div>
                </div>
                <div class="col-lg-12 border-top text-md-left pt-2 mt-5 text-center px-0 light_text ">
                    <span class="bc_text_18 bc_line_height_30 bc_color_brown bc_font_alt_1 bc_text_normal bc_sm_text_12_5 bc_sm_line_height_24 d-block">
                        <a href="#" class="bc_color_brown bc_text_normal bc_color_brown_hover">Terms of Use</a> <span class="bc_color_brown bc_text_normal">|</span> <a href="#" class="bc_color_brown bc_text_normal bc_color_brown_hover">Privacy Policy</a>   <span class="bc_color_brown bc_text_normal">|</span>   <a href="#" class="bc_color_brown bc_text_normal bc_color_brown_hover">ADV Part 2A </a>  <span class="d-md-inline-block d-none bc_color_brown bc_text_normal"> |</span>   <span class="d-block d-lg-inline-block"> <a href="#" class="bc_color_brown bc_text_normal bc_color_brown_hover"> Form CRS </a>   <span class="bc_color_brown bc_text_normal">|</span>  <a href="#" class="bc_color_brown bc_text_normal bc_color_brown_hover"> WRAP Brochure </a>  <span class="d-md-inline-block d-none bc_color_brown bc_text_normal"> |</span>   <a href="#" class="bc_color_brown bc_text_normal bc_color_brown_hover d-none d-md-inline-block"> Important Notices</a></span>
                        <span class="d-block">
                            <a href="#" class="bc_color_brown bc_text_normal bc_color_brown_hover d-inline-block d-md-none"> Important Notices</a> <span class="bc_color_brown bc_text_normal d-inline-block d-md-none">|</span> <a href="#" class="bc_color_brown bc_text_normal bc_color_brown_hover"> Business Continuity  </a> <span class="bc_color_brown bc_text_normal">|</span> <a href="#" class="bc_color_brown bc_text_normal bc_color_brown_hover">  XML Securities  </a>
                        </span>
                    </span>
                </div>
            </div>
        </div>
        <?php get_template_part( 'page-templates/common/bc-copyright' ); ?>
    </div>
</footer>

<div class="modal fade" id="disclaimer" tabindex="-1" role="dialog" aria-labelledby="disclaimerLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content rounded-0">
      <div class="modal-header">
        <button type="button" class="close bc_color_secondary_hover_bg" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fal fa-times fa-2x"></i></span>
        </button>
      </div>
      <div class="modal-body px-5 pb-5 col-md-10 offset-1">
        <div id="disclaimerLabel" class="bc_color_black h1">Disclaimer</div>
            <p class="bc_color_black">The information on this website is for informational purposes only; it is deemed accurate but not guaranteed. It does not constitute professional advice. All information is subject to change at any time without notice. <a class="text-danger bc_text_bold" href="<?php echo get_site_url()?>/contact-us" target="_blank">Contact us</a> for complete details.</p>
      </div>
    </div>
  </div>
</div>
<?php wp_footer(); ?>
</body>
</html>