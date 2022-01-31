var searchForm = document.querySelector(".search-form");

searchForm.onclick = () => {
  searchForm.classList.toggle("active");
};

let loginForm = document.querySelector(".login-form");

document.querySelector("#login-btn").onclick = () => {
  loginForm.classList.toggle("active");
};

document.querySelector("#close-login-btn").onclick = () => {
  loginForm.classList.remove("active");
};

new Swiper(".home-slider", {
  loop: true,
  effect: "fade",
  autoplay: {
    delay: 2000,
  },
  speed: 1000,
});
