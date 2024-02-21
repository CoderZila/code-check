
	//counter js start
	$('.counter_number').countTo();
	// counter js end
	// full page js start

//    var myFullpage = new fullpage('#fullpage', {
// 	sectionsColor: ['#fff', '#fff', '#fff', '#fff', '#fff']
// });
	// wow animation js start
	new WOW().init();
	//    wow animation end
// fullpage js end
	$(document).ready(function() {
  
		// variables 
		var toTop = $('#to_top');
		// logic
		toTop.on('click', function() {
		  $('html, body').animate({
			scrollTop: $('.side_tab_section').offset().top,
		  });
		});
	  
	  });

	// Popup
	jQuery('.cfa-video-play-btn .play-icon').click(function () {
			var srchref="https://www.youtube.com/embed/";
			var videoSrc = jQuery(this).attr('data-id');
			var autoplay ='';
			if($(this).data('autoplay') == true) autoplay = '?autoplay=1';
			jQuery('.popup-overlay-wr').fadeIn();
			jQuery('.banner_video_wr').fadeIn();
			jQuery('.banner_video_wr iframe').fadeIn();
			jQuery('.banner_video_wr img').fadeOut();
			jQuery('.banner_video_wr .close_btn').fadeIn();
			jQuery('.cfa-video-play-btn').hide();
			jQuery('.banner_video_wr iframe').attr('src', srchref+videoSrc+autoplay);
	});
	jQuery('.close_btn').click(function() {
		jQuery('.banner_video_wr .close_btn').fadeOut();
		jQuery('.cfa-video-play-btn').show();
		jQuery('.banner_video_wr img').fadeIn();
		jQuery('.banner_video_wr .close_btn').hide();
		jQuery('.banner_video_wr iframe').fadeOut();
		jQuery('.banner_video_wr iframe').attr('src', '');
	});



		jQuery(".side_port_tab_item").click(function() {
			var a = jQuery(this).attr("data-tab");
			jQuery(".side_port_tab_item").removeClass("active"),
			jQuery(this).addClass("active"),
			jQuery(".side_portfolio_tab_panel").removeClass("active"),
			jQuery("#" + a).addClass("active")
		});
		jQuery(".grid_port_tab_item").click(function() {
			var a = jQuery(this).attr("data-tab");
			jQuery(".grid_port_tab_item").removeClass("active"),
			jQuery(this).addClass("active"),
			jQuery(".grid-pane-data").removeClass("active"),
			jQuery("#" + a).addClass("active")


			var numSlick1 = 0;
$('.slider-products1').each( function() {
  numSlick1++;
  $(this).addClass( 'slider-' + numSlick1 ).slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav1.slider-' + numSlick1
  });
});

numSlick1 = 0;
$('.slider-nav1').each( function() {
  numSlick1++;
  $(this).addClass( 'slider-' + numSlick1 ).slick({
    vertical: false,
    centerMode: true,
    centerPadding: '0px',
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-products1.slider-' + numSlick1,
    arrow: true,
    focusOnSelect: true,
	loop:true,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 1,
		  centerMode: true,
		  centerPadding: "0px",
         }
      }
    ]
  });
});


			
		});
		jQuery("#list-view-li").click(function(){
			jQuery(this).addClass('active');
			jQuery("#grid-view-li").removeClass('active');
			jQuery("#list-vi").addClass("active");
			jQuery("#grid-vi").removeClass("active");
		});
	    jQuery("#grid-view-li").click(function(){
			jQuery(this).addClass('active');
			jQuery("#list-view-li").removeClass('active');
			jQuery("#grid-vi ").addClass("active");
			jQuery("#list-vi").removeClass("active");


			var numSlick = 0;
$('.slider-products').each( function() {
  numSlick++;
  $(this).addClass( 'slider-' + numSlick ).slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav.slider-' + numSlick
  });
});

numSlick = 0;
$('.slider-nav').each( function() {
  numSlick++;
  $(this).addClass( 'slider-' + numSlick ).slick({
    vertical: false,
    centerMode: true,
    centerPadding: '0px',
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-products.slider-' + numSlick,
    arrow: true,
    focusOnSelect: true,
	loop:true,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 1,
		  centerMode: true,
		  centerPadding: "0px",
         }
      }
    ]
  });
});









		});



      // job-hire-dev slider js start
    
	  $('.job-h-dev-slider').owlCarousel({
		loop: true,
		margin: 10,
		items: 1,
		nav: false,
		autoplay: false,
		autoplayTimeout: 3000,
		autoplayHoverPause:true,
		slideSpeed: 1500,
		smartSpeed: 1500,
		dots: true,
	  });

	   // job-hire-dev slider js end








		// new slider js start

