/* ========= Jquery Activation Start ===========  */

(function ($) {
    "use strict";


    /* =========RRF - Section - 7 - Cool Staff ===========  */
    
    $('.staff-active.owl-carousel').owlCarousel({
        loop:true,
        margin:30,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    })
    /* =========RRF - Section - 8 - Happy Client ===========  */
    
    $('.happy-client-active.owl-carousel').owlCarousel({
        loop:true,
        margin:30,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    })
    /* =========RRF - Section - 85 - Happy Client 2 ===========  */
    
    $('.happy-client-active-2.owl-carousel').owlCarousel({
        loop:true,
        margin:30,
        nav:true,
        // navText:
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
    /* =========RRF - Section - 106 - Home Slider New Stylet ===========  */
    
    $('.hero-slider-2.owl-carousel').owlCarousel({
        loop:true,
        margin:30,
        nav:true,
        // navText:
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })

    /* ========= RRF - Section - 10 - Hero Section ===========  */
    $(".hamberger").click(function(){
        $("nav").addClass("active");
    });
    $(".times").click(function(){
        $("nav").removeClass("active");
    });


    /* ========= RRF - Section - 131 - Pricing Table Section ===========  */
    $(".single-price-box").hover(function(){
        $(".single-price-box").removeClass("active");
        $(this).addClass("active");
    });






    /* ========= Unknown Responsive Nav Activation Start ===========  */

    $(".hamberger-icon").click(function(){
        $("nav").toggleClass("active");
        $(".hamberger-icon").toggleClass("active");
        
    });

    $("nav ul li a").click(function(){
        $("nav").toggleClass("active");
        $(".hamberger-icon").toggleClass("active");
        
    });







    /* ========= Demo Content ===========  */

})(jQuery);



