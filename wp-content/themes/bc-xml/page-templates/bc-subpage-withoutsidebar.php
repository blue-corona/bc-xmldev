<?php
/**
 * Template Name: SubPage Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();?>

<main>
    <div class="container-fluid px-0 m-0 subpage_banner mt-5 mt-lg-0">
        <div class="row no-gutters">
            <div class="col-12 position-relative">  
     <?php if (has_post_thumbnail() ) {
      $image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id() ), 'single-post-thumbnail' ); ?>
             <img src="<?php echo $image[0]; ?>" class="img-fluid w-100" alt="Contact-banner">
           <?php }else{ ?>
             <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/contact-banner.jpg" class="img-fluid w-100" alt="Contact-banner">
           <?php }?>
            <div class="gradient position-absolute"></div>
         
        </div>
    </div>
    <div class="container-fluid py-5 m-0">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-12">
                  <h1><?php the_title()?></h1>
                  <?php 
                    if ( have_posts() ) :
                    while ( have_posts() ) :  the_post();
                        the_content();
                    endwhile;
                    endif;
                  ?>
                <!-- <div id="accordion" class="accordion w-100 border-bottom mt-4">
                  <div class="card rounded-0 mb-0">
                      <div class="card-header position-relative border-bottom-0 bg-white cursor_pointer" data-toggle="collapse" href="#collapse1">
                          <h3 class="card-title bc_color_primary"> Title Goes Here </h3>
                      </div>
                      <div id="collapse1" class="card-body collapse position-relative show" data-parent="#accordion">
                          <p class="text-gray"> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, hyperlink example qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam. </p>
                      </div>
                      <div class="card-header position-relative border-top border-bottom-0 bg-white border-t1 collapsed cursor_pointer" data-parent="#accordion" data-toggle="collapse" href="#collapse2">
                          <h3 class="card-title bc_color_primary"> Title Goes Here </h3>
                      </div>
                      <div id="collapse2" class="card-body collapse position-relative " data-parent="#accordion">
                          <p class="text-gray"> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                      </div>

                      <div class="card-header position-relative border-top border-bottom-0 bg-white border-t1 collapsed cursor_pointer" data-parent="#accordion" data-toggle="collapse" href="#collapse3">
                          <h3 class="card-title bc_color_primary"> Title Goes Here </h3>
                      </div>
                      <div id="collapse3" class="card-body collapse position-relative " data-parent="#accordion">
                          <p class="text-gray"> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                      </div>
                    </div>
                  </div>  -->
                  
                </div>
            </div>
        </div>
    </div>
   
   <?php get_template_part( 'page-templates/common/Wondering-if-there' ); ?> 
</main>
<?php get_footer();?>