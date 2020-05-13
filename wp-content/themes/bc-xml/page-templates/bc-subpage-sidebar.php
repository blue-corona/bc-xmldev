<?php
/**
 * Template Name: SubPage-Siderbar Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
global $post;
?>
<main>
    <?php get_template_part( 'page-templates/common/bc-banner-section' ); ?> 
    <div class="container-fluid py-5 m-0">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-8">
                  <h1><?php the_title()?></h1>
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
<?php get_footer();?>
