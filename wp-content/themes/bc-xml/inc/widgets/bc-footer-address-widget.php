<?php 
/*Custom widget*/
// BC Footer Address Widget
class BC_Footer_Address_Widget extends WP_Widget {
    public function __construct() {

        $id = 'BC_Footer_Address_widget';
        $title = esc_html__('BC Footer Identity', 'bc-footer-location-custom-widget');
        $options = array(
            'classname' => 'bc-footer-address-markup-widget col-lg-4 col-md-6 pr-lg-4 mt-5 mt-md-0 text-center text-md-left',
            'description' => esc_html__('Add Custom HTML in inputbox', 'bc-footer-address-custom-widget')
        );
        parent::__construct( $id, $title, $options );
    }
    
    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        ?>
        <div class="footer_logo position-relative text-md-left text-center">
            <a href="<?php echo get_home_url();?>" class="mt-n4 d-block">
                <img src="<?php echo get_stylesheet_directory_uri().'/img/XML-Logo-footer.jpg';?>" class="bc_branding_logo img-fluid mt-n2" alt="logo" srcset="<?php echo get_stylesheet_directory_uri().'/img/xml-Logo-footer-2x.png';?> 2x, <?php echo get_stylesheet_directory_uri().'/img/xml-Logo-footer-3x.png';?> 3x">
                <!-- <img src="<?php //echo get_stylesheet_directory_uri(); ?>/img/XML-Logo-footer.jpg" class="img-fluid d-block mx-auto" alt="logo"> -->
            </a>
        </div>
        <span class="bc_text_16 bc_line_height_28 bc_font_alt_1 bc_color_primary d-block mt-5 mb-3">
            <?php echo bc_get_theme_mod('bc_theme_options', 'bc_address',false, 'Securities offered through XML Securities, LLC, Member 
            <a href="https://www.finra.org" class="bc_color_secondary no_hover_underline" target="_blank">FINRA / </a>
             <a href="https://www.sipc.org" class="bc_color_secondary no_hover_underline" target="_blank">SIPC </a> Headquartered at 7600 Leesburg Pike, Suite 120 East, Falls Church, VA 22043, '.do_shortcode('[site_info_phone_number]').' ');?>
        </span>
        <?php echo do_shortcode('[social-icons]');?>
    <?php echo $args['after_widget'];
    }
}
// register widget
function bc_footer_address_register_widgets() {
    register_widget( 'BC_Footer_Address_Widget' );
}
add_action( 'widgets_init', 'bc_footer_address_register_widgets' );
?>