var owl = $('.screenshot_slider').owlCarousel({
    loop: true,
    responsiveClass: true,
    nav: true,
    margin: 30,    
	dots:false,
    autoplayTimeout: 4000,
    smartSpeed: 800,
    center: true,
	stagePadding:300,
    navText: ['<img src="assets_new/images/icons/left_arrow_proj.svg" height="25" width="25"/>', '<img src="assets_new/images/icons/right_arrow_proj.svg" height="25" width="25"/>'],
    responsive: {
        0: {
            items: 1,
			stagePadding:100,
			margin: 15, 
        },
        600: {
            items: 1,
			stagePadding:150,
			margin: 15,
        },
		991: {
            items: 1,
			stagePadding:300,
			margin: 20, 
        },
        1200: {
            items: 1,
			stagePadding:300,
			margin: 30, 
        }
    }
});


// mobile app slider js start

var owl1 = $('.port_app_slider').owlCarousel({
    loop: true,
    responsiveClass: true,
    nav: true,
    margin: 30,    
	dots:false,
    autoplayTimeout: 4000,
    smartSpeed: 800,
    center: true,
    navText: ['<img src="assets_new/images/english_presentation/slider/arrow-small-left.svg" height="25" width="25"/>', '<img src="assets_new/images/english_presentation/slider/arrow-small-right.svg" height="25" width="25"/>'],
    responsive: {
        0: {
            items: 1,
			margin: 0, 
        },
        600: {
            items: 1,
			margin: 0,
        },
		991: {
            items: 3,
			margin: 20, 
        },
        1200: {
            items: 5,
			margin: 20, 
        }
    }
});

// mobile app slider js end

/****************************/
// fullpage slider js start

 $('.fullpage_slider').owlCarousel({
    loop: false,
    responsiveClass: true,
    nav: true,
    margin: 0,   
	items:1, 
	dots:false,
    autoplayTimeout: 4000,
    smartSpeed: 800,
    center: true,
    navText: ['<img src="assets_new/images/english_presentation/slider/arrow-small-left.svg" height="25" width="25"/>', '<img src="assets_new/images/english_presentation/slider/arrow-small-right.svg" height="25" width="25"/>'],
});

// fullpage slider js end


// new slider js end

// show less jquery start
	// var size_li = $("#myList li").length;
	// var x=4;
	// $('#myList li:lt('+x+')').show();
	// $('#loadMore').click(function () {
	// 	x= (x+4 <= size_li) ? x+4 : size_li;
	// 	$('#myList li:lt('+x+')').show();
	// });
	// $('#showLess').click(function () {
	// 	x=(x-4<0) ? 3 : x-4;
	// 	$('#myList li').not(':lt('+x+')').hide();
	// });
		
// show less jquery end
$('.bxslider').bxSlider({
	mode: 'vertical',
  speed: 500,
  slideMargin: 0,
  infiniteLoop: true,
  pager: false,
  controls: true,
  slideWidth: 500,
  nextText: '<img src="assets_new/images/icons/next_arrow.svg" height="25" width="25"/>',
  prevText: '<img src="assets_new/images/icons/prev_arrow.svg" height="25" width="25"/>',
  minSlides: 4,
  maxSlides:4,
  moveSlides: 4,
  adaptiveHeight: false,
  slideSelector: 'a.slide',
  responsive: [
	{
	  breakpoint: 1199,
	  settings: {
		slidesToShow: 3,
		
	  }
	},
	{
		breakpoint: 991,
		settings: {
		  slidesToShow: 2,
		 
		}
	  },
	{
	  breakpoint: 767,
	  settings: {
		slidesToShow: 1,
		
	  }
	}
  ]
});



