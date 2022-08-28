<?php

/** wp_nav_menuのaにclass追加 */
require_once get_theme_file_path('/functions-parts/add_additional_class_on_a.php');
/** wp_nav_menuのliにclass追加 */
// require_once get_theme_file_path('/functions-parts/add_additional_class_on_li.php');
/** カスタムメニューにサブタイトルを付与 */
require_once get_theme_file_path('/functions-parts/add_attribute_to_nav_menu.php');
/** 新着記事のサブクエリ */
require_once get_theme_file_path('/functions-parts/latest_sub_query.php');
/** メニューの登録 */
require_once get_theme_file_path('/functions-parts/my_menu_init.php');
/** カスタムメニューのliタグのidを削除 */
require_once get_theme_file_path('/functions-parts/my_nav_menu_id.php');
/** メインクエリの表示件数の設定 */
require_once get_theme_file_path('/functions-parts/my_posts_per_page.php');
/** カスタムフィールドを定義 */
require_once get_theme_file_path('/functions-parts/my_register_fields.php');
/** CSS・JSの読み込み */
require_once get_theme_file_path('/functions-parts/my_script_init.php');
/** テーマのセットアップ */
require_once get_theme_file_path('/functions-parts/my_setup.php');
/** 投稿に紐づいているカテゴリーの取得・表示 */
require_once get_theme_file_path('/functions-parts/my_the_post_category.php');
/** 投稿に紐づいているタームの取得・表示 */
require_once get_theme_file_path('/functions-parts/my_the_post_term.php');
/** 各ページのURLの一括管理 */
require_once get_theme_file_path('/functions-parts/my_url.php');
/** トップページ事業内容パネル設定 */
// require_once get_theme_file_path('/functions-parts/settings_top_content_panel.php');
/** トップページMVスライダー設定 */
require_once get_theme_file_path('/functions-parts/settings_top_mv_slider.php');
/** トップページ制作実績スライダー設定 */
// require_once get_theme_file_path('/functions-parts/settings_top_works_slider.php');
