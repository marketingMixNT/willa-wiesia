import './bootstrap';
import './partials/marquee'
import './partials/nav'
import './partials/preloader'
import './partials/glightbox'

import Swiper from "swiper";
import { Autoplay, EffectFade, Navigation } from "swiper/modules";
import "swiper/swiper-bundle.css";

new Swiper(".hero-carousel", {
    loop: true,
    freeMode: true,
    grabCursor: true,
    slidesPerView: 1,
    breakpoints: {
        720: {
            slidesPerView: 2,
        },
        1200: {
            slidesPerView: 3,
        },
    },
    spaceBetween: 30,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    modules: [Autoplay],
});

new Swiper(".room-carousel", {
    effect: "fade",
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    grabCursor: true,

    modules: [Navigation, EffectFade],
});

new Swiper(".outdoor-carousel", {
    effect: "fade",
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    grabCursor: true,

    modules: [Navigation, EffectFade],
});

const footerYear = document.querySelector('#footerYear')

const currentYear = new Date().getFullYear()

footerYear.innerHTML = currentYear