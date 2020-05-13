<?php
/**
 * Template Name: HomePage Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();
?>

  <main role="main">
    <?php 
        if(bc_get_theme_mod('bc_theme_home_options', 'bc_hero_type', false, 'background_image') == 'background_image'){
            get_template_part( 'page-templates/hero-section/bc-hero-banner' );
        }else if(bc_get_theme_mod('bc_theme_home_options', 'bc_hero_type', false, 'image_slider') == 'image_slider'){
            get_template_part( 'page-templates/hero-section/bc-hero-swiper' );
        }
        else if(bc_get_theme_mod('bc_theme_home_options', 'bc_hero_type', false, 'video') == 'video'){
            get_template_part( 'page-templates/hero-section/bc-hero-video' );
        }
    ?>

    <!-- what we believe -->
    <?php get_template_part( 'page-templates/common/what-we-believe' ); ?> 

         <!--  how we work -->
    <?php get_template_part( 'page-templates/common/how-we-work' ); ?>

    <!--  slide-background image --->
  <?php get_template_part( 'page-templates/common/ background-image-for-home-page' ); ?> 
   
    <!-- who we are--->
      <?php get_template_part( 'page-templates/common/who-we-are' ); ?>

   <!-- Wondering if there might be something more you and -->
     <?php get_template_part( 'page-templates/common/wondering-if-there' ); ?> 

    
    <?php 
 //    if ( have_posts() ) : 
 //     while ( have_posts() ) : the_post();
    //      the_content();
    //  endwhile;
    // endif;
    ?>


    
    <?php //get_template_part( 'page-templates/common/bc-locations-section' ); ?>
    
    <!--  Include coupons file here -->
    <?php //get_template_part( 'page-templates/common/coupons' ); ?>

    <!--  Include testimonial file here -->
    <?php //get_template_part( 'page-templates/common/testimonials' ); ?>
    <!-- Include affiliations file here -->
    <?php //get_template_part( 'page-templates/common/affiliations' ); ?>
   

</main>

<script type="text/javascript">
var swiper = new Swiper('.how_we_swiper', {
      direction: 'vertical',
      spaceBetween: 30,
      effect: 'fade',
      pagination: {
        el: '.how_we_pagination',
        clickable: true,
      },
      breakpoints:{
        767:{
          direction: 'horizontal',
        }
      }
});
var swiper = new Swiper('.who_we_swiper', {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 1,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: '.who_we_pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.who_we_next',
        prevEl: '.who_we_prev',
    },
    breakpoints: {
        540: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 2,
          spaceBetween: 50,
        },
    }
 });

</script>
<?php get_footer(); ?>