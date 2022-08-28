<?php

/**
 * カスタムフィールドを定義
 * 
 * @param array  $settings  MW_WP_Form_Setting オブジェクトの配列
 * @param string $type      投稿タイプ or ロール
 * @param int    $id        投稿ID or ユーザーID
 * @param string $meta_type post | user
 * @return array
 * 
 */
function my_register_fields($settings, $type, $id, $meta_type)
{
  if ('home_mv_slider' == $type) {
    $setting = SCF::add_setting('id-home_mv_slider', 'ホームページMVスライダー設定');
    $items = array(
      array(
        'type' => 'image', //*タイプ
        'name' => 'home_mv_slider_img_pc', //*名前
        'label' => '【PC】ホームページMVスライダー画像', //ラベル
        'size' => 'large' // プレビューサイズ
      ),
      array(
        'type' => 'image', //*タイプ
        'name' => 'home_mv_slider_img_sp', //*名前
        'label' => '【SP】ホームページMVスライダー画像', //ラベル
        'size' => 'large' // プレビューサイズ
      ),
      array(
        'type' => 'text', // タイプ
        'name' => 'home_mv_slider_main_title', // 名前
        'label' => 'ホームページMVスライダーメインタイトル', // ラベル
      ),
      array(
        'type' => 'text', //*タイプ
        'name' => 'home_mv_slider_sub_title', //*名前
        'label' => 'ホームページMVスライダーサブタイトル', //ラベル
      ),
    );
    // $settings->add_group('固有のID', 繰り返し可能か, カスタムフィールドの配列)
    $setting->add_group('home_mv_slider_group', true, $items);
    $settings[] = $setting;
  }

  // if ('top_content_panel' == $type) {
  //   $setting = SCF::add_setting('id-top_content_panel', 'トップページ事業内容パネル設定');
  //   $items = array(
  //     array(
  //       'type' => 'image',
  //       'name' => 'top_content_panel_img',
  //       'label' => 'トップページ事業内容パネル画像',
  //       'size' => 'medium'
  //     ),
  //     array(
  //       'type' => 'text',
  //       'name' => 'top_content_panel_title',
  //       'label' => 'トップページ事業内容パネルタイトル',
  //     ),
  //     array(
  //       'type' => 'text',
  //       'name' => 'top_content_panel_link',
  //       'label' => 'トップページ事業内容パネルリンク設定',
  //     )
  //   );
  //   $setting->add_group('top_content_panel_group', true, $items);
  //   $settings[] = $setting;
  // }
  return $settings;
}
add_filter('smart-cf-register-fields', 'my_register_fields', 10, 4);
