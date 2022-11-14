// Scroll Links
const menuIcon = document.querySelector(".menu-icon");
const sidebar = document.querySelector(".sidebar");
const scrollLinks = document.querySelectorAll(".links");
const hireBtn = document.querySelector(".hire-me-btn");
const ctaBtn = document.querySelector(".cta-btn");

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
  const id = clicked.getAttribute("href").slice(1);
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

// Modal 1

const modal_overlay = document.querySelector(".modal-overlay");
const btn = document.querySelector(".modal-btn");
const closebtn = document.querySelector(".close-btn");
btn.addEventListener("click", function () {
  modal_overlay.classList.toggle("open-modal");
});
closebtn.addEventListener("click", function () {
  modal_overlay.classList.remove("open-modal");
});

// Modal 2
const modal_overlay2 = document.querySelector(".modal-overlay-2");
const btn2 = document.querySelector(".modal-btn-2");
const closebtn2 = document.querySelector(".close-btn-2");
btn2.addEventListener("click", function () {
  modal_overlay2.classList.toggle("open-modal");
});
closebtn2.addEventListener("click", function () {
  modal_overlay2.classList.remove("open-modal");
});
// slideshow 1

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
    dots[i].className = dots[i].className.replace(" activeDot", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " activeDot";
}
// slideshow 2

let slideIndex1 = 1;
showSlides1(slideIndex1);

function plusSlides1(n) {
  showSlides1((slideIndex1 += n));
}

function currentSlide1(n) {
  showSlides1((slideIndex1 = n));
}

function showSlides1(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides-1");
  let dots = document.getElementsByClassName("dot-1");
  if (n > slides.length) {
    slideIndex1 = 1;
  }
  if (n < 1) {
    slideIndex1 = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" activeDot", "");
  }
  slides[slideIndex1 - 1].style.display = "block";
  dots[slideIndex1 - 1].className += " activeDot";
}


let section = document.querySelectorAll("section");
let lists = document.querySelectorAll(".list");
function activeLink(li) {
  lists.forEach((item) => item.classList.remove("active"));
  li.classList.add("active");
}
lists.forEach((item) =>
  item.addEventListener("click", function () {
    activeLink(this);
  })
);

// Add active class on Scroll
window.onscroll = () => {
  section.forEach((sec) => {
    let top = window.scrollY;
    let offset = sec.offsetTop;
    let height = sec.offsetHeight;
    let id = sec.getAttribute("id");

    if (top >= offset && top < offset + height) {
      const target = document.querySelector(`[href='#${id}']`).parentElement;
      activeLink(target);
    }
  });
};
