(function ($) {
    $(function () {
        var windowsize = $(window).width();
        $(window).resize(function () {
            var windowsize = $(window).width();
        });
        $('#simple-menu').sidr({
            name: 'sidr-main',
            source: '#navigation'
        });
        $(window).on("scroll touchmove", function () {

            $('body').toggleClass('tiny', $(document).scrollTop() > 0);

        });
        $("#sticker").scrollToFixed();
        $('#sidr-id-menu a:not(.sidr-class-opencontact)').click(function () {
            $.sidr('close', 'sidr-main');
        });
        $('#sidr-id-menu a.sidr-class-opencontact').click(function () {
            $.sidr('close', 'sidr-main');
            $('body').toggleClass('__showcontact');
        });

        function equalfunc() {
            $('._equal, ._equal-block .block_content, .__equalheight').matchHeight({
                byRow: true
            });
        }
        setTimeout(equalfunc, 500);
        // Changing the defaults
        window.sr = ScrollReveal({ reset: true });

// Customizing a reveal set
        sr.reveal('.anifade', { duration: 600 });
    });
}(jQuery));
