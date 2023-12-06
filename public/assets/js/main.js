(function ($) {
    ('use strict');

    /*----------------------------------------*/
    /*  Check if element exists
    /*----------------------------------------*/
    $.fn.elExists = function () {
        return this.length > 0;
    };

    /*--
    Custom script to call Background
    Image & Color from html data attribute
    -----------------------------------*/
    $('[data-bg-image]').each(function () {
        var $this = $(this),
            $image = $this.data('bg-image');
        $this.css('background-image', 'url(' + $image + ')');
    });
    $('[data-bg-color]').each(function () {
        var $this = $(this),
            $color = $this.data('bg-color');
        $this.css('background-color', $color);
    });

    /*----------------------------------------*/
    /*  WOW
    /*----------------------------------------*/
    new WOW({
        boxClass: 'wow',
        animateClass: 'animate__animated',
        offset: 150,
        mobile: false,
        live: true
    }).init();

    /*----------------------------------------*/
    /*  Mobile Catalog Filter
    /*----------------------------------------*/

    let filtersCatalogToggle = document.querySelector('.filter-catalog-toggle');

    let sidebarMobile = document.querySelector('.sidebar-mobile');

    filtersCatalogToggle.onclick = () => {
        sidebarMobile.style.left = '0';
    }
    /*---------------------------------------
		Header Sticky
    ---------------------------------*/
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 186) {
            $('.header-sticky').addClass('sticky');
        } else {
            $('.header-sticky').removeClass('sticky');
        }
    });

    /*----------------------------------------*/
    /*  HasSub Item
    /*----------------------------------------*/
    $('.hassub-item li.hassub a, .frequently-item li.has-sub a').on(
        'click',
        function () {
            $(this).removeAttr('href');
            var element = $(this).parent('li');
            if (element.hasClass('open')) {
                element.removeClass('open');
                element.find('li').removeClass('open');
                element.find('ul').slideUp();
            } else {
                element.addClass('open');
                element.children('ul').slideDown();
                element.siblings('li').children('ul').slideUp();
                element.siblings('li').removeClass('open');
                element.siblings('li').find('li').removeClass('open');
                element.siblings('li').find('ul').slideUp();
            }
        }
    );

    /*---------------------------------------
		Swiper All Slider
    ---------------------------------*/

    /* ---Main Slider--- */
    if ($('.main-slider').elExists()) {
        var swiper = new Swiper('.main-slider', {
            loop: true,
            slidesPerView: 1,
            speed: 750,
            autoplay: {
                delay: 5000,
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true,
            },
            navigation: {
                nextEl: '.main-button-next',
                prevEl: '.main-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                type: 'bullets',
            },
        });
    }
    $('.main-slider').hover(
        function () {
            this.swiper.autoplay.stop();
        },
        function () {
            this.swiper.autoplay.start();
        }
    );

    /* --- Product Slider--- */
    if ($('.product-slider').elExists()) {
        var mySwiper = new Swiper('.product-slider', {
            slidesPerView: 4,
            spaceBetween: 30,
            loop: true,
            navigation: {
                nextEl: '.product-button-next',
                prevEl: '.product-button-prev',
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                480: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                992: {
                    slidesPerView: 4,
                },
            },
        });
    }

    /* --- Testimonial Slider--- */
    if ($('.testimonial-slider').elExists()) {
        var mySwiper = new Swiper('.testimonial-slider', {
            preventInteractionOnTransition: true,
            slidesPerView: 3,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: '.testimonial-pagination',
                clickable: true,
                type: 'bullets',
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1200: {
                    slidesPerView: 3,
                },
            },
        });
    }

    /* --- Brand Slider--- */
    if ($('.brand-slider').elExists()) {
        var swiper = new Swiper('.brand-slider', {
            slidesPerView: 5,
            spaceBetween: 80,
            loop: true,
            speed: 750,
            autoplay: {
                delay: 4000,
            },
            breakpoints: {
                320: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                480: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                992: {
                    slidesPerView: 4,
                },
                1200: {
                    slidesPerView: 5,
                },
            },
        });
    }
    $('.brand-slider').hover(
        function () {
            this.swiper.autoplay.stop();
        },
        function () {
            this.swiper.autoplay.start();
        }
    );

    /* --- Blog Slider--- */
    if ($('.blog-slider').elExists()) {
        var swiper = new Swiper('.blog-slider', {
            slidesPerView: 3,
            spaceBetween: 30,
            speed: 750,
            autoplay: {
                delay: 5000,
            },
            loop: true,
            navigation: {
                nextEl: '.blog-button-next',
                prevEl: '.blog-button-prev',
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                992: {
                    slidesPerView: 3,
                },
            },
        });
    }
    $('.blog-slider').hover(
        function () {
            this.swiper.autoplay.stop();
        },
        function () {
            this.swiper.autoplay.start();
        }
    );

    /*----------------------------------------*/
    /* Toggle Function Active
	/*----------------------------------------*/
    // showlogin toggle
    $('#showlogin').on('click', function () {
        $('#checkout-login').slideToggle(900);
    });
    // showlogin toggle
    $('#showcoupon').on('click', function () {
        $('#checkout_coupon').slideToggle(900);
    });
    // showlogin toggle
    $('#cbox').on('click', function () {
        $('#cbox-info').slideToggle(900);
    });

    // showlogin toggle
    $('#ship-box').on('click', function () {
        $('#ship-box-info').slideToggle(1000);
    });

    /*------------------------------------
	Toolbar Button
	------------------------------------- */
    var $overlay = $('.global-overlay');
    $('.toolbar-btn').on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        var $this = $(this);
        var target = $this.attr('href');
        var prevTarget = $this
            .parent()
            .siblings()
            .children('.toolbar-btn')
            .attr('href');
        $(target).toggleClass('open');
        $(prevTarget).removeClass('open');
        $($overlay).addClass('overlay-open');
    });

    /*----------------------------------------*/
    /*  Click on Documnet
    /*----------------------------------------*/
    var $body = $('.global-overlay');

    $body.on('click', function (e) {
        var $target = e.target;
        var dom = $('.main-wrapper').children();

        if (
            !$($target).is('.toolbar-btn') &&
            !$($target).parents().is('.open')
        ) {
            dom.removeClass('open');
            dom.find('.open').removeClass('open');
            $overlay.removeClass('overlay-open');
        }
    });

    /*----------------------------------------*/
    /*  Close Button Actions
    /*----------------------------------------*/
    $('.button-close').on('click', function (e) {
        var dom = $('.main-wrapper').children();
        e.preventDefault();
        var $this = $(this);
        $this.parents('.open').removeClass('open');
        dom.find('.global-overlay').removeClass('overlay-open');
    });

    /*----------------------------------------*/
    /*  Offcanvas
    /*----------------------------------------*/
    var $offcanvasNav = $('.mobile-menu, .offcanvas-minicart_menu'),
        $offcanvasNavWrap = $(
            '.mobile-menu_wrapper, .offcanvas-minicart_wrapperm, .offcanvas-search_wrapper'
        ),
        $offcanvasNavSubMenu = $offcanvasNav.find('.sub-menu'),
        $menuToggle = $('.menu-btn'),
        $menuClose = $('.button-close');

    $offcanvasNavSubMenu.slideUp();

    $offcanvasNav.on('click', 'li a, li .menu-expand', function (e) {
        var $this = $(this);
        if (
            $this
                .parent()
                .attr('class')
                .match(
                    /\b(menu-item-has-children|has-children|has-sub-menu)\b/
                ) &&
            ($this.attr('href') === '#' ||
                $this.attr('href') === '' ||
                $this.hasClass('menu-expand'))
        ) {
            e.preventDefault();
            if ($this.siblings('ul:visible').length) {
                $this.siblings('ul').slideUp('slow');
            } else {
                $this
                    .closest('li')
                    .siblings('li')
                    .find('ul:visible')
                    .slideUp('slow');
                $this.closest('li').siblings('li').removeClass('menu-open');
                $this.siblings('ul').slideDown('slow');
                $this.parent().siblings().children('ul').slideUp();
            }
        }
        if (
            $this.is('a') ||
            $this.is('span') ||
            $this.attr('class').match(/\b(menu-expand)\b/)
        ) {
            $this.parent().toggleClass('menu-open');
        } else if (
            $this.is('li') &&
            $this.attr('class').match(/\b('menu-item-has-children')\b/)
        ) {
            $this.toggleClass('menu-open');
        }
    });

    $('.button-close').on('click', function (e) {
        e.preventDefault();
        $('.mobile-menu .sub-menu').slideUp();
        $('.mobile-menu .menu-item-has-children').removeClass('menu-open');
    });

    /*--------------------------------
    Scroll To Top
    -------------------------------- */
    function scrollToTop() {
        var $scrollUp = $('.scroll-to-top .page-item'),
            $lastScrollTop = 0,
            $window = $(window);

        $window.on('scroll', function () {
            var topPos = $(this).scrollTop();
            if (topPos > $lastScrollTop) {
                $scrollUp.removeClass('show');
            } else {
                if ($window.scrollTop() > 200) {
                    $scrollUp.addClass('show');
                } else {
                    $scrollUp.removeClass('show');
                }
            }
            $lastScrollTop = topPos;
        });

        $scrollUp.on('click', function (evt) {
            $('html, body').animate(
                {
                    scrollTop: 0,
                },
                600
            );
            evt.preventDefault();
        });
    }

    scrollToTop();

})(jQuery);
