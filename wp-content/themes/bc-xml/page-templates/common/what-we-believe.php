    <!-- background image use shortcode for mobile use background-image:url('../img/what-we-mobile.png');--->
    <div class="container-fluid bc_home_section_bg p-0 pt-5 pb-5 position-relative what_we_do" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/img/what-we.png'); background-position: bottom; ">

        <div class="container pt-5 pb-5 px-lg-5">
            <div class="row text-center text-lg-center text-md-center p-lg-5 px-0">
                <div class="col-12 offset-lg-2 col-lg-8 col-sm-12 pt-5 pb-5 px-2 px-md-0">
                    <h3 class="position-relative bottom_line mb-5 bc_sm_line_height_28 bc_sm_text_28">What We Believe</h3>
                    <div class="mx-md-5 mx-3 position-relative bg-white overflow-hidden what_we_video" data-toggle="modal" data-target="#exampleModal">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center align-items-center">
                                <span class="position-absolute d-block play_icon text-center mt-md-5 mt-3 ml-n2">
                                    <i class="fas fa-2x fa-play-circle bc_color_primary"></i>
                                </span>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/video-thumb.jpg" class="img-fluid  mx-auto mt-md-n4 mt-n3">

                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-xl" id="vimeoWrap" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close bc_color_secondary_hover_bg" data-dismiss="modal" aria-label="Close" onclick="javascript:return false;">
                              <span aria-hidden="true"><i class="fal fa-times"></i></span>
                            </button>
                          </div>
                          <div class="modal-body video-container">
                            <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/403803057" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
