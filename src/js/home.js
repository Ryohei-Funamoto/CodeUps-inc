'use strict';

document.addEventListener('DOMContentLoaded', function () {
  /** ホームページMVスライダー */
  const homeMVslider = new Swiper('.js-home-mv-slider', {
    loop: true,
    effect: 'fade',
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    speed: 2000,
  });

  /** ホームページWorks画像スライダー */
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
  
  /** ホームページWorksインフォメーションスライダー */
  const homeWorksInfoSlider = new Swiper('.js-home-works-info-slider', {
    loop: true,
    spaceBetween: 10,
    disableOnInteraction: false,
  });
  
  /** トップページWorks 2つのスライダーを連動させる */
  homeWorksImageSlider.controller.control = homeWorksInfoSlider;
  homeWorksInfoSlider.controller.control = homeWorksImageSlider;
});
