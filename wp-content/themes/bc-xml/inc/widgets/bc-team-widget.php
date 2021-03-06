<?php 

// BC teams Widget
class BC_teams_Widget extends WP_Widget {
	public function __construct() {
		$id = 'BC_teams_widget';
		$title = esc_html__('BC teams', 'bc-teams-custom-widget');
		$options = array(
			'classname' => 'bc-teams-markup-widget',
			'description' => esc_html__('Add Custom HTML in inputbox', 'bc-teams-custom-widget')
		);
		parent::__construct( $id, $title, $options );
	}

	function addSwiperInitteamsJsToFooter($instance){
	echo "<script>var swiperteams = new Swiper('#".$instance."', {
      slidesPerView: 1,
      loop: true,
      speed: 400,
      autoplay: true,
	  paginationClickable: false,
	  navigation: {
		nextEl: '.who_we_next',
		prevEl: '.who_we_prev',
	  }
    });
    </script>";
	}

	public function widget( $args, $instance ) {
		//Add JS for widget to footer
		$widgetInstance = $this->id;
		add_action('wp_footer', function() use ( $widgetInstance ) { 
        $this->addSwiperInitteamsJsToFooter( $widgetInstance ); });
	?>
	<div class="who_we_are mt-5 pt-lg-5 text-center">
	<!-- <h3 class="position-relative bottom_line bc_color_dark_primary bc_text_normal"> -->
	<?php echo $instance['title'];?>
	<!-- </h3> -->
		<div id="<?php echo $this->id ?>" class="swiper-container team-swiper pb-3 mt-4">
    	<div class="swiper-wrapper pb-2">

        <?php 
			$teams_args  = array( 'post_type' => 'bc_teams', 'posts_per_page' => -1, 'order'=> 'ASC','orderby' => 'menu_order','post_status'  => 'publish');

	        $query = new WP_Query( $teams_args );
	        if ( $query->have_posts() ) :
	            while($query->have_posts()) : $query->the_post();
	        $title = get_post_meta( get_the_ID(), 'teams_title', true );
	        $message = get_post_meta( get_the_ID(), 'teams_message', true );
	         $image = get_post_meta( get_the_id(), 'bc_team_custom_image', true );
	          $team_position = get_post_meta( get_the_id(), 'team_position', true );
			  $show_on_homepage = get_post_meta( get_the_id(), 'show_on_homepage', true );
			  $mem_name = (get_field('first_name'))?get_field('first_name').' '.get_field('last_name'):get_the_title();
              // print_r($show_on_homepage);die('ss');
              if ($show_on_homepage == 'true') {
        ?>
        <div class="swiper-slide text-center p-4">
            <div class="image position-relative d-inline-block mx-auto p-3 sidebar_image_border">
            		
                    <?php if (isset($image) && !empty($image)){?>
                        <img class="img-fluid rounded-circle" style="max-width:138px !important;" src="<?php echo $image ?>">
                      <?php }else{
                        echo '<img class="img-fluid rounded-circle" src="https://placehold.it/138x138">';
                      }?>
            </div>
             <span class="position-relative  bc_color_primary bc_text_24 bc_line_height_36 bc_font_alt_1 bc_text_bold d-block"><?php echo $mem_name;?></span>
            <span class="bc_color_secondary bc_text_24 bc_line_height_30 bc_font_alt_1 d-block mt-2"><?php echo $team_position;?></span>
        </div>
    <?php }?>
		 <?php
		endwhile; 
		wp_reset_query();
		endif;
		?>
    	<!-- end -->
        </div>
		
		<div class="who_we_buttons">
			<div class="swiper-button-next who_we_next bc_color_primary bc_text_30 bc_text_light bc_line_height_60"><i class="fal fa-2x fa-angle-right"></i></div>
			<div class="swiper-button-prev who_we_prev bc_color_primary bc_text_30 bc_text_light bc_line_height_60"><i class="fal fa-2x fa-angle-left"></i></div>
		</div>
	</div>
		
     <a href="<?php echo get_home_url();?>/our-team/" class="btn_secondary bc_line_height_26 px-4 py-2 mt-3">FULL TEAM</a>
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
		$label = __( 'Title', 'bc-teams-custom-widget' );
		$title = '';
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
function bc_teams_register_widgets() {
	register_widget( 'BC_teams_Widget' );
}
add_action( 'widgets_init', 'bc_teams_register_widgets' );
