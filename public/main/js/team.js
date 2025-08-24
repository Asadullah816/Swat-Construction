// Team Page JavaScript

document.addEventListener('DOMContentLoaded', () => {
  // Team filtering functionality
  const filterButtons = document.querySelectorAll('.filter-button');
  const teamCards = document.querySelectorAll('.team-card');
  
  filterButtons.forEach(button => {
    button.addEventListener('click', () => {
      // Update active button
      filterButtons.forEach(btn => {
        btn.classList.remove('active');
      });
      button.classList.add('active');
      
      const filter = button.getAttribute('data-filter');
      
      // Show/hide team members based on department
      if (filter === 'all') {
        teamCards.forEach(card => {
          card.style.display = 'block';
        });
      } else {
        teamCards.forEach(card => {
          if (card.getAttribute('data-department') === filter) {
            card.style.display = 'block';
          } else {
            card.style.display = 'none';
          }
        });
      }
    });
  });
  
  // Leadership stat counters
  const statValues = document.querySelectorAll('.stat-value');
  
  // Function to animate counting up
  function animateCounter(el, target) {
    const duration = 2000; // 2 seconds
    const start = 0;
    const increment = Math.ceil(target / (duration / 16)); // Assuming 60fps
    
    let current = 0;
    const timer = setInterval(() => {
      current += increment;
      if (current >= target) {
        el.textContent = target;
        clearInterval(timer);
      } else {
        el.textContent = current;
      }
    }, 16);
  }
  
  // Check if element is in viewport
  function isInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }
  
  // Start counter when element comes into view
  let hasAnimated = false;
  
  function checkStats() {
    if (!hasAnimated && statValues.length > 0 && isInViewport(statValues[0])) {
      statValues.forEach(stat => {
        const target = parseInt(stat.getAttribute('data-target'), 10);
        animateCounter(stat, target);
      });
      hasAnimated = true;
    }
  }
  
  // Initial check
  checkStats();
  
  // Check on scroll
  window.addEventListener('scroll', checkStats);
  
  // Apply positions
  const applyButtons = document.querySelectorAll('.apply-btn');
  
  applyButtons.forEach(button => {
    button.addEventListener('click', (e) => {
      e.preventDefault();
      const position = button.getAttribute('data-position');
      
      // Scroll to contact form
      const contactForm = document.querySelector('.contact-form');
      if (contactForm) {
        contactForm.scrollIntoView({ behavior: 'smooth' });
        
        // Pre-fill subject if it exists
        const subjectField = document.getElementById('subject');
        if (subjectField) {
          subjectField.value = `Application for ${position} Position`;
        }
      } else {
        // Redirect to contact page if form doesn't exist on this page
        window.location.href = 'contact.html';
      }
    });
  });
});