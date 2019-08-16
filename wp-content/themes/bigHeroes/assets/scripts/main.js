(function($) {
    //init main menu
    var menu = {
        nav: $('.main-nav_header'),
        openMenuBtn: $('.menu-action'),
        droppBtn: $('.dropper-nav'),
        droppContent: $('.dropdown-content'),

        menuAction: function () {
            if( menu.nav.hasClass('is-init') ) {
                return false;
            } else {
                menu.openMenuBtn.on('click', function () {
                    menu.nav.slideToggle();
                    menu.openMenuBtn.toggleClass('menu-action_init');
                    $('body').toggleClass('disabled-scroll');

                    if( menu.openMenuBtn.hasClass('menu-action_init') ) {
                        menu.droppBtn.removeClass('rotateEl');
                    }
                    menu.droppContent.slideUp();
                });

                menu.droppBtn.on('click', function () {
                    if ($(window).width() <= 767) {
                        $(this).toggleClass('rotateEl');
                        var item = $(this).next('.dropdown-content');
                        item.slideToggle();
                    } else {
                        return false;
                    }
                });
            }
        },
        init: function () {
            this.menuAction();
        },
        destroy: function () {
            menu.nav.removeAttr('style');
            $('body').removeClass('disabled-scroll');
            menu.openMenuBtn.removeClass('menu-action_init');
        }
    };

    //init teammate tabs
    var tabImg = $('.teammate-image');
    var info = $('.teammate-info');
    var teammateClose = $('.teammate_close-icon');

    var flag = true;

    //bind click
    tabImg.on('click', function (event) {
        if( $(this).hasClass('active-tab') ) {
            return false;
        }

        if(flag === true) {
            flag = false;
            //change active image
            tabImg.removeClass('active-tab');
            $(this).addClass('active-tab');

            //change active info
            info.slideUp(400);

            var num = $(this).attr('num');
            $(info).each(function (index, value) {
                if( $(this).attr('num') == num ) {
                    $(this).delay(400).slideDown(400);
                }
            });
        }

        setTimeout(function() {
            flag = true;
        }, 600);
    });

    teammateClose.on('click', function () {
        //hide all info and remove active class
        tabImg.removeClass('active-tab');
        info.fadeOut(200);
    });


    //init on load
    menu.init();


    //after resize
    $(window).resize(function () {
        if ($(window).width() <= 767) {
            menu.openMenuBtn.removeClass('is-init');
        } else {
            menu.openMenuBtn.addClass('is-init');
            menu.destroy();
        }
    });

})(jQuery);
