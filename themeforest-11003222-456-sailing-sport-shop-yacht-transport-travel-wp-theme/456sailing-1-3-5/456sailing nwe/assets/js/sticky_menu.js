/*global jQuery:false */
jQuery(document).ready(function() {
	"use strict";	
    sticky_menu();
});

function sticky_menu() {

var headerBottomWrap = jQuery('.lpd-sticky-menu');
    
headerBottomWrap.waypoint(function (direction) {
  
		if( direction === 'down') {
			jQuery(this).addClass('lpd-sticky');
		}
  
  }, {
  
  offset: function (direction) {
    return -jQuery('#header').outerHeight();
  }
  
});

jQuery('.lpd-sticky-menu').waypoint(function (direction) {
  
		if( direction === 'up'){
			headerBottomWrap.removeClass('lpd-sticky');
		}
  
  }, {
  
  offset: function (direction) {
    return -jQuery('#header').outerHeight();
  }
  
});

var headerBottom = jQuery('.lpd-sticky-menu');

headerBottom.waypoint(function (direction) {
  
		if( direction === 'down') {
			jQuery(this).addClass('sticky-panel');
		}
		else if( direction === 'up'){
			jQuery(this).removeClass('sticky-panel');
		}

        jQuery(".scotch-panel-canvas").css("transform", "inherit");
        jQuery(".scotch-panel-canvas").css("-webkit-transform", "inherit");
        jQuery(".scotch-panel-canvas").css("backface-visibility", "inherit");
        jQuery(".scotch-panel-canvas").css("-webkit-backface-visibility", "inherit");
        
    }, {
  offset: function (direction) {
    return -jQuery('#header').outerHeight()-50;
  }
});

headerBottom.waypoint(function (direction) {
  
		if( direction === 'down') {
			jQuery(this).addClass('sticky-active');
		}
		else if( direction === 'up'){
			jQuery(this).removeClass('sticky-active');
		}
        
    }, {
  offset: function (direction) {
    return -jQuery('#header').outerHeight()-100;
  }
});

};