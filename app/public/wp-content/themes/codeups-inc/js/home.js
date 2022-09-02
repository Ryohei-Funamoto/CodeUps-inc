'use strict';

document.addEventListener('DOMContentLoaded', function () {
  /**
   * スライダー
   */
  /** MVスライダー */
  const homeMVslider = new Swiper('.js-home-mv-slider', {
    loop: true,
    effect: 'fade',
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    speed: 2000,
  });

  /** Works画像スライダー */
  const homeWorksImageSlider = new Swiper('.js-home-works-image-slider', {
    slidesPerView: 1,
    loop: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    speed: 500,
    pagination: {
      el: '.js-home-works-pagination',
      clickable: true,
    },
    disableOnInteraction: false,
  });

  /** Worksインフォメーションスライダー */
  const homeWorksInfoSlider = new Swiper('.js-home-works-info-slider', {
    loop: true,
    spaceBetween: 10,
    disableOnInteraction: false,
  });

  /** Works 2つのスライダーを連動させる */
  homeWorksImageSlider.controller.control = homeWorksInfoSlider;
  homeWorksInfoSlider.controller.control = homeWorksImageSlider;

  /**
   * スクロールアニメーション
   */
  /** section-title */
  const subFadeRight = document.querySelectorAll('.js-sub-title-fade-right');
  const subFadeLeft = document.querySelectorAll('.js-sub-title-fade-left');
  const mainTitle = document.querySelectorAll('.js-main-title');

  subFadeRight.forEach(elm => {
    gsap.set(elm, {
      autoAlpha: 0,
      x: 200
    });
    gsap.to(elm, {
      autoAlpha: 1,
      x: 0,
      scrollTrigger: {
        trigger: elm,
        start: '0% 50%',
        // scrub: true
      },
      duration: 1.0
    });
  });

  subFadeLeft.forEach(elm => {
    gsap.set(elm, {
      autoAlpha: 0,
      x: -200
    });
    gsap.to(elm, {
      autoAlpha: 1,
      x: 0,
      scrollTrigger: {
        trigger: elm,
        start: '0% 50%',
        // scrub: true
      },
      duration: 1.0
    });
  });


  mainTitle.forEach(elm => {
    // 見出しタグ内のテキストを取得
    let content = elm.textContent;
    // テキストから空白や改行を削除
    let text = content.trim();
    // 新たに挿入するHTMLの変数を定義
    let newHtml = '';
    // text を1文字ずつ分割して各々をspanで囲む
    text.split('').forEach(t => {
      newHtml += '<span>' + t + '</span>';
    });
    // newHtml を見出しタグ内に挿入する
    elm.innerHTML = newHtml;

    gsap.set('.js-main-title span', {
      autoAlpha: 0,
      y: 100
    });

    gsap.to('.js-main-title span', {
      autoAlpha: 1,
      y: 0,
      scrollTrigger: {
        trigger: elm,
        start: '0% 50%',
        // scrub: true
      },
      stagger: {
        from: 'start',
        amount: 0.25
      },
      duration: 1.0
    });
  });

  /** News */
  gsap.set('.js-home-news', {
    autoAlpha: 0,
    x: 100
  });

  gsap.to('.js-home-news', {
    autoAlpha: 1,
    x: 0,
    scrollTrigger: {
      trigger: '.js-home-news',
      start: '0% 50%'
    },
    duration: 1.0
  });

  /** Content */
  gsap.set('.js-home-content-panel', {
    perspective: 600,
    x: 0,
    y: 0,
    z: 0
  });

  gsap.fromTo('.js-home-content-panel', {
    rotateY: -60,
    autoAlpha: 0
  }, {
    rotateY: 0,
    autoAlpha: 1,
    scrollTrigger: {
      trigger: '.js-home-content-panel-trigger',
      start: '0% 50%',
      // end: '100% 50%',
      // scrub: true
    },
    stagger: {
      from: 'start',
      amount: 0.25
    },
    duration: 1.0
  });

  /** Works */
  const worksTl = gsap.timeline({
    scrollTrigger: {
      trigger: '.js-home-works-trigger',
      start: '0% 50%',
      // end: '100% 50%',
      // scrub: true
    }
  });

  gsap.set('.js-home-works-extend-bg', {
    autoAlpha: 0,
    scaleX: 0,
    transformOrigin: 'right'
  });
  gsap.set('.js-home-works-media', {
    autoAlpha: 0
  });

  worksTl.to('.js-home-works-extend-bg', {
    autoAlpha: 1,
    scaleX: 1,
    duration: 1.0
  }).to('.js-home-works-media', {
    autoAlpha: 1,
    duration: 1.0
  });

  /** Overview */
  const overviewTl = gsap.timeline({
    scrollTrigger: {
      trigger: '.js-home-overview-trigger',
      start: '0% 50%',
      // end: '100% 50%',
      // scrub: true
    }
  });

  gsap.set('.js-home-overview-extend-bg', {
    autoAlpha: 0,
    scaleX: 0,
    transformOrigin: 'left'
  });
  gsap.set('.js-home-overview-media', {
    autoAlpha: 0
  });

  overviewTl.to('.js-home-overview-extend-bg', {
    autoAlpha: 1,
    scaleX: 1,
    duration: 1.0
  }).to('.js-home-overview-media', {
    autoAlpha: 1,
    duration: 1.0
  });

  /** Blog */
  ScrollTrigger.matchMedia({
    // 768px以上
    '(min-width: 768px)': function () {
      gsap.fromTo('.js-home-blog-card', {
        autoAlpha: 0,
        y: 200
      }, {
        autoAlpha: 1,
        y: 0,
        scrollTrigger: {
          trigger: '.js-home-blog-cards',
          start: '0% 50%',
          // end: '100% 50%',
          // scrub: true
        },
        stagger: {
          from: 'start',
          amount: 0.25
        },
        duration: 1.0
      });
    },
    // 767px以下
    '(max-width: 767px)': function () {
      document.querySelectorAll('.js-home-blog-card').forEach(elm => {
        gsap.fromTo(elm, {
          autoAlpha: 0,
          y: 100
        }, {
          autoAlpha: 1,
          y: 0,
          scrollTrigger: {
            trigger: elm,
            start: '0% 50%',
            // end: '100% 50%',
            // scrub: true
          },
          duration: 1.0
        });
      });
    }
  });

  gsap.fromTo('.js-home-blog-button', {
    autoAlpha: 0,
    y: 100
  }, {
    autoAlpha: 1,
    y: 0,
    scrollTrigger: {
      trigger: '.js-home-blog-button',
      start: '0% 50%',
      // scrub: true
    },
    duration: 1.0
  });

  /** diagonal-line */
  gsap.set('.js-diagonal-line-downward', {
    scaleX: 0,
    transformOrigin: 'left'
  });

  gsap.to('.js-diagonal-line-downward', {
    scaleX: 1,
    // duration: 2.0,
    scrollTrigger: {
      trigger: '.js-diagonal-line-downward',
      start: '0% 50%',
      end: '100% 50%',
      scrub: true
    }
  });

  gsap.set('.js-diagonal-line-upward', {
    scaleX: 0,
    transformOrigin: 'right'
  });

  gsap.to('.js-diagonal-line-upward', {
    scaleX: 1,
    // duration: 2.0,
    scrollTrigger: {
      trigger: '.js-diagonal-line-upward',
      start: '0% 50%',
      end: '100% 50%',
      scrub: true
    }
  });
});
