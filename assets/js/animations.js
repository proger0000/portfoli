
document.addEventListener('DOMContentLoaded', () => {
  const timeline = anime.timeline({ easing: 'easeOutExpo', duration: 750 });

  timeline
    .add({
      targets: 'h1',
      opacity: [0, 1],
      translateY: [-20, 0]
    })
    .add({
      targets: 'img[alt="Peter Galenko"]',
      opacity: [0, 1],
      scale: [0.8, 1]
    }, '-=400')
    .add({
      targets: 'nav a',
      opacity: [0, 1],
      translateY: [10, 0],
      delay: anime.stagger(100)
    }, '-=400');
});
