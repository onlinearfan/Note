/* ========= Jquery Activation Start ===========  */

(function ($) {
    "use strict";




    /* ========= 1) Particle Js NO Activation - Activation Start ===========  */

    /* ========= 2) Magnific PopUp Activation Start ===========  */
    $('.popup-image-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {
            enabled: true
        },

    });

    /* ========= 3) stickUp Activation Start ===========  */
    $('.header-sticky').stickup();

    /* ========= 4) Counter Activation Start ===========  */
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });

    /* ========= 5) Modal Js Activation Start ===========  */
    $('.popup-button a').click(function (event) {
        $(this).modal({
            fadeDuration: 250,
            fadeDelay: 1.75
        });
        return false;
    });

    /* ========= 6) wow Js Activation Start ===========  */
    new WOW({

        boxClass: 'wow', // default
        animateClass: 'animated', // default
        offset: 0, // default
        mobile: true, // default
        live: true, // default

    }).init();

    /* ========= 7) AOS Js Activation Start ===========  */
    AOS.init({
        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 120, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 1000, // values from 0 to 3000, with step 50ms
        easing: 'linear', // default easing for AOS animations
        once: false, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

    })

    /* ========= 8) Image Scroll Activation Start ===========  */

    var divheight = $(".demo-img a").height();
    $(".demo-img").hover(function () {
            var objectheight = $(this).find(".preview-img").height();
            var objectheight1 = '-1' * objectheight;
            var finalheight = objectheight1 + divheight;
            $(this).find(".preview-img").css({
                top: finalheight
            });
        },
        function () {
            $(this).find(".preview-img").css({
                top: '0'
            });
        });


    /* ========= 9) Smooth Scroll with Plugin Activation Start ===========  */

    // var scroll = new SmoothScroll('a[href*="#"]', {
    //     speed: 900,

    // });

    /* ========= 10)DropDown Menu With SlickNav Plugin===========  */

    $('#menu').slicknav({
        'label': '',
        'closedSymbol': '&#9658;', // Character after collapsed parents.
        'openedSymbol': '&#9660;', // Character after expanded parents. 
        'prependTo': '.menu-holder',
    });
    /* ========= 11)Isotop Filter Plugin ===========  */

    var $grid = $('.grid').isotope({
        itemSelector: '.grid-item',
        percentPosition: true,
        masonry: {
            // use outer width of grid-sizer for columnWidth
            columnWidth: '.grid-item'
        }
    })

    // filter items on button click
    $('.protfolio-part').on('click', 'button', function () {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({
            filter: filterValue
        });
    });

    //for menu active class
    $('.protfolio-part button').on('click', function (event) {
        $(this).siblings('.active').removeClass('active');
        $(this).addClass('active');
        event.preventDefault();
    });



    /* ========= 12)Animated Headline Plugin = No Jquery ===========  */


    /* ========= 13)Preloader Used Jquery ===========  */
    $(window).on('load', function () {
        var preloaderFadeOutTime = 500;

        function hidePreloader() {
            var preloader = $('#loading');
            setTimeout(function () {
                preloader.fadeOut(preloaderFadeOutTime);
            }, 500);
        }
        hidePreloader();
    });



    /* =========14)Flat and Material Icon Used = No Jquery===========  */


    /* =========15)CountDown Plugin===========  */
    $('#getting-started').countdown('2023/11/12', function (event) {
        $(this).html(event.strftime(' <div class="row"> <div class="col-3"> <span class="single-countdown-wrapper"> <span class="countdown-time">%Y</span> <span class="countdown-title">Years</span> </span> </div> <div class="col-3"> <span class="single-countdown-wrapper"> <span class="countdown-time">%m</span> <span class="countdown-title">Months</span> </span> </div> <div class="col-3"> <span class="single-countdown-wrapper"> <span class="countdown-time">%w</span> <span class="countdown-title">Weeks</span> </span> </div> <div class="col-3"> <span class="single-countdown-wrapper"> <span class="countdown-time">%d</span> <span class="countdown-title">Days</span> </span> </div> <div class="col-3"> <span class="single-countdown-wrapper"> <span class="countdown-time">%H</span> <span class="countdown-title">Hours</span> </span> </div> <div class="col-3"> <span class="single-countdown-wrapper"> <span class="countdown-time">%M</span> <span class="countdown-title">Minutes</span> </span> </div> <div class="col-3"> <span class="single-countdown-wrapper"> <span class="countdown-time">%S</span> <span class="countdown-title">Seconds</span> </span> </div> </div>'));
    });


    /* =========  16)One Page Nav Plugin===========  */
    $('#nav').onePageNav({
        currentClass: 'current',
        changeHash: false,
        scrollSpeed: 750,
        scrollThreshold: 0.5,
        filter: '',
        easing: 'swing',
        begin: function () {
            //I get fired when the animation is starting
        },
        end: function () {
            //I get fired when the animation is ending
        },
        scrollChange: function ($currentListItem) {
            //I get fired when you enter a section and I pass the list item of the section
        }
    });


    /* =========  17)Circle Progress bar Plugin===========  */


    $('#circle').circleProgress({
        value: 0.7,
        size: 300,
        fill: {
            gradient: ["red", "green", "blue"]
        }
    }).on('circle-animation-progress', function (event, progress) {
        $(this).find('.progress-number').html(Math.round(70 * progress) + '<i>%</i>');
    });


    $('#circle-2').circleProgress({
        value: 0.7,
        size: 300,
        fill: {
            gradient: ["red", "green", "blue"]
        }
    }).on('circle-animation-progress', function (event, progress) {
        $(this).find('.progress-number').html(Math.round(70 * progress) + '<i>%</i>');
    });




    /* =========  18)Price Range Slider Plugin===========  */
    $("#slider-range").slider({
        range: true,
        min: 0,
        max: 500,
        values: [50, 250],
        slide: function (event, ui) {
            $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
        }
    });
    $("#amount").val("$" + $("#slider-range").slider("values", 0) +
        " - $" + $("#slider-range").slider("values", 1));


    /* =========  19)Elevated Zoom Plugin===========  */

    $(".zoom_01").elevateZoom({
        gallery: 'gal1',
        cursor: 'pointer',
        galleryActiveClass: 'active',

    });

    // Example of using Active Gallery
    $("#gal1 a").click(function () {
        $("#gal1 a").removeClass('active');
        $(this).addClass('active');
    });


    /* =========20)YTplayer VideoBG Plugin===========  */

    jQuery("#video-bg").YTPlayer({

        showControls: true,
    });


    /* ========= 21)Slick SliderPlugin ===========  */


    $('.slick-active-1').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slick-active-2',
        arrows: false,
    });

    $('.slick-active-2').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slick-active-1',
        dots: true,
        centerMode: true,
        focusOnSelect: true,
        arrows: false,
        dots: false,
    });


    /*! =========22)Nivo Slider Plugin===========  */

    $('#slider').nivoSlider({
        effect: 'random',
        slices: 15,
        boxCols: 8,
        boxRows: 4,
        animSpeed: 500,
        pauseTime: 3000,
        startSlide: 0,
        directionNav: true,
        controlNav: true,
        controlNavThumbs: false,
        pauseOnHover: true,
        manualAdvance: true,
        prevText: '<i class="fas fa-arrow-left"></i>',
        nextText: '<i class="fas fa-arrow-right"></i>',
        randomStart: false,
    });

    /* =========23)Sticky Js Plugin===========  */

    $(".main-header").sticky({
        topSpacing: 0
    });


    /* =========24)Nice Select Js Plugin===========  */
    $('.select').niceSelect();


    /* =========25,26,27)Bootstrap Tab,Accordion,Modal No Jquery ===========  */




    /* =========28)Fancy box Js Plugin===========  */

    $('[data-fancybox="gallery"]').fancybox({
        keyboard: true,
        buttons: [
            "zoom",
            "share",
            "slideShow",
            "fullScreen",
            "download",
            "thumbs",
            "close"
        ],
    });

    /* =========29)JS Tree DropDown Plugin===========  */
    $('#jstree').jstree();

    /* =========30)tree js plugin 2 new NO Jquery===========  */



    /* =========31)upper dropdown menu===========  */
    $(".all-sidebar-wrapper").click(function () {
        $(".single-sidbar").toggleClass("active");
    });

    /* =========32)product tab with slide===========  */

    $('.product-slider-active.owl-carousel').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })


     /* =========33)MeanMenu Activation===========  */

    $('#mobile-menu').meanmenu({
        meanMenuOpen: "<span></span><span></span><span></span>",
        meanMenuCloseSize: "18px",
        meanMenuContainer: '.menu-container',
    });



    /* ========= 34)Demo Activation Start ===========  */

})(jQuery);