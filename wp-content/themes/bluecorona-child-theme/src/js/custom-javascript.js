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
    jQuery(".navbar-nav li").hover(
    function(){
        jQuery(this).children('ul').hide();
        jQuery(this).children('ul').show();
    },
    function () {
        jQuery('ul', this).hide();            
    });
});

jQuery(".nav-link").on('touchstart',function(e){
  // e.preventDefault();
  e.stopPropagation();                                                      
  if(jQuery(e.target).is(".nav-link-title")){
    window.location = this.getAttribute('href');
  }

  if(jQuery(e.target).is("a")){
    return;
  }
  
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
  }

  jQuery(toToggle).animate({
    height: toggleType
  },"slow");

  var openIcon = jQuery(toggleScope).data('open-icon');
  var closeIcon = jQuery(toggleScope).data('close-icon');

  if(typeof openIcon == "undefined" || typeof closeIcon == "undefined"){
    openIcon = 'plus';
    closeIcon = 'minus'; 
  }

  if(toggleType != "toggle"){
    jQuery(toggleScope).find('svg').addClass("fa-"+openIcon);
    jQuery(toggleScope).find('svg').removeClass("fa-"+closeIcon);
    toggleColor(toggleScope, toggleType);
    return;
  }

  var currentIcon = jQuery(toggleScope).find('svg').data('icon');
  var newIcon = currentIcon == openIcon ? closeIcon : openIcon;

  jQuery(toggleScope).find('svg').toggleClass("fa-"+openIcon);
  jQuery(toggleScope).find('svg').toggleClass("fa-"+closeIcon);
  toggleColor(toggleScope, toggleType);


  var text = jQuery(toggleScope).children('span').html();
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
  toggleContent(dataToToggle, this);
  
  if( typeof dataToggleGroup != "undefined"){
    jQuery(".bc_toggle_content").each(function(){
      var dataToToggleNow = jQuery(this).data('toggle'); 
      if(jQuery(this).data('toggle-group') != dataToggleGroup || dataToToggle == dataToToggleNow){
       return; 
      }
      toggleContent(dataToToggleNow, this, 'hide');
    });
  }
  

});