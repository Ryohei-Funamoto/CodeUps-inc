<?php
// タイトルの文字数制限
function my_flexible_title($value, $num = 20)
{
  if (mb_strlen($value, 'UTF-8') > $num) {
    $title = mb_substr($value, 0, $num, 'UTF-8');
    return $title . '…';
  } else {
    return $value;
  }
}
