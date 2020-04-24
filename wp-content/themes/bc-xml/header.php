<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <link rel="icon" href="<?php echo bc_get_theme_mod('bc_theme_options', 'bc_favicon_upload',false, get_template_directory_uri().'/img/favicon.ico'); ?>">

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
</head>
<body>
<!-- Show header accordingly fixed or default -->
<?php if(bc_get_theme_mod('bc_theme_options', 'header', 'type', 'fixed') == 'fixed'){
    echo '<header class="bc_header sticky-top bc_color_secondary_bg">';
 }else{
    echo  '<header class="bc_header bc_color_secondary_bg">';
 }?>
    <!-- announcement bar background color-->
    <div class="container-fluid bc_color_light_bg bc_announcement_bar p-0">
        
        <!-- Hide this section if announcement bar is disabled-->
        <?php if(bc_get_theme_mod('bc_theme_options', 'header', 'announcement_bar', 'enabled') == 'enabled'){?>
        <div class="container">
            <div class="row text-center text-lg-left bc_announcement_bar_text">
                <!-- announcement bar content-->
                <?php echo bc_get_theme_mod('bc_theme_options', 'header','announcement_bar_content', '
                <div class="col-sm-12 col-lg-12 text-center text-lg-left">
                    <span class="bc_color_secondary bc-text-16 bc_line_height_36"> <span class="bc_color_primary">NEWS  //</span>  Lorem ipsum dolor sit amet consectetur adipiscing elit sed do labore et dolore magna aliqua  | <a href="#" class="bc_font_bold bc_color_primary">Learn More</a> </span>
                </div>'); ?>

                <!-- announcement bar with button end-->
                <?php get_template_part( 'page-templates/header/bc-announcement-bar-mobile' ); ?>
            </div>
        </div>

        <?php }?>
    </div>
    <?php 
        if(bc_get_theme_mod('bc_theme_options', 'bc_logo_location',false, 'left') == 'left'){
            // header with default start
            get_template_part( 'page-templates/header/bc-header-default' );
            // header with default end
        }else{
            // header with center logo start
            get_template_part( 'page-templates/header/bc-header-with-centerlogo'); 
            // header with center logo end
        }
        get_template_part( 'page-templates/header/bc-header-mobile');
    ?>
<div class="d-none hide-on-touch d-lg-block"> 
    <?php get_template_part( 'page-templates/common/bc-nav-menu' ); ?>
</div>
</header>