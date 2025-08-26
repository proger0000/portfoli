import anime from 'https://cdn.jsdelivr.net/npm/animejs@3.2.1/lib/anime.es.js';

export function initAnimations() {
  anime({
    targets: '.portfolio-item',
    opacity: [0, 1],
    translateY: [20, 0],
    easing: 'easeOutQuad',
    delay: anime.stagger(100)
  });
}
