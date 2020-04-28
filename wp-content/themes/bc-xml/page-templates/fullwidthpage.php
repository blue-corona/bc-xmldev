<?php
/**
 * Template Name: Full Width Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="container-fluid px-0 m-0 subpage_banner">
   <div class="row no-gutters">
            <div class="col-12" <?php if (has_post_thumbnail() ) {     $image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id() ), 'single-post-thumbnail' ); ?> style="min-height:391px;background-repeat: no-repeat; background-image: url('<?php echo $image[0]; ?>');"<?php  } else { ?> style="min-height:391px; background-repeat: no-repeat;background-image: url('<?php echo get_stylesheet_directory_uri();?>/img/contact-banner.jpg');"  <?php }?>>
   
             </div>
       </div>
    </div>

 <div class="container-fluid py-5 m-0">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-12">
<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'page' ); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
						?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->
</div>
</div>
</div>
</div>
<?php get_footer(); ?>
