const openBtn = document.querySelector("#hamburger");
const closeBtn = document.querySelector("#close");
const menu = document.querySelector("#menu");

const mobileNavItems = document.querySelectorAll('.nav-mobile-item')

const menuHandler = () => {
    menu.classList.toggle("menu-open");
    menu.classList.toggle("menu-close");
};

openBtn.addEventListener("click", menuHandler);
closeBtn.addEventListener("click", menuHandler);

mobileNavItems.forEach(item=>{
    item.addEventListener('click',menuHandler)
})

const navbar = document.querySelector("#navbar");
const marquee = document.querySelector("#marquee");
let isNavbarShown = false;

const navbarOnScroll = () => {
    let scrollPosition = window.scrollY;

    if (scrollPosition >= 250) {
        navbar.classList.add("bg-third");
        marquee.classList.add("hidden");
    } else {
        navbar.classList.remove("bg-third");
        marquee.classList.remove("hidden");
    }
};

window.addEventListener("scroll", navbarOnScroll);