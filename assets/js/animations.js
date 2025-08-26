export function initScrollAnimations() {
  const elements = document.querySelectorAll('.skill-item, .timeline-item, .portfolio-item');

  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        anime({
          targets: entry.target,
          opacity: [0, 1],
          translateY: [30, 0],
          duration: 800
        });
        obs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });

  elements.forEach(el => {
    el.style.opacity = 0;
    observer.observe(el);
  });
}
