<?php
global $u_home; // ホーム
global $u_content; // 事業内容
global $u_overview; // 企業概要
global $u_news; // お知らせ一覧
global $u_works; // 制作実績一覧
global $u_blog; // ブログ一覧
global $u_contact; // お問い合わせ
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="format-detection" content="telephone=no">
  <!-- SEO系 -->
  <meta name="description" content="120文字以内">
  <meta name="keywords" content="必要に応じて記述する" />
  <!-- OGP -->
  <meta property="og:title" content="このページのタイトル/ページごとのタイトルにする">
  <meta property="og:site_name" content="サイト名">
  <meta property="og:description" content="90文字くらい推奨">
  <meta property="og:type" content="TOPページはwebsite、子ページはarticle">
  <meta property="og:url" content="このページのURL">
  <meta property="og:image" content="1200×630以上推奨、絶対パス">
  <meta name="twitter:card" content="summary or summary_large_image">
  <meta name="twitter:site" content="@ユーザー名">
  <meta name="format-detection" content="telephone=no">
  <!-- タッチアイコン -->
  <link rel="apple-touch-icon" sizes="192x192" href="">
  <link rel="shortcut icon" sizes="192x192" href="">
  <!-- ファビコン -->
  <link rel="icon" href="" />
  <!-- クローラー -->
  <meta name="robots" content="noindex">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <header class="<?php if (is_singular(array('post', 'works', 'blog', 'contact-thanks')) || is_404()) {
                    echo 'l-header p-header is-colored';
                  } else {
                    echo 'l-header p-header js-header';
                  } ?>">
    <div class="l-container p-header__container">
      <div class="p-header__inner">
        <?php if (has_custom_logo()) : ?>
          <div class="p-header__logo"><?php the_custom_logo(); ?></div>
        <?php elseif (is_front_page()) : ?>
          <h1 class="p-header__title"><?php bloginfo('name'); ?></h1>
        <?php else : ?>
          <p class="p-header__title"><a href="<?php echo $u_home; ?>" rel="home"><?php bloginfo('name'); ?></a></p>
        <?php endif; ?>

        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'global',
            'menu_class' => 'p-gnav__items',
            'items_wrap' => '<ul class="%2$s">%3$s</ul>',
            'container' => 'nav',
            'container_class' => 'p-header__nav p-gnav',
            'depth' => 0,
            // 'add_li_class' => 'p-gnav__item',
            // 'link_before' => '<span>',
            // 'link_after' => '</span>',
          )
        );
        ?>

        <button class="p-header__hamburger p-hamburger js-hamburger">
          <span class="p-hamburger__bars">
            <span class="p-hamburger__bar"></span>
            <span class="p-hamburger__bar"></span>
            <span class="p-hamburger__bar"></span>
          </span><!-- /.p-hamburger__bars -->
        </button><!-- /.p-header__hamburger p-hamburger -->

        <div class="p-header__drawer p-drawer js-drawer">
          <div class="p-drawer__container">
            <div class="p-drawer__scroll">
              <?php
              wp_nav_menu(
                array(
                  'theme_location' => 'drawer',
                  'menu_class' => 'p-drawer-nav__items',
                  'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                  'container' => 'nav',
                  'container_class' => 'p-drawer__nav p-drawer-nav',
                  'depth' => 1,
                  // 'add_li_class' => 'p-drawer-nav__item',
                  'add_a_class' => 'js-drawer-nav-link',
                  // 'link_before' => '<span>',
                  // 'link_after' => '</span>',
                )
              );
              ?>
            </div><!-- /.p-drawer__scroll -->
          </div><!-- /.p-drawer__container -->
        </div><!-- /.p-header__drawer p-drawer -->
      </div><!-- /.p-header__inner -->
    </div><!-- /.p-header__container -->
  </header><!-- /.l-header p-header -->