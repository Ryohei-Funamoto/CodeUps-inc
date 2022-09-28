<?php
// 本文および抜粋の文字数制限
function my_flexible_excerpt($value, $num = 80)
{
  if (mb_strlen($value, 'UTF-8') > $num) {
    $content = mb_substr(strip_tags($value), 0, $num, 'UTF-8');
    echo $content . '…';
  } else {
    echo strip_tags($value);
  }
}
