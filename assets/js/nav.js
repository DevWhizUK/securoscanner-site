document.addEventListener("DOMContentLoaded", function () {
  const menuButton = document.querySelector(".mobile-menu-button");
  const mobileMenu = document.querySelector(".mobile-menu");

  menuButton.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden");
  });

  document.querySelectorAll(".relative").forEach((dropdown) => {
    dropdown.addEventListener("mouseenter", () => {
      dropdown.querySelector(".absolute").classList.remove("hidden");
    });
    dropdown.addEventListener("mouseleave", () => {
      dropdown.querySelector(".absolute").classList.add("hidden");
    });
  });
});
document.addEventListener("DOMContentLoaded", function () {
  const dropdownButton = document.querySelector(".dropdown-button");
  const dropdownMenu = document.querySelector(".dropdown-menu");
  let timer;

  dropdownButton.addEventListener("mouseenter", () => {
    clearTimeout(timer);
    dropdownMenu.classList.remove("hidden");
  });

  dropdownButton.addEventListener("mouseleave", () => {
    timer = setTimeout(() => {
      dropdownMenu.classList.add("hidden");
    }, 500);
  });

  dropdownMenu.addEventListener("mouseenter", () => {
    clearTimeout(timer);
  });

  dropdownMenu.addEventListener("mouseleave", () => {
    dropdownMenu.classList.add("hidden");
  });
});

document.addEventListener("DOMContentLoaded", function () {
  document
    .querySelector(".dropdown-toggle")
    .addEventListener("click", function () {
      const dropdownContent = this.nextElementSibling;
      dropdownContent.classList.toggle("hidden");
    });
});
