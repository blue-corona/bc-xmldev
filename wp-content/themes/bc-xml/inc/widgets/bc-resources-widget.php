<?php 
/*Custom widget*/
// BC How we Work Widget
class bc_resources extends WP_Widget {
	public function __construct() {

		$id = 'bc_resources';
		$title = esc_html__('BC Resources', 'bc_resources-custom-widget');
		$options = array(
			'classname' => 'bc_resources-markup-widget',
			'description' => esc_html__('Add Custom HTML in inputbox', 'bc_resources-custom-widget')
		);
		parent::__construct( $id, $title, $options );
	}
	
	function addSwiperInitServiceJsToFooter($instance){
			echo "
			<script>
			var servicesSwiper".$instance." = new Swiper('#".$instance."', {
			    pagination: true,
			    loop:true,
			    navigation: {
			        nextEl: '.bc_services_swiper_next',
			        prevEl: '.bc_services_swiper_prev',
			    },
			});
			</script>
			";
	}

	public function widget( $args, $instance ) {
		//Add JS for widget to footer
		$widgetInstance = $this->id;
		add_action('wp_footer', function() use ( $widgetInstance ) { 
        $this->addSwiperInitServiceJsToFooter( $widgetInstance ); });
	?>

<div class="resources px-4 py-5 mt-5 text-center">
	<?php 
	if ( isset( $instance['title'] ) && !empty($instance['title']) ) {
		echo $args['before_title'] . $instance['title'] . $args['after_title']; 
	}else{
	echo '<h3 class="position-relative bottom_line text-uppercase bc_text_normal">resources</h3>';
	}
	?>
	<p class="mt-5 bc_color_dark_primary bc_text_24 bc_text_normal"><?php echo $instance['text_description'];?></p>
	<a href="<?php echo get_home_url();?>" class="btn_primary bc_line_height_26 px-3 py-2 mt-3">learn how</a>
</div>

<?php echo $args['after_widget'];
}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		if ( isset( $new_instance['title'] ) && ! empty( $new_instance['title'] ) ) {
			$instance['title'] = $new_instance['title'];
		}

		if ( isset( $new_instance['text_description'] ) && ! empty( $new_instance['text_description'] ) ) {
			$instance['text_description'] = $new_instance['text_description'];
		}
		return $instance;
	}
	public function form( $instance ) {
		$id = $this->get_field_id( 'title' );
		$for = $this->get_field_id( 'title' );
		$name = $this->get_field_name( 'title' );
		$label = __( 'Title', 'bc_resources-custom-widget' );
		$title = '<h3 class="position-relative bottom_line text-uppercase bc_text_normal">resources</h3>';
		if ( isset( $instance['title'] ) && ! empty( $instance['title'] ) ) {
			$title = $instance['title'];
		}
		?>
		<p>
			<label for="<?php echo esc_attr( $for ); ?>"><?php echo esc_html( $label ); ?></label>
			<textarea class="widefat" id="<?php echo esc_attr( $id ); ?>" name="<?php echo esc_attr( $name ); ?>"><?php echo esc_textarea( $title ); ?></textarea>
		</p>

		<?php 
		$desc_id = $this->get_field_id( 'text_description' );
		$desc_for = $this->get_field_id( 'text_description' );
		$desc_name = $this->get_field_name( 'text_description' );
		$desc_label = __( 'Description', 'bc-text_description-custom-widget' );
		$desc_title = '';
		if ( isset( $instance['text_description'] ) && ! empty( $instance['text_description'] ) ) {
			$desc_title = $instance['text_description'];
		}?>
		<p>
			<label for="<?php echo esc_attr( $desc_for ); ?>"><?php echo esc_html( $desc_label ); ?></label>
			<textarea class="widefat" id="<?php echo esc_attr( $desc_id ); ?>" name="<?php echo esc_attr( $desc_name ); ?>"><?php echo esc_textarea( $desc_title ); ?></textarea>
		</p>
<?php }
}
// register widget
function bc_resources_register_widgets() {
	register_widget( 'bc_resources' );
}
add_action( 'widgets_init', 'bc_resources_register_widgets' );
