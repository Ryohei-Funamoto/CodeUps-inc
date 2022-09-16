'use strict';

/**
 * DOM
 */
// 「プライバシーポリシー」ボタン
const modalOpenButton = document.querySelector('.js-privacy-policy input[type="checkbox"]+span>a');
// モーダルを閉じるボタン
const modalCloseButton = document.querySelector('.js-modal-close-button');

/**
 * 関数
 */
// モーダルを開く
const modalOpen = function (targets, e) {
  e.preventDefault();
  for (let i = 0; i < targets.length; i++) {
    targets[i].classList.add('is-open');
  }
  document.body.style.overflowY = 'hidden';
};
// モーダルを閉じる
const modalClose = function (targets) {
  for (let i = 0; i < targets.length; i++) {
    targets[i].classList.remove('is-open');
  }
  document.body.style.overflowY = 'inherit';
};

/**
 * イベント
 */
// 「プライバシーポリシー」ボタンをクリックした時
modalOpenButton.addEventListener('click', function (e) {
  let target = modalOpenButton.dataset.target;
  let targetElements = document.getElementsByClassName(target);
  modalOpen(targetElements, e);
});
// モーダルを閉じるボタンをクリックした時
modalCloseButton.addEventListener('click', function () {
  let target = modalOpenButton.dataset.target;
  let targetElements = document.getElementsByClassName(target);
  modalClose(targetElements);
});
