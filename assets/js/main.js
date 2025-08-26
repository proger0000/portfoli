
// Portfolio filter with animations
const filterButtons = document.querySelectorAll('.filter-btn');
const portfolioItems = document.querySelectorAll('.portfolio-item');

filterButtons.forEach(button => {
  button.addEventListener('click', () => {
    // Update active button classes
    filterButtons.forEach(btn => {
      btn.classList.remove('active', 'bg-primary-700');
      btn.classList.add('bg-secondary-700');
    });
    button.classList.add('active', 'bg-primary-700');
    button.classList.remove('bg-secondary-700');

    const filter = button.getAttribute('data-filter');

    portfolioItems.forEach(item => {
      // cancel any running animations on this item
      anime.remove(item);

      if (filter === 'all' || item.getAttribute('data-category') === filter) {
        // show item with animation
        item.style.display = 'block';
        anime({
          targets: item,
          opacity: [0, 1],
          scale: [0.95, 1],
          duration: 300
        });
      } else {
        // hide item with animation then set display none
        anime({
          targets: item,
          opacity: [1, 0],
          scale: [1, 0.95],
          duration: 300,
          complete: () => {
            item.style.display = 'none';
          }
        });
      }
    });
  });
});
