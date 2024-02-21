(function($) {
    "use strict";
    $('.scrum_full_slider').owlCarousel({
        items : 1,
        margin:0,
        singleItem:true,
        slideSpeed : 2000,
        stagePadding: 0,
        autoplay: false,
        loop: false,
        dots: true,
        dotsContainer: '.scrum_custom_dots',
        touchDrag: false,
        mouseDrag: false,
        nav: true,
        navText: ['<img src="assets_new/images/english_presentation/slider/arrow-small-left.svg" height="25" width="25"/>', '<img src="assets_new/images/english_presentation/slider/arrow-small-right.svg" height="25" width="25"/>'],
        responsiveClass:true,
            responsive:{
                0:{
                    autoHeight:true,
                    stagePadding: 0,
                    touchDrag: true,
                    mouseDrag: true,
                },
                992:{
                    autoHeight:false,
                    stagePadding: 0,
                    touchDrag: false,
                    mouseDrag: false,
                }
            }
    });
    $(".humbergur_menu_btn").on('click', function () {
        $(".scrm_sidemenu_wrapper").addClass("showmenus");
    });
    $(".close_sidemenubtn").on('click', function () {
        $(".scrm_sidemenu_wrapper").removeClass("showmenus");
    });
    $(".scrm_sidemenu_wrapper").on('click', function () {
        $(this).removeClass("showmenus");
    });
})(jQuery);