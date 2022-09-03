'use strict';

window.addEventListener('DOMContentLoaded', function() {
  /**
   * スクロールアニメーション
   */
  const worksCards = document.querySelectorAll('.js-works-card');

  worksCards.forEach(elm => {
    gsap.fromTo(elm, {
      autoAlpha: 0,
      scale: 0.5
    }, {
      autoAlpha: 1,
      scale: 1,
      scrollTrigger: {
        trigger: elm,
        start: '0% 50%',
      },
      duration: 1.0
    });
  });
});