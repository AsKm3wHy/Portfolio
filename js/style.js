$(".carousel").owlCarousel({
  margin: 20,
  loop: true,
  autoplay: true,
  autoplayTimeout: 2000,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1,
      nav: false,
    },
    600: {
      items: 2,
      nav: false,
    },
    1000: {
      items: 3,
      nav: false,
    },
    // 1100: {
    //     items: 4,
    //     nav: false,
    // },
  },
});

// Mobile Menu Toggle
const hamburger = document.getElementById("hamburger");
const navbar = document.getElementById("navbar");

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("active");
  navbar.classList.toggle("active");
});

// Close menu when a link is clicked
const navLinks = navbar.querySelectorAll("a");
navLinks.forEach((link) => {
  link.addEventListener("click", () => {
    hamburger.classList.remove("active");
    navbar.classList.remove("active");
  });
});

// Close menu when clicking outside
document.addEventListener("click", (event) => {
  if (!event.target.closest("header")) {
    hamburger.classList.remove("active");
    navbar.classList.remove("active");
  }
});
