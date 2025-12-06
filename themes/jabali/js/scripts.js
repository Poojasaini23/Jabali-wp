jQuery(document).ready(function () {

    if (jQuery("#back-to-top").length) {
        var scrollTrigger = 100, // px
            backToTop = function () {
                var scrollTop = jQuery(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    jQuery("#back-to-top").addClass("show");
                } else {
                    jQuery("#back-to-top").removeClass("show");
                }
            };
        backToTop();
        jQuery(window).on("scroll", function () {
            backToTop();
        });
        jQuery("#back-to-top").on("click", function (e) {
            e.preventDefault();
            jQuery("html,body").animate({
                scrollTop: 0,
            },
                700
            );
        }); 
    }

    if (jQuery("header").length) {
        var scrollTrigger = 100, // px
            activeTop = function () {
                var scrollTop = jQuery(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    jQuery("header").addClass("active");
                } else {
                    jQuery("header").removeClass("active");
                }
            };
        activeTop(); 
        jQuery(window).on("scroll", function () {
            activeTop();
        });
    }


    jQuery(".home-service-repeater").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        autoplay: false,
        infinite: true,
        arrows: true,
        autoplaySpeed: 2000,
        centerMode: true,
        centerPadding: '480px',
        responsive: [
            {
              breakpoint: 2000,
              settings: {
                  centerPadding: '380px',
              }
            },
            {
              breakpoint: 1800,
              settings: {
                  centerPadding: '320px',
              }
            },
            {
              breakpoint: 1600,
              settings: {
                centerPadding: '280px',
             }
            },
            {
              breakpoint: 1024,
              settings: {
                centerPadding: '120px',
              }
            },
            {
              breakpoint: 768,
              settings: {
                centerPadding: '40px',
              }
            }, 
            {
              breakpoint: 480,
              settings: {
                centerPadding: '20px',
              }
            },  
        ]
    })
    

    jQuery(".gallery-repeater").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        autoplay: true,
        infinite: true,
        arrows: true,
        autoplaySpeed: 2000,
    })

    jQuery(".btn-block").click(function () {
       jQuery(this).find("i").toggleClass("fas fa-plus fas fa-angle-up");
    });

    jQuery(".header-slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        fade: true,
        autoplay: true,
        infinite: true,
        arrows: false,
        autoplaySpeed: 2000,
    })


});