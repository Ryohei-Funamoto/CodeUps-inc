'use strict';

window.addEventListener('DOMContentLoaded', function () {
  /** MVを過ぎるとヘッダーに色が付く */
  var header = document.querySelector('.js-header');
  var mv = document.querySelector('.js-mv');

  window.addEventListener('scroll', function () {
    var mvHeight = mv.clientHeight;

    if (window.pageYOffset > mvHeight) {
      header.classList.add('is-colored');
    } else {
      header.classList.remove('is-colored');
    }
  });
});
