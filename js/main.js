(function ($) {

    var mis = {};
    mis.init = function () {
        var ww = $(window).width();
        var wh = $(window).height();
        if (ww < 768 && !$('body').hasClass('home')) {
            $('.site-brand .site-header .site-' + (ww < wh ? 'social' : 'support'))[0].scrollIntoView();
        }
    };

    $('html').removeClass('no-js');
    $(function () {
        mis.init();
    });
})(jQuery);