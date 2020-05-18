<?php
/**
 * The template for displaying search results pages.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

// $container = get_theme_mod( 'understrap_container_type' );

?>
<main>
	<?php get_template_part( 'page-templates/common/bc-banner-section' ); ?> 

	<div class="container-fluid py-5 m-0">
		<div class="container">
		  <div class="row no-gutters">
		    <div class="col-lg-8">
		    	<?php if ( have_posts() ) : ?>
				<h1>
				<?php 
				printf(esc_html__( 'Search Results for: %s', 'understrap' ),'<span>' . get_search_query() . '</span>');
				?>
				</h1>
		     	<?php 
			     	while ( have_posts() ) : the_post();
			     		get_template_part( 'loop-templates/content', 'search' );
			     	endwhile; // end of the loop.
		     	?>
				<?php else : ?>
					<?php get_template_part( 'loop-templates/content', 'none' ); ?>
				<?php endif; ?>
		    </div>
		    <!-- rIGHT sidebar starts -->
		    <?php get_template_part( 'sidebar-templates/sidebar', 'singleblogrightside' ); ?>
		    <!-- right sidebar ends -->
		  </div>
		</div>
	</div>
	<?php get_template_part( 'page-templates/common/wondering-if-there' ); ?> 

</main>
<?php get_footer(); ?>
