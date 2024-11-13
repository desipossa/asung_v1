$(function () {
    const MVS = new Swiper('.main_visual_slide', {
        loop: true,
        grabCursor: true,
        effect: "creative",
        creativeEffect: {
            prev: {
                shadow: true,
                translate: ["-20%", 0, -1],
            },
            next: {
                translate: ["100%", 0, 0],
            },
        },
        speed: 800,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,

        },

        pagination: {
            el: '#main_visual .page',
            clickable: true,
        },
    });


    const MCS = new Swiper('.main_content_slide', {
        loop: true,
        grabCursor: true,
        slidesPerView: 1,
        spaceBetween: 30,
        speed: 800,
        // autoplay: {
        //     delay: 4000,
        //     disableOnInteraction: false,

        // },

        pagination: {
            el: '#main_content01 .page',
            clickable: true,
        },

        navigation: {
            nextEl: '#main_content01 .arrows .next',
            prevEl: '#main_content01 .arrows .prev',
        },

        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 4.5,
                spaceBetween: 30,
            },
        },
    });




    const ALS = new Swiper('.agree_lnk_slide', {
        loop: true,
        grabCursor: true,
        slidesPerView: 1,
        spaceBetween: 30,
        speed: 800,
        // autoplay: {
        //     delay: 4000,
        //     disableOnInteraction: false,

        // },

        // pagination: {
        //     el: '#main_content01 .page',
        //     clickable: true,
        // },

        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 5,
                spaceBetween: 30,
            },
        },
    });
});


$(function () {
    $('.to_top').on('click', function () {
        $('html, body').animate({ scrollTop: 0 })
    })
})


$(function () {
    $('.moblie_btn').on('click', function () {
        $(this).toggleClass('on')
        $('.gnb').toggleClass('on')
    });


    $('.gnb').on('wheel touchmove', function (e) {
        e.stopPropagation();
        e.preventDefault();
    });

    $('.gnb>ul>li>a').on('click', function (e) {
        if ($('.gnb').hasClass('on')) {
            e.preventDefault();
            $(this).next().slideToggle();
            $(this).parent().siblings().find('ul').slideUp();
        }
    });

    $(window).on('resize', function () {
        $('.gnb ul ul').removeAttr('style');
        $('.gnb').removeClass('on')
    })
})

// $(function () {
//     // Initialize Lenis
//     const lenis = new Lenis();

//     // Use requestAnimationFrame to continuously update the scroll
//     function raf(time) {
//         lenis.raf(time);
//         requestAnimationFrame(raf);
//     }

//     requestAnimationFrame(raf);
// });
