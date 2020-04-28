<?php
/**
 * Template Name: SubPage Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();?>

<main>
    <div class="container-fluid px-0 m-0 subpage_banner">
        <div class="row no-gutters">
            <div class="col-12">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/contact-banner.jpg" class="img-fluid" alt="Contact-banner">
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 m-0">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-12">
                    <h1>Heading Goes Here</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt <a href="#">hyperlink example</a> ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                    <h2 class="mt-4">Subheading Goes Here</h2>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, hyperlink example qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam. </p>
                    <a href="#" class="btn_primary py-2 px-3 mt-4">CTA GOES HERE</a>
                    <h3 class="mt-5 pl-4 mb-2">Bulleted List Example</h3>
                    <ul class="bullete_style pl-5">
                        <li>Sed ut perspiciatis unde</li>
                        <li>Omnis iste natus error sit</li>
                        <li>Voluptatem accusantium</li>
                        <li>Doloremque laudantium</li>
                        <li>Totam rem aperiam amet</li>
                    </ul>
                    <div id="accordion" class="accordion w-100 border-bottom mt-4">
                      <div class="card rounded-0 mb-0">
                          <div class="card-header position-relative border-bottom-0 bg-white " data-toggle="collapse" href="#collapse1">
                              <a class="card-title bc_text_28 bc_line_height_28 bc_color_primary bc_text_light bc_font_default text-uppercase"> Title Goes Here </a>
                          </div>
                          <div id="collapse1" class="card-body collapse position-relative show" data-parent="#accordion">
                              <p class="font-sm-15 line-height-sm-25 font-18 line-height-32 text-gray"> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, hyperlink example qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam. </p>
                          </div>
                          <div class="card-header position-relative border-top border-bottom-0 bg-white border-t1 collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapse2">
                              <a class="card-title bc_text_28 bc_line_height_28 bc_color_primary bc_text_light bc_font_default text-uppercase"> Title Goes Here </a>
                          </div>
                          <div id="collapse2" class="card-body collapse position-relative " data-parent="#accordion">
                              <p class="font-sm-15 line-height-sm-25 font-18 line-height-32 text-gray"> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                          </div>

                          <div class="card-header position-relative border-top border-bottom-0 bg-white border-t1 collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapse3">
                              <a class="card-title bc_text_28 bc_line_height_28 bc_color_primary bc_text_light bc_font_default text-uppercase"> Title Goes Here </a>
                          </div>
                          <div id="collapse3" class="card-body collapse position-relative " data-parent="#accordion">
                              <p class="font-sm-15 line-height-sm-25 font-18 line-height-32 text-gray"> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                          </div>

                          <div class="card-header position-relative border-top bg-white border-bottom-0 collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapse4">
                              <a class="card-title bc_text_28 bc_line_height_28 bc_color_primary bc_text_light bc_font_default text-uppercase"> Title Goes Here </a>
                          </div>
                          <div id="collapse4" class="card-body collapse position-relative " data-parent="#accordion">
                              <p class="font-sm-15 line-height-sm-25 font-18 line-height-32 text-gray"> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer();?>