<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
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
		      <h1>Our Blog</h1>
		     	<?php 
		     	if ( have_posts() ) :
		     		while ( have_posts() ) : the_post();
		     			get_template_part( 'loop-templates/content', get_post_format() );
					endwhile; else :
					get_template_part( 'loop-templates/content', 'none' );
				endif;
				?>
		      	<!-- Pagination -->
		      	<?php understrap_pagination(); ?>
		    </div>
		    <!-- rIGHT sidebar starts -->
		    <?php get_template_part( 'sidebar-templates/sidebar', 'blogrightside' ); ?>
		    <!-- right sidebar ends -->
		  </div>
		</div>
	</div>
	<?php get_template_part( 'page-templates/common/wondering-if-there' ); ?> 
</main>
<?php get_footer()?>

