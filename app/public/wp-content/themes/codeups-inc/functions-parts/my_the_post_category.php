<?php

/**
 * 投稿に紐づいているカテゴリーの取得・表示
 */
function my_the_post_category($anchor = true, $id = 0)
{
  global $post;
  if (0 === $id) {
    $id = $post->ID;
  }
  $categories = get_the_category($id);
  if ($categories[0]) {
    if ($anchor) {
      echo '<a href="' . esc_url(get_category_link($categories[0]->term_id)) . '">' . esc_html($categories[0]->cat_name) . '</a>';
    } else {
      echo esc_html($categories[0]->cat_name);
    }
  }
}
