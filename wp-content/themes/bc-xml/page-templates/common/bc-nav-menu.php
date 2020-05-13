<div class="container-fluid bc_nav_container px-0 m-0 menu">
    <div class="container px-0">
        <nav class="navbar navbar-expand-lg navbar-dark m-auto d-table w-100 px-0">
            <div id="navbarSupportedContent" class="navbar-collapse collapse" style="">
                <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="d-none navbar-toggler close_btn" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
                    <span class="fal fa-times bc_color_primary bc_text-30 bc_line_height_24"></span>
                </button>
                <div class="text-right d-lg-none show-when-small" style="width: 100% !important;"> <!-- RM: 3/27 - Removed d-lg-none. Relying solely on media query hover(none) for touch devices-->
                <!-- <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
                    <span class="fal fa-times bc_color_primary bc_text-30 bc_line_height_24"></span>
                    </button> -->
                </div>
                <?php 
                    $args = [
                    'menu' => 'main-menu',
                    'depth' => 3,
                    'theme_location' => 'primary',
                    'container' => false,
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'navbarSupportedContent',
                    'menu_class' => 'navbar-nav m-auto',
                    'fallback_cb'     => 'Bluecorona_WP_Bootstrap_Navwalker::fallback',
                    'walker' => new Bluecorona_WP_Bootstrap_Navwalker(),
                    ];
                    wp_nav_menu( $args )
                ?>
                <div class="d-lg-none show-mar">
                    <?php echo get_search_form(['icon_color_class' => 'text-white'])?>
                </div>
                <div class="eagle-png position-absolute d-lg-none">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/eagle.png" class="img-fluid" alt="eagle png">
                </div>
            </div>
        </nav>
    </div>
</div>

<!-- <script>
$(function() {
    var icon = $(".menu");
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
    
        if (scroll >= 100) {
            icon.removeClass('menu').addClass("menu-alt");
        } else {
            icon.removeClass("menu-alt").addClass('menu');
        }
    });
});
</script> -->