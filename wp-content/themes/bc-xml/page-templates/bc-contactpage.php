<?php
/**
 * Template Name: ContactPage Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header('variant-announcement-bar');?>

<main role="main">
   <div class="container-fluid px-0 m-0 subpage_banner">
   <div class="row no-gutters">
            <div class="col-12"
 <?php if (has_post_thumbnail() ) 
{ 
    $image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id() ), 'single-post-thumbnail' ); ?> style="min-height:391px;background-repeat: no-repeat; background-image: url('<?php echo $image[0]; ?>');"
     <?php 
 }
 else
 {
  ?> 
    style="min-height:391px; background-repeat: no-repeat;background-image: url('<?php echo get_stylesheet_directory_uri();?>/img/contact-banner.jpg');" 
    <?php 
}
    ?>>
   
    </div>
   </div>
</div>
 <div class="container-fluid py-5 m-0">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-12">

    <!-- Contact Form and section -->
    <?php 
    if ( have_posts() ) : 
    	while ( have_posts() ) : the_post();
			the_content();
		endwhile;
	endif;
	?>

   </div>
  </div>
  </div> 
</div>
</main>
<?php get_footer();?>
