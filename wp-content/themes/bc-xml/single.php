<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<main>
	<?php get_template_part( 'page-templates/common/bc-banner-section' ); ?> 

	<div class="container-fluid py-5 m-0">
		<div class="container">
		  <div class="row no-gutters">
		    <div class="col-lg-8">
		     	<?php 
		     	while ( have_posts() ) : the_post();
		     	get_template_part( 'loop-templates/content', 'single' ); 
		     	endwhile; // end of the loop.
		     	?>
		    </div>
		    <!-- rIGHT sidebar starts -->
		    <?php get_template_part( 'sidebar-templates/sidebar', 'singleblogrightside' ); ?>
		    <!-- right sidebar ends -->
		  </div>
		</div>
	</div>
	<?php get_template_part( 'page-templates/common/wondering-if-there' ); ?> 
</main>
<?php get_footer()?>
