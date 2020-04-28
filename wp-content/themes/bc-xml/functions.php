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

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );

// Accordion Shortcode Start
// [bc_accordion]
// [bc_card title="Property Protection Guarantee"]
// <p>All property such as lawns, shrubbery, carpeting, floors, walls, furniture and door frames are protected. Damaged property will be replaced or repaired.</p>
// [bc_card]
//     [/bc_accordion]
add_shortcode( 'bc_accordion', 'accordion_shortcode' );
function accordion_shortcode( $atts, $content = null ) {
    $content = str_replace('<br>', '', $content);
    return '<div id="accordion" class="accordion w-100 text-left">' . do_shortcode($content) . '</div>';
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
    return '<div class="card bg-transparent border-0 py-4 py-4">
                <div id="headingOne" class="card-header border-0  bg-transparent p-0">
                    <h3 class="my-3 bc_color_secondary  bc_font_alt_2 bc_line_height_36   my-4 bc_text_36 bc_text_light text-capitalize">'.$title.'<i class="'.$iconClass.' bc_color_success  bc_text_30  float-right toggle_icon mt-2 ml-2" data-toggle="collapse" data-target="#'.$id.'" aria-controls="'.$id.'"></i></h3>
                </div>
                <div id="'.$id.'" class="collapse '.$expanded.'" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">'.do_shortcode($content).'</div>
                </div>
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
        echo "<a href='tel:$tel'>$tel</a>";
    }else{
     echo $tel;
    }
    return ob_get_clean();
}

// shortcode for logo to be placed in menu
//[header_menu_logo]
add_shortcode('header_menu_logo', 'bc_logo_shortcode_for_menu');
function bc_logo_shortcode_for_menu($atts) {
 $logo =  bc_get_theme_mod('bc_theme_options', 'bc_logo_upload',false, get_template_directory_uri().'/img/logo.jpg');
    ob_start();
    if(isset($logo)){
        echo '<img src="'.$logo.'" class="img-fluid"/>';
    }
    return ob_get_clean();
}
add_filter('wp_nav_menu_items', 'do_shortcode');