/* Please ❤ this if you like it! cursor js start*/

   
// document.getElementsByTagName("body")[0].addEventListener("mousemove", function(n) {
// 	t.style.left = n.clientX + "px", 
// 	  t.style.top = n.clientY + "px", 
// 	  e.style.left = n.clientX + "px", 
// 	  e.style.top = n.clientY + "px", 
// 	  i.style.left = n.clientX + "px", 
// 	  i.style.top = n.clientY + "px"
//   });
//   var t = document.getElementById("cursor"),
// 	  e = document.getElementById("cursor2"),
// 	  i = document.getElementById("cursor3");
//   function n(t) {
// 	  e.classList.add("hover", "hover-2","tar_hover"), i.classList.add("hover", "hover-2","tar_hover")
//   }
//   function s(t) {
// 	  e.classList.remove("hover", "hover-2","tar_hover"), i.classList.remove("hover", "hover-2","tar_hover")
//   }
//   s();
//   for (var r = document.querySelectorAll(".screenshot_slider .owl-item .item, .hover-target-2"), a = r.length - 1; a >= 0; a--) {
// 	  o(r[a])
//   }
//   function o(t) {
// 	  t.addEventListener("mouseover", n), t.addEventListener("mouseout", s)
//   }


$(document).ready(function() {
	$("body").on("mousemove", function(event) {
	  $("#cursor, #cursor2, #cursor3").css({
		left: event.clientX + "px",
		top: event.clientY + "px"
	  });
	});
  
	var $cursor = $("#cursor");
	var $cursor2 = $("#cursor2");
	var $cursor3 = $("#cursor3");
  
	function addHoverClasses() {
	  $cursor2.addClass("hover hover-2 tar_hover");
	  $cursor3.addClass("hover hover-2 tar_hover");
	}
  
	function removeHoverClasses() {
	  $cursor2.removeClass("hover hover-2 tar_hover");
	  $cursor3.removeClass("hover hover-2 tar_hover");
	}
  
	removeHoverClasses();
  
	var $elements = $(".screenshot_slider .owl-item .item, .hover-target-2");
	$elements.each(function() {
	  $(this).on("mouseover", function() {
		addHoverClasses();
	  });
  
	  $(this).on("mouseout", function() {
		removeHoverClasses();
	  });
	});
  });
  
// cursor js end

// fullpage js start


// variables
var $header_top = $('.header-top');
var $nav = $('nav');



// toggle menu 
$header_top.find('a').on('click', function() {
  $(this).parent().toggleClass('open-menu');
});



// fullpage customization
// $('#fullpage').fullpage({
//   sectionsColor: ['#B8AE9C', '#348899', '#F2AE72', '#5C832F', '#B8B89F'],
//   sectionSelector: '.vertical-scrolling',
//   slideSelector: '.horizontal-scrolling',
//   navigation: true,
//   slidesNavigation: true,
//   controlArrows: false,
//   anchors: ['firstSection', 'secondSection', 'thirdSection', 'fourthSection', 'fifthSection'],
//   menu: '#menu',

//   afterLoad: function(anchorLink, index) {
//     $header_top.css('background', 'rgba(0, 47, 77, .3)');
//     $nav.css('background', 'rgba(0, 47, 77, .25)');
//     if (index == 5) {
//         $('#fp-nav').hide();
//       }
//   },

//   onLeave: function(index, nextIndex, direction) {
//     if(index == 5) {
//       $('#fp-nav').show();
//     }
//   },

//   afterSlideLoad: function( anchorLink, index, slideAnchor, slideIndex) {
//     if(anchorLink == 'fifthSection' && slideIndex == 1) {
//       $.fn.fullpage.setAllowScrolling(false, 'up');
//       $header_top.css('background', 'transparent');
//       $nav.css('background', 'transparent');
//       $(this).css('background', '#374140');
//       $(this).find('h2').css('color', 'white');
//       $(this).find('h3').css('color', 'white');
//       $(this).find('p').css(
//         {
//           'color': '#DC3522',
//           'opacity': 1,
//           'transform': 'translateY(0)'
//         }
//       );
//     }
//   },

//   onSlideLeave: function( anchorLink, index, slideIndex, direction) {
//     if(anchorLink == 'fifthSection' && slideIndex == 1) {
//       $.fn.fullpage.setAllowScrolling(true, 'up');
//       $header_top.css('background', 'rgba(0, 47, 77, .3)');
//       $nav.css('background', 'rgba(0, 47, 77, .25)');
//     }
//   } 
// }); 

// fullpage js end
   //wow animation js
