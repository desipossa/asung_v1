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
    })
})