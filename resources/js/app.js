const words = ["Web Developer", "Graphic Designer", "UI/UX Designer"];
let i = 0;
let j = 0;
let currentWord = "";
let isDeleting = false;

function type() {
  const typewriter = document.getElementById("typewriter");
  if (!typewriter) return;

  currentWord = words[i];
  if (isDeleting) {
    typewriter.textContent = currentWord.substring(0, j - 1);
    j--;
    if (j === 0) {
      isDeleting = false;
      i++;
      if (i === words.length) {
        i = 0;
      }
    }
  } else {
    typewriter.textContent = currentWord.substring(0, j + 1);
    j++;
    if (j === currentWord.length) {
      isDeleting = true;
    }
  }
  setTimeout(type, 100);
}

function initMobileMenu() {
  const menuButton = document.getElementById("mobile-menu-btn");
  const mobileMenu = document.getElementById("mobile-menu");

  if (!menuButton || !mobileMenu) return;

  menuButton.addEventListener("click", () => {
    const isOpen = menuButton.getAttribute("aria-expanded") === "true";
    menuButton.setAttribute("aria-expanded", String(!isOpen));
    mobileMenu.classList.toggle("hidden", isOpen);
  });

  mobileMenu.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", () => {
      menuButton.setAttribute("aria-expanded", "false");
      mobileMenu.classList.add("hidden");
    });
  });
}

document.addEventListener("DOMContentLoaded", () => {
  type();
  initMobileMenu();
});


// FORM

const form = document.getElementById("Form");
const successMessage = document.getElementById("successMessage");
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

  if (nameError) {
    nameError.textContent = "";
  }
  if (emailError) {
    emailError.textContent = "";
  }

  if (fullNameInput && fullNameInput.value.trim() === "") {
    if (nameError) {
      nameError.textContent = "Full Name is required";
    }
    isValid = false;
  } else if (fullNameInput && fullNameInput.value.trim().length < 2) {
    if (nameError) {
      nameError.textContent = "Full Name must be at least 2 characters";
    }
    isValid = false;
  }

  if (emailInput && emailInput.value.trim() === "") {
    if (emailError) {
      emailError.textContent = "Email is required";
    }
    isValid = false;
  } else if (emailInput && !validateEmail(emailInput.value.trim())) {
    if (emailError) {
      emailError.textContent = "Please enter a valid email address";
    }
    isValid = false;
  }

  return isValid;
}

function handleFormSubmit(event) {
  event.preventDefault();

  if (!form || !fullNameInput || !emailInput) return;

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
        if (successMessage) {
          successMessage.style.display = "block";
        }

        form.reset();

        setTimeout(() => {
          if (successMessage) {
            successMessage.style.display = "none";
          }
        }, 5000);
      } else {
        alert("There was an error submitting the form. Please try again.");
      }
    })
    .catch((error) => {
      console.error("Error:", error);
      alert("There was an error submitting the form. Please try again.");
    });
}

if (form) {
  form.addEventListener("submit", handleFormSubmit);
}


