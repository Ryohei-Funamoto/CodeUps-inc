<?php
global $u_home; // ホーム
global $u_content; // 事業内容
global $u_overview; // 企業概要
global $u_news; // お知らせ一覧
global $u_works; // 制作実績一覧
global $u_blog; // ブログ一覧
global $u_contact; // お問い合わせ
?>

<section class="l-footer-contact p-footer-contact">
  <div class="l-container p-footer-contact__container">
    <?php
    $args = array(
      'block' => 'p-footer-contact',
      'en-ttl' => 'contact',
      'ja-ttl' => 'お問い合わせ',
    );
    get_template_part('template-parts/section-title', null, $args);
    ?>
    <p class="p-footer-contact__description">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
    <div class="p-footer-contact__button">
      <a href="<?php echo $u_contact; ?>" class="c-button">お問い合わせへ</a>
    </div><!-- /.p-footer-contact__button -->
  </div><!-- /.l-container p-footer-contact__container -->
</section><!-- /.l-footer-contact p-footer-contact -->