'use strict';

(function () {
  /**
   * DOM
   */
  // ヘッダー
  const header = document.querySelector('.js-header');
  // メインビジュアル
  const mv = document.querySelector('.js-mv');
  
  /**
   * 関数
   */
  // ヘッダーがメインビジュアルを通過すると色が付く
  const headerScroll = function () {
    // メインビジュアルの高さを取得
    let mvHeight = mv.clientHeight;
    // ヘッダーがメインビジュアルを通過したかどうか
    if (window.pageYOffset > mvHeight) {
      header.classList.add('is-colored');
    } else {
      header.classList.remove('is-colored');
    }
  };
  
  /**
   * イベント
   */
  // 画面をスクロールした時
  window.addEventListener('scroll', headerScroll);
}());
