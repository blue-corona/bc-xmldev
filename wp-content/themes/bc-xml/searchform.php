<?php
/**
 * The template for displaying search forms
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<form class="d-md-none" style="opacity: .6;">
    <div class="row px-4 py-4 px-md-0 mb-lg-0">
		<div class="d-inline-block p-0 pl-4 pt-0">
			<i aria-hidden="true"  class="fas fa-search bc_text_16 bc_line_height_36 bc_color_primary <?php echo $args['icon_color_class']; ?>"></i> &nbsp; 
		</div>
		<div class="col-9 p-0 pr-3">
			<div class="form-group">
				<input class="form-control border-0 bg-none no_shadow" placeholder="search" id="s" name="s" type="text" value="<?php the_search_query(); ?>" style="border-bottom:2px solid #ffffff">
			</div>
		</div>
    </div>
</form>