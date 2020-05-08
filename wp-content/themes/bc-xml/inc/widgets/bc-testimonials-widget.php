<?php 

// BC Testimonials Widget
class BC_Testimonials_Widget extends WP_Widget {
	public function __construct() {
		$id = 'BC_Testimonials_widget';
		$title = esc_html__('BC Testimonials', 'bc-testimonial-custom-widget');
		$options = array(
			'classname' => 'bc-testimonial-markup-widget',
			'description' => esc_html__('Add Custom HTML in inputbox', 'bc-testimonial-custom-widget')
		);
		parent::__construct( $id, $title, $options );
	}

	function addSwiperInitTestimonialJsToFooter($instance){
	/*		echo "
			<script>
	var swiperTestimonial = new Swiper('#".$instance."', {
      slidesPerView: 1,
      loop: true,
      speed: 400,
      // autoplay: true,
      paginationClickable: true,
      pagination: {
        el: '.team-pagination',
        type: 'bullets',
        clickable: true,
      },
    });</script>";*/
    echo "<script>
    var swiperTestimonial = new Swiper('#".$instance."', {
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
        $this->addSwiperInitTestimonialJsToFooter( $widgetInstance ); });
	?>
<<<<<<< HEAD
<div class="who_we_are mt-5 pt-lg-5 text-center">
                       <h3 class="position-relative bottom_line text-uppercase bc_text_normal">who we are</h3>
                       <div  id="<?php echo $this->id ?>" class="swiper-container team-swiper pb-3 mt-4">
                            <div class="swiper-wrapper pb-2">
                                <?php 
									$testimonial_args  = array( 'post_type' => 'bc_testimonials', 'posts_per_page' => -1, 'order'=> 'DESC','post_status'  => 'publish');

							        $query = new WP_Query( $testimonial_args );
							        if ( $query->have_posts() ) :
							            while($query->have_posts()) : $query->the_post();
							        $title = get_post_meta( get_the_ID(), 'testimonial_title', true );
							        $message = get_post_meta( get_the_ID(), 'testimonial_message', true );
							        $image = get_post_meta( get_the_ID(), 'testimonial_custom_image', true );
						        ?>
                                <div class="swiper-slide text-center p-4">
                                    <div class="image position-relative d-inline-block mx-auto p-3">
                                        <img src="<?php echo $image;?>"  class="img-fluid" alt="Contact-banner">
                                    </div>
                                     <span class="position-relative bottom_line_2 bc_color_primary bc_text_24 bc_line_height_50 bc_font_alt_1 bc_text_bold d-block"><?php the_title();?><sup>®</sup> </span>
                                    <span class="bc_color_secondary bc_text_24 bc_line_height_50 bc_font_alt_1 d-block mt-2"><?php echo $title;?></span>
                                </div>
								 <?php
								            endwhile; 
								            wp_reset_query();
								        endif;?>
			
                               <!-- end -->
                                </div>
                                <!-- Add Pagination -->
                             <div class="swiper-pagination team-pagination"></div>

                            </div>
                             <a href="#" class="btn_secondary bc_line_height_26 px-4 py-2 mt-3">FULL TEAM</a>
                            <!-- Add Pagination -->
                          <!--    <div class="swiper-pagination team-pagination"></div -->
                        </div>
                       <!--  <a href="#" class="btn_secondary bc_line_height_26 px-4 py-2 mt-3">FULL TEAM</a> -->
                    </div> 
=======
	<div class="mt-5">
		<?php 
		if ( isset( $instance['title'] ) && !empty($instance['title']) ) {
			echo $args['before_title'] . $instance['title'] . $args['after_title']; 
		}else{
			echo '<h2 class="text-center m-0 bc_alternate_font_blue text-capitalize">Testimonials</h2>';
		}
		?>
		<!-- before pase -->
		<div id="<?php echo $this->id ?>" class="bc_testimonial_photos_swiper swiper-container text-center my-4">
		<div class="swiper-wrapper text-center">
			<?php 
			$testimonial_args  = array( 'post_type' => 'bc_testimonials', 'posts_per_page' => -1, 'order'=> 'DESC','post_status'  => 'publish');
>>>>>>> 7b0528a89c9ef9f4544098f2ae3bb3e9523731e0

	        $query = new WP_Query( $testimonial_args );
	        if ( $query->have_posts() ) :
	            while($query->have_posts()) : $query->the_post();
	        $title = get_post_meta( get_the_ID(), 'testimonial_title', true );
	        $message = get_post_meta( get_the_ID(), 'testimonial_message', true );
	        $image = get_post_meta( get_the_ID(), 'testimonial_custom_image', true );
        ?>
			<style type="text/css">
			.circular--landscape {
			display: inline-block !important;
			position: relative;
			width: 100px;
			height: 100px;
			overflow: hidden;
			border-radius: 50%;
			}
			.circular--landscape img {
			width: auto;
			height: 100%;
			margin-left: 0px;
			}
			</style>
			<div class="swiper-slide">
				<div class="row">
				<div class="col-sm-12">
					<div class="circular--landscape">
						<img class="" src="<?php echo $image;?>" alt="testimonial02" />
					</div>
				</div>
					<div class="col-sm-12">
					<p class="bc_color_primary mb-0">
						<?php 
                        if (strlen($message) > 151){
                            echo $message = substr($message, 0, 151) . '...';
                        }else{
                            echo $message;
                        }
                        ?>
					</p>
					<p class="bc_alternate_font_blue mb-0">- <?php the_title();?></p>
					<p class="mb-0"><?php echo $title;?></p>
					</div>
				</div>
			</div>
		 <?php
            endwhile; 
            wp_reset_query();
        endif;?>
			
		</div>
		<ul class=" list-unstyled">
		 	<li class="list-inline-item bc_testimonial_swiper_prev bc_swiper-button-prev"> <em class="fa fa-chevron-circle-left"></em> </li>
		 	<li class="list-inline-item bc_testimonial_swiper_next bc_swiper-button-next"> <em class="fa fa-chevron-circle-right"></em> </li>
		</ul>
		</div>
		<div class="text-center"><button class="btn bc_default_primary text-white " type="button">Read Testimonials</button></div>
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
		$label = __( 'Title', 'bc-testimonial-custom-widget' );
		$title = '<h2 class="text-center m-0 bc_alternate_font_blue text-capitalize">'.__( 'Testimonials', 'bc-testimonial-custom-widget' ).'</h2>';
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
function bc_testimonials_register_widgets() {
	register_widget( 'BC_Testimonials_Widget' );
}
add_action( 'widgets_init', 'bc_testimonials_register_widgets' );
