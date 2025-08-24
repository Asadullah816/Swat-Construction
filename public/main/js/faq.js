// FAQ Page JavaScript

document.addEventListener('DOMContentLoaded', () => {
  // FAQ Accordion functionality
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
  
  // Category filtering
  const categoryTabs = document.querySelectorAll('.category-tab');
  const faqSections = document.querySelectorAll('.faq-section');
  
  categoryTabs.forEach(tab => {
    tab.addEventListener('click', () => {
      // Update active tab
      categoryTabs.forEach(otherTab => {
        otherTab.classList.remove('active');
      });
      tab.classList.add('active');
      
      const category = tab.getAttribute('data-category');
      
      // Show/hide sections based on category
      if (category === 'all') {
        faqSections.forEach(section => {
          section.style.display = 'block';
        });
      } else {
        faqSections.forEach(section => {
          if (section.getAttribute('data-category') === category) {
            section.style.display = 'block';
          } else {
            section.style.display = 'none';
          }
        });
      }
      
      // Close all expanded questions when switching categories
      faqItems.forEach(item => {
        item.classList.remove('active');
        item.querySelector('.faq-answer').style.height = '0';
      });
    });
  });
  
  // FAQ Search functionality
  const searchInput = document.getElementById('faq-search');
  
  if (searchInput) {
    searchInput.addEventListener('input', () => {
      const searchTerm = searchInput.value.toLowerCase().trim();
      
      if (searchTerm.length < 2) {
        // Reset visibility if search term is too short
        faqItems.forEach(item => {
          item.style.display = 'block';
        });
        
        faqSections.forEach(section => {
          section.style.display = 'block';
          
          // Check if section has any visible items
          const hasVisibleItems = Array.from(section.querySelectorAll('.faq-item')).some(item => {
            return item.style.display !== 'none';
          });
          
          if (!hasVisibleItems) {
            section.style.display = 'none';
          }
        });
        
        return;
      }
      
      // Search in questions and answers
      faqItems.forEach(item => {
        const question = item.querySelector('.faq-question').textContent.toLowerCase();
        const answer = item.querySelector('.answer-content').textContent.toLowerCase();
        
        if (question.includes(searchTerm) || answer.includes(searchTerm)) {
          item.style.display = 'block';
          
          // Expand the matching item
          item.classList.add('active');
          const answerElement = item.querySelector('.faq-answer');
          const answerContent = item.querySelector('.answer-content');
          answerElement.style.height = answerContent.offsetHeight + 'px';
        } else {
          item.style.display = 'none';
          
          // Collapse non-matching items
          item.classList.remove('active');
          item.querySelector('.faq-answer').style.height = '0';
        }
      });
      
      // Hide sections that have no visible items
      faqSections.forEach(section => {
        const hasVisibleItems = Array.from(section.querySelectorAll('.faq-item')).some(item => {
          return item.style.display !== 'none';
        });
        
        if (hasVisibleItems) {
          section.style.display = 'block';
        } else {
          section.style.display = 'none';
        }
      });
      
      // Reset category tabs
      categoryTabs.forEach(tab => {
        tab.classList.remove('active');
      });
      
      document.querySelector('.category-tab[data-category="all"]').classList.add('active');
    });
  }
});