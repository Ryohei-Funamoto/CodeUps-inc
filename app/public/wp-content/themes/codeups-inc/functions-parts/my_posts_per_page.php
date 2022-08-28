<?php

/**
 * メインクエリの表示件数の設定
 */
function my_posts_per_page($query)
{
  if (is_admin() || !is_main_query())
    return;
  if (is_home() || is_category()) {
    $query->set('posts_per_page', 10);
    return;
  }
  if (is_post_type_archive('works') || is_tax('works_genre')) {
    if (wp_is_mobile()) {
      $query->set('posts_per_page', 4);
    } else {
      $query->set('posts_per_page', 6);
    }
    return;
  }
  if (is_post_type_archive('blog') || is_tax('blog_genre')) {
    if (wp_is_mobile()) {
      $query->set('posts_per_page', 6);
    } else {
      $query->set('posts_per_page', 9);
    }
    return;
  }
}
add_action('pre_get_posts', 'my_posts_per_page');
