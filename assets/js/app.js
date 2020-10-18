const navlink = document.querySelector(".navlinks");
const hamburger = document.querySelector(".hamburger");

hamburger.addEventListener("click", () => {
  navlink.classList.toggle("active");
});
