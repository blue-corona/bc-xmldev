//gravity forms error handling
jQuery(document).on('gform_post_render', function(event, form_id, current_page){
    // code to trigger on form or form page render
    //Error for form with static labels
    jQuery('.gfield_error > .ginput_container').focusin(function(){
      jQuery(this).parent('li').children('label').show();
      jQuery(this).parent('li').find('.validation_message').hide();
      jQuery(this).parent('li').removeClass('gfield_error');
    });
    console.log('form render');
    toggleFloatLabel('.ginput_container_text');
    toggleFloatLabel('.ginput_container_textarea');
    toggleFloatLabel('.ginput_container_phone');
  //Code for form with floating labels
  jQuery('.ginput_container_text').focusin(function(){
    jQuery(this).parent('li').children('label').addClass('float_label');
  });


  jQuery('.ginput_container_text').focusout(function(){
   toggleFloatLabel(this, 'input');
 });

 jQuery('.ginput_container_email').focusin(function(){
  jQuery(this).parent('li').children('label').addClass('float_label');
  });

  jQuery('.ginput_container_email').focusout(function(){
    toggleFloatLabel(this, 'email');
  });


  jQuery('.ginput_container_textarea').focusin(function(){
    jQuery(this).parent('li').children('label').addClass('float_label');
  });


  jQuery('.ginput_container_textarea').focusout(function(){
   toggleFloatLabel(this, 'textarea');

 });

  jQuery('.ginput_container_phone').focusin(function(){
    jQuery(this).parent('li').children('label').addClass('float_label');
  });


  jQuery('.ginput_container_phone').focusout(function(){
   toggleFloatLabel(this, 'tel');

  });


    //Error handling for form with floating labels
    jQuery('.floating_labels .gfield_error > label').hide();
    jQuery('.floating_labels .gfield_error .validation_message').addClass('validation_message--float');    

  });

function toggleFloatLabel(selector, type){
  var containerClass='.ginput_container_text';

  if(type=='textarea'){
    containerClass='.ginput_container_textarea';
  }

  if(type=='email'){
    containerClass='.ginput_container_email';
    type="input";
  }

  if(type=='tel'){
    containerClass='.ginput_container_phone';
    type='input';
  }
  
  jQuery(selector).children(type).each(function(){
    if(!jQuery(this).val() || jQuery(this).val() == "(___) ___-____") {
      jQuery(this).parent(containerClass).parent('li').find('label').removeClass('float_label');
    } else {
      jQuery(this).parent(containerClass).parent('li').find('label').addClass('float_label');
    }
  })

}


jQuery(document).ready(function(){
    
    //Code to implement on click functionality
    jQuery(".navbar-nav li").click(
    function(){
          jQuery(this).children('ul').toggle();
    });

    jQuery(".navbar-nav").mouseleave(
    function(e){
    //     e.stopPropagation();  
    //     console.log('here');
    //     console.log(jQuery(e));
        if(!jQuery(e.target).is('.dropdown-toggle')){
          jQuery(this).find('ul').hide();
        }
    });
   

    jQuery('#navbarSupportedContent').on('hidden.bs.collapse', function () {
        toggleIcon();        
    })
    jQuery('#navbarSupportedContent').on('show.bs.collapse', function () {
        toggleIcon();
    })
    function toggleIcon(){
        jQuery(".navbar-toggler-icon").toggleClass('fa-bars');
        jQuery(".navbar-toggler-icon").toggleClass('fa-times');
    }
});

jQuery(".nav-link").on('touchstart',function(e){
  console.log(e.target);
  e.stopPropagation();                                                      
  if(jQuery(e.target).is(".nav-link-title")){
    window.location = this.getAttribute('href');
  }

  // if(jQuery(e.target).is("a")){
  //   return;
  // }
  
  if(jQuery(this).children('span').children('svg').hasClass("fa-angle-up")){
    jQuery(this).children('span').children('svg').removeClass("fa-angle-up");
    jQuery(this).children('span').children('svg').addClass("fa-angle-down");
  }else{
    jQuery(this).children('span').children('svg').addClass("fa-angle-up");
    jQuery(this).children('span').children('svg').removeClass("fa-angle-down");
  }
  jQuery(this).parent('li').children('ul').toggle();
  return false;
});

//toggle read more - read less
function toggleColor(toggleScope, toggleType){
  var openColorClass = jQuery(toggleScope).data('open-color-class');
  var closeColorClass = jQuery(toggleScope).data('close-color-class');
  if(typeof openColorClass == "undefined" && typeof closeColorClass == "undefined"){
    return;
  }
  if(toggleType != 'toggle'){
    jQuery(toggleScope).find('span').addClass(closeColorClass);
    // jQuery(toggleScope).find('svg').addClass(openColorClass);
    jQuery(toggleScope).find('span').removeClass(openColorClass);
    // jQuery(toggleScope).find('svg').removeClass(closeColorClass);
    return;
  }
  jQuery(toggleScope).find('span').toggleClass(openColorClass);
  // jQuery(toggleScope).find('svg').toggleClass(openColorClass);
  jQuery(toggleScope).find('span').toggleClass(closeColorClass);
  // jQuery(toggleScope).find('svg').toggleClass(closeColorClass);
}

