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
