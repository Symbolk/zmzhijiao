/*! Copy Right Mobanbus.cn */
 jQuery(function(){ 
  jQuery(window).scroll(function(){
   boxY = jQuery('#box').offset().top;
   yy = jQuery(this).scrollTop();
   xx = jQuery(this).width();
   //alert(xx);
   boxXX = xx / 2 - 400;
   if (jQuery(this).scrollTop() > 0) {
    jQuery('#box').css({"position":"fixed",top:"0px",left:"0px"});
    jQuery('#box').addClass('bus_fucked');
   // jQuery('#box').animate({top:yy+"px"},28);
   } else {
    jQuery('#box').css({"position":"absolute",top:"0px",left:"0px"});
    jQuery('#box').removeClass('bus_fucked');
   }
  })
 })
 /*! Copy Right Mobanbus.cn */
 jQuery(function (){        
  setInterval(function () {
    jQuery('#bus_textroll dl:last').hide().insertBefore(jQuery("#bus_textroll dl:first")).slideDown(1000);
    }, 6000);
});