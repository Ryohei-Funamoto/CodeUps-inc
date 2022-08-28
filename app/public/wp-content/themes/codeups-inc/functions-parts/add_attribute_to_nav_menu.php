<?php
/**
 * カスタムメニューにサブタイトルを付与
 */
function add_attribute_to_nav_menu($item_output, $item)
{
  return preg_replace('/(<a.*?>[^<]*?)</', '$1' . "<span>{$item->attr_title}</span><", $item_output);
  /* return preg_replace('/(<a.*?><span.*?>[^<]*?)</', '$1' . "</span><span>{$item->attr_title}</span><", $item_output); */
}
add_filter('walker_nav_menu_start_el', 'add_attribute_to_nav_menu', 10, 4);
