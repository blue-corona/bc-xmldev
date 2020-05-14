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
	<div class="col-md-4 p-0 text-center pb-2">
	<?php
	if (has_post_thumbnail() ){
	$image = wp_get_attachment_image_src( get_post_thumbnail_id( ), 'blogpost-thumbnail' );
	?>
		<img src="<?php echo $image[0]; ?>" alt="post img" class="img-responsive postImg">
	<?php }else{
		echo '<img src="'.get_stylesheet_directory_uri().'/img/XML-Logo-footer.jpg" class="img-responsive postImg">';
	}?>
	</div>
	<div class="col-md-8 px-4">
		<article>
		<h2><?php the_title()?></h2>
		<?php 
		$when = get_post_meta( $post->ID, 'bc_event_when', true );
		$where = get_post_meta( $post->ID, 'bc_event_where', true );
		?>
		<?php if(isset($when) && !empty($when)){?>
			<p class="m-0">When : <?php echo $when;?></p>
		<?php }?>
		
		<?php if(isset($where) && !empty($where)){?>
			<p class="m-0">Where : <?php echo $where;?></p>
		<?php }?>
		</article>
	</div>
<div class="col-sm-12 p-0"><hr style="background-color:#4d4d4d" /></div>
</div>