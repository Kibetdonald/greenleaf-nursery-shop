$(document).ready(function () {   

//TOGGLE ACTIVE CLASS ON NAVBAR TOGGLER
    $('.navbar-toggler').click(function () {
        $(this).toggleClass('active');
    });

//SHOW/HIDE SUBMENU
    $('.toggle-submenu').click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).toggleClass('fa-angle-down fa-angle-up');
        $(this).parent().next('.submenu').slideToggle();
    });


//  SHOW/HIDE MOBILE-FORM-SEARCH
    $('.mobile-search').click(function () {
        $(this).toggleClass('fa-search fa-close');
        $('.mobile-form-search').toggleClass('on');
    });

//EASE SCROLL

    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 1000);
    });

//TOGGLE ACTIVE CLASS
    $('.category-item').click(function () {
        $('.category-item.active').removeClass('active');
    });

    $('.category-item').click(function () {
        $(this).addClass('active');
    });


// FILTER IMAGE GALLERY FUNCTIONALITY
    $('.category-item').click(function () {
        var category = $(this).attr('id');
        if (category == 'all') {
            $('.gallery-item').addClass('hide');
            setTimeout(function () {
                $('.gallery-item').removeClass('hide');
            }, 300);
        } else {
            $('.gallery-item').addClass('hide');
            setTimeout(function () {
                $('.' + category).removeClass('hide');
            }, 300);
        }
    });



    function animation() {

        var windowHeight = $(window).height();
        var scrollDown = $(window).scrollTop();

        $('.animation').each(function () {
            var position = $(this).offset().top;

            if (position < scrollDown + windowHeight - 100) {
                var animacija = $(this).attr('data-animation');
                $(this).addClass(animacija);
            }
        });
    }

    animation();

    $(window).scroll(function () {
        animation();
    });

    if ($('.owl-carousel').length > 0) {
        $('.show-case-slider').owlCarousel({
            loop: false,
            margin: 0,
            responsiveClass: true,
            dots: false,
            autoplay: true,
            nav: true,
            items: 1,
            navText: ['<span class="fa fa-chevron-left">', '<span class="fa fa-chevron-right">']
        });

        $('.show-case-slider-2').owlCarousel({
            loop: false,
            margin: 0,
            responsiveClass: true,
            dots: true,
            autoplay: true,
            nav: false,
            items: 1
        });


        $('.popular-products-slider').owlCarousel({
            loop: false,
            margin: 30,
            responsiveClass: true,
            dots: false,
            autoplay: true,
            nav: true,
            navText: ['<span class="fa fa-chevron-left">', '<span class="fa fa-chevron-right">'],

            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 2
                },

                768: {
                    items: 3
                },
                992: {
                    items: 4

                },
                1200: {
                    items: 4


                }
            }

        });
    }
    
    //SHOW/HIDE SIDE-SUBMENU ON MOBILE WINDOW SIZE
    $('.fa-cogs').click(function () {
        $('.meni').css('margin-left', '5px');
    });

    $('.close-side-submenu').click(function () {
        $('.meni').css('margin-left', '-1000px');
    });



//    SHOW/HIDE SIDE-SUBMENU
    $('.meni').on('click', '.fa', function (e) {
        e.preventDefault();
        $(this).toggleClass('fa-plus-circle fa-minus-circle');
        $(this).parent().next('.side-submenu').slideToggle();


    });
    

//    ZOOM EFFECT ON HOVER PRODUCT IMAGE
    $('#zoom_01').elevateZoom({
        zoomType: 'lens',
        lensShape: 'round',
        lensSize: 200
    });



});


