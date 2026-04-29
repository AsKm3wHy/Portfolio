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

const hamburger = document.getElementById("hamburger");
const navbar = document.getElementById("navbar");

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("active");
  navbar.classList.toggle("active");
});

const navLinks = navbar.querySelectorAll("a");
navLinks.forEach((link) => {
  link.addEventListener("click", () => {
    hamburger.classList.remove("active");
    navbar.classList.remove("active");
  });
});

document.addEventListener("click", (event) => {
  if (!event.target.closest("header")) {
    hamburger.classList.remove("active");
    navbar.classList.remove("active");
  }
});

const form = document.getElementById("izml");
const successMessage = document.getElementById("successMessage");
const submitButton = document.getElementById("w-c-s-bgc_p-1-dm-id-4");
const fullNameInput = document.getElementById("fullName");
const emailInput = document.getElementById("email");
const nameError = document.getElementById("nameError");
const emailError = document.getElementById("emailError");

function validateEmail(email) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}

function validateForm() {
  let isValid = true;

  nameError.textContent = "";
  emailError.textContent = "";

  if (fullNameInput.value.trim() === "") {
    nameError.textContent = "Full Name is required";
    isValid = false;
  } else if (fullNameInput.value.trim().length < 2) {
    nameError.textContent = "Full Name must be at least 2 characters";
    isValid = false;
  }

  if (emailInput.value.trim() === "") {
    emailError.textContent = "Email is required";
    isValid = false;
  } else if (!validateEmail(emailInput.value.trim())) {
    emailError.textContent = "Please enter a valid email address";
    isValid = false;
  }

  return isValid;
}

submitButton.addEventListener("click", (event) => {
  event.preventDefault();

  if (!validateForm()) {
    return;
  }

  const formData = new FormData(form);

  fetch("https://formspree.io/f/mlgaqzjk", {
    method: "POST",
    body: formData,
    headers: {
      Accept: "application/json",
    },
  })
    .then((response) => {
      if (response.ok) {
        // Show success message
        successMessage.style.display = "block";

        // Reset form fields
        form.reset();

        // Hide success message after 5 seconds
        setTimeout(() => {
          successMessage.style.display = "none";
        }, 5000);
      } else {
        alert("There was an error submitting the form. Please try again.");
      }
    })
    .catch((error) => {
      console.error("Error:", error);
      alert("There was an error submitting the form. Please try again.");
    });
});
