/* ========= Jquery Activation Start ===========  */

(function ($) {
    "use strict";


    /* ========= Preloader Activation Start ===========  */
    $(window).on('load', function () {
        var preloaderFadeOutTime = 500;

        function hidePreloader() {
            var preloader = $('.spinner-wrapper');
            setTimeout(function () {
                preloader.fadeOut(preloaderFadeOutTime);
            }, 500);
        }
        hidePreloader();
    });
    /* ========= Preloader Activation Start ===========  */

})(jQuery);



