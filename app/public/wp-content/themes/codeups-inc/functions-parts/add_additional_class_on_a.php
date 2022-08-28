<?php

/**
 * wp_nav_menuのaにclass追加
 * https://zenn.dev/minnanowp/articles/823e3eabd24f20
 */
function add_additional_class_on_a($classes, $item, $args)
{
  if (isset($args->add_li_class)) {
    $classes['class'] = $args->add_a_class;
  }
  return $classes;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);
