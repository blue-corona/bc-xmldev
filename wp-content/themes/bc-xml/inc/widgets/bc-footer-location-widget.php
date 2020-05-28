<?php 
/*Custom widget*/
// BC Footer Location Widget
class BC_Footer_Location_Widget extends WP_Widget {
    public function __construct() {

        $id = 'BC_Footer_Location_widget';
        $title = esc_html__('BC Footer Location', 'bc-footer-location-custom-widget');
        $options = array(
            'classname' => 'bc-footer-location-markup-widget col-lg-2 col-md-6 text-center text-md-left mt-5 mt-md-0 position-relative footer_locations mb-md-5 mb-lg-0',
            'description' => esc_html__('Add Custom HTML in inputbox', 'bc-footer-location-custom-widget')
        );
        parent::__construct( $id, $title, $options );
    }
    
    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        ?>

        <span class="bc_text_26 bc_line_height_26 bc_font_default bc_text_light bc_color_primary">Locations</span>
        <span class="bc_sm_line_height_50">
            <span class="d-block bc_text_18 bc_line_height_40 bc_sm_line_height_50 bc_font_alt_1 bc_text_light bc_color_secondary mt-md-1 mt-3 text-uppercase">Rockville, MD</span>
            <a href="tel:555-555-5555" class="d-block bc_text_18 bc_line_height_24 bc_font_alt_1 bc_text_light bc_color_primary bc_color_primary_hover mb-3 mb-md-1 no_hover_underline"> T: 555-555-5555</a>
            <a href="tel:555-555-5555" class="d-block bc_text_18 bc_line_height_24 bc_font_alt_1 bc_text_light bc_color_primary bc_color_primary_hover mb-3 mb-md-1 no_hover_underline">F: 555-555-5555</a>
            <span class="d-block bc_text_18 bc_line_height_40 bc_sm_line_height_50 bc_font_alt_1 bc_text_light bc_color_secondary mt-3 text-uppercase"> Falls Church, VA </span>
            <a href="tel:555-555-5555" class="d-block bc_text_18 bc_line_height_24 bc_font_alt_1 bc_text_light bc_color_primary bc_color_primary_hover mb-3 mb-md-1 no_hover_underline"> T: 555-555-5555</a>
            <a href="tel:555-555-5555" class="d-block bc_text_18 bc_line_height_24 bc_font_alt_1 bc_text_light bc_color_primary bc_color_primary_hover mb-3 mb-md-1 no_hover_underline"> LMA: 555-555-5555</a>
            <a href="tel:555-555-5555" class="d-block bc_text_18 bc_line_height_24 bc_font_alt_1 bc_text_light bc_color_primary bc_color_primary_hover mb-3 mb-md-1 no_hover_underline">F: 555-555-5555</a>
            <a href="tel:555-555-5555" class="d-block bc_text_18 bc_line_height_24 bc_font_alt_1 bc_text_light bc_color_primary bc_color_primary_hover mb-3 mb-md-1 no_hover_underline"> LMA: 555-555-5555</a>
            <span class="d-block bc_text_18 bc_line_height_40 bc_font_alt_1 bc_text_light bc_color_secondary mt-3 text-uppercase bc_sm_line_height_50"> Breckenridge, CO</span>
            <a href="tel:555-555-5555" class="d-block bc_text_18 bc_line_height_24 bc_font_alt_1 bc_text_light bc_color_primary bc_color_primary_hover mb-3 mb-md-1 no_hover_underline"> T: 555-555-5555</a>
            <a href="tel:555-555-5555" class="d-block bc_text_18 bc_line_height_24 bc_font_alt_1 bc_text_light bc_color_primary bc_color_primary_hover mb-3 mb-md-1 no_hover_underline"> F: 555-555-5555</a>
        </span>
   
    <?php echo $args['after_widget'];
    }
}
// register widget
function bc_footer_location_register_widgets() {
    register_widget( 'BC_Footer_Location_Widget' );
}
add_action( 'widgets_init', 'bc_footer_location_register_widgets' );
?>
