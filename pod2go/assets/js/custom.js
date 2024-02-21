(function ($) {
	"use strict";
	if ($('.selectpicker').length > 0) {
		 $(".selectpicker").selectmenu();
	}
    //Accordion js
    $(".msc_accordion_content.active").slideDown();
	$(".msc_accordion_hdng").on("click", function () {
		$(this).toggleClass("active");
		$(this).next(".msc_accordion_content").toggleClass("active").slideToggle(250);
		//$(".msc_accordion_hdng").not(this).next(".msc_accordion_content").slideUp(250);
		//$(".msc_accordion_hdng").not(this).removeClass("active");
	});
	//
	$(".billing_info_btn").on("click", function () {
		$(this).toggleClass("active");
	  $(".billing_detail_form").slideToggle(400);
	});
})(jQuery);


