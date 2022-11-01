'use strict';

/**
 * JavaScript
 */
(function () {
  /**
   * DOM
   */
  // ハンバーガーメニュー
  const hamburger = document.querySelector('.js-hamburger');
  const drawer = document.querySelector('.js-drawer');
  // スクロールアニメーションの対象となる要素
  const animeTargets = document.querySelectorAll('.js-animation-target');
  // トップへ戻るボタン
  const toTop = document.querySelector('.js-to-top');

  /**
   * 関数
   */
  // スクロールアニメーションの監視対象の要素がrootと交差した時に発動させる処理
  const animeCallback = function (entries, obs) {
    entries.forEach(entry => {
      // 監視対象の要素とrootとの交差が終わったら処理を発動させない
      if (!entry.isIntersecting) {
        return;
      }
      // 監視対象の要素がrootと交差している時に以下の処理を発動させる
      entry.target.classList.add('is-appear');
      // 処理が終わったら監視を止める
      obs.unobserve(entry.target);
    });
  };
  // スクロールアニメーションの監視対象の要素を監視する
  const scrollAnime = function () {
    animeTargets.forEach(target => {
      observer.observe(target);
    });
  };
  // ハンバーガーメニューを開く
  const hamburgerOpen = function () {
    hamburger.classList.add('is-open');
    drawer.classList.add('is-open');
    document.querySelector('body').style.overflowY = 'hidden';
  };
  // ハンバーガーメニューを閉じる
  const hamburgerClose = function () {
    hamburger.classList.remove('is-open');
    drawer.classList.remove('is-open');
    document.querySelector('body').style.overflowY = 'inherit';
  };
  // トップへ戻るボタンの表示・非表示
  const toTopToggle = function () {
    if (window.pageYOffset > 300) {
      toTop.classList.add('is-show');
    } else {
      toTop.classList.remove('is-show');
    }
  };
  // ページトップへのスクロール
  const toTopScroll = function () {
    window.scrollTo({
      top: 0,
      behavior: 'smooth',
    });
  };

  /**
   * InterSection Observerのオプション
   */
  const animeOptions = {
    root: null, // 監視する領域を指定。初期値nullはviewport全体
    rootMargin: '-40% 0%', // 監視する領域の広さを指定
    threshold: 0.25 // 監視対象の要素がrootとどれくらい交差した時に処理を実行するかを指定
  };

  /**
   * Intersection Observerのインスタンスを作成
   */
  const observer = new IntersectionObserver(animeCallback, animeOptions);

  /**
   * イベント
   */
  // ページの読み込みが完了した時
  window.addEventListener('load', scrollAnime);
  // ハンバーガーメニューをクリックした時
  hamburger.addEventListener('click', function () {
    if (this.classList.contains('is-open')) {
      hamburgerClose();
    } else {
      hamburgerOpen();
    }
  });
  // 画面幅を768px以上にリサイズした時
  window.addEventListener('resize', function () {
    if (window.matchMedia('(min-width: 768px)').matches) {
      hamburgerClose();
    }
  });
  // 画面をスクロールした時
  window.addEventListener('scroll', toTopToggle);
  // トップへ戻るボタンをクリックした時
  toTop.addEventListener('click', toTopScroll);
}());

/**
 * jQuery
 */
jQuery(function ($) {
  const header = $('.js-header');
  const headerHeight = header.outerHeight();
  let urlHash = location.hash;

  // 別ページのアンカーリンクをスムーススクロールさせる
  if (urlHash) {
    $('body, html').stop().scrollTop(0);
    setTimeout(function () {
      let target = $(urlHash);
      var position = target.offset().top - headerHeight;
      $('body, html').stop().animate({
        scrollTop: position
      }, 500);
    }, 100);
  }
});
