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
