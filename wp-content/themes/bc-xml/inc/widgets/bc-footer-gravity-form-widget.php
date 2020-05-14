<?php 
/*Custom widget*/
// BC Footer Gravity Widget
class BC_FooterGravity_Widget extends WP_Widget {
	public function __construct() {

		$id = 'BC_FooterGravity_widget';
		$title = esc_html__('BC Footer Gravity Form', 'bc-footer-gravity-custom-widget');
		$options = array(
			'classname' => 'bc-footer-gravity-markup-widget col-lg-4 d-none d-lg-block mt-5 mt-md-0',
			'description' => esc_html__('Add Custom HTML in inputbox', 'bc-footer-gravity-custom-widget')
		);
		parent::__construct( $id, $title, $options );
	}
	
	public function widget( $args, $instance ) {?>
    <div class="col-lg-4 d-none d-lg-block mt-5 mt-md-0">
        <span class="d-block bc_text_26 bc_line_height_26 bc_font_default bc_text_light bc_color_primary">
            <?php 
				if ( isset( $instance['title'] ) && !empty($instance['title']) ) {
					echo  $instance['title']; 
				}else{
					echo 'Connect';
				}
			?>
        </span>
        <span class="d-block mt-2 bc_text_18 bc_line_height_60 bc_font_alt_1 bc_text_16 bc_text_light bc_color_primary">Newsletter Signup</span>
        <div class="form">
            <?php echo do_shortcode($instance['footergravityform']);?>
        </div>
    </div>
<?php echo $args['after_widget'];
}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		if ( isset( $new_instance['title'] ) && ! empty( $new_instance['title'] ) ) {
			$instance['title'] = $new_instance['title'];
		}
		if ( isset( $new_instance['footergravityform'] ) && ! empty( $new_instance['footergravityform'] ) ) {
			$instance['footergravityform'] = $new_instance['footergravityform'];
		}
		return $instance;
	}
	public function form( $instance ) {
		$id = $this->get_field_id( 'title' );
		$for = $this->get_field_id( 'title' );
		$name = $this->get_field_name( 'title' );
		$label = __( 'Title', 'bc-service-custom-widget' );
		$title = 'Connect';
		if ( isset( $instance['title'] ) && ! empty( $instance['title'] ) ) {
			$title = $instance['title'];
		}
		?>
		<p>
			<label for="<?php echo esc_attr( $for ); ?>"><?php echo esc_html( $label ); ?></label>
			<textarea class="widefat" id="<?php echo esc_attr( $id ); ?>" name="<?php echo esc_attr( $name ); ?>"><?php echo esc_textarea( $title ); ?></textarea>
		</p>
		<?php 
		$g_id = $this->get_field_id( 'footergravityform' );
		$g_for = $this->get_field_id( 'footergravityform' );
		$g_name = $this->get_field_name( 'footergravityform' );
		$g_label = __( 'Shortcode', 'bc-service-custom-widget' );
		$g_title = '';
		if ( isset( $instance['footergravityform'] ) && ! empty( $instance['footergravityform'] ) ) {
			$g_title = $instance['footergravityform'];
		}?>
		<p>
			<label for="<?php echo esc_attr( $g_for ); ?>"><?php echo esc_html( $g_label ); ?></label>
			<textarea class="widefat" id="<?php echo esc_attr( $g_id ); ?>" name="<?php echo esc_attr( $g_name ); ?>"><?php echo esc_textarea( $g_title ); ?></textarea>
		</p>
<?php }
}
// register widget
function bc_footergravity_register_widgets() {
	register_widget( 'BC_FooterGravity_Widget' );
}
add_action( 'widgets_init', 'bc_footergravity_register_widgets' );
