var searchForm = document.querySelector('.search-form');

searchForm.onclick = () => {
    searchForm.classList.toggle('active');
}

new Swiper('.home-slider', {
    loop: true,
    effect: "fade",
    autoplay: {
        delay: 2000
    },
    speed: 1000
});