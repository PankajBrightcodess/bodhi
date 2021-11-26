/* 
 Project - Bpress - construction template
 Version - 2.1
 Author  - design_mylife
 */

$(function () {
    "use strict";

    /**Preloader*/
    $(window).preloader({
        delay: 500
    });

    //animated scroll menu
    $(window).on("scroll", function () {
        var scroll = $(window).scrollTop();
        if (scroll > 200) {
            $('.navbar-sticky').addClass('is-stick');
        }
        if (scroll <= 0) {
            $('.navbar-sticky').removeClass('is-stick');
        }
    });
    // Initialize popup as usual
    $('.popup-gallery a').magnificPopup({
        type: 'image',
        mainClass: 'mfp-with-zoom',
        gallery: {
            enabled: true
        },
        zoom: {
            enabled: true,
            duration: 300,
            easing: 'ease-in-out',
            opener: function (openerElement) {
                return openerElement.is('img') ? openerElement : openerElement.find('img');
            }
        }
    });
    // search form toggle
    $(".search-toggle a").on('click', function () {
        $(".search-form,.search-toggle a").toggleClass("show");
    });
    //back to top
    //Check to see if the window is top if not then display button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });

    //Click event to scroll to top
    $('.scrollToTop').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 800);
        return false;
    });

    //courses carousel
    $(".service-slider").owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
    //Projct carousel
    $(".project-slider").owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
    //Projct carousel
    $(".testi-slider").owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
    //wow animations
    var wow = new WOW(
        {
            boxClass: 'wow', // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset: 100, // distance to the element when triggering the animation (default is 0)
            mobile: false        // trigger animations on mobile devices (true is default)
        }
    );
    wow.init();

    /* Video background */
    $("#bgndVideo").YTPlayer();
    /** --------------------------------Masonry -----------------------------------**/
    var $container = $('.masonry-row');
    $container.imagesLoaded(function () {
        $container.masonry({
            itemSelector: '.masonry-box'
        });
    });
});