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
    <?php get_template_part( 'page-templates/common/background-image-for-home-page' ); ?> 

    <!-- who we are--->
    <?php get_template_part( 'page-templates/common/who-we-are' ); ?>

    <!-- Wondering if there might be something more you and -->
    <?php get_template_part( 'page-templates/common/wondering-if-there' ); ?> 
</main>
<?php get_footer(); ?>
