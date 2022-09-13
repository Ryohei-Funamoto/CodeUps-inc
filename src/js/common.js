'use strict';

window.addEventListener('DOMContentLoaded', function () {
  /**
   * ハンバーガーメニュー
   */
  var hamburger = document.querySelector('.js-hamburger');
  var drawer = document.querySelector('.js-drawer');

  hamburger.addEventListener('click', function () {
    if (this.classList.contains('is-open')) {
      this.classList.remove('is-open');
      drawer.classList.remove('is-open');
      document.querySelector('body').style.overflowY = 'inherit';
    } else {
      this.classList.add('is-open');
      drawer.classList.add('is-open');
      document.querySelector('body').style.overflowY = 'hidden';
    }
  });

  /**
   * 画面幅が768px以上リサイズされた時に
   * ドロワーを強制的に閉じる
   */
  window.addEventListener('resize', function () {
    if (window.matchMedia('(min-width: 768px)').matches) {
      hamburger.classList.remove('is-open');
      drawer.classList.remove('is-open');
      this.document.querySelector('body').style.overflowY = 'inherit';
    }
  });

  /**
   * トップへ戻るボタン
   */
  var toTop = document.querySelector('.js-to-top');

  window.addEventListener('scroll', function () {
    if (window.pageYOffset > 300) {
      toTop.classList.add('is-show');
    } else {
      toTop.classList.remove('is-show');
    }
  });

  toTop.addEventListener('click', function () {
    window.scrollTo({
      top: 0,
      behavior: 'smooth',
    });
  });

  /**
   * スクロールアニメーション
   */
  // 監視対象の要素を全取得
  const animeTargets = document.querySelectorAll('.js-animation-target');

  // 監視対象の要素がrootと交差した時に発動させる処理
  function callback(entries, obs) {
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
  }

  // オプション
  const options = {
    root: null, // 監視する領域を指定。初期値nullはviewport全体
    rootMargin: '-40% 0%', // 監視する領域の広さを指定
    threshold: 0.25 // 監視対象の要素がrootとどれくらい交差した時に処理を実行するかを指定
  }

  // IntersectionObserverのインスタンスを作成
  const observer = new IntersectionObserver(callback, options);

  // 監視対象の要素を監視する
  animeTargets.forEach(target => {
    observer.observe(target);
  });
});

window.addEventListener('load', function () {
  // ヘッダーの高さを取得
  const header = document.querySelector('.l-header');
  let headerHeight = header.clientHeight;
  // URLの#以降を取得
  let urlHash = location.hash;

  // URLに#がある場合
  if (urlHash) {
    // 遷移先のページトップに移動
    window.scrollTo({
      top: 0
    });

    // 別ページの特定箇所へのスムーススクロール
    const pageTransition = function () {
      // 遷移先の要素を取得
      const targetElement = document.querySelector(urlHash);
      // 遷移先の要素のページトップからの位置座標を取得
      // window.pageYOffset -> ウィンドウのスクロール量
      // targetElement.getBoundingClientRect().top -> 現在位置と遷移先の要素の距離
      const targetOffsetTop = window.pageYOffset + targetElement.getBoundingClientRect().top - headerHeight;

      // 遷移先へスムーススクロール
      window.scrollTo({
        top: targetOffsetTop,
        behavior: "smooth"
      });
    }

    // 100ミリ秒後にスムーススクロールを実行
    setTimeout(pageTransition, 100);
  }
});

(function ($) {

  // PC/SP判定
  // スクロールイベント
  // リサイズイベント
  // スムーズスクロール

  /* ここから */

  const breakpoint = 640;
  const mql = window.matchMedia(`screen and (max-width: ${breakpoint}px)`); //、MediaQueryListの生成
  let deviceFlag = mql.matches ? 1 : 0; // 0 : PC ,  1 : SP

  // pagetop
  let timer = null;
  const $pageTop = $('#pagetop');
  $pageTop.hide();

  // スクロールイベント
  $(window).on('scroll touchmove', function () {

    // スクロール中か判定
    if (timer !== false) {
      clearTimeout(timer);
    }

    // スクロール量が100pxを超えたら、200ms後にフェードイン
    timer = setTimeout(function () {
      if ($(this).scrollTop() > 100) {
        $('#pagetop').fadeIn('normal');
      } else {
        $pageTop.fadeOut();
      }
    }, 200);

    const scrollHeight = $(document).height();
    const scrollPosition = $(window).height() + $(window).scrollTop();
    const footHeight = parseInt($('#footer').innerHeight());


    if (scrollHeight - scrollPosition <= footHeight - 20) {
      // 現在の下から位置が、フッターの高さの位置にはいったら(bottom20px分を引いて調整)
      $pageTop.css({
        'position': 'absolute',
        'bottom': footHeight,
      });
    } else {
      $pageTop.css({
        'position': 'fixed',
        'bottom': '20px'
      });
    }

  });


  // リサイズイベント
  const checkBreakPoint = function (mql) {
    deviceFlag = mql.matches ? 1 : 0; // 0 : PC ,  1 : SP
    // → PC
    if (deviceFlag === 0) {
      console.log('PC');
    } else {
      // →SP
      console.log('SP');
    }

    deviceFlag = mql.matches;
  }

  // ブレイクポイントの瞬間に発火
  mql.addListener(checkBreakPoint); //MediaQueryListのchangeイベントに登録

  // 初回チェック
  checkBreakPoint(mql);


  // スムーズスクロール
  // #で始まるアンカーをクリックした場合にスムーススクロール
  // $('a[href^="#"]').on('click', function () {
  //   const speed = 500;
  //   // アンカーの値取得
  //   const href = $(this).attr('href');
  //   // 移動先を取得
  //   const target = $(href == '#' || href == '' ? 'html' : href);
  //   // 移動先を数値で取得
  //   const position = target.offset().top;

  //   // スムーススクロール
  //   $('body,html').animate({
  //     scrollTop: position
  //   }, speed, 'swing');
  //   return false;
  // });
})(jQuery);