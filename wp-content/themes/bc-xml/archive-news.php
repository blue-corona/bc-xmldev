<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
query_posts(['post_type'=>'news','paged' => $paged]);?>
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
		    <div class="col-lg-8 sub_page_sidebar">
		      <h1>Events</h1>
		     	<?php 
		     	if ( have_posts() ) :
		     		while ( have_posts() ) : the_post();
		     			get_template_part( 'loop-templates/content-team', get_post_format() );
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

<?php get_footer(); ?>

