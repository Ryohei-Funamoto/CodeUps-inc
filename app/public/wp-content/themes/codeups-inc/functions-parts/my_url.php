<?php

/**
 * 各ページのURLの一括管理
 */
function my_url()
{
  global $u_home; // ホーム
  global $u_content; // 事業内容
  global $u_overview; // 企業概要
  global $u_news; // お知らせ一覧
  global $u_works; // 制作実績一覧
  global $u_blog; // ブログ一覧
  global $u_contact; // お問い合わせ

  // ホーム
  $u_home = esc_url(home_url('/'));
  // 事業内容
  $u_content = esc_url(get_permalink(get_page_by_path('content')->ID));
  // 企業概要
  $u_overview = esc_url(get_permalink(get_page_by_path('overview')->ID));
  // お知らせ一覧
  $u_news = esc_url(home_url('/news/'));
  // 制作実績一覧
  $u_works = esc_url(home_url('/works/'));
  // ブログ一覧
  $u_blog = esc_url(home_url('/blog/'));
  // お問い合わせ
  $u_contact = esc_url(get_permalink(get_page_by_path('contact')->ID));
}
add_action('after_setup_theme', 'my_url');
