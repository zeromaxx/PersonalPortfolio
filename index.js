// Scroll Links
const menuIcon = document.querySelector(".menu-icon");
const sidebar = document.querySelector(".sidebar");
const scrollLinks = document.querySelectorAll(".links");
const hireBtn = document.querySelector(".hire-me-btn");
const ctaBtn = document.querySelector(".cta-btn");

ctaBtn.addEventListener("click", (e) => {
  e.preventDefault();
  const id = e.currentTarget.getAttribute("href").slice(1);
  const element = document.getElementById(id);
  let position = element.offsetTop;

  window.scrollTo({
    left: 0,
    top: position,
  });
});

hireBtn.addEventListener("click", (e) => {
  e.preventDefault();
  const id = e.currentTarget.getAttribute("href").slice(1);
  const element = document.getElementById(id);
  let position = element.offsetTop;

  window.scrollTo({
    left: 0,
    top: position,
  });
});

sidebar.addEventListener("click", function (e) {
  e.preventDefault();

  const clicked = e.target.closest(".links");
  if (!clicked) return;
  scrollLinks.forEach((c) => c.classList.remove("active-link"));
  const id = clicked.getAttribute("href").slice(1);

  if (clicked) {
    clicked.classList.add("active-link");
  }
  const element = document.getElementById(id);
  let position = element.offsetTop;

  window.scrollTo({
    left: 0,
    top: position,
  });
});

menuIcon.addEventListener("click", () => {
  sidebar.classList.toggle("toggleSidebar");
});

// Modal

const modal_overlay = document.querySelector(".modal-overlay");
const btn = document.querySelector(".modal-btn");
const closebtn = document.querySelector(".close-btn");
btn.addEventListener("click", function (e) {
  modal_overlay.classList.toggle("open-modal");
});
closebtn.addEventListener("click", function () {
  modal_overlay.classList.remove("open-modal");
});

// slideshow

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides((slideIndex += n));
}

function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}
