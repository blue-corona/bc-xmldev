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
</div>