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