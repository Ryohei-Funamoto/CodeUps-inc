<?php

/**
 * 関連記事のサブクエリ
 */
function related_sub_query($post_type = null, $tax = null, $id = 0)
{
  // グローバル変数$postを参照
  global $post;
  // 投稿IDが渡されなかった場合
  if (0 === $id) {
    // $idにグローバル変数から取得した投稿IDを代入
    $id = $post->ID;
  }
  // タームを取得
  $terms = get_the_terms($id, $tax);
  $terms_slug = array();
  foreach ($terms as $term) {
    // タームのスラッグを取得して変数に代入
    $terms_slug[] = $term->slug;
  }
  $args = array(
    'post_type' => $post_type,
    'posts_per_page' => 4,
    'post__not_in' => array($id), // 表示中の投稿を含めない
    'orderby' => 'rand',
    'tax_query' => array(
      array(
        'taxonomy' => $tax,
        'field' => 'slug',
        'terms' => $terms_slug,
      ),
    ),
  );
  $related_post = new WP_Query($args);

  return $related_post;
}
