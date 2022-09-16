<?php
global $u_home; // ホーム
global $u_content; // 事業内容
global $u_overview; // 企業概要
global $u_news; // お知らせ一覧
global $u_works; // 制作実績一覧
global $u_blog; // ブログ一覧
global $u_contact; // お問い合わせ
?>

<?php
if (!is_page(array('contact', 'contact_thanks')) && !is_404()) {
  get_template_part('template-parts/footer-contact');
}
?>

<footer class="l-footer p-footer">
  <div class="l-container p-footer__container">
    <div class="p-footer__upper">
      <div class="p-footer__logo">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/common/logo.svg') ?>" alt="CodeUps Inc">
      </div><!-- /.p-footer__logo -->

      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'footer',
          'menu_class' => 'p-footer-nav__items',
          'items_wrap' => '<ul class="%2$s">%3$s</ul>',
          'container' => 'div',
          'container_class' => 'p-footer__nav p-footer-nav',
          'depth' => 1,
          // 'add_li_class' => 'p-footer-nav__item',
          // 'link_before' => '<span>',
          // 'link_after' => '</span>',
        )
      );
      ?>
    </div><!-- /.p-footer__upper -->

    <div class="p-footer__lower">
      <p class="p-footer__copyright">&copy;&nbsp;2021&nbsp;-&nbsp;<?php echo date('Y'); ?>&ensp;<?php echo bloginfo('name'); ?></p>
    </div><!-- /.p-footer__lower -->
  </div><!-- /.l-container p-footer__container -->
</footer><!-- /.l-footer p-footer -->

<button class="l-to-top c-to-top js-to-top"></button>

<?php if (is_page('contact')) : ?>
  <div class="l-contact-modal contact-modal for-modal">
    <div class="contact-modal__title">プライバシーポリシー</div>
    <div class="contact-modal__close-icon js-modal-close-button" data-target="for-modal"></div>
    <div class="contact-modal__body">
      <div class="contact-modal__section contact-modal-section">
        <p class="contact-modal-section__description">株式会社CodeUps（以下、「当社」といいます。）は、本ウェブサイト上で提供するサービス（以下,「本サービス」といいます。）における，ユーザーの個人情報の取扱いについて，以下のとおりプライバシーポリシー（以下，「本ポリシー」といいます。）を定めます。</p>
      </div><!-- /.contact-modal__section contact-modal-section -->

      <div class="contact-modal__section contact-modal-section">
        <div class="contact-modal-section__title">第1条（個人情報）</div>
        <p class="contact-modal-section__description">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
      </div><!-- /.contact-modal__section contact-modal-section -->

      <div class="contact-modal__section contact-modal-section">
        <div class="contact-modal-section__title">第2条（個人情報の収集方法）</div>
        <p class="contact-modal-section__description">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
      </div><!-- /.contact-modal__section contact-modal-section -->

      <div class="contact-modal__section contact-modal-section">
        <div class="contact-modal-section__title">第3条（個人情報を収集・利用する目的）</div>
        <p class="contact-modal-section__description">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
      </div><!-- /.contact-modal__section contact-modal-section -->

      <div class="contact-modal__section contact-modal-section">
        <div class="contact-modal-section__title">第4条（利用目的の変更）</div>
        <p class="contact-modal-section__description">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
      </div><!-- /.contact-modal__section contact-modal-section -->

      <div class="contact-modal__section contact-modal-section">
        <div class="contact-modal-section__title">第5条（個人情報の第三者提供）</div>
        <p class="contact-modal-section__description">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
      </div><!-- /.contact-modal__section contact-modal-section -->

      <div class="contact-modal__section contact-modal-section">
        <div class="contact-modal-section__title">第6条（個人情報の開示）</div>
        <p class="contact-modal-section__description">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
      </div><!-- /.contact-modal__section contact-modal-section -->

      <div class="contact-modal__section contact-modal-section">
        <div class="contact-modal-section__title">第7条（個人情報の訂正および削除）</div>
        <p class="contact-modal-section__description">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
      </div><!-- /.contact-modal__section contact-modal-section -->

      <div class="contact-modal__section contact-modal-section">
        <div class="contact-modal-section__title">第8条（個人情報の利用停止等）</div>
        <p class="contact-modal-section__description">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
      </div><!-- /.contact-modal__section contact-modal-section -->

      <div class="contact-modal__section contact-modal-section">
        <div class="contact-modal-section__title">第9条（プライバシーポリシーの変更）</div>
        <p class="contact-modal-section__description">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
      </div><!-- /.contact-modal__section contact-modal-section -->

      <div class="contact-modal__section contact-modal-section">
        <div class="contact-modal-section__title">第10条（お問い合わせ窓口）</div>
        <p class="contact-modal-section__description">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
      </div><!-- /.contact-modal__section contact-modal-section -->
    </div><!-- /.contact-modal__body -->
  </div><!-- /.l-contact-modal contact-modal -->

  <div class="l-contact-modal-overlay contact-modal-overlay for-modal"></div>
<?php endif; ?>

<?php wp_footer(); ?>
</body>

</html>