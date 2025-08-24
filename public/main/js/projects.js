// Projects Page JavaScript

document.addEventListener('DOMContentLoaded', () => {
  // Project filtering functionality
  const filterButtons = document.querySelectorAll('.filter-button');
  const projectCards = document.querySelectorAll('.project-card');
  
  filterButtons.forEach(button => {
    button.addEventListener('click', () => {
      // Update active button
      filterButtons.forEach(btn => {
        btn.classList.remove('active');
      });
      button.classList.add('active');
      
      const filter = button.getAttribute('data-filter');
      
      // Show/hide projects based on category
      if (filter === 'all') {
        projectCards.forEach(card => {
          card.style.display = 'block';
        });
      } else {
        projectCards.forEach(card => {
          if (card.getAttribute('data-category') === filter) {
            card.style.display = 'block';
          } else {
            card.style.display = 'none';
          }
        });
      }
    });
  });
  
  // Project modal functionality
  const projectLinks = document.querySelectorAll('.view-project');
  const projectModal = document.getElementById('project-modal');
  const modalClose = document.querySelector('.modal-close');
  
  if (projectLinks && projectModal) {
    projectLinks.forEach(link => {
      link.addEventListener('click', (e) => {
        e.preventDefault();
        
        const projectId = link.getAttribute('data-project');
        
        // Here you would typically load project details based on projectId
        // For demo, we'll just show the modal
        projectModal.classList.add('active');
        document.body.style.overflow = 'hidden'; // Prevent scrolling
      });
    });
    
    modalClose.addEventListener('click', () => {
      projectModal.classList.remove('active');
      document.body.style.overflow = ''; // Restore scrolling
    });
    
    // Close on click outside of content
    projectModal.addEventListener('click', (e) => {
      if (e.target === projectModal) {
        projectModal.classList.remove('active');
        document.body.style.overflow = '';
      }
    });
    
    // Gallery functionality inside modal
    const galleryThumbs = document.querySelectorAll('.gallery-thumb');
    const mainImage = document.querySelector('.gallery-main img');
    
    galleryThumbs.forEach(thumb => {
      thumb.addEventListener('click', () => {
        // Update active thumb
        galleryThumbs.forEach(t => {
          t.classList.remove('active');
        });
        thumb.classList.add('active');
        
        // Update main image
        const imageSrc = thumb.querySelector('img').getAttribute('src');
        mainImage.setAttribute('src', imageSrc);
      });
    });
  }
  
  // Pagination functionality
  const pageLinks = document.querySelectorAll('.page-link');
  
  pageLinks.forEach(link => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      
      // Update active page
      pageLinks.forEach(otherLink => {
        otherLink.classList.remove('active');
      });
      link.classList.add('active');
      
      // Here you would typically load new projects
      // For demo, we'll just smooth scroll to top of projects
      document.querySelector('.projects-container').scrollIntoView({
        behavior: 'smooth'
      });
    });
  });
});