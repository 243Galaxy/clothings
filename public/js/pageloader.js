(function($) {
	"use strict";
	// makes sure the whole site is loaded
	jQuery(window).load(function() {
		"use strict";
	        // will first fade out the loading animation
		jQuery(".preloader_status").fadeOut();
	        // will fade out the whole DIV that covers the website.
		jQuery(".preloader").delay(300).fadeOut("slow");
		jQuery(".mainpage").delay(300).fadeIn("slow");
	})
})(jQuery);