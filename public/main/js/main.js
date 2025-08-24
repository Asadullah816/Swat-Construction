// Main JavaScript File

// DOM Elements
const header = document.getElementById('header');
const menuToggle = document.querySelector('.menu-toggle');
const navMenu = document.querySelector('.nav-menu');
const dropdowns = document.querySelectorAll('.dropdown');
const backToTop = document.getElementById('back-to-top');

// Mobile Menu Toggle
if (menuToggle && navMenu) {
    menuToggle.addEventListener('click', () => {
        menuToggle.classList.toggle('active');
        navMenu.classList.toggle('active');
    });
}

// Mobile Dropdown Toggle
if (dropdowns.length > 0) {
    // For mobile view
    dropdowns.forEach(dropdown => {
        const dropdownLink = dropdown.querySelector('a');

        // Mobile dropdown toggle
        dropdownLink.addEventListener('click', function (e) {
            if (window.innerWidth <= 768) {
                e.preventDefault();
                dropdown.classList.toggle('active');
            }
        });
    });
}

// Scroll Event Listener
window.addEventListener('scroll', () => {
    // Header shadow on scroll
    if (window.scrollY > 50) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }

    // Back to top button visibility
    if (window.scrollY > 500) {
        backToTop.classList.add('visible');
    } else {
        backToTop.classList.remove('visible');
    }
});

// Back to Top functionality
if (backToTop) {
    backToTop.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const targetId = this.getAttribute('href');

        // Skip if it's just "#" or a dropdown toggle on mobile
        if (targetId === '#' || (window.innerWidth <= 768 && this.parentElement.classList.contains('dropdown'))) {
            return;
        }

        e.preventDefault();

        const targetElement = document.querySelector(targetId);

        if (targetElement) {
            // Calculate header height for offset
            const headerHeight = header.offsetHeight;

            // Scroll to target with header offset
            const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - headerHeight;

            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });

            // Close mobile menu if open
            if (navMenu.classList.contains('active')) {
                menuToggle.classList.remove('active');
                navMenu.classList.remove('active');
            }
        }
    });
});

// Set current year in the footer copyright
document.addEventListener('DOMContentLoaded', () => {
    const yearElements = document.querySelectorAll('.current-year');
    const currentYear = new Date().getFullYear();

    yearElements.forEach(element => {
        element.textContent = currentYear;
    });

    // Create placeholder logo until real logo is available
    const logoImg = document.getElementById('logo-img');
    if (logoImg && logoImg.getAttribute('src') === 'img/logo.png') {
        createPlaceholderLogo(logoImg);
    }
});

// Create a placeholder logo when image is not available
function createPlaceholderLogo(imgElement) {
    // Create a canvas element
    const canvas = document.createElement('canvas');
    const ctx = canvas.getContext('2d');

    // Set canvas dimensions
    canvas.width = 40;
    canvas.height = 40;

    // Draw background
    ctx.fillStyle = '#0A2647';
    ctx.fillRect(0, 0, 40, 40);

    // Draw "B" letter
    ctx.font = 'bold 24px Montserrat, sans-serif';
    ctx.fillStyle = '#FFFFFF';
    ctx.textAlign = 'center';
    ctx.textBaseline = 'middle';
    ctx.fillText('B', 20, 20);

    // Set the canvas data as the image source
    imgElement.src = canvas.toDataURL();
}

// Handle form submissions
// document.addEventListener('DOMContentLoaded', () => {
//   const forms = document.querySelectorAll('form');

//   forms.forEach(form => {
//     form.addEventListener('submit', function(e) {
//       e.preventDefault();

//       // Simulate form submission
//       const submitButton = this.querySelector('button[type="submit"]');
//       const originalText = submitButton.textContent;

//       submitButton.disabled = true;
//       submitButton.textContent = 'Processing...';

//       // Simulate API call
//       setTimeout(() => {
//         submitButton.textContent = 'Success!';

//         // Reset form
//         setTimeout(() => {
//           submitButton.disabled = false;
//           submitButton.textContent = originalText;
//           form.reset();
//         }, 1500);
//       }, 1500);
//     });
//   });
// });

// Accessibility improvements
document.addEventListener('DOMContentLoaded', () => {
    // Add aria-labels to any elements that need them
    const socialLinks = document.querySelectorAll('.social-links a');

    socialLinks.forEach(link => {
        const icon = link.querySelector('i');
        if (icon) {
            const socialNetwork = icon.className.split('fa-')[1];
            link.setAttribute('aria-label', `Visit our ${socialNetwork} page`);
        }
    });
});
