document.addEventListener('DOMContentLoaded', () => {
    const burger = document.querySelector('.burger-icon');
    const menu = document.querySelector('.main-menu');

    if (burger && menu) {
        burger.addEventListener('click', () => {
            // Toggle the 'active' class
            menu.classList.toggle('active');
            // Mise à jour de l'attribut aria-expanded
            const isOpen = menu.classList.contains('active');
            burger.setAttribute('aria-expanded', isOpen);
        });
    }
}); 