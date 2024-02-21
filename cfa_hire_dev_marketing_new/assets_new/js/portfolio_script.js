!function(e){"use strict";e(".nav_toggle").on("click",function(){e(".navigation_menu").toggleClass("menu_open"),e(this).toggleClass("close")}),e(".nav_close_btn").on("click",function(){e(".navigation_menu").removeClass("menu_open"),e(".nav_toggle").removeClass("close")}),e(".navigation_menu ul li ul.sub_menu").parents("li").addClass("dropdown_toggle"),e(".dropdown_toggle").append("<span class='caret_down'><i class='far fa-angle-down'></i></span>"),e(".megamenu_dropdown_wrap").parents("li").addClass("megamenu_li"),e(".megamenu_li").append("<span class='mega_caret_down'><i class='far fa-angle-down'></i></span>"),e(".navigation_menu ul li").children(".mega_caret_down").on("click",function(){e(this).toggleClass("caret_up"),e(this).prev(".megamenu_dropdown_wrap").slideToggle()}),992>e(window).width()&&(e(".navigation_menu ul li").children(".caret_down").on("click",function(){e(this).toggleClass("caret_up"),e(this).prev("ul").slideToggle()}),e(".mega_link_box .headings").append("<span class='mega_toggle'><i class='far fa-plus'></i></span>"),e(".mega_toggle").on("click",function(){e(this).toggleClass("close_tgl"),e(this).parents(".headings").next(".mega_menu_list").slideToggle()})),e(".counter_number").countTo(),e(".in_accordion_panel").eq(0).children(".in_accordion_heading").addClass("active"),e(".in_accordion_panel").eq(0).children(".in_accordion_content").slideDown(),e(".in_accordion_heading").on("click",function(){e(this).toggleClass("active"),e(this).next(".in_accordion_content").slideToggle(250),e(".in_accordion_heading").not(this).next(".in_accordion_content").slideUp(250),e(".in_accordion_heading").not(this).removeClass("active")}),e(".service_tab .h_srvc_tabs").click(function(){var a=e(this).attr("data-tab");e(".service_tab .h_srvc_tabs").removeClass("active"),e(this).addClass("active"),e(".service_tab_panel").removeClass("active"),e("#"+a).addClass("active")}),e(".clients_tab_lst li").click(function(){var a=e(this).attr("data-tab");e(".clients_tab_lst li").removeClass("active"),e(this).addClass("active"),e(".client_tab_panel").removeClass("active"),e("#"+a).addClass("active")}),e(".techno_tab_lst li").click(function(){var a=e(this).attr("data-tab");e(".techno_tab_lst li").removeClass("active"),e(this).addClass("active"),e(".techno_tab_panel").removeClass("active"),e("#"+a).addClass("active")}),e(".industries_tab_lst li").click(function(){var a=e(this).attr("data-tab");e(".industries_tab_lst li").removeClass("active"),e(this).addClass("active"),e(".industries_tab_panel").removeClass("active"),e("#"+a).addClass("active")}),e(".trending_tabs .tabs_nav").click(function(){var a=e(this).attr("data-tab");e(".trending_tabs .tabs_nav").removeClass("active"),e(this).addClass("active"),e(".trending_tab_panel").removeClass("active"),e("#"+a).addClass("active")}),e(".health_type_tab .tabs_nav").click(function(){var a=e(this).attr("data-tab");e(".health_type_tab .tabs_nav").removeClass("active"),e(this).addClass("active"),e(".health_type_tab_panel").removeClass("active"),e("#"+a).addClass("active")}),e(".stf_augmnt_tabs .tabs_nav").click(function(){var a=e(this).attr("data-tab");e(".stf_augmnt_tabs .tabs_nav").removeClass("active"),e(this).addClass("active"),e(".stf_augmnt_tab_panel").removeClass("active"),e("#"+a).addClass("active")}),0<e(".show_more_text").length&&e(".show_more_text").myOwnLineShowMoreLess({showLessText:"Read Less",showMoreText:"Read More"}),e(".ul_expandible_3").each(function(){var a=e(this),t=a.find("li:gt(3)"),s=a.hasClass("expanded");t[s?"show":"hide"](),0<t.length&&a.append(e('<span class="showmore"><li class="expand">'+(s?"Show Less":"Show More")+"</li></span>").click(function(s){var i=a.hasClass("expanded");s.preventDefault(),e(this).html(i?"<li>Show More</li>":"<li>Show Less</li>"),a.toggleClass("expanded"),t.toggle()}))}),e(".banner_slider").owlCarousel({loop:!0,margin:0,items:1,nav:!1,autoplay:!0,autoplayTimeout:3e3,autoplayHoverPause:!0,slideSpeed:1500,smartSpeed:1500,dots:!0}),e(".ecomm_technology_slider").owlCarousel({loop:!0,margin:20,items:4,nav:!1,autoplay:!0,autoplayTimeout:4e3,autoplayHoverPause:!0,slideSpeed:1500,smartSpeed:1500,dots:!0,responsiveClass:!0,responsive:{0:{items:1,margin:10},768:{items:2},992:{items:3},1200:{items:4,margin:20}}}),e(".other_industries_slider").owlCarousel({loop:!0,margin:20,stagePadding:200,items:2,nav:!1,autoplay:!0,autoplayTimeout:6e3,autoplayHoverPause:!0,slideSpeed:1500,smartSpeed:1500,dots:!0,responsiveClass:!0,responsive:{0:{items:1,margin:10,stagePadding:50},768:{items:2,stagePadding:50},992:{items:2,stagePadding:100},1200:{items:2,margin:20}}}),e(".infrastructure_slider").owlCarousel({loop:!0,margin:20,stagePadding:200,items:2,nav:!1,dots:!1,autoplay:!0,autoplayTimeout:4e3,autoplayHoverPause:!0,slideSpeed:1500,smartSpeed:1500,responsiveClass:!0,responsive:{0:{items:1,margin:10,stagePadding:50},768:{items:2,stagePadding:50},992:{items:2,stagePadding:100},1200:{items:2,margin:20}}}),e(".ecommerce_app_slider").owlCarousel({loop:!1,margin:8,items:6,nav:!1,nav:!0,autoplay:!0,autoplayTimeout:6e3,autoplayHoverPause:!0,slideSpeed:1500,smartSpeed:1500,dots:!1,navText:["<i class='far fa-angle-left'></i>","<i class='far fa-angle-right'></i>"],responsiveClass:!0,responsive:{0:{items:1},500:{items:2},768:{items:3},992:{items:4},1200:{items:6,margin:8}}}),e(".certificate_logo_slider").owlCarousel({loop:!0,margin:40,items:5,nav:!1,autoplay:!0,autoplayTimeout:4e3,autoplayHoverPause:!0,slideSpeed:1500,smartSpeed:1500,dots:!0,responsiveClass:!0,responsive:{0:{items:1,margin:10},480:{items:2,margin:10},768:{items:3,margin:10},992:{items:4,margin:20},1200:{items:5,margin:40}}}),e(".faq_accordion_heading").on("click",function(){e(this).toggleClass("active"),e(this).next(".faq_accordion_content").slideToggle(250),e(".faq_accordion_heading").not(this).next(".faq_accordion_content").slideUp(250),e(".faq_accordion_heading").not(this).removeClass("active")}),(new WOW).init(),0<e(".mixitup_container").length&&mixitup(a=document.querySelector(".mixitup_container"),{selectors:{target:'[data-ref~="mixitup-target"]'}}),e(".selectpickers").selectpicker(),new Swiper(".testimonial_slider",{loop:!1,effect:"fade",grabCursor:!0,pagination:{el:".testi_swiper_pagination",clickable:!0},navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"}}),e(".elearn_app_slider").owlCarousel({loop:!0,margin:28,stagePadding:350,items:1,nav:!1,autoplay:!0,autoplayTimeout:6e3,autoplayHoverPause:!0,slideSpeed:1500,smartSpeed:1500,dots:!0,responsiveClass:!0,responsive:{0:{items:1,margin:10,stagePadding:0},480:{stagePadding:50},768:{items:1,stagePadding:100},992:{items:1,stagePadding:130},1200:{items:1,margin:28,stagePadding:250},1300:{stagePadding:350},1800:{stagePadding:550}}}),e(".health_it_sol_slider").owlCarousel({loop:!0,margin:28,stagePadding:600,items:1,nav:!1,autoplay:!0,autoplayTimeout:6e3,autoplayHoverPause:!0,slideSpeed:1500,smartSpeed:1500,dots:!0,responsiveClass:!0,responsive:{0:{items:1,margin:10,stagePadding:0},480:{stagePadding:50},768:{items:1,stagePadding:100},992:{items:1,stagePadding:130},1200:{items:1,margin:28,stagePadding:250},1300:{stagePadding:400},1800:{stagePadding:600}}}),e("#e_learn_srvc_carousel").carousel({interval:5e3,cycle:!0}),e(document).ready(function(){var a="Read More";e(".show_more_text3").each(function(){var t=e(this).html();t.length>170&&(t=t.substr(0,170)+'<span class="moreellipses">...&nbsp;</span><span class="morecontent"><span>'+t.substr(170,t.length-170)+'</span>&nbsp;&nbsp;<a href="javascript:void(0)" class="morelink">'+a+"</a></span>",e(this).html(t))}),e(".morelink").click(function(){return e(this).hasClass("less")?(e(this).removeClass("less"),e(this).html(a)):(e(this).addClass("less"),e(this).html("Read less")),e(this).parent().prev().toggle(),e(this).prev().toggle(),!1})}),e(document).ready(function(){var a="Read More";e(".show_more_text4").each(function(){var t=e(this).html();t.length>200&&(t=t.substr(0,200)+'<span class="moreellipses">...&nbsp;</span><span class="morecontent1"><span>'+t.substr(200,t.length-200)+'</span>&nbsp;&nbsp;<a href="javascript:void(0)" class="morelink1">'+a+"</a></span>",e(this).html(t))}),e(".morelink1").click(function(){return e(this).hasClass("less")?(e(this).removeClass("less"),e(this).html(a)):(e(this).addClass("less"),e(this).html("Read less")),e(this).parent().prev().toggle(),e(this).prev().toggle(),!1})}),e(window).on("load",function(){e(".cfa_preloader").fadeOut(1e3),e(".hdr_empty_socials").parents("body").addClass("empty_social_body")}),e(window).scroll(function(){500<=e(window).scrollTop()?e(".goto_top_btn").addClass("show_scroll_btn"):e(".goto_top_btn").removeClass("show_scroll_btn")}),e(".goto_top_btn").click(function(){return e("html, body").animate({scrollTop:0},300),!1}),e(".partner_accordion").eq(0).children(".prtnr_accordion_heading").addClass("active"),e(".partner_accordion").eq(0).children(".prtnr_accordion_content").slideDown(),e(".prtnr_accordion_heading").on("click",function(){e(this).toggleClass("active"),e(this).next(".prtnr_accordion_content").slideToggle(250),e(".prtnr_accordion_heading").not(this).next(".prtnr_accordion_content").slideUp(250),e(".prtnr_accordion_heading").not(this).removeClass("active")}),e(".employe_feedback_slider").owlCarousel({loop:!0,margin:35,stagePadding:200,items:2,nav:!1,autoplay:!0,autoplayTimeout:6e3,autoplayHoverPause:!0,slideSpeed:1500,smartSpeed:1500,dots:!1,responsiveClass:!0,responsive:{0:{items:1,margin:0,stagePadding:0},401:{items:1,margin:10,stagePadding:30},481:{items:1,margin:10,stagePadding:60},768:{margin:15,items:1,stagePadding:100},992:{margin:15,items:1,stagePadding:100},1200:{items:2,margin:15,stagePadding:100},1500:{items:2,margin:35}}});var a,t=e(".employe_feedback_slider");t.owlCarousel(),e(".cstm_next_button").click(function(){t.trigger("next.owl.carousel")}),e(".cstm_prev_button").click(function(){t.trigger("prev.owl.carousel",[300])}),992>e(window).width()&&(e(".stf_augmnt_tab_hdng").on("click",function(){e(this).toggleClass("active"),e(this).next(".stf_augmnt_tab_panel").slideToggle(250),e(".stf_augmnt_tab_hdng").not(this).next(".stf_augmnt_tab_panel").slideUp(250),e(".stf_augmnt_tab_hdng").not(this).removeClass("active")}),e(".srvc_accordion_hdng").on("click",function(){e(this).toggleClass("active"),e(this).next(".service_tab_panel ").slideToggle(250),e(".srvc_accordion_hdng").not(this).next(".service_tab_panel").slideUp(250),e(".srvc_accordion_hdng").not(this).removeClass("active")})),e(".client_feedback_slider").owlCarousel({loop:!1,margin:18,stagePadding:40,items:2,nav:!1,autoplay:!0,autoplayTimeout:6e3,autoplayHoverPause:!0,slideSpeed:1500,smartSpeed:1500,dots:!1,responsiveClass:!0,responsive:{0:{items:1,margin:10,stagePadding:0},361:{items:1,margin:10,stagePadding:30},540:{margin:15,items:2,stagePadding:20},768:{margin:15,items:2},992:{margin:15,items:1,stagePadding:100},1200:{items:2,margin:15,stagePadding:40},1500:{items:2,margin:18,stagePadding:40}}});var s=e(".client_feedback_slider");s.owlCarousel(),e(".clnt_next_button").click(function(){s.trigger("next.owl.carousel")}),e(".clnt_prev_button").click(function(){s.trigger("prev.owl.carousel",[300])}),e(".play_btn").click(function(){var a=e(this).attr("video-id");e(".client_video_ifram iframe").attr("src",a+="?autoplay=1")}),e(".cv_upload").change(function(a){a=a.target.files[0].name,e(this).next(".cv_upload_label").children(".texts").text(a)}),e("#fileupload").change(function(a){a=a.target.files[0].name,e(this).next(".file_upload_label").children(".texts").text(a)}),e(".apply_btn").click(function(){var a=e(this).attr("data-designation");e(".c_designation_input").attr("value",a)}),e(".dedic_dev_slider").owlCarousel({loop:!1,margin:15,items:3,nav:!1,autoplay:!0,autoplayTimeout:6e3,autoplayHoverPause:!0,slideSpeed:1500,smartSpeed:1500,dots:!1,responsiveClass:!0,responsive:{0:{items:1,margin:10},361:{items:1,margin:10},540:{margin:15,items:1},840:{margin:15,items:2},992:{margin:15,items:2},1200:{items:3,margin:15},1500:{items:3,margin:15}}});var i=e(".dedic_dev_slider");i.owlCarousel(),e(".dev_next_button").click(function(){i.trigger("next.owl.carousel")}),e(".dev_prev_button").click(function(){i.trigger("prev.owl.carousel",[300])}),e(".port_tab_item").click(function(){var a=e(this).attr("data-tab");e(".port_tab_item").removeClass("active"),e(this).addClass("active"),e(".portfolio_tab_panel").removeClass("active"),e("#"+a).addClass("active")}),e(".plan-read-more-btn .p-readmore").on("click",function(){e(this).parents(".row").next(".plan-detail-sec").toggleClass("pricing-active")}),e(".packages-banner-slider").owlCarousel({loop:!0,margin:15,items:5,nav:!1,autoplay:!1,autoplayTimeout:2e3,autoplayHoverPause:!0,slideSpeed:1e3,smartSpeed:1e3,dots:!0,responsiveClass:!0,responsive:{0:{items:1,margin:10},575:{items:2},768:{items:3},992:{items:4},1200:{items:5,margin:15}}})}(jQuery);


(function ($) {
	"use strict";

	//counter js
	//$('.counter_number').countTo();
	$('.counter_number').each(function() {
	  var $this = $(this),
		countTo = $this.attr('data-to');

	  $({
		countNum: $this.text()
	  }).animate({
		  countNum: countTo
		},

		{
		  duration: 2500,
		  easing: 'linear',
		  step: function() {
			$this.text(commaSeparateNumber(Math.floor(this.countNum)));
		  },
		  complete: function() {
			$this.text(commaSeparateNumber(this.countNum));
			//alert('finished');
		  }
		}
	  );

	});

	function commaSeparateNumber(val) {
	  while (/(\d+)(\d{3})/.test(val.toString())) {
		val = val.toString().replace(/(\d+)(\d{3})/, '$1' + ',' + '$2');
	  }
	  return val;
	}

         //wow animation js
		new WOW().init();
	
	
// resume testimonial slider

$('.dev-testimonial-slider').owlCarousel({
	loop: false,
	margin: 35,
	// stagePadding: 40,
	items: 2,
	nav: false,
	autoplay: false,
	autoplayTimeout: 6000,
	autoplayHoverPause:true,
	slideSpeed: 1500,
	smartSpeed: 1500,
	dots: true,
	responsiveClass:true,
	autoHeight:true,
	responsive:{
		0:{
			items:1,
			margin: 10,
			stagePadding: 0,
		},
		361:{
			items:1,
			margin: 10,
			// stagePadding: 30,
		},
		540:{
			margin: 15,
			items:1,
			// stagePadding: 20,
		},
		768:{
			margin: 15,
			items:1,
		},
		992:{
			margin: 15,
			items:2,
			// stagePadding: 100,
		},
		1200:{
			items:2,
			margin: 35,
			stagePadding: 0,
		},
		1500:{
			items:2,
			margin: 35,
			stagePadding: 0,
		}
	}
  });
// resume testimonial slider end
// progress bar query start
$(window).scroll(function() { 
	var window_scrolls = $(window).scrollTop();   
	if (window_scrolls > 0) {
			$(".main_header").addClass("sticky_header");
	}
	else {
			$(".main_header").removeClass("sticky_header");
	}
});
// progress bar query end
	//portfolio tabs
	    // disable right click
    //document.addEventListener('contextmenu', event => event.preventDefault());
    document.onkeydown = function (e) {
        // disable F12 key
        // if(e.keyCode == 123) {
            // return false;
        // }
 
        // disable I key
        //if(e.ctrlKey && e.shiftKey && e.keyCode == 73){
            //return false;
        //}
 
        // disable J key
        //if(e.ctrlKey && e.shiftKey && e.keyCode == 74) {
            //return false;
        //}
		// disable s key
        //if(e.ctrlKey && e.keyCode == 83) {
            //return false;
        //}
        // disable U key
        // if(e.ctrlKey && e.keyCode == 85) {
            // return false;
        // }
    }
})(jQuery);