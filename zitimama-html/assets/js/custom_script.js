(function ($) {
	"use strict";
	//sidebar menu open in mobile
	$('.nav_toggle').on('click', function () {
		$(".navigation_menu").toggleClass("menu_open");
		$(this).toggleClass("close");
	});
	$('.nav_close_btn').on('click', function () {
		$(".navigation_menu").removeClass("menu_open");
		$(".nav_toggle").removeClass("close");
	});
	//counter js
	$('.counter_number').countTo();
	//service tabs
	$('.bnr_country_box').click(function () {
		var slide_data = $(this).attr('data-slide');
		$(".banner_next_slide_sec").removeClass('show');
		$(".banner_country_sec_slide").addClass('hide');
		$('#' + slide_data).addClass("show");
	});
	 // service slider
      $('.banner_slider').owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        nav: false,
        autoplay: false,
        autoplayTimeout: 3000,
        autoplayHoverPause:true,
        slideSpeed: 1500,
        smartSpeed: 1500,
        dots: true,
      });
	 // USP slider
		$('.zm_usp_sliders').owlCarousel({
			loop:false,
			margin:30,
			items: 5,
			nav:true,
			dots: false,
			slideSpeed: 1500,
			smartSpeed: 1500,
			autoplay:true,
			autoplayTimeout: 3000,
			navText: ["<img src='assets/images/hand_nav_left.png' alt='hand nav'>","<img src='assets/images/hand_nav_right.png' alt='hand nav'>"],
			responsive:{
				0:{
					items:1,
					margin:10,
				},
				576:{
					items:2,
					margin:20,
				},
				992:{
					items:2,
					margin:20,
				},
				1200:{
					items:3,
					margin:30,
				},
				1260:{
					items:4,
					margin:20,
				},
				1400:{
					items:5,
					margin:20,
				},
				1700:{
					items:5,
					margin:30,
				}
			}
		})
		// store picture slider
		$('.store_picture_slider').owlCarousel({
			loop:false,
			margin:30,
			items: 2,
			nav:true,
			dots: false,
			slideSpeed: 1500,
			smartSpeed: 1500,
			autoplay:false,
			autoplayTimeout: 3000,
			navText: ["<img src='assets/images/hand_nav_left.png' alt='hand nav'>","<img src='assets/images/hand_nav_right.png' alt='hand nav'>"],
			responsive:{
				0:{
					items:1,
					margin:10,
				},
				575:{
					items:1,
					margin:20,
				},
				600:{
					items:2,
					margin:20,
				},
				992:{
					items:2,
					margin:30,
				}
			}
		})
		//category slider
		$('.loc_category_slider').owlCarousel({
			loop:false,
			margin:2,
			items: 4,
			nav:true,
			dots: false,
			autoplay:false,
			slideSpeed: 1500,
			smartSpeed: 1500,
			autoplayTimeout: 3000,
			navText: ["<img src='assets/images/hand_nav_left.png' alt='hand nav'>","<img src='assets/images/hand_nav_right.png' alt='hand nav'>"],
			responsive:{
				0:{
					items:1,
				},
				576:{
					items:1,
				},
				767:{
					items:2,
				},
				1201:{
					items:3,
				},
				1300:{
					items:4,
				}
			}
		})
		//promo slider
		$('.promo_banner_slider').owlCarousel({
			loop:false,
			margin:0,
			items: 1,
			nav:false,
			dots: true,
			autoplay:false,
			slideSpeed: 1500,
			smartSpeed: 1500,
			autoplayTimeout: 4000,
			animateIn: 'fadeIn',
              animateOut: 'fadeOut'
		});
		//nona fix slider
		$('.nona_fix_slider').owlCarousel({
			loop:false,
			margin:1,
			items: 6,
			nav:true,
			dots: false,
			slideSpeed: 1500,
			smartSpeed: 1500,
			autoplay:true,
			autoplayTimeout: 3000,
			navText: ["<img src='assets/images/hand_nav_left.png' alt='hand nav'>","<img src='assets/images/hand_nav_right.png' alt='hand nav'>"],
			responsive:{
				0:{
					items:1,
				},
				575:{
					items:2,
				},
				600:{
					items:2,
				},
				992:{
					items:3,
				},
				1200:{
					items:4,
				},
				1400:{
					items:5,
				},
				1800:{
					items:6,
				}
			}
		});
		//nona Bakery slider
		$('.nona_five_col_slider').owlCarousel({
			loop:false,
			margin:1,
			items: 5,
			nav:true,
			dots: false,
			slideSpeed: 1500,
			smartSpeed: 1500,
			autoplay:false,
			autoplayTimeout: 3000,
			navText: ["<img src='assets/images/hand_nav_left.png' alt='hand nav'>","<img src='assets/images/hand_nav_right.png' alt='hand nav'>"],
			responsive:{
				0:{
					items:1,
				},
				575:{
					items:2,
				},
				600:{
					items:2,
				},
				992:{
					items:3,
				},
				1200:{
					items:4,
				},
				1400:{
					items:4,
				},
				1800:{
					items:5,
				}
			}
		});
		// choose menu step slider
		$('.choose_menu_step_slider').owlCarousel({
			loop:false,
			margin:10,
			items: 4,
			nav:true,
			dots: false,
			slideSpeed: 1500,
			smartSpeed: 1500,
			autoplay:true,
			autoplayTimeout: 3000,
			navText: ["<img src='assets/images/hand_nav_left.png' alt='hand nav'>","<img src='assets/images/hand_nav_right.png' alt='hand nav'>"],
			responsive:{
				0:{
					items:1,
				},
				768:{
					items:2,
				},
				600:{
					items:2,
				},
				992:{
					items:3,
				},
				1200:{
					items:4,
				},
				1400:{
					items:4,
				},
				1800:{
					items:4,
				}
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
		
		$('.countryname_box').on('click', function () {
			$(this).parents(".location_container").addClass("outlet_container");
			$(".country_outlet_popup").addClass("show");
		});
		$('.outlet_name').on('click', function () {
			$(".country_outlet_name_popup").addClass("show");
			 
			$(this).parents(".country_outlet_popup").removeClass("show");
		});
		$('.o_p_closebtn').on('click', function () {
			$(".country_outlet_name_popup").removeClass("show");
			$(this).parents(".location_container").removeClass("outlet_container");
		});
		$('.popup_bringbtn').on('click', function () {
			$(".country_outlet_name_popup").removeClass("show");
			$(this).parents(".location_container").removeClass("outlet_container");
		});
		//on click input number increase
		$('.qty_input').prop('disabled', true);
		$('.plus_btn').click(function(){
			$('.qty_input').val(parseInt($('.qty_input').val()) + 1 );
		});
		$('.minus_btn').click(function(){
			$('.qty_input').val(parseInt($('.qty_input').val()) - 1 );
			if ($('.qty_input').val() == 0) {
				$('.qty_input').val(1);
			}
		});
		//nona tabs
		$('.nona_tabmenu .tablink').click(function () {
			var nona_tabs = $(this).attr('data-tab');
			$('.nona_tabmenu .tablink').removeClass('active');
			$(this).addClass('active');
			$(".nona_tab_panel").removeClass('active');
			$('#' + nona_tabs).addClass("active");
		});
		//cart slide popup
		$('.cart_open_btn').click(function () {
			$(".cart_slide_popup").addClass("show");
		});
		$('.cart_slide_popup').click(function () {
			$(this).removeClass("show");
		});
		$('.cart_close_btn').click(function () {
			$(this).parents(".cart_slide_popup").removeClass("show");
		});
		$(".cart_slide_box").click(function(event){
			event.stopPropagation();
		});
		//on scroll connect franchise
		$(window).scroll(function() { 
			var window_scroll = $(window).scrollTop();    
			var bnr_height = $(".home_bannertextdv").outerHeight(); 
			if (window_scroll > bnr_height / 1000) {
				$(".h_fix_franchise_image").addClass("show");
			}
			else {
				$(".h_fix_franchise_image").removeClass("show");
			}
		});
		$(window).scroll(function() {
			var wndscroll = $(window).scrollTop();
			if (wndscroll >= 160) {
				$("body").addClass("activebody");
			} else {
				$("body").removeClass("activebody");
			}
		});
		//show humburger menu on scroll
		$(window).scroll(function() {
			var wndscroll2 = $(window).scrollTop();
			if (wndscroll2 >= 160) {
				$(".humburger_div").addClass("show");
			} else {
				$(".humburger_div").removeClass("show");
			}
		});
		$('.humburger_menuicon').click(function () {
			$(".humburger_menubox").addClass("show");
		});
		$('.humbuger_close').click(function () {
			$(this).parents(".humburger_menubox").removeClass("show");
		});
		//quantity increment input
		$(".quantity_counter_input").inputSpinner()
		$(".increment_input").inputSpinner()

		//product detail slider
			var sync1 = $(".prod_dtl_slider");
			var sync2 = $(".prod_thumb_slider");
			var slidesPerPage = 4; //globaly define number of elements per page
			var syncedSecondary = true;
		  
			sync1.owlCarousel({
			  items : 1,
			  slideSpeed: 1500,
			smartSpeed: 1500,
			  nav: false,
			  autoplay: false,
			  dots: false,
			  loop: true,
			  responsiveRefreshRate : 200,
		  
			}).on('changed.owl.carousel', syncPosition);
		  
			sync2
			  .on('initialized.owl.carousel', function () {
				sync2.find(".owl-item").eq(0).addClass("current");
			  })
			  .owlCarousel({
			  items : slidesPerPage,
			  dots: false,
			  nav: true,
			  navText: ["<i class='far fa-angle-left'></i>","<i class='far fa-angle-right'></i>"],
			slideSpeed: 1500,
			smartSpeed: 1500,
			  slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
			  responsiveRefreshRate : 100
			}).on('changed.owl.carousel', syncPosition2);
		  
			function syncPosition(el) {
			  //if you set loop to false, you have to restore this next line
			  //var current = el.item.index;
			  
			  //if you disable loop you have to comment this block
			  var count = el.item.count-1;
			  var current = Math.round(el.item.index - (el.item.count/2) - .5);
			  
			  if(current < 0) {
				current = count;
			  }
			  if(current > count) {
				current = 0;
			  }
			  
			  //end block
		  
			  sync2
				.find(".owl-item")
				.removeClass("current")
				.eq(current)
				.addClass("current");
			  var onscreen = sync2.find('.owl-item.active').length - 1;
			  var start = sync2.find('.owl-item.active').first().index();
			  var end = sync2.find('.owl-item.active').last().index();
			  
			  if (current > end) {
				sync2.data('owl.carousel').to(current, 100, true);
			  }
			  if (current < start) {
				sync2.data('owl.carousel').to(current - onscreen, 100, true);
			  }
			}
			
			function syncPosition2(el) {
			  if(syncedSecondary) {
				var number = el.item.index;
				sync1.data('owl.carousel').to(number, 100, true);
			  }
			}
			
			sync2.on("click", ".owl-item", function(e){
			  e.preventDefault();
			  var number = $(this).index();
			  sync1.data('owl.carousel').to(number, 300, true);
			});
		//product detail slider end



		

		//show textarea on button click
		$('.cart_add_note_dv .crt_icon').click(function () {
			$(this).toggleClass("active");
			$(".cart_textareabox").slideToggle(200);
		});
		$('.datetimepicker').datetimepicker({
			allowInputToggle: true,
			//debug: true
		});
		//category slider
		$('.our_team_carousel').owlCarousel({
			loop:false,
			margin:20,
			items: 4,
			nav:true,
			dots: false,
			autoplay:false,
			slideSpeed: 1500,
			smartSpeed: 1500,
			autoplayTimeout: 3000,
			navText: ["<img src='assets/images/hand_nav_left.png' alt='hand nav'>","<img src='assets/images/hand_nav_right.png' alt='hand nav'>"],
			responsive:{
				0:{
					items:1,
					margin:5,
				},
				576:{
					items:1,
					margin:10,
				},
				767:{
					items:2,
					margin:10,
				},
				1201:{
					items:3,
					margin:10,
				},
				1300:{
					items:3,
					margin:15,
				},
				1400:{
					items:4,
					margin:20
				},
				1500:{
					items:4,
					margin:20
				},
				1600:{
					items:4,
					margin:20
				}
			}
		})
		//category slider
		$('.inmedia_carousel').owlCarousel({
			loop:false,
			margin:0,
			items: 1,
			nav:true,
			dots: false,
			autoplay:false,
			slideSpeed: 1500,
			smartSpeed: 1500,
			autoplayTimeout: 3000,
			autoHeight: true,
			navText: ["<img src='assets/images/hand_nav_left.png' alt='hand nav'>","<img src='assets/images/hand_nav_right.png' alt='hand nav'>"],
		});
		//category slider
		$('.our_certificate_carousel').owlCarousel({
			loop:false,
			margin:30,
			items: 3,
			nav:true,
			dots: false,
			autoplay:false,
			slideSpeed: 1500,
			smartSpeed: 1500,
			autoplayTimeout: 3000,
			navText: ["<img src='assets/images/hand_nav_left.png' alt='hand nav'>","<img src='assets/images/hand_nav_right.png' alt='hand nav'>"],
			responsive:{
				0:{
					items:1,
					margin:5,
				},
				768:{
					items:2,
					margin:10,
				},
				1201:{
					items:3,
					margin:10,
				},
				1300:{
					items:3,
					margin:20,
				},
				1600:{
					items:3,
					margin:30
				}
			}
		});
		//header drop down
		$(".dropdown-item").click(function(){
			var this_text = $(this).text();
			$(this).parents(".country_dropdown").find(".dropdown_text").text(this_text);
		});
		//five colm slider
		$('.five_col_list_slider').owlCarousel({
			loop:false,
			margin:1,
			items: 5,
			nav:true,
			dots: false,
			slideSpeed: 1500,
			smartSpeed: 1500,
			autoplay:true,
			autoplayTimeout: 3000,
			navText: ["<img src='assets/images/hand_nav_left.png' alt='hand nav'>","<img src='assets/images/hand_nav_right.png' alt='hand nav'>"],
			responsive:{
				0:{
					items:1,
					touchDrag  : true,
					mouseDrag  : true
				},
				575:{
					items:2,
					touchDrag  : true,
					mouseDrag  : true
				},
				600:{
					items:2,
					touchDrag  : true,
					mouseDrag  : true
				},
				992:{
					items:3,
					touchDrag  : true,
					mouseDrag  : true
				},
				1200:{
					items:4,
					touchDrag  : true,
					mouseDrag  : true
				},
				1400:{
					items:4,
					touchDrag  : true,
					mouseDrag  : true
				},
				1800:{
					items:5,
					touchDrag  : false,
					mouseDrag  : false
				}
			}
		});
		//gallery tabs
		$('.gallery_filter_tab .tabs_nav').click(function () {
		 	var glr_tabs = $(this).attr('data-tab');
			$('.gallery_filter_tab .tabs_nav').removeClass('active');
			$(this).addClass('active');
			$(".gallery_filter_panel").removeClass('active');
			$('#' + glr_tabs).addClass("active");
		});
		//gallery single slider
		var g_sync1 = $(".gallery_single_slider");
		var g_sync2 = $(".gallery_thumb_slider");
		var g_slidesPerPage = 5; //globaly define number of elements per page
		var g_syncedSecondary = true;

		g_sync1.owlCarousel({
		items : 1,
		slideSpeed: 1500,
		smartSpeed: 1500,
		nav: true,
		autoplay: false,
		dots: false,
		loop: true,
		responsiveRefreshRate : 200,
		navText: ["<img src='assets/images/hand_nav_left.png' alt='hand nav'>","<img src='assets/images/hand_nav_right.png' alt='hand nav'>"],

		}).on('changed.owl.carousel', gsyncPosition);

		g_sync2
		.on('initialized.owl.carousel', function () {
			g_sync2.find(".owl-item").eq(0).addClass("current");
		})
		.owlCarousel({
		items : g_slidesPerPage,
		margin:10,
		dots: false,
		nav: true,
		navText: ["<img src='assets/images/hand_nav_left.png' alt='hand nav'>","<img src='assets/images/hand_nav_right.png' alt='hand nav'>"],
		slideSpeed: 1500,
		smartSpeed: 1500,
		slideBy: g_slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
		responsiveRefreshRate : 100,
		responsive:{
			0:{
				items:3,
				margin:5,
				slideBy: 3
			},
			992:{
				items:4,
				margin:5,
				slideBy: 4
			},
			1200:{
				items:g_slidesPerPage,
				margin:10,
				slideBy: g_slidesPerPage
			}
		}
		}).on('changed.owl.carousel', gsyncPosition2);

		function gsyncPosition(el) {
		//if you set loop to false, you have to restore this next line
		//var current = el.item.index;
		
		//if you disable loop you have to comment this block
		var count = el.item.count-1;
		var current = Math.round(el.item.index - (el.item.count/2) - .5);
		
		if(current < 0) {
			current = count;
		}
		if(current > count) {
			current = 0;
		}
		
		//end block

		g_sync2
			.find(".owl-item")
			.removeClass("current")
			.eq(current)
			.addClass("current");
		var onscreen = g_sync2.find('.owl-item.active').length - 1;
		var start = g_sync2.find('.owl-item.active').first().index();
		var end = g_sync2.find('.owl-item.active').last().index();
		
		if (current > end) {
			g_sync2.data('owl.carousel').to(current, 100, true);
		}
		if (current < start) {
			g_sync2.data('owl.carousel').to(current - onscreen, 100, true);
		}
		}

		function gsyncPosition2(el) {
		if(g_syncedSecondary) {
			var number = el.item.index;
			g_sync1.data('owl.carousel').to(number, 100, true);
		}
		}

		g_sync2.on("click", ".owl-item", function(e){
		e.preventDefault();
		var number = $(this).index();
		g_sync1.data('owl.carousel').to(number, 300, true);
		});
		//gallery single slider end

		//show gallery filter box
		if ($(window).width() <= 1199) {
			$('.filter_text').click(function () {
				$(".gallery_filter_tab").slideToggle(100);
			});
			$('.tabs_nav').click(function () {
				$(this).parents(".gallery_filter_tab").slideUp(100);
			});
		 }
		 else {
			
		 }
		//active order collpase panel
		$('.actv_order_collapse_head').on('click', function () {
			$(this).next(".actv_order_dtl_collapse_box").slideToggle(200);
			$(this).toggleClass("active");
		});
		//on scroll show my account sidebar
		$(window).scroll(function() { 
			var window_scrolls = $(window).scrollTop();    
			var main_hdr_height = $(".main_header").outerHeight();
			var pro_bnr_height = $(".pro_member_banner_sec").outerHeight();
			var final_height = main_hdr_height+pro_bnr_height
			if (window_scrolls > final_height ) {
				$(".member_prof_sidebar").addClass("sticky_sidebar");
				console.log(final_height);
			}
			else {
				$(".member_prof_sidebar").removeClass("sticky_sidebar");
			}
		});
		//show more text
		if ($('.show_more_text').length > 0) {
			$('.show_more_text').myOwnLineShowMoreLess({
				showLessText: 'Read Less',
				showMoreText: 'Read More',
			});
		}
})(jQuery);
$(document).ready(function() {
	$('.story_fix_navs a[href*=#]').bind('click', function(e) {
			e.preventDefault(); // prevent hard jump, the default behavior
			var target = $(this).attr("href"); // Set the target as variable
			// perform animated scrolling by getting top-position of target-element and set it as scroll target
			$('html, body').stop().animate({
					scrollTop: $(target).offset().top
			}, 500, function() {
					location.hash = target; //attach the hash (#jumptarget) to the pageurl
			});
			return false;
	});
});
$(window).scroll(function() {
	var scrollDistance = $(window).scrollTop();
	// Assign active class to nav links while scolling
	$('.page_sections').each(function(i) {
			if ($(this).position().top <= scrollDistance + 10) {
					$('.story_fix_navs a.active').removeClass('active');
					$('.story_fix_navs a').eq(i).addClass('active');
			}
	});
}).scroll();


