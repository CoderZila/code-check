(function ($) {
	"use strict";
	//sidebar menu open in mobile
	$('.nav_toggle').on('click', function () {
		$(".navigation_menu").toggleClass("menu_open");
		$(this).toggleClass("close");
	});
	$('.nav_close_btn').on('click', function () {
		$(".navigation_menu").removeClass("menu_open");
	});
	$(".navigation_menu ul li ul.sub_menu").parents("li").addClass("dropdown_toggle");
	$(".dropdown_toggle").append("<span class='caret_down'><i class='far fa-angle-down'></i></span>");
	//megamenu js
	$(".megamenu_dropdown_wrap").parents("li").addClass("megamenu_li");
	$(".megamenu_li").append("<span class='mega_caret_down'><i class='far fa-angle-down'></i></span>");
	$(".navigation_menu ul li").children(".mega_caret_down").on("click", function () {
		$(this).toggleClass("caret_up");
		$(this).prev(".megamenu_dropdown_wrap").slideToggle();
	});
	//megamenu for mobile
	if ($(window).width() < 992) {
		$(".navigation_menu ul li").children(".caret_down").on("click", function () {
			$(this).toggleClass("caret_up");
			$(this).prev("ul").slideToggle();
		});
		$(".mega_link_box .headings").append("<span class='mega_toggle'><i class='far fa-plus'></i></span>");
		$(".mega_toggle").on("click", function () {
			$(this).toggleClass("close_tgl");
			$(this).parents(".headings").next(".mega_menu_list").slideToggle();
		});
	 }
	 else {
		
	 }
	//counter js
	 $('.counter_number').countTo();
	//show more text
	if ($('.show_more_text').length > 0) {
		$('.show_more_text').myOwnLineShowMoreLess({
			showLessText: 'Read Less',
			showMoreText: 'Read More',
		});
	}
		//readmore in lists
		$('.ul_expandible_3').each(function(){
		  var $ul = $(this),
			  $lis = $ul.find('li:gt(3)'),
			  isExpanded = $ul.hasClass('expanded');
		  $lis[isExpanded ? 'show' : 'hide']();
		  
		  if($lis.length > 0){
			  $ul
				  .append($('<span class="showmore"><li class="expand">' + (isExpanded ? 'Show Less' : 'Show More') + '</li></span>')
				  .click(function(event){
					  var isExpanded = $ul.hasClass('expanded');
					  event.preventDefault();
					  $(this).html(isExpanded ? '<li>Show More</li>' : '<li>Show Less</li>');
					  $ul.toggleClass('expanded');
					  $lis.toggle();
				  }));
			 }
		});
         //wow animation js
		new WOW().init();
		//mixitup js
		if ($('.mixitup_container').length > 0) {
			var containerEl = document.querySelector('.mixitup_container');
			var mixer = mixitup(containerEl, {
				selectors: {
					target: '[data-ref~="mixitup-target"]'
				}
			});
		}
        //selectpicker js
        $('.selectpickers').selectpicker();
	//read more text
	$(document).ready(function() {
		// Configure/customize these variables.
		var showChar = 170;  // How many characters are shown by default
		var ellipsestext = "...";
		var moretext = "Read More";
		var lesstext = "Read less";
		$('.show_more_text3').each(function() {
			var content = $(this).html();
			if(content.length > showChar) {
	 
				var c = content.substr(0, showChar);
				var h = content.substr(showChar, content.length - showChar);
	 
				var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="javascript:void(0)" class="morelink">' + moretext + '</a></span>';
	 
				$(this).html(html);
			}
	 
		});
	});

	//scroll go to top
	$(window).scroll(function() {
		var wndscroll = $(window).scrollTop();
		if (wndscroll >= 500) {
			$(".goto_top_btn").addClass("show_scroll_btn");
		} else {
			$(".goto_top_btn").removeClass("show_scroll_btn");
		}
	});
	$(".goto_top_btn").click(function() {
		$("html, body").animate({ scrollTop: 0 }, 300);
		return false;
	});

	 //youtube autoplay
	
	//Accordion js
	$('.h_faq_accordion').eq(0).children('.h_faq_heading').addClass ("active");
	$('.h_faq_accordion').eq(0).children('.h_faq_collapse_content').slideDown();
	$(".h_faq_heading").on("click", function () {
		$(this).toggleClass("active");
		$(this).next(".h_faq_collapse_content").slideToggle(250);
		$(".h_faq_heading").not(this).next(".h_faq_collapse_content").slideUp(250);
		$(".h_faq_heading").not(this).removeClass("active");
	});
	 //customer carousel
	 $('.h_customer_carousel').owlCarousel({
		items:1,
		singleItem: true,
		loop:true,
		margin:0,
		smartSpeed:2000,
		slideSpeed: 2000,
		dots:true,
		nav: true,
		navText: ['<i class="fas fa-arrow-left"></i>','<i class="fas fa-arrow-right"></i>'],
		autoplay: false,
		autoplayTimeout:4000,
		autoplayHoverPause:true, 
	})
	 //customer carousel
	 $('.h_dev_list_carousel').owlCarousel({
		
		stagePadding: 150,
		center:true,
		//singleItem: true,
		loop:true,
		margin:100,
		smartSpeed:2000,
		slideSpeed: 2000,
		dots:false,
		nav: true,
		navText: ['<i class="fas fa-arrow-left"></i>','<i class="fas fa-arrow-right"></i>'],
		autoplay: false,
		autoplayTimeout:4000,
		autoplayHoverPause:true, 
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				stagePadding: 0,
				margin:10,
				center:false,

			},
			768:{
				items:2,
				stagePadding: 50,
				margin:40,
				center:true,
			},
			1000:{
				stagePadding: 100,
				items:2,
				margin:50,
				center:true,
			},
			1200:{
				items:3,
				stagePadding: 100,
				margin:50,
				center:true,
			},
			1600:{
				items:4,
				stagePadding: 150,
				margin:50,
				center:true,
			},
			1800:{
				items:4,
				stagePadding: 150,
				margin:60,
				center:true,
			},
			2400:{
				items:5,
				stagePadding: 150,
				margin:60,
				center:true,
			}
		}
	})
	//on click show social icon
	$('.s_toggler_btn').on('click', function () {
		$(".social_sticky_icon_main").toggleClass("shows");
	});
	//on click show social icon
	$('.blog_tbl_content_head').on('click', function () {
		$(this).next(".blog_tbl_content_collapse").slideToggle(100);
	});
	//on scroll hide social icon
	$(window).scroll(function() {
		if ($(this).scrollTop() > 200) {
		   $('.social_sticky_icon_main').removeClass('shows');
		}
		else {
			
		}
	});
	$('.hire_blog_slider').owlCarousel({
		items:1,
		singleItem: true,
		loop:true,
		margin:5,
		smartSpeed:2000,
		slideSpeed: 2000,
		dots:true,
		nav: false,
		autoplay: false,
		autoplayTimeout:4000,
		autoplayHoverPause:true,
		animateOut: 'fadeOut',
       animateIn: 'fadeIn', 
	})
})(jQuery);


