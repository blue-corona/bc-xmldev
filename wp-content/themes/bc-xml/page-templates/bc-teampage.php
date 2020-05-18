<?php
/**
 * Template Name: Team Page Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();?>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>

<main ng-app="teamApp" ng-cloak>
    <div class="container-fluid px-0 m-0 subpage_banner mt-t mt-lg-0">
        <div class="row no-gutters">
            <div class="col-12">
               <?php if (has_post_thumbnail() ) {
      $image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id() ), 'single-post-thumbnail' ); ?>
             <img src="<?php echo $image[0]; ?>" class="img-fluid w-100" alt="Contact-banner">
           <?php }else{ ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/team-banner.jpg" class="img-fluid w-100" alt="Contact-banner">
                   <?php }?>
                <div class="gradient position-absolute"></div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 p-0 m-0 position-relative team_page" ng-controller="TeamController">
        <div class="container">
            <div class="row no-gutters">
              <div class="col-lg-12">
              
                 <h1><?php the_title()?></h1>
                   <p class="mt-3"> <?php 
                    if ( have_posts() ) :
                    while ( have_posts() ) :  the_post();
                        the_content();
                    endwhile;
                    endif;
                    ?> 

                   </p>

              <!--   <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt <a href="#"> hyperlink example </a> ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint </p> -->
                <p class="text-right mt-4" ng-show="showReset()"><a ng-click="resetFilter()" class="btn_secondary bc_line_height_26 py-2 px-4 btn">reset all</a>
                </p>
              </div>
            </div>
            <div class="row m-0" ng-repeat="filter in filters track by $index">
              <div class="col-12">
                <hr class="mb-3" ng-show="$index > 0">
                <span class="bc_text_24 bc_line_height_26 bc_font_default bc_text_light d-block bc_color_secondary text-uppercase mt-4 text-center text-md-left">Filter by {{filter.name}}</span>
              </div>
              <div class="col-lg-3 mt-3 text-center" ng-repeat="filterValue in filter.values track by $index">
                <button ng-class="{'filter_btn_active': filterActive(filter.name, filterValue)}" ng-click="changeFilter(filter.name, filterValue)" class=" Filter_btn bc_color_primary bg-white bc_text_20 bc_line_height_28">{{filterValue}}</button>
              </div>
            </div>
            <div class="row m-0 row-eq-height">
                         
             
              <div class="col-lg-4 mt-5" ng-repeat="member in team track by $index" ng-show="filterMembers(member)                                                                        ">
                <div class="members px-3 pt-3 pb-4 border position-relative overflow-hidden">
                    <div class="">
                      <img class="img-fluid" src="{{member.thumbnail}}">
                    </div>
                    <span class="bc_font_alt_1 bc_text_24 bc_line_height_28 bc_text_bold bc_color_primary border-bottom pb-2 mt-3 d-block">{{member.title}}</span>
                    <span class="bc_font_alt_1 bc_text_22 bc_line_height_41 bc_text_normal bc_color_secondary my-2 d-block">{{member.team_position}}</span>
                    <div class="position-absolute detail text-center">
                      <a href="{{member.permalink}}" class="bc_text_20 bc_line_height_48 text-white bc_font_default bc_text_normal no_hover_underline text-uppercase p-3">View Full Bio <i class="fal fa-chevron-circle-right bc_font_default bc_text_20 bc_line_height_48"></i> </a>
                    </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
<?php get_template_part( 'page-templates/common/wondering-if-there' ); ?> 
   <!--  <div class="container-fluid px-0 m-0 borde_b_primary mt-5">
      <div class="graphic_lines pb-5">
          <div class="container">
              <div class="row no-gutters">
                  <div class="col-lg-10 px-lg-4 offset-lg-1 text-center">
                      <span class="position-relative bc_text_36 bc_line_height_36 mt-5 bc_font_default bc_text_thin text-white bottom_line1 d-block">Wondering if there might be something more you and your money could do?</span>
                      <span class="bc_text_20 bc_line_height_34 bc_font_alt_1 bc_text_light text-white d-block mt-4 pt-1">There are several different ways to connect with us. Chose whichever you are most <br> comfortable with. </span>
                      <a href="#" class="btn_secondary bc_line_height_26 px-4 py-2 mt-4">let’s talk </a>
                  </div>
              </div>
          </div>
        </div>
    </div> -->
</main>
<script type="text/javascript">
  
  <?php 
    $args  = array( 'post_type' => 'bc_teams', 'posts_per_page' => -1, 'order'=> 'DESC','post_status'  => 'publish');
    $loop = new WP_Query($args);
    $team = [];
    if($loop->have_posts()) {
      while($loop->have_posts()) : $loop->the_post();
        $teams = json_decode(get_post_meta( get_the_id(), 'teams', true ));
        $locations = json_decode(get_post_meta( get_the_id(), 'locations', true ));
        $member = [
          'team_position' => get_post_meta( get_the_id(), 'team_position', true ),
          'permalink' => get_the_permalink(),
          'teams' => $teams == null ? []: $teams,
          'locations' => $locations == null ? []: $locations,
          'title' => get_the_title() 
        ];
        if (has_post_thumbnail() ){
          $image = wp_get_attachment_image_src( get_post_thumbnail_id( ), 'full' );
          $image = $image[0];
        }else{
            $image = "https://placehold.it/190x242";
        }
        $member['thumbnail'] = $image;
        $team[] = $member;
      endwhile;
    }
  ?>

  var teamMembers = <?php echo json_encode($team); ?>;
  var teamApp = angular.module('teamApp', []);

  // Defining the `TeamController` controller on the `teamApp` module
  teamApp.controller('TeamController', function TeamController($scope, $window) {
    $scope.filter = {};
    $scope.defaultFilter = {team:['All'], location:['All']};

    $scope.filters = [
      {name: "team", values:['All', 'Leadership Team', 'Operations Team', 'Wealth Advisors']},
      {name: "location", values:['All','Rockville, MD', 'Falls Church, VA', 'Breckenridge, CO']}
    ];

    $scope.team = $window.teamMembers;

    $scope.filterMembers = function(member){
      if(angular.equals($scope.filter,$scope.defaultFilter)){
        return true;
      }
      commonTeam = $scope.filter['team'].filter(value => member['teams'].includes(value));
      commonLocation = $scope.filter['location'].filter(value => member['locations'].includes(value));
      
      if((commonTeam.length > 0 && commonLocation.length > 0) 
        || ($scope.filter.team[0] == 'All' && commonLocation.length > 0) 
        || (commonTeam.length > 0 && $scope.filter.location[0] == 'All')){
        return true;
      }
      return false;

    }

    $scope.resetFilter = function(){
      $scope.filter = angular.copy($scope.defaultFilter);
    }

    $scope.showReset = function(){
      return !angular.equals($scope.filter,$scope.defaultFilter); 
    }

    $scope.filterActive = function(filterName, filterValue){
      return $scope.filter[filterName].indexOf(filterValue) !== -1;
    }

    $scope.changeFilter = function(filterName, filterValue){
      if(filterValue == 'All'){
        $scope.filter[filterName] = ['All'];
        return;
      }

      filterValueIndex = $scope.filter[filterName].indexOf(filterValue);
      if(filterValueIndex != -1){
        $scope.filter[filterName].splice(filterValueIndex, 1);
        if($scope.filter[filterName].length == 0){
          $scope.filter[filterName] = ['All'];
        }
        return;
      }

      if($scope.filter[filterName][0] == 'All'){
        $scope.filter[filterName].splice(0,1);
      }

      $scope.filter[filterName] = [filterValue];
    }

    $scope.resetFilter();


  });
</script>
<?php get_footer();?>