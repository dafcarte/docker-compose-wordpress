/* global multipurpose_ecommerceScreenReaderText */
/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */

(function( $ ) {
	// NAVIGATION CALLBACK
	var ww = jQuery(window).width();
	jQuery(document).ready(function() { 
		jQuery("#header .nav li a").each(function() {
			if (jQuery(this).next().length > 0) {
				jQuery(this).addClass("parent");
			};
		})
		jQuery(".toggleMenu").click(function(e) { 
			e.preventDefault();
			jQuery(this).toggleClass("active");
			jQuery("#header .nav").slideToggle('fast');
		});
		adjustMenu();
	})

	// navigation orientation resize callbak
	jQuery(window).bind('resize orientationchange', function() {
		ww = jQuery(window).width();
		adjustMenu();
	});

	var adjustMenu = function() {
		if (ww < 720) {
			jQuery(".toggleMenu").css("display", "block");
			if (!jQuery(".toggleMenu").hasClass("active")) {
				jQuery("#header .nav").hide();
			} else {
				jQuery("#header .nav").show();
			}
			jQuery("#header .nav li").unbind('mouseenter mouseleave');
		} else {
			jQuery(".toggleMenu").css("display", "none");
			jQuery("#header .nav").show();
			jQuery("#header .nav li").removeClass("hover");
			jQuery("#header .nav li a").unbind('click');
			jQuery("#header .nav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
				jQuery(this).toggleClass('hover');
			});
		}
	}

})( jQuery );
