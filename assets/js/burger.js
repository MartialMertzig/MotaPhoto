document.addEventListener('DOMContentLoaded', function () {
    const menu = document.querySelector('.menu-toggle');
    const line1 = document.querySelector('.line1');
    const line2 = document.querySelector('.line2');
    const line3 = document.querySelector('.line3');
    const fullMenu = document.querySelector('.full-screen-menu-open');

    const links = document.querySelectorAll('.full-screen-menu a');

    menu.addEventListener('click', function () {
        line1.classList.toggle('line1-active');
        line2.classList.toggle('line2-active');
        line3.classList.toggle('line3-active');
        fullMenu.classList.toggle('full-screen-menu');
    });

    links.forEach(function (link) {
        link.addEventListener('click', function () {
            line1.classList.remove('line1-active');
            line2.classList.remove('line2-active');
            line3.classList.remove('line3-active');
            fullMenu.classList.remove('full-screen-menu');
        });
    });
});