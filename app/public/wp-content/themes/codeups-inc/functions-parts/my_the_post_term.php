<?php

/** 
 * 投稿に紐づいているタームの取得・表示
 */
function my_the_post_term($anchor = true, $tax = null,  $id = 0)
{
  global $post;
  if (0 === $id) {
    $id = $post->ID;
  }
  $terms = get_the_terms($id, $tax);
  if ($terms[0]) {
    if ($anchor) {
      echo '<a href="' . esc_url(get_term_link($terms[0], $tax)) . '">' . esc_html($terms[0]->name) . '</a>';
    } else {
      echo esc_html($terms[0]->name);
    }
  }
}
