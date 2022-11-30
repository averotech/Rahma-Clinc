$(document).ready(function () {
    $('.stop-link').click(function(e) {
        e.preventDefault();
    });

    $(".main-slider").owlCarousel({
        loop:true,
        autoplay: true,
        rtl:true,
        items: 1,
        dots: false,
    });
    $('#next-btn').click(function() {
        $(".main-slider").trigger('next.owl.carousel');
    })
    // Go to the previous item
    $('#prev-btn').click(function() {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        $(".main-slider").trigger('prev.owl.carousel', [300]);
    });
    //Start offer slider
    $(".offers-slider").owlCarousel({
        loop:true,
        autoplay: true,
        rtl:true,
        dots: false,
        items: 1,
    });

    $('#next-btn-offer').click(function() {
        $(".offers-slider").trigger('next.owl.carousel');
    })
    // Go to the previous item
    $('#prev-btn-offer').click(function() {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        $(".offers-slider").trigger('prev.owl.carousel', [300]);
    });

    $('.nav-btn').click(function() {
        $('.nav-list').toggleClass('open');
    })
    $('.close-menu-icon').click(function() {
        $('.nav-list').removeClass('open');
    })

    //Start scroll go to element
    $('.nav-list ul li a, .to-menu').click(function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $('#' + $(this).data('scroll')).offset().top
        }, 1000)
    })



});


