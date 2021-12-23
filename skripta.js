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

var swiper = new Swiper(".books-slider", {
  loop: true,
  centeredSlides: true,
    autoplay: {
      delay: 9500,
      disableOnInteraction: false,
    },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});