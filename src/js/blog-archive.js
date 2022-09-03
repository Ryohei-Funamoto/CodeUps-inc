'use strict';

window.addEventListener('DOMContentLoaded', function () {
  const blogCards = document.querySelectorAll('.js-blog-card');

  ScrollTrigger.matchMedia({
    // 768px以上
    '(min-width: 768px)': function () {
      blogCards.forEach((elm, i) => {
        if ((i + 1) % 3 === 1) {
          gsap.fromTo(elm, {
            autoAlpha: 0,
            y: 100
          }, {
            autoAlpha: 1,
            y: 0,
            scrollTrigger: {
              trigger: elm,
              start: '0% 50%',
              once: true
            },
            duration: 1.0,
            delay: 0
          });
        } else if ((i + 1) % 3 === 2) {
          gsap.fromTo(elm, {
            autoAlpha: 0,
            y: 100
          }, {
            autoAlpha: 1,
            y: 0,
            scrollTrigger: {
              trigger: elm,
              start: '0% 50%',
              once: true
            },
            duration: 1.0,
            delay: 0.25
          });
        } else if ((i + 1) % 3 === 0) {
          gsap.fromTo(elm, {
            autoAlpha: 0,
            y: 100
          }, {
            autoAlpha: 1,
            y: 0,
            scrollTrigger: {
              trigger: elm,
              start: '0% 50%',
              once: true
            },
            duration: 1.0,
            delay: 0.5
          });
        }
      });
    },
    // 767px以下
    '(max-width: 767px)': function () {
      blogCards.forEach(elm => {
        gsap.fromTo(elm, {
          autoAlpha: 0,
          y: 100
        }, {
          autoAlpha: 1,
          y: 0,
          scrollTrigger: {
            trigger: elm,
            start: '0% 50%',
            once: true
          },
          duration: 1.0
        })
      });
    }
  });
});