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
        setTimeout(equalfunc, 100);
        window.sr = ScrollReveal({reset: true});
        sr.reveal('.anifade', {duration: 600});
        function createmap() {
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
        }

        setTimeout(createmap, 500);
        // Select all links with hashes
        $('a[href*="#"]')
        // Remove links that don't actually link to anything
            .not('[href="#"]')
            .not('[href="#0"]')
            .click(function(event) {
                // On-page links
                if (
                    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                    &&
                    location.hostname == this.hostname
                ) {
                    // Figure out element to scroll to
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    // Does a scroll target exist?
                    if (target.length) {
                        // Only prevent default if animation is actually gonna happen
                        event.preventDefault();
                        $('html, body').animate({
                            scrollTop: target.offset().top-100
                        }, 1000, function() {
                            // Callback after animation
                            // Must change focus!
                            var $target = $(target);
                            $target.focus();
                            if ($target.is(":focus")) { // Checking if the target was focused
                                return false;
                            } else {
                                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                                $target.focus(); // Set focus again
                            };
                        });
                    }
                }
            });

        $('.services-sv').hover(function () {
           var datahover = $(this).attr('data-hover').toString();
            $(datahover).toggleClass('__active');
        });

        $('#ap1,#ap3').mapster({
            fillColor: '759cd3',
            fillOpacity: 0.4
        });
        $('#ap2,#ap4').mapster({
            fillColor: '69dfdf',
            fillOpacity: 0.4
        });
        /*  window.wasScrolled = false;
        if ($('#to').length) {
            $(window).bind('scroll', function () {
                if (!window.wasScrolled) {
                    $('html, body').animate({scrollTop: document.getElementById('to').getBoundingClientRect().top - 100}, 400)
                }
                window.wasScrolled = true;
            })
        }*/
        if ($('#back-to-top').length) {
            var scrollTrigger = 100, // px
                backToTop = function () {
                    var scrollTop = $(window).scrollTop();
                    if (scrollTop > scrollTrigger) {
                        $('#back-to-top').addClass('show');
                    } else {
                        $('#back-to-top').removeClass('show');
                    }
                };
            backToTop();
            $(window).on('scroll', function () {
                backToTop();
            });
            $('#back-to-top').on('click', function (e) {
                e.preventDefault();
                $('html,body').animate({
                    scrollTop: 0
                }, 700);
            });
        }
    });

}(jQuery));
