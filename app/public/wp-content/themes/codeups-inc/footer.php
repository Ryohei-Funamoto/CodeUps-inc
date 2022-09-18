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

<?php get_template_part('template-parts/modal'); ?>

<?php wp_footer(); ?>
</body>

</html>