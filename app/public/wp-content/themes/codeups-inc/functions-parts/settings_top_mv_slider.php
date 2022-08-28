<?php

/**
 * トップページMVスライダー設定
 * @param string $page_title ページのtitle属性値 (必須)
 * @param string $menu_title 管理画面のメニューに表示するタイトル (必須)
 * @param string $capability メニューを操作できる権限 (必須)
 * @param string $menu_slug オプションページのスラッグ (必須)
 * @param string|null $icon_url メニューに表示するアイコンの URL
 * @param int $position メニューの位置
 */
SCF::add_options_page('ホームページMVスライダー', 'ホームページMVスライダー', 'edit_posts', 'home_mv_slider', 'dashicons-admin-generic', 11);
