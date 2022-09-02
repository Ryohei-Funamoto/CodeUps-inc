'use strict';

document.addEventListener('DOMContentLoaded', function () {
  /**
   * スクロールアニメーション
   */
  gsap.fromTo('.js-top-mission', {
    autoAlpha: 0,
    y: 100
  }, {
    autoAlpha: 1,
    y: 0,
    scrollTrigger: {
      trigger: '.js-top-mission',
      start: '0% 50%'
    },
    duration: 1.0
  });

  gsap.utils.toArray('.js-content-media').forEach(elm => {
    const mediaBodies = elm.querySelectorAll('.js-content-media-body');
    const mediaImgWraps = elm.querySelectorAll('.js-content-media-image-wrapper');
    const mediaImg = elm.querySelectorAll('.js-content-media-image');
    const mediaExtendBg = elm.querySelectorAll('.js-content-media-extend-bg');

    gsap.set(mediaBodies, {
      autoAlpha: 0,
      y: 50
    });
    gsap.set(mediaImgWraps, { autoAlpha: 0 });
    gsap.set(mediaImg, { autoAlpha: 0 });
    gsap.set(mediaExtendBg, {
      scaleX: 0,
      transformOrigin: 'left'
    });

    const mediaTl = gsap.timeline({ paused: true });

    mediaTl.to(mediaBodies, {
      keyframes: {
        '0%': {
          autoAlpha: 0,
          y: 50
        },
        '100%': {
          autoAlpha: 1,
          y: 0
        }
      },
      duration: 1.0
    }).to(mediaImgWraps, {
      keyframes: {
        '0%': { autoAlpha: 0 },
        '100%': { autoAlpha: 1 }
      },
      duration: 1.0
    }, '<').to(mediaExtendBg, {
      keyframes: {
        '0%': {
          scaleX: 0,
          transformOrigin: 'left'
        },
        '50%': {
          scaleX: 1,
          transformOrigin: 'left'
        },
        '50.001%': {
          transformOrigin: 'right'
        },
        '100%': {
          scaleX: 0,
          transformOrigin: 'right'
        }
      },
      duration: 1.0
    }, '<').to(mediaImg, {
      keyframes: {
        '0%': { autoAlpha: 0 },
        '100%': { autoAlpha: 1 }
      },
      duration: 1.0
    }, '<0.5');

    ScrollTrigger.create({
      trigger: elm,
      start: '0% 50%',
      onEnter: () => mediaTl.play(),
      once: true
    });
  });
});