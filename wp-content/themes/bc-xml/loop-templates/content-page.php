<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="row pt-4">
	<div class="col-md-12 px-4">
		<?php the_content();?>
	</div>
	<div class="col-sm-12 p-0"><hr style="background-color:#4d4d4d" /></div>
</div>