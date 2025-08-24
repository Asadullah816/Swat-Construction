// Slider Functionality
document.addEventListener('DOMContentLoaded', () => {
  // Hero Slider
  initializeHeroSlider();

  // Testimonial Slider
  initializeTestimonialSlider();
});

// Hero Slider Functions
function initializeHeroSlider() {
  const slides = document.querySelectorAll('.hero-slide');
  const dots = document.querySelectorAll('.slider-dots .dot');
  const prevBtn = document.querySelector('.prev-slide');
  const nextBtn = document.querySelector('.next-slide');

  if (!slides.length) return;

  let currentSlide = 0;
  let slideInterval = setInterval(nextSlide, 8000);

  // Next slide function
  function nextSlide() {
    goToSlide((currentSlide + 1) % slides.length);
  }

  // Previous slide function
  function prevSlide() {
    goToSlide((currentSlide - 1 + slides.length) % slides.length);
  }

  // Go to specific slide
  function goToSlide(n) {
    slides[currentSlide].classList.remove('active');
    if (dots && dots[currentSlide]) {
      dots[currentSlide].classList.remove('active');
    }

    currentSlide = n;

    slides[currentSlide].classList.add('active');
    if (dots && dots[currentSlide]) {
      dots[currentSlide].classList.add('active');
    }
  }

  // Reset interval when manually changing slides
  function resetInterval() {
    clearInterval(slideInterval);
    slideInterval = setInterval(nextSlide, 5000);
  }

  // Event listeners
  if (prevBtn) {
    prevBtn.addEventListener('click', () => {
      prevSlide();
      resetInterval();
    });
  }

  if (nextBtn) {
    nextBtn.addEventListener('click', () => {
      nextSlide();
      resetInterval();
    });
  }

  if (dots) {
    dots.forEach((dot, index) => {
      dot.addEventListener('click', () => {
        goToSlide(index);
        resetInterval();
      });
    });
  }
}

// Testimonial Slider Functions
function initializeTestimonialSlider() {
  const slides = document.querySelectorAll('.testimonial-slide');
  const dots = document.querySelectorAll('.testimonial-dots .dot');
  const prevBtn = document.querySelector('.prev-testimonial');
  const nextBtn = document.querySelector('.next-testimonial');

  if (!slides.length) return;

  let currentSlide = 0;
  let slideInterval = setInterval(nextSlide, 6000);

  // Next slide function
  function nextSlide() {
    goToSlide((currentSlide + 1) % slides.length);
  }

  // Previous slide function
  function prevSlide() {
    goToSlide((currentSlide - 1 + slides.length) % slides.length);
  }

  // Go to specific slide
  function goToSlide(n) {
    slides[currentSlide].classList.remove('active');
    if (dots && dots[currentSlide]) {
      dots[currentSlide].classList.remove('active');
    }

    currentSlide = n;

    slides[currentSlide].classList.add('active');
    if (dots && dots[currentSlide]) {
      dots[currentSlide].classList.add('active');
    }
  }

  // Reset interval when manually changing slides
  function resetInterval() {
    clearInterval(slideInterval);
    slideInterval = setInterval(nextSlide, 6000);
  }

  // Event listeners
  if (prevBtn) {
    prevBtn.addEventListener('click', () => {
      prevSlide();
      resetInterval();
    });
  }

  if (nextBtn) {
    nextBtn.addEventListener('click', () => {
      nextSlide();
      resetInterval();
    });
  }

  if (dots) {
    dots.forEach((dot, index) => {
      dot.addEventListener('click', () => {
        goToSlide(index);
        resetInterval();
      });
    });
  }
}