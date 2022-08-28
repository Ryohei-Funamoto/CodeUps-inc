<?php

/**
 * 新着記事のサブクエリ
 */
function latest_sub_query($post_type = 'post', $posts_per_page = 3)
{
  $args = array(
    'post_type' => $post_type,
    'posts_per_page' => $posts_per_page,
    'order' => 'DESC',
    'orderby' => 'date',
  );
  $query = new WP_Query($args);
  return $query;
}
