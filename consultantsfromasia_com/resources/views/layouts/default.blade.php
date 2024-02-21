<!doctype html>
<html>
<head>
   @include('layouts.includes.head')
</head>

<!-- mouse hover  -->
<div class='cursor' id="cursor"></div>
 <div class='cursor2' id="cursor2"></div>
 <div class='cursor3' id="cursor3"></div>
 <!-- mouse hover -->
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T66FPND"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
@include('layouts.includes.header') 
@yield('content')
@include('layouts.includes.footer')
<script type="text/javascript">
	$("img").lazyload({
	    effect : "fadeIn"
	});
   console.log("lazy load");
</script>
</body>


 <!-- jquery library js -->
   {{-- <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script> --}}
   

    <!-- jquery library js -->
    <!-- bootstrap js file-->
    <script src="{{ URL::asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap-select.min.js') }}"></script>
    <!-- owl carousel js file-->
    <script src="{{ URL::asset('assets/js/plugins/owl/owl.carousel.min.js') }}"></script>
    <!-- owl carousel js file-->
    <!-- show more js file-->
    <script src="{{ URL::asset('assets/js/showmoreless.js') }}"></script>
    <!-- show more js file-->
    <!-- counter js file-->
    <script src="{{ URL::asset('assets/js/plugins/counter/jquery.countTo.js') }}"></script>
    <!-- counter js file-->
    <!-- swiper slider js -->
    <script src="{{ URL::asset('assets/js/plugins/swiper/swiper-bundle.min.js') }}"></script>
    <!-- swiper slider js -->
    <!-- wow js file-->
    <script src="{{ URL::asset('assets/js/wow.min.js') }}"></script>
    <!-- wow JS file -->
    <!-- miitup js js file-->
    <script src="{{ URL::asset('assets/js/mixitup.min.js') }}"></script>
    <!-- mixitup JS file -->
    <!-- Custom JS file -->
    <script src="{{ URL::asset('assets/js/custom_script.js?ver=1.1') }}"></script>
    <script>
        //industries tabs
        $('.hire_ded_dev_tabnav li').click(function () {
        var hiredev_tab_data = $(this).attr('data-tab');
        $('.hire_ded_dev_tabnav li').removeClass('active');
        $(this).addClass('active');
        $(".hire_ded_dev_tab_panel").removeClass('active');
        $('#' + hiredev_tab_data).addClass("active");
      });
      // hire developer tech slider
      $('.hire_dev_tech_carousel').owlCarousel({
        loop: false,
        margin: 10,
        items: 6,
        nav: false,
        autoplay: false,
        autoplayTimeout: 4000,
        autoplayHoverPause:true,
        slideSpeed: 1500,
        smartSpeed: 1500,
        dots: true,
        responsiveClass:true,
        responsive:{
          0:{
            items:1,
            margin: 10,
          },
          576:{
            items:2,
            margin: 10,
          },
          768:{
            items:2,
          },
          992:{
            items:4,
          },
          1200:{
            items:5,
            margin: 10
          },
          1300:{
            items:6,
            margin: 10
          }
        }
      });
      // hire developer Testimonial slider
      $('.hire_dev_testi_carousel').owlCarousel({
        loop: false,
        margin: 20,
        items: 2,
        nav: false,
        dots: true,
        autoplay: false,
        autoplayTimeout: 4000,
        autoplayHoverPause:true,
        slideSpeed: 2000,
        smartSpeed: 2000,
        responsiveClass:true,
        responsive:{
          0:{
            items:1,
            margin: 0,
          },
          992:{
            items:2,
            margin: 10,
          },
          1200:{
            items:2,
            margin: 10
          },
          1300:{
            items:3,
            margin: 20
          }
        }
      });


      var contactTop =$('#devcontact').offset().top-90;
$(document).ready(function(){
  
$('.hire_portfolio_navs li a').click(function() {
  $($(this).attr('href')).addClass('active').siblings().removeClass('active');
  $('.article-section').parent('.hire-port-dash-content-inner-sec').addClass('padtop');
  $(this).parent('li').addClass('active').siblings().removeClass('active');
})


$('#hire_me').on('click', function(e) {
  e.preventDefault();
  var offset = $("#devcontact").offset().top-90;
  $('html, body').stop().animate({
    scrollTop: offset
  }, 400);
});

});



$(window).scroll(function() {
		var windscroll = $(window).scrollTop();
		if (windscroll >= 100) {
			$('.article-section').each(function(i) {
        // The number at the end of the next line is how pany pixels you from the top you want it to activate.
				if ($(this).position().top <= windscroll - 0) {
					$('.hire_portfolio_navs li.active').removeClass('active');
					$('.hire_portfolio_navs li').eq(i).addClass('active');
				}
			});

		} else {

			$('.hire_portfolio_navs li.active').removeClass('active');
			$('.hire_portfolio_navs li:first').addClass('active');
		}

		}).scroll();


      var topLimit = $('#bar-fixed').offset().top;
$(window).scroll(function() {
  if (topLimit <= $(window).scrollTop()) {
    $('#bar-fixed').addClass('stickIt')
   
    $('.article-section').parent('.hire-port-dash-content-inner-sec').addClass('padtop');
    $('.hire-port-dash-content-inner-sec .article-section:first-child').addClass('active');
   
  } else {
    $('#bar-fixed').removeClass('stickIt')
    $('.article-section').parent('.hire-port-dash-content-inner-sec').removeClass('padtop');
    $('.hire-port-dash-content-inner-sec .article-section:first-child').removeClass('active');
    
  }
        
    // $('.hire_portfolio_navs li').addClass('active').parent('li').siblings('li.active').removeClass('active');
})

function myFunction() {
  $('.article-section').parent('.hire-port-dash-content-inner-sec').addClass('padtop');
}
      </script>

</html>