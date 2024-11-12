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
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,

        },

        pagination: {
            el: '#main_content01 .page',
            clickable: true,
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
    })
})