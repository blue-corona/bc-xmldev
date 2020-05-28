<?php
/**
 * Template Name: Single Promotions Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();
?>
<main>
    <div class="container-fluid px-0 m-0 subpage_banner mt-5 mt-lg-0">
      <div class="row no-gutters">
        <div class="col-12 position-relative">  
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/contact-banner.jpg" class="img-fluid w-100" alt="Contact-banner">
          <div class="gradient position-absolute"></div>
        </div>
      </div>
    </div>
    <div class="container-fluid py-5 m-0">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-8">
				<?php $member_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'full' ); ?>
                  <img class="float-left pr-3" src="<?php echo $member_img[0]; ?>" width="300" height="300"/>
				  <h1><?php the_title()?></h1>
				  <h2><?php echo get_post_meta( $post->ID, 'team_position', true ); ?></h2>
                  <?php 
                  if ( have_posts() ) :
                    while ( have_posts() ) :  the_post();
                      the_content();
                    endwhile;
                  endif;
                  ?> 
                </div>
               <div class="col-lg-4 pl-lg-4">
                  <?php get_template_part( 'sidebar-templates/sidebar-subpagerightsidebar' ); ?>
                </div> 
            </div>
        </div>
    </div>
   <?php get_template_part( 'page-templates/common/wondering-if-there' ); ?> 
</main>
<?php get_footer()?>
