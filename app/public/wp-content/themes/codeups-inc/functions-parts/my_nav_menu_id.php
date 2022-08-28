<?php

/**
 * カスタムメニューのliタグのidを削除
 * https://blog-and-destroy.com/6842
 */
function my_nav_menu_id($menu_id)
{
  $id = NULL;
  return $id;
}
add_filter('nav_menu_item_id', 'my_nav_menu_id');
