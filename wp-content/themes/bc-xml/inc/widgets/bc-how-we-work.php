<?php 
/*Custom widget*/
// BC How we work Widget
class bc_how_we_work_widget extends WP_Widget {
	public function __construct() {

		$id = 'bc_how_we_work_widget';
		$title = esc_html__('BC-How we work', 'bc-how-we-work-custom-widget');
		$options = array(
			'classname' => 'bc-service-markup-widget',
			'description' => esc_html__('Add Custom HTML in inputbox', 'bc-how-we-work-custom-widget')
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
 <div class="how_we_work position-relative overflow-hdden bc_color_lightgray_bg text-center px-4 pt-5 pb-4">
   <span></span>
    <?php 
	if ( isset( $instance['title'] ) && !empty($instance['title']) ) {
		echo $args['before_title'] . $instance['title'] . $args['after_title']; 
	}else{
		echo ' <h3 class="position-relative bottom_line bc_color_dark_primary bc_text_normal">how we work</h3>';
	
	}
?>
<?php echo $args['after_widget'];
}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		if ( isset( $new_instance['title'] ) && ! empty( $new_instance['title'] ) ) {
			$instance['title'] = $new_instance['title'];
		}
		return $instance;
	}
	public function form( $instance ) {
		$id = $this->get_field_id( 'title' );
		$for = $this->get_field_id( 'title' );
		$name = $this->get_field_name( 'title' );
		$label = __( 'Title', 'bc-how-we-work-custom-widget' );
		$title = '<h3 class="position-relative bottom_line bc_color_dark_primary bc_text_normal">'.__( 'how we work', 'bc-how-we-work-custom-widget' ).'</h3>';
		
		if ( isset( $instance['title'] ) && ! empty( $instance['title'] ) ) {
			$title = $instance['title'];
		}
		?>
		<p>
			<label for="<?php echo esc_attr( $for ); ?>"><?php echo esc_html( $label ); ?></label>
			<textarea class="widefat" id="<?php echo esc_attr( $id ); ?>" name="<?php echo esc_attr( $name ); ?>"><?php echo esc_textarea( $title ); ?></textarea>

		</p>
<?php }

}
// register widget
function bc_how_we_work() {
	register_widget( 'bc_how_we_work_widget' );
}
add_action( 'widgets_init', 'bc_how_we_work' );
