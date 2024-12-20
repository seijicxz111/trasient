document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('header');
    const searchBar = document.querySelector('.search-bar');
    const menu = document.querySelector('.menu');
    const cardsContainer = document.querySelector('.cards-container');
    let lastScroll = 0;

    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;

        if (currentScroll > 50) {
            header.classList.add('scrolled');
            searchBar.classList.add('scrolled');
            menu.classList.add('scrolled');
            cardsContainer.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
            searchBar.classList.remove('scrolled');
            menu.classList.remove('scrolled');
            cardsContainer.classList.remove('scrolled');
        }

        lastScroll = currentScroll;
    });
});