document.addEventListener('DOMContentLoaded', function () {
    const sections = document.querySelectorAll('.scroll-animation');

    // Create an Intersection Observer to watch elements
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          // Add 'animate' class when the section is in view
          entry.target.classList.add('animate');
        } else {
          // Remove 'animate' class when the section leaves view, allowing re-trigger
          entry.target.classList.remove('animate');
        }
      });
    }, {
      threshold: 0.2 // Trigger when 20% of the section is visible
    });

    // Observe each section
    sections.forEach(section => {
      observer.observe(section);
    });
  });
