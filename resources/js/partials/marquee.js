
const marqueeElement = document.querySelector("#marquee");

import Marquee from "vanilla-marquee";

new Marquee(marqueeElement, {
    duplicated: true,
    duration: 50000,
});