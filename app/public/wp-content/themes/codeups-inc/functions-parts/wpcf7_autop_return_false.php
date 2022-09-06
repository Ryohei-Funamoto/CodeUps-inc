<?php

/** Contact Form 7に自動で出力されるpタグやbrタグを無効化 */
function wpcf7_autop_return_false()
{
  return false;
}
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
