document.addEventListener('DOMContentLoaded', function() {
  // Mobile menu toggle
  const menuButton = document.querySelector('.mobile-menu-button');
  const mobileMenu = document.querySelector('.mobile-menu');
  if (menuButton) {
      menuButton.addEventListener('click', function() {
          mobileMenu.classList.toggle('hidden');
      });
  }

  // Event delegation for all dropdown toggles
  document.addEventListener('click', function(event) {
      let target = event.target;

      // Traverse up to find a .dropdown-toggle or stop at body
      while (target && target !== document.body) {
          if (target.matches('.dropdown-toggle')) {
              // Toggle the next .dropdown-content
              const dropdownContent = target.nextElementSibling;
              if (dropdownContent && dropdownContent.classList.contains('dropdown-content')) {
                  dropdownContent.classList.toggle('hidden');
              }
              // Prevent further event bubbling
              event.preventDefault();
              return;
          }
          target = target.parentElement;
      }
  });

  // Additional hover functionality for non-mobile dropdowns, unchanged
  document.querySelectorAll('.relative').forEach((dropdown) => {
      dropdown.addEventListener('mouseenter', () => {
          const dropdownContent = dropdown.querySelector('.absolute');
          if (dropdownContent) {
              dropdownContent.classList.remove('hidden');
          }
      });
      dropdown.addEventListener('mouseleave', () => {
          const dropdownContent = dropdown.querySelector('.absolute');
          if (dropdownContent) {
              dropdownContent.classList.add('hidden');
          }
      });
  });
});
