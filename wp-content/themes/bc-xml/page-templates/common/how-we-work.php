 <div class="container-fluid p-0 pt-5 pb-5">
  <div class="container px-md-4">
    <div class="row">
      <div class="col-md-12 text-center text-lg-center text-md-center"><h3 class="position-relative bottom_line mb-5">How We Work</h3></div>
      <div class="col-md-12 m-md-4">
        <div class="swiper-container how_we_swiper h-100">
          <div class="swiper-wrapper">
            <div class="swiper-slide bg-white" >
              <div class="row align-items-center">
                <div class="offset-md-1 col-md-5 col-12">
                  <div class="pl-md-4 text-center text-md-left">
                    <p class="text-uppercase bc_text_20">team driven<span class="d-block bc_color_primary bc_text_40 bc_text_semibold bc_line_height_38">investing</span></p>
                    <p class="px-3 px-md-0">“No one knows everything.” We try to make informed, rational decisions that align your investments with your lifestyle.</p>
                    <a href="<?php echo get_home_url();?>/services/" class="btn_primary py-2 px-3 mt-4">LEARN HOW</a>
                  </div>
                </div>
                <div class="col-md-5 d-none d-md-block">
                  <div class="image position-relative d-inline-block mx-auto p-3 image_border">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/investing.png" class="img-fluid rounded-circle" alt="team" >
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide bg-white">
              <div class="row align-items-center">
                <div class="offset-md-1 col-md-5 col-12">
                  <div class="pl-md-4 text-center text-md-left">
                    <p class="text-uppercase bc_text_20">360 <sup></sup><span class="d-block bc_color_primary bc_text_40 bc_text_semibold bc_line_height_38">SUPPORT</span></p>
                    <p>“We have a person for that”. If it’s important to you, we are here to help, beyond just investments and planning.</p>
                    <a href="<?php echo get_home_url();?>/our-team/" class="btn_primary py-2 px-3 mt-4">LEARN HOW</a>
                  </div>
                </div>
                <div class="col-md-5 d-none d-md-block">
                  <div class="image position-relative d-inline-block mx-auto p-3 image_border">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider_2.png" class="img-fluid rounded-circle" alt="team" >
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide bg-white">
              <div class="row align-items-center">
                <div class="offset-md-1 col-md-5 col-12">
                  <div class="pl-md-4 text-center text-md-left">
                    <p class="text-uppercase bc_text_20">&nbsp;<span class="d-block bc_color_primary bc_text_40 bc_text_semibold bc_line_height_38">QUALIFIED</span></p>
                    <p>“We’ve got the credentials.” Meet the team.</p><br class="d-none d-md-block">
                    <a href="<?php echo get_home_url();?>/our-team/" class="btn_primary py-2 px-3 mt-4">LEARN HOW</a>
                  </div>
                </div>
                <div class="col-md-5 d-none d-md-block">
                  <div class="image position-relative d-inline-block mx-auto p-3 image_border">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider_3.png" class="img-fluid rounded-circle" alt="team" >
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide bg-white">
              <div class="row align-items-center">
                <div class="offset-md-1 col-md-5 col-12">
                  <div class="pl-md-4 text-center text-md-left">
                    <p class="text-uppercase bc_text_20">Community<span class="d-block bc_color_primary bc_text_40 bc_text_semibold bc_line_height_38">CENTRIC</span></p>
                    <p>“Our clients are not clones.” Learn more about how we advise our community. </p><br class="d-none d-md-block">
                    <a href="<?php echo get_home_url();?>/communities/" class="btn_primary py-2 px-3 mt-4">LEARN HOW</a>
                  </div>
                </div>
                <div class="col-md-5 d-none d-md-block">
                  <div class="image position-relative d-inline-block mx-auto p-3 image_border">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider_4.png" class="img-fluid rounded-circle" alt="team" >
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide bg-white">
              <div class="row align-items-center">
                <div class="offset-md-1 col-md-5 col-12">
                  <div class="pl-md-4 text-center text-md-left">
                    <p class="text-uppercase bc_text_20">&nbsp;<span class="d-block bc_color_primary bc_text_40 bc_text_semibold bc_line_height_38">INDEPENDENT</span></p>
                    <p>“We think for ourselves.” Read about our beliefs and how we invest in our community. </p>
                    <a href="<?php echo get_home_url();?>/philanthropy/" class="btn_primary py-2 px-3 mt-4">LEARN HOW</a>
                  </div>
                </div>
                <div class="col-md-5 d-none d-md-block">
                  <div class="image position-relative d-inline-block mx-auto p-3 image_border">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider_5.png" class="img-fluid rounded-circle" alt="team" >
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="swiper-pagination how_we_pagination"></div>
          
        </div>
      </div>                
    </div>
  </div>
</div>
<script type="text/javascript">
  var swiperhow_we_work = new Swiper('.how_we_swiper', {
    direction: 'vertical',
    spaceBetween: 30,
    effect: 'fade',
    autoplay: {
    delay: 2000,
  },
    pagination: {
      el: '.how_we_pagination',
      clickable: true,
    },
    breakpoints:{
      767:{
        direction: 'horizontal',
      }
    }
  });
</script>
