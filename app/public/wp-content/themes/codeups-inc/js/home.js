'use strict';

/**
 * DOM
 */
// セクションタイトル
const mainTitle = document.querySelectorAll('.c-main-section-title');

/**
 * セクションタイトルを1文字ずつに分割する
 */
mainTitle.forEach(elm => {
  // 見出しタグ内のテキストを取得
  let content = elm.textContent;
  // テキストから空白や改行を削除
  let text = content.trim();
  // 新たに挿入するHTMLの変数を定義
  let newHtml = '';
  // text を1文字ずつ分割して各々をspanで囲む
  text.split('').forEach((t, i) => {
    newHtml += '<span style="animation-delay: ' + i * 0.25 + 's;">' + t + '</span>';
  });
  // newHtml を見出しタグ内に挿入する
  elm.innerHTML = newHtml;
});

/**
 * Swiper
 */
// メインビジュアル
const homeMVslider = new Swiper('.js-home-mv-slider', {
  loop: true,
  effect: 'fade',
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  speed: 2000,
});
// News
const homeNewsSlider = new Swiper('.js-home-news', {
  direction: 'vertical',
  loop: true,
  slidesPerView: 1,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  speed: 500,
});
// Works画像
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
});
// Worksインフォメーション
const homeWorksInfoSlider = new Swiper('.js-home-works-info-slider', {
  loop: true,
  spaceBetween: 10,
});
// Works 2つのスライダーを連動させる
homeWorksImageSlider.controller.control = homeWorksInfoSlider;
homeWorksInfoSlider.controller.control = homeWorksImageSlider;
