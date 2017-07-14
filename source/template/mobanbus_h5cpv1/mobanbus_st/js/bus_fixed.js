/* ===========================================================
 * jquery.autofix_anything.js v1
 * ===========================================================
 * Copyright 2013 Pete Rojwongsuriya.
 * http://www.thepetedesign.com
 *
 * Fix position of anything on your website automatically
 * with one js call
 *
 * https://github.com/peachananr/autofix_anything
 *
 * ========================================================== */

!function($){
  
  var defaults = {
    customOffset: false,
    manual: false,
    onlyInContainer: true
	};

  $.fn.autofix_anything = function(options){
    var settings = $.extend({}, defaults, options),
        el = jQuery(this),
        curpos = el.position(),
        offset = settings.customOffset,
        pos = el.offset();
        
    el.addClass("autofix_sb")  
    
    $.fn.manualfix = function() {
      var el = jQuery(this),
          pos = el.offset();
      if (el.hasClass("fixed")) {
        el.removeClass("fixed")
      } else {
        el.addClass("fixed").css({
          top: 10,
          left: pos.left,
          right: "auto",
          bottom: "auto"
        });
      }
      
    }
    
    fixAll = function(el, settings, curpos, pos){
      if (settings.customOffset == false) offset =  el.parent().offset().top
      if(jQuery(document).scrollTop() > offset && jQuery(document).scrollTop() <= (el.parent().height() + (offset - jQuery(window).height())))  {
          el.removeClass("bottom").addClass("fixed").css({
            top: 10,
            left: pos.left,
            right: "auto",
            bottom: "auto"
          });
      } else {
        if(jQuery(document).scrollTop() > offset) {
          if (settings.onlyInContainer == true ) {
            if(jQuery(document).scrollTop() > (el.parent().height() - jQuery(window).height())) {
              el.addClass("bottom fixed").removeAttr( 'style' ).css({
                left: curpos.left
              });
            }else {
              el.removeClass("bottom fixed").removeAttr( 'style' );

            }
          }
        } else {
          el.removeClass("bottom fixed").removeAttr( 'style' );
        }
      }
    
    }
    if (settings.manual == false) {
      jQuery(window).scroll(function() {
        fixAll(el, settings, curpos, pos)
      });
    }
    

  }
}(window.jQuery);

