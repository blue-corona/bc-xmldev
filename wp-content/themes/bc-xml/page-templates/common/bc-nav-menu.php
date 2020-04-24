<div class="container-fluid bc_nav_container px-0 m-0">
    <div class="container px-0">
        <nav class="navbar navbar-expand-lg navbar-dark m-auto d-table w-100 px-0">
            <div id="navbarSupportedContent" class="navbar-collapse collapse" style="">
                <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="d-none navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
                    <span class="navbar-toggler-icon navbar-dark bc_color_primary"></span>
                </button>
                <div class="text-right pr-3 show-when-small" style="width: 100% !important;"> <!-- RM: 3/27 - Removed d-lg-none. Relying solely on media query hover(none) for touch devices-->
                <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
                    <span class="fal fa-times bc_color_primary bc_text-30 bc_line_height_24"></span>
                    </button>
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
            </div>
        </nav>
    </div>
</div>
