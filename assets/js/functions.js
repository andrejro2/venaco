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
        $('.fancybox').fancybox({padding: 0});
        setTimeout(equalfunc, 500);
        window.sr = ScrollReveal({reset: true});
        sr.reveal('.anifade', {duration: 600});

        $joint_map = $('#vg');
        $joint_map.mapster({
            fillColor: 'b24a9a',
            fillOpacity: 0,
            showToolTip: true,
            singleSelect: true,
            toolTipContainer: '<div class="tooltipmapster"></div>',
            onShowToolTip: function (e) {
                var key_name = e.key;
                var tooltip_text = $('#area_' + key_name).attr('data-tooltip');
                e.toolTip.html(tooltip_text);
            },
            toolTipClose: ["tooltip-click", "area-click", "area-mouseout"],
            mapKey: 'data-nid',
            onClick: function (e) {
                var fNid = $(this).attr('data-nid');
                $(this).mapster('tooltip', fNid);
            },
            onMouseover: function (e) {
                var fNid = $(this).attr('data-nid');
                $joint_map.mapster('tooltip', fNid);
            },
        });

    });
}(jQuery));
