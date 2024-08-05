// Add this at the bottom of your body tag -->

    document.addEventListener('DOMContentLoaded', () => {
      const elements = document.querySelectorAll('.container');

      const handleScroll = () => {
        elements.forEach(element => {
          const rect = element.getBoundingClientRect();
          const windowHeight = window.innerHeight;

          // Check if element is in the viewport
          if (rect.top < windowHeight && rect.bottom > 0) {
            element.classList.add('fade-in');
          }
        });
      };

      // Initial check
      handleScroll();

      // Add scroll event listener
      window.addEventListener('scroll', handleScroll);
    });



    let lastScrollTop = 0;
    const navbar = document.querySelector('.navbar');

    window.addEventListener('scroll', function() {
      let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

      if (scrollTop > lastScrollTop) {
        // Scrolling down
        navbar.classList.add('navbar-hidden');
      } else {
        // Scrolling up
        navbar.classList.remove('navbar-hidden');
      }
      lastScrollTop = scrollTop;
    });

