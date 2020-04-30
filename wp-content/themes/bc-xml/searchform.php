<?php
/**
 * The template for displaying search forms
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<form class="d-md-none"> method="get" id="bc_searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
        <div class="row px-4 py-3 mb-lg-0">
			<div class="col-2 p-0 pl-4 m-auto">
    			<i aria-hidden="true"  class="far fa-search bc_text_16 bc_line_height_36 bc_color_primary <?php echo $args['icon_color_class']; ?>"></i> &nbsp; 
			</div>
			<div class="col-10 p-0 pr-3">
				<div class="form-group">
					<input class="form-control border-0" placeholder="Search" id="s" name="s" type="text" value="<?php the_search_query(); ?>" style="border-bottom:2px solid #ffffff">
				</div>
			</div>
        </div>
</form>