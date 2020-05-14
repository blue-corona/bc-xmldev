<?php
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
add_action( 'init', 'bc_team_custom_post_type', 0 );

/* Creating a function to create our CPT */
function bc_team_custom_post_type() {
// Set UI labels for team Custom Post Type
    $labels = array(
        'name'                => _x( 'Team', 'Post Type General Name', 'bc-xml' ),
        'singular_name'       => _x( 'team', 'Post Type Singular Name', 'bc-xml' ),
        'menu_name'           => __( 'Teams', 'bc-xml' ),
        'parent_item_colon'   => __( 'Parent team', 'bc-xml' ),
        'all_items'           => __( 'All Teams', 'bc-xml' ),
        'view_item'           => __( 'View team', 'bc-xml' ),
        'add_new_item'        => __( 'Add New team', 'bc-xml' ),
        'add_new'             => __( 'Add New', 'bc-xml' ),
        'edit_item'           => __( 'Edit team', 'bc-xml' ),
        'update_item'         => __( 'Update team', 'bc-xml' ),
        'search_items'        => __( 'Search team', 'bc-xml' ),
        'not_found'           => __( 'Not Found', 'bc-xml' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'bc-xml' ),
    );
// Set other options for team Custom Post Type
    $args = array(
        'label'               => __( 'Teams', 'bc-xml' ),
        'description'         => __( 'team reviews', 'bc-xml' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes'),
        'taxonomies'          => array( 'genres' ),
        'rewrite' => array( 'has_front' => false ,'slug' => 'our-team'),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    // Registering your Custom Post Type
    register_post_type( 'bc_teams', $args );
}

add_action( 'add_meta_boxes', 'bc_team_create_metabox' );
function bc_team_create_metabox() {
    add_meta_box(
        'bc_team_metabox',
        'Show On Home Page', // Title to display
        'bc_team_metabox', // Function to call that contains the metabox content
        'bc_teams', // Post type to display metabox on
        'side', // Where to put it (normal = main colum, side = sidebar, etc.)
        'default' // Priority relative to other metaboxes
    );
}

add_action( 'edit_form_after_title', 'bc_team_run_after_title_meta_boxes' );
function bc_team_run_after_title_meta_boxes() {
    global $post, $wp_meta_boxes;
    # Output the `below_title` meta boxes:
    do_meta_boxes( get_current_screen(), 'test', $post );
    unset($wp_meta_boxes['bc_teams']['test']);
}

function bc_team_metabox() {
   global $post;
    $teams = json_decode(get_post_meta( $post->ID, 'teams', true ));
    $locations = json_decode(get_post_meta( $post->ID, 'locations', true ));
    $categories = [
        'teams' => [
            'selected'=> (in_array($teams, ['', null, false]) ? [] : $teams),
            'options' => ['Leadership Team', 'Operations Team', 'Wealth Advisors']
        ],
        'locations' => [
            'selected'=> (in_array($locations, ['', null, false]) ? [] : $locations),
            'options' => ['Rockville, MD', 'Falls Church, VA', 'Breckenridge, CO']
        ]
    ];
    $show_on_homepage = get_post_meta( $post->ID, 'show_on_homepage', true );
    $team_position = get_post_meta( $post->ID, 'team_position', true );
    $image = get_post_meta( $post->ID, 'bc_team_custom_image', true );
    // print_r($categories);die;
    foreach($categories as $category => $values):
    ?>
    <div>
        <h4 style="text-transform: capitalize;"><?php echo $category ?></h4>
        <div>
            <?php foreach($values['options'] as $option): ?>
                <input type="checkbox" name="<?php echo $category?>[]" value="<?php echo $option ?>" <?php echo in_array($option, $values['selected']) ? 'checked' : ''; ?> >
                <label><?php echo $option ?></label><br>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endforeach; ?>
    <hr>
    <div>
        <div>
            <input type="hidden" name="show_on_homepage" value="false">
            <input type="checkbox" name="show_on_homepage" value="true" <?php echo  ($show_on_homepage != 'false' ? 'checked': '')?>> Show On Home Page?
        </div>
    </div>

    <div>
        <div>
            <label><?php _e( 'Position', 'team_position' );?></label>
            <input type="text" name="bc_team_position_metabox" id="bc_team_position_metabox" value="<?php echo esc_attr( $team_position ); ?>" required>
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Custom Image</label>
        <div class="col-sm-10">
            <input type="text" name="bc_team_custom_image" id="" class="meta-image col-sm-2" value="<?= $image;?>" required accept='image/*' style="margin-top: auto;">
            <input type="button" class="button bc-team-image-upload col-sm-3" value="Upload" style="margin-top: 20px;">

            <div class="image-preview col-sm-3" style="margin-right: 20%;">
                <?php if(isset($image) && !empty($image)){?>
                <img src="<?php echo $image;?>" class="rounded-circle" style="width:90px;margin-top: 20px;">
                <?php }else{?>
                <img src="http://placehold.it/100x100" class="rounded-circle" style="width: 90px; height: 63px;"/>
                <?php }?>
            </div>
        </div>
    </div>
 <?php wp_nonce_field( 'bc_team_form_metabox_nonce', 'bc_team_form_metabox_process' );
}

add_action( 'save_post', 'bc_team_save_metabox', 1, 2 );
function bc_team_save_metabox( $post_id, $post ) {
    if ( !isset( $_POST['bc_team_form_metabox_process'] ) ) return;
    if ( !wp_verify_nonce( $_POST['bc_team_form_metabox_process'], 'bc_team_form_metabox_nonce' ) ) {
        return $post->ID;
    }
    if ( !current_user_can( 'edit_post', $post->ID )) { return $post->ID;}
    if ( !isset( $_POST['bc_team_position_metabox'] ) ) { return $post->ID;}
    
    $sanitizedposition = wp_filter_post_kses( $_POST['bc_team_position_metabox'] );

    if ( !isset( $_POST['bc_team_custom_image'] ) ) {return $post->ID;}
    $sanitizedcustomimage = wp_filter_post_kses( $_POST['bc_team_custom_image'] );

    if ( isset( $_POST['teams'] ) ) {
        $sanitizedteams = json_encode( $_POST['teams'] );
    }

    if ( isset( $_POST['locations'] ) ) {
        $sanitizedlocations = json_encode( $_POST['locations'] );
    }

    if ( !isset( $_POST['show_on_homepage'] ) ) { return $post->ID;}
    $sanitizedshowonhome = wp_filter_post_kses( $_POST['show_on_homepage'] );

    update_post_meta( $post->ID, 'team_position', $sanitizedposition );
    update_post_meta( $post->ID, 'bc_team_custom_image', $sanitizedcustomimage );
    update_post_meta( $post->ID, 'teams', $sanitizedteams );
    update_post_meta( $post->ID, 'locations', $sanitizedlocations );
    update_post_meta( $post->ID, 'show_on_homepage', $sanitizedshowonhome );

}



/* Podcast Post type*/
add_action( 'init', 'bc_podcast_custom_post_type', 0 );
function bc_podcast_custom_post_type() {
    $labels = array(
        'name'                => _x( 'Podcast', 'Post Type General Name', 'bc-xml' ),
        'singular_name'       => _x( 'postcast', 'Post Type Singular Name', 'bc-xml' ),
        'menu_name'           => __( 'Podcasts', 'bc-xml' ),
        'parent_item_colon'   => __( 'Parent postcast', 'bc-xml' ),
        'all_items'           => __( 'All Podcasts', 'bc-xml' ),
        'view_item'           => __( 'View postcast', 'bc-xml' ),
        'add_new_item'        => __( 'Add New postcast', 'bc-xml' ),
        'add_new'             => __( 'Add New', 'bc-xml' ),
        'edit_item'           => __( 'Edit postcast', 'bc-xml' ),
        'update_item'         => __( 'Update postcast', 'bc-xml' ),
        'search_items'        => __( 'Search postcast', 'bc-xml' ),
        'not_found'           => __( 'Not Found', 'bc-xml' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'bc-xml' ),
    );
    
    $args = array(
        'label'               => __( 'Podcasts', 'bc-xml' ),
        'description'         => __( 'postcast', 'bc-xml' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes'),
        'taxonomies'          => array( 'genres' ),
        'rewrite' => array( 'has_front' => false ,'slug' => 'podcast'),
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        // 'publicly_queryable' => false,
    );
    register_post_type( 'bc_podcasts', $args );
}