<?php 
/*Custom widget*/
// BC How we Work Widget
class bc_how_we_work extends WP_Widget {
	public function __construct() {

		$id = 'bc_how_we_work';
		$title = esc_html__('BC How we work', 'bc_how_we_work-custom-widget');
		$options = array(
			'classname' => 'bc_how_we_work-markup-widget',
			'description' => esc_html__('Add Custom HTML in inputbox', 'bc_how_we_work-custom-widget')
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
		echo ' <h3 class="position-relative bottom_line bc_color_dark_primary bc_text_normal">how we work</h3>
		<p class="mt-5 bc_color_dark_primary bc_text_24 bc_text_normal">We’re here to help you make investments that align with your lifestyle.</p>
                      <a href="#" class="btn_primary bc_line_height_26 py-2 px-3 mt-4">learn how</a>';
	
	}
?>
                       
                        
                    </div> 


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
		$label = __( 'Title', 'bc_how_we_work-custom-widget' );
		$title = ' <h3 class="position-relative bottom_line bc_color_dark_primary bc_text_normal">how we work</h3>
		<p class="mt-5 bc_color_dark_primary bc_text_24 bc_text_normal">We’re here to help you make investments that align with your lifestyle.</p>
                      <a href="#" class="btn_primary bc_line_height_26 py-2 px-3 mt-4">learn how</a>

                   ';
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
function bc_how_we_work_register_widgets() {
	register_widget( 'bc_how_we_work' );
}
add_action( 'widgets_init', 'bc_how_we_work_register_widgets' );
