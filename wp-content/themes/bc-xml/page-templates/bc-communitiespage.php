<?php
/**
 * Template Name: CommunitiesPage Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();?>

<main>
<?php get_template_part( 'page-templates/common/bc-banner-section' ); ?> 
    <div class="container-fluid py-5 p-0 m-0 bullet_lists">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-12">
                    <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
          <?php if(get_field( "team_members" )){ ?>
					<div class="mt-5 py-5 border-top">
						<h2>Community Members</h2>
						<p class="mt-3">We know what you are going through, and we have the expertise to help make the right choices.</p>
          </div>
          <?php } ?>
                </div> 
              <!-- Community Members -->
				<?php 
						$team_members_ids = get_field( "team_members" ); 
						if($team_members_ids){
				?>
                <div class="col-lg-12">
                  <div class="swiper-button-next members-button-next d-none d-lg-block">
                      <i class="far fa-chevron-right bc_text_30 bc_line_height_34 bc_color_primary"></i>
                  </div>
                  <div class="swiper-button-prev members-button-prev d-none d-lg-block">
                    <i class="far fa-chevron-left  bc_text_30 bc_line_height_34 bc_color_primary"></i>
                  </div>
                  <div class="swiper-container community-members-swiper mx-md-5 pb-3 mt-lg-5">
                    <div class="swiper-wrapper pb-2">
					<?php foreach($team_members_ids as $team_member_id){ ?>
                      <div class="swiper-slide">
                        <div class="members px-3 pt-3 pb-4 border position-relative overflow-hidden">
                          <div class="img bc_color_lightgray_bg">
                            <?php $member_img = wp_get_attachment_image_src( get_post_thumbnail_id( $team_member_id ),'full' ); ?>
							<img  src="<?php echo $member_img[0]; ?>" />
                          </div>
                          <span class="bc_font_alt_1 bc_text_18 bc_line_height_26 bc_text_bold bc_color_primary border-bottom pb-2 mt-3 d-block"><?php echo get_the_title($team_member_id); ?></span>
                          <span class="bc_font_alt_1 bc_text_16 bc_line_height_24 bc_text_normal bc_color_secondary my-2 d-block"><?php echo get_post_meta( $team_member_id, 'team_position', true ); ?></span>
						  <?php if(get_the_excerpt($team_member_id)){ ?>
                          <div class="position-absolute detail p-3">
                            <span class="bc_text_18 bc_line_height_30 text-white bc_font_default bc_text_normal"><?php echo get_the_excerpt($team_member_id); ?></span>
                          </div>
						  <?php } ?>
                        </div>
                      </div>
					<?php } ?>  
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination team-pagination member-pagination d-md-none"></div>
                  </div>
                </div>
				<?php } ?>
            </div>
        </div>
    </div>
			<?php 
				if( have_rows('testimonials') ){
			?>
			<div class="container-fluid py-5 px-0 testimonials">
				<div class="eagle_icon testimonial_icon position-absolute d-none d-md-block">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-testimonials.png" class="img-fluid w-100 animated">
				  </div>
					<div class="container">
						<div class="row no-gutters">
						  <div class="col-lg-10 offset-lg-1 text-center pt-lg-5">
							<span class="bc_text_28 bc_line_height_28 bc_font_default bc_color_primary bc_text_light bottom_line d-block position-relative mt-3 text-uppercase">testimonials</span>
							<div class="col-lg-12">
							  <div class="swiper-button-next testimonials-button-next d-none d-lg-block">
								  <i class="far fa-chevron-right bc_text_30 bc_line_height_34 bc_color_primary"></i>
							  </div>
							  <div class="swiper-button-prev testimonials-button-prev d-none d-lg-block">
								<i class="far fa-chevron-left  bc_text_30 bc_line_height_34 bc_color_primary"></i>
							  </div>
							  <div id="bc_testimonials-swiper_community" class="swiper-container testimonials-swiper mx-md-5 pb-3 mt-5">
								<div class="swiper-wrapper pb-3">
								<?php while( have_rows('testimonials') ){ the_row(); ?>
									<div class="swiper-slide">
										<p>“<?php echo  get_sub_field('testimonial');?>"</p>
									</div>
								<?php }?>
								</div>
								<!-- Add Pagination -->
								<div class="swiper-pagination team-pagination testimonials-pagination"></div>
							  </div>
							</div>
						  </div>
						</div>
					</div>
			</div>
			<?php }?>
 <?php get_template_part( 'page-templates/common/wondering-if-there' ); ?> 
</main>
<script type="text/javascript">
  var swiperMember = new Swiper('.community-members-swiper', {
    navigation: {
        nextEl: '.members-button-next',
        prevEl: '.members-button-prev',
    },
     slidesPerView: 3,
        loop: true,
        speed: 400,
        // autoplay: true,
        paginationClickable: true,
        spaceBetween: 50,
        pagination: {
            el: '.member-pagination',
            type: 'bullets',
            clickable: true,
        },
        breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
      }     
    });
  var swiperTestimonials = new Swiper('#bc_testimonials-swiper_community', {
    navigation: {
        nextEl: '.testimonials-button-next',
        prevEl: '.testimonials-button-prev',
    },
     slidesPerView: 1,
        loop: true,
        speed: 400,
        // autoplay: true,
        paginationClickable: true,
        spaceBetween: 50,
        pagination: {
            el: '.testimonials-pagination',
            type: 'bullets',
            clickable: true,
        },
        breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
      }     
    }); 
</script>
<?php get_footer();?>