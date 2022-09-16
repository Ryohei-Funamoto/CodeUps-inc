'use strict';

/**
 * Swiper
 */
// サムネイル
const worksThumbs = new Swiper('.js-works-thumbs-slider', {
  slidesPerView: 3,
  spaceBetween: 12,
  watchSlidesProgress: true, // 各スライドの進行状況を監視
  watchSlidesVisibility: true, // ビューポートにあるスライドに表示クラスを追加
  breakpoints: {
    768: {
      slidesPerView: 8,
      spaceBetween: 8,
    }
  }
});
// メイン
const worksMain = new Swiper('.js-works-main-slider', {
  navigation: {
    nextEl: '.js-works-button-next',
    prevEl: '.js-works-button-prev',
  },
  thumbs: {
    swiper: worksThumbs,
  },
});
