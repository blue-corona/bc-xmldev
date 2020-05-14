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
      paginationClickable: true,
      pagination: {
        el: '.team-pagination',
        type: 'bullets',
        clickable: true,
      },
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
	<h3 class="position-relative text-uppercase bc_text_normal">
	<?php echo $instance['title'];?>
	</h3>
		<div id="<?php echo $this->id ?>" class="swiper-container team-swiper pb-3 mt-4">
    	<div class="swiper-wrapper pb-2">

        <?php 
			$teams_args  = array( 'post_type' => 'bc_teams', 'posts_per_page' => -1, 'order'=> 'DESC','post_status'  => 'publish');

	        $query = new WP_Query( $teams_args );
	        if ( $query->have_posts() ) :
	            while($query->have_posts()) : $query->the_post();
	        $title = get_post_meta( get_the_ID(), 'teams_title', true );
	        $message = get_post_meta( get_the_ID(), 'teams_message', true );
	      $image = get_post_meta( get_the_id(), 'bc_team_custom_image', true );

	          $team_position = get_post_meta( get_the_id(), 'team_position', true );
        ?>
        <div class="swiper-slide text-center p-4">
            <div class="image position-relative d-inline-block mx-auto p-3 sidebar_image_border">
            		<?php if (has_post_thumbnail() ){
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id()), 'full' );?>
                    	<img class="img-fluid" src="<?php echo $image[0]; ?>">
	                <?php }else{
	                    echo '<img class="img-fluid" src="https://placehold.it/190x242">';
	                }?>
                <!-- <img src="<?php echo $image;?>"  class="img-fluid" alt="Contact-banner"> -->
            </div>
             <span class="position-relative bottom_line_2 bc_color_primary bc_text_24 bc_line_height_50 bc_font_alt_1 bc_text_bold d-block"><?php the_title();?><sup>®</sup> </span>
            <span class="bc_color_secondary bc_text_24 bc_line_height_50 bc_font_alt_1 d-block mt-2"><?php echo $team_position;?></span>
        </div>
		 <?php
		endwhile; 
		wp_reset_query();
		endif;
		?>
    	<!-- end -->
        </div>
    	<div class="swiper-pagination team-pagination"></div>
    </div>
     <a href="<?php echo get_home_url();?>" class="btn_secondary bc_line_height_26 px-4 py-2 mt-3">FULL TEAM</a>
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
		$title = '<h3 class="position-relative text-uppercase bc_text_normal">who we are</h3>';
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
