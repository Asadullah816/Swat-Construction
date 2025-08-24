// Contact Page JavaScript

document.addEventListener('DOMContentLoaded', () => {
  // Contact form submission
  const contactForm = document.getElementById('contact-form');
  const successMessage = document.querySelector('.form-success-message');
  const errorMessage = document.querySelector('.form-error-message');
  
  if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Basic form validation
      const name = document.getElementById('name').value;
      const email = document.getElementById('email').value;
      const phone = document.getElementById('phone').value;
      const subject = document.getElementById('subject').value;
      const message = document.getElementById('message').value;
      const consent = document.getElementById('privacy-consent').checked;
      
      // Validate required fields
      if (!name || !email || !subject || !message) {
        showError('Please fill in all required fields');
        return;
      }
      
      // Validate email format
      if (!validateEmail(email)) {
        showError('Please enter a valid email address');
        return;
      }
      
      // Validate phone if provided
      if (phone && !validatePhone(phone)) {
        showError('Please enter a valid phone number');
        return;
      }
      
      // Check privacy consent
      if (!consent) {
        showError('You must agree to our privacy policy');
        return;
      }
      
      // Simulate form submission
      const submitButton = contactForm.querySelector('button[type="submit"]');
      const originalText = submitButton.textContent;
      
      submitButton.disabled = true;
      submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
      
      // Simulate API call with timeout
      setTimeout(() => {
        // Show success message
        showSuccess('Your message has been sent successfully. We will contact you soon!');
        
        // Reset form
        contactForm.reset();
        
        // Restore button
        setTimeout(() => {
          submitButton.disabled = false;
          submitButton.textContent = originalText;
        }, 3000);
      }, 1500);
    });
  }
  
  // FAQ Accordion functionality (simplified version)
  const faqItems = document.querySelectorAll('.faq-item');
  
  faqItems.forEach(item => {
    const question = item.querySelector('.faq-question');
    const answer = item.querySelector('.faq-answer');
    const answerContent = item.querySelector('.answer-content');
    
    question.addEventListener('click', () => {
      // Close all other items
      faqItems.forEach(otherItem => {
        if (otherItem !== item && otherItem.classList.contains('active')) {
          otherItem.classList.remove('active');
          otherItem.querySelector('.faq-answer').style.height = '0';
        }
      });
      
      // Toggle current item
      item.classList.toggle('active');
      
      if (item.classList.contains('active')) {
        answer.style.height = answerContent.offsetHeight + 'px';
      } else {
        answer.style.height = '0';
      }
    });
  });
  
  // Helper functions
  function validateEmail(email) {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
  }
  
  function validatePhone(phone) {
    const re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
    return re.test(String(phone));
  }
  
  function showSuccess(message) {
    if (successMessage) {
      successMessage.textContent = message;
      successMessage.classList.add('visible');
      
      // Hide error message if visible
      if (errorMessage && errorMessage.classList.contains('visible')) {
        errorMessage.classList.remove('visible');
      }
      
      // Auto hide after 5 seconds
      setTimeout(() => {
        successMessage.classList.remove('visible');
      }, 5000);
    }
  }
  
  function showError(message) {
    if (errorMessage) {
      errorMessage.textContent = message;
      errorMessage.classList.add('visible');
      
      // Auto hide after 5 seconds
      setTimeout(() => {
        errorMessage.classList.remove('visible');
      }, 5000);
    }
  }
  
  // Office hours toggle
  const hoursToggles = document.querySelectorAll('.hours-toggle');
  
  if (hoursToggles) {
    hoursToggles.forEach(toggle => {
      toggle.addEventListener('click', () => {
        const hoursContent = toggle.nextElementSibling;
        
        if (hoursContent.style.display === 'none' || !hoursContent.style.display) {
          hoursContent.style.display = 'block';
          toggle.querySelector('i').classList.remove('fa-chevron-down');
          toggle.querySelector('i').classList.add('fa-chevron-up');
        } else {
          hoursContent.style.display = 'none';
          toggle.querySelector('i').classList.remove('fa-chevron-up');
          toggle.querySelector('i').classList.add('fa-chevron-down');
        }
      });
    });
  }
});