function toggleContent(toToggle, toggleScope, toggleType){
  if(!toggleType || typeof toggleType == "undefined"){
    toggleType = 'toggle';
  }  jQuery(toToggle).animate({
    height: toggleType
  },"slow");  var openIcon = jQuery(toggleScope).data('open-icon');
  var closeIcon = jQuery(toggleScope).data('close-icon');  if(typeof openIcon == "undefined" || typeof closeIcon == "undefined"){
    openIcon = 'plus';
    closeIcon = 'minus';
  }  if(toggleType != "toggle"){
    jQuery(toggleScope).find('svg').addClass("fa-"+openIcon);
    jQuery(toggleScope).find('svg').removeClass("fa-"+closeIcon);
    toggleColor(toggleScope, toggleType);
    return;
  }  var currentIcon = jQuery(toggleScope).find('svg').data('icon');
  var newIcon = currentIcon == openIcon ? closeIcon : openIcon;  jQuery(toggleScope).find('svg').toggleClass("fa-"+openIcon);
  jQuery(toggleScope).find('svg').toggleClass("fa-"+closeIcon);
  toggleColor(toggleScope, toggleType);  var text = jQuery(toggleScope).children('span').html();
  if(typeof text == "undefined"){
    return;
  }
  if(currentIcon == 'plus' && text.search('read more') != -1) {
    jQuery(toggleScope).children('span').html(text.replace('read more', 'read less'));
  }
  if(currentIcon == 'minus' && text.search('read less') != -1) {
    jQuery(toggleScope).children('span').html(text.replace('read less', 'read more'));
  }
}

jQuery(".bc_toggle_content").on('click', function(e){
  e.preventDefault();
  var dataToToggle = jQuery(this).data('toggle');
  var dataToggleGroup = jQuery(this).data('toggle-group');
  toggleContent(dataToToggle, this);  if( typeof dataToggleGroup != "undefined"){
    jQuery(".bc_toggle_content").each(function(){
      var dataToToggleNow = jQuery(this).data('toggle');
      if(jQuery(this).data('toggle-group') != dataToggleGroup || dataToToggle == dataToToggleNow){
       return;
      }
      toggleContent(dataToToggleNow, this, 'hide');
    });
  }});

/*******************************
* ACCORDION WITH TOGGLE ICONS
*******************************/

  // function toggleIcon(e) {
  //     jQuery(e.target)
  //         .prev('.card-header')
  //         .find(".toggle-plus-minus")
  //         .toggleClass('fa-plus-circle fa-minus-circle');
  // }
  // jQuery('.accordion').on('hidden.bs.collapse', toggleIcon);
  // jQuery('.accordion').on('shown.bs.collapse', toggleIcon);


jQuery(document).ready(function() {
  // Check if element is scrolled into view
  function isScrolledIntoView(elem) {
    var docViewTop = jQuery(window).scrollTop();
    var docViewBottom = docViewTop + jQuery(window).height();

var elemTop = jQuery(elem).offset().top;
var elemBottom = elemTop + jQuery(elem).height();

return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
  }
  // If element is scrolled into view, fade it in
  jQuery(window).scroll(function() {
    jQuery('.eagle_icon .animated').each(function() {
      if (isScrolledIntoView(this) === true) {
        //jQuery(this).show();
        jQuery(this).addClass('fadeInLeft');
      }
    });
  });


});

/*  function toggleIcon(e) {
      jQuery(e.target)
          .prev('.card-header')
          .find(".toggle-plus-minus")
          .toggleClass('fa-plus-circle fa-minus-circle');
  }
  jQuery('.accordion').on('hidden.bs.collapse', toggleIcon);
  jQuery('.accordion').on('shown.bs.collapse', toggleIcon);*/


//for nav bg on scroll on large screens
jQuery(document).scroll(function () {
  if(jQuery(window).width() >= 700){
      var $nav = jQuery(".fixed-top");
      $nav.toggleClass('scrolled', jQuery(this).scrollTop() > $nav.height());
      jQuery('.bc_header.fixed-top.scrolled').unbind('hover'); 
  }
});

jQuery(function () {
  if(jQuery(window).width() >= 700){
      var $nav = jQuery(".fixed-top");
      $nav.toggleClass('scrolled', jQuery(this).scrollTop() > $nav.height());
  }
});

// jQuery('.bc_header.fixed-top').hover(function(){
//   jQuery(this).toggleClass('animated fadeIn');
// });
// jQuery(document).ready(function($) {
//     $(function(){
//       //First get the  iframe URL
//     var url = $('.video-container iframe').attr('src');
      
//       $('.close').click(function() {
//         $('.video-container').hide();
//         //Then assign the src to null, this then stops the video been playing
//       $('.video-container iframe').attr('src', '');
//       });
    
//     });
// });

 jQuery('#exampleModal').on('hide.bs.modal', function(e) {
    var $if = jQuery(e.delegateTarget).find('iframe');
    var src = $if.attr("src");
    $if.attr("src", '/empty.html');
    $if.attr("src", src);
});