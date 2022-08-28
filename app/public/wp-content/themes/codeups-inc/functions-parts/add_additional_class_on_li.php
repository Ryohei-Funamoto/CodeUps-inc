<?php

/**
 * wp_nav_menuのliにclass追加
 * https://zenn.dev/minnanowp/articles/823e3eabd24f20
 */
function add_additional_class_on_li($classes, $item, $args)
{
  if (isset($args->add_li_class)) {
    $classes['class'] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
