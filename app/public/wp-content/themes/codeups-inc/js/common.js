'use strict';

window.addEventListener('DOMContentLoaded', function () {
  /** ハンバーガーメニュー */
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

  /** 画面幅が768px以上リサイズされた時にドロワーを強制的に閉じる */
  window.addEventListener('resize', function () {
    if (window.matchMedia('(min-width: 768px)').matches) {
      hamburger.classList.remove('is-open');
      drawer.classList.remove('is-open');
      this.document.querySelector('body').style.overflowY = 'inherit';
    }
  });

  /** トップへ戻るボタン */
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

  // ページのURLを取得
	const url = $(location).attr('href'),
	// headerの高さを取得してそれに30px追加した値をheaderHeightに代入
	headerHeight = $('.l-header').outerHeight() + 30;

	// urlに「#」が含まれていれば
	if(url.indexOf("#") != -1){
		// urlを#で分割して配列に格納
		const anchor = url.split("#"),
		// 分割した最後の文字列（#◯◯の部分）をtargetに代入
		target = $('#' + anchor[anchor.length - 1]),
		// リンク先の位置からheaderHeightの高さを引いた値をpositionに代入
		position = Math.floor(target.offset().top) - headerHeight;
		// positionの位置に移動
		$("html, body").animate({
      scrollTop:position
    }, 500, 'swing');
	}
})(jQuery);