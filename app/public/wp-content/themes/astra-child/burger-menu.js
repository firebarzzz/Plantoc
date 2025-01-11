document.addEventListener('DOMContentLoaded', () => {
    const burger = document.querySelector('.menu-toggle');
    const menu = document.querySelector('.main-navigation');

    if (burger && menu) {
        burger.addEventListener('click', () => {
            menu.classList.toggle('toggled');
        });
 
 
        function toggleMenu() {
            const menu = document.querySelector('.main-menu');
            mainMenu.classList.toggle('active');
        }
 
 
 
    }
});