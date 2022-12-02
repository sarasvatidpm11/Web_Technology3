import "./bootstrap";

// Hamburger menu
const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");

hamburger.addEventListener("click", function () {
    hamburger.classList.toggle("hamburger-active");
    navMenu.classList.toggle("hidden");
});

//Navbar fixed
window.onscroll = function () {
    const header = document.querySelector("header");
    const navFix = header.offsetTop;

    if (window.pageYOffset > navFix) {
        header.classList.add("nav-fix");
    } else {
        header.classList.remove("nav-fix");
    }
};
