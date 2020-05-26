<?php
/**
 * Sidebar - subpage rightside setup.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

    <?php 
        if(is_singular('bc_teams')){  // Here we are showing the widgetarea on the posttype basis
            dynamic_sidebar( 'teampagesidebar');
        }else{
            dynamic_sidebar( 'subpagerightsidebar');
        }
    ?>

