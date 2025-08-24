// Authentication JavaScript

document.addEventListener('DOMContentLoaded', () => {
  // Toggle password visibility
  const togglePasswordButtons = document.querySelectorAll('.toggle-password');

  togglePasswordButtons.forEach(button => {
    button.addEventListener('click', function () {
      const passwordField = this.previousElementSibling;
      const icon = this.querySelector('i');

      if (passwordField.type === 'password') {
        passwordField.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
      } else {
        passwordField.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
      }
    });
  });

  // Password strength meter for signup form
  const passwordField = document.getElementById('password');
  const strengthSegments = document.querySelectorAll('.strength-segment');
  const strengthText = document.querySelector('.strength-text');

  // if (passwordField) {
  //   passwordField.addEventListener('input', function () {
  //     const password = this.value;
  //     let strength = 0;

  //     // Length check
  //     if (password.length >= 8) {
  //       strength += 1;
  //     }

  //     // Uppercase and lowercase check
  //     // if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) {
  //     //   strength += 1;
  //     // }

  //     // Number check
  //     // if (password.match(/([0-9])/)) {
  //     //   strength += 1;
  //     // }

  //     // Special character check
  //     // if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) {
  //     //   strength += 1;
  //     // }

  //     // Update strength meter
  //     strengthSegments.forEach((segment, index) => {
  //       segment.className = 'strength-segment';

  //       if (index < strength) {
  //         if (strength === 1) {
  //           segment.classList.add('strong');
  //         }
  //         // } else if (strength === 2 || strength === 3) {
  //         //   segment.classList.add('medium');
  //         // } else if (strength === 4) {
  //         //   segment.classList.add('strong');
  //         // }
  //       }
  //     });

  //     // Update strength text
  //     if (password.length === 0) {
  //       strengthText.textContent = '';
  //     } else if (strength < 2) {
  //       strengthText.textContent = 'Weak';
  //     } else if (strength < 4) {
  //       strengthText.textContent = 'Medium';
  //     } else {
  //       strengthText.textContent = 'Strong';
  //     }
  //   });
  // }

  // Login form validation
  const loginForm = document.getElementById('login-form');

  if (loginForm) {
    loginForm.addEventListener('submit', function (e) {
      e.preventDefault();

      const email = document.getElementById('email').value;
      const password = document.getElementById('password').value;

      // Simulate validation and API call
      if (!validateEmail(email)) {
        showFormError('Please enter a valid email address');
        return;
      }

      if (password.length < 6) {
        showFormError('Password must be at least 6 characters');
        return;
      }

      // Simulate successful login
      showFormSuccess('Login successful! Redirecting...');

      // Redirect after a short delay (in a real app, this would happen after server confirmation)
      setTimeout(() => {
        window.location.href = 'index.html';
      }, 1500);
    });
  }

  // Signup form validation
  const signupForm = document.getElementById('signup-form');

  if (signupForm) {
    signupForm.addEventListener('submit', function (e) {
      e.preventDefault();

      const firstName = document.getElementById('first-name').value;
      const lastName = document.getElementById('last-name').value;
      const email = document.getElementById('email').value;
      const phone = document.getElementById('phone').value;
      const password = document.getElementById('password').value;
      const confirmPassword = document.getElementById('confirm-password').value;
      const accountType = document.getElementById('account-type').value;
      const termsChecked = document.getElementById('terms').checked;

      // Validate form inputs
      if (!firstName || !lastName) {
        showFormError('Please enter your full name');
        return;
      }

      if (!validateEmail(email)) {
        showFormError('Please enter a valid email address');
        return;
      }

      if (!validatePhone(phone)) {
        showFormError('Please enter a valid phone number');
        return;
      }

      if (password.length < 8) {
        showFormError('Password must be at least 8 characters');
        return;
      }

      if (password !== confirmPassword) {
        showFormError('Passwords do not match');
        return;
      }

      if (!accountType) {
        showFormError('Please select an account type');
        return;
      }

      if (!termsChecked) {
        showFormError('You must agree to the Terms of Service');
        return;
      }

      // Simulate successful signup
      showFormSuccess('Account created successfully! Redirecting...');

      // Redirect after a short delay
      setTimeout(() => {
        window.location.href = 'index.html';
      }, 1500);
    });
  }

  // Helper functions
  function validateEmail(email) {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
  }

  function validatePhone(phone) {
    const re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
    return re.test(String(phone));
  }

  function showFormError(message) {
    // Create error message element if it doesn't exist
    let errorElement = document.querySelector('.form-error');

    if (!errorElement) {
      errorElement = document.createElement('div');
      errorElement.className = 'form-error';
      errorElement.style.color = 'var(--error-color)';
      errorElement.style.marginBottom = 'var(--space-md)';
      errorElement.style.fontSize = '0.9rem';

      const submitButton = document.querySelector('button[type="submit"]');
      submitButton.parentNode.insertBefore(errorElement, submitButton);
    }

    errorElement.textContent = message;

    // Hide error after 3 seconds
    setTimeout(() => {
      errorElement.textContent = '';
    }, 3000);
  }

  function showFormSuccess(message) {
    // Create success message element if it doesn't exist
    let successElement = document.querySelector('.form-success');

    if (!successElement) {
      successElement = document.createElement('div');
      successElement.className = 'form-success';
      successElement.style.color = 'var(--success-color)';
      successElement.style.marginBottom = 'var(--space-md)';
      successElement.style.fontSize = '0.9rem';

      const submitButton = document.querySelector('button[type="submit"]');
      submitButton.parentNode.insertBefore(successElement, submitButton);
    }

    successElement.textContent = message;

    // Disable form inputs
    const formInputs = document.querySelectorAll('input, select, button');
    formInputs.forEach(input => {
      input.disabled = true;
    });
  }
});