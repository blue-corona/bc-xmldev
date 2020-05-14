<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action('admin_enqueue_scripts', 'bc_teams_include_admin_css_js');
function bc_teams_include_admin_css_js($hook){
  $current_screen = get_current_screen();
    if ( $current_screen->post_type == 'bc_teams') {
        wp_enqueue_script('bc-team-image-upload-js', get_stylesheet_directory_uri().'/src/js/bc-team-image-upload.js', array( 'jquery'));
    }
}


function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );

$understrap_include = array(
    '/widgets/bc-how-we-work.php',
    '/widgets/bc-resources-widget.php',
     '/bc-shortcode-override.php',
     '/custom-post-types.php',
    '/widgets/bc-team-widget.php',
    '/widgets/bc-footer-location-widget.php',
    '/widgets/bc-footer-menutwo-widget.php',
    '/widgets/bc-footer-gravity-form-widget.php',
    
);
foreach ( $understrap_include as $file ) {
    $filepath = locate_template( 'inc' . $file );
    if ( ! $filepath ) {
        trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
    }
    require_once $filepath;
}

// Accordion Shortcode Start
// [bc_accordion]
// [bc_card title="Property Protection Guarantee"]
// <p>All property such as lawns, shrubbery, carpeting, floors, walls, furniture and door frames are protected. Damaged property will be replaced or repaired.</p>
// [bc_card]
//     [/bc_accordion]

add_action('wp_footer', 'accordion_method');
function accordion_method(){?>
<script>
jQuery(document).ready(function () {
  jQuery('#accordion').on('show.bs.collapse', function (e) {
      toggleIcon(e.target);
  });
  jQuery('#accordion').on('hidden.bs.collapse', function (e) {
      toggleIcon(e.target);
  });
});
function toggleIcon(target){
    var target = jQuery(target).parent('.card').children('.card-header').children('h3').children('svg'); 
    console.log(target);
    target.toggleClass('fa-minus-circle');
    target.toggleClass('fa-plus-circle');
}
</script>
<?php }

add_shortcode( 'bc_accordion', 'accordion_shortcode' );
function accordion_shortcode( $atts, $content = null ) {
    $content = str_replace('<br>', '', $content);
    return '<div id="accordion" class="accordion w-100 border-bottom mt-4">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'bc_card', 'card_shortcode' );
function card_shortcode( $atts, $content = null ) {
    $title='';  
    if(isset($atts['title'])) {
        $title = $atts['title'];
    }
    $iconClass = 'fal fa-plus-circle';
    $expanded = '';
    if(isset($atts['expanded'])) {
        $expanded = 'show';
        $iconClass = 'fal fa-minus-circle';
    }
    $id = 'collapse'.rand(0,100000);
        return '<div class="card rounded-0 mb-0">
        <div id="headingOne" class="card-header position-relative border-bottom-0 bg-white cursor_pointer"><h3 class="card-title bc_color_primary">'.$title.'<i class="'.$iconClass.' bc_color_primary float-right toggle_icon mt-2 ml-2" data-toggle="collapse" data-target="#'.$id.'" arivvvvvvvva-controls="'.$id.'"></i></h3></div><div id="'.$id.'" class="card-body collapse position-relative '.$expanded.'" aria-labelledby="headingOne" data-parent="#accordion"><p class="text-gray">'.do_shortcode($content).'</p></div>
        </div>';
}

//shortcode for phone number
//<a href="tel:[site_info_phone_number]">[site_info_phone_number]</a>
add_shortcode( 'site_info_phone_number', 'bc_site_info_phone_number' );
function bc_site_info_phone_number ( $atts ) {
    $anchor = true;
    if(isset($atts['anchor'])){
        $anchor = $atts['anchor'];
    }
    $tel = bc_get_theme_mod('bc_theme_options', 'bc_phone',false, '3334357</sub>');
    ob_start();
    if($anchor){
        echo "<a class='bc_text_18 bc_line_height_20 bc_font_alt_1 bc_text_light bc_color_primary bc_color_primary_hover mb-1 no_hover_underline' href='tel:$tel'>$tel</a>";
    }else{
     echo $tel;
    }
    return ob_get_clean();
}

// shortcode for logo to be placed in menu
//[header_menu_logo]
add_shortcode('header_menu_logo', 'bc_logo_shortcode_for_menu');
function bc_logo_shortcode_for_menu($atts) {
 $logo =  bc_get_theme_mod('bc_theme_options', 'bc_logo_upload',false, get_template_directory_uri().'/img/logo.png');
    ob_start();
    if(isset($logo)){
        echo '<img src="'.$logo.'" class="img-fluid d-none d-lg-block"/>';
    }
    return ob_get_clean();
}

add_filter('wp_nav_menu_items', 'do_shortcode');

//shortcode for background img
remove_filter( 'the_content', 'wpautop' );

// [cta_button title="CTA GOES HERE" link="/contact-us"]
add_shortcode( 'cta_button', 'bc_cta_button' );
function bc_cta_button ( $title, $url ) {
    ob_start();
    echo '<a href="'.get_home_url().$title['link'].'" class="btn_primary py-1 px-3 mt-4 bc_line_height_50">'.$title['title'].'</a>';
    return ob_get_clean();
}