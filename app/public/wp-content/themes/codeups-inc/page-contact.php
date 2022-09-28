<?php get_header(); ?>

<main class="l-contact">
  <div class="l-contact__mv l-sub-mv l-contact-mv sub-mv contact-mv js-mv">
    <div class="sub-mv__image contact-mv__image">
      <picture>
        <source srcset="<?php echo esc_url(get_template_directory_uri() . '/img/contact/contact_mv.jpg'); ?>" media="(min-width: 768px)" />
        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/contact/sp/contact_mv_sp.jpg'); ?>" alt="<?php single_post_title(); ?>" />
      </picture>
    </div><!-- /.sub-mv__image contact-mv__image -->
    <h1 class="sub-mv__title contact-mv__title"><?php single_post_title(); ?></h1>
  </div><!-- /.l-contact__mv l-sub-mv l-contact-mv sub-mv contact-mv -->

  <?php get_template_part('template-parts/breadcrumb'); ?>

  <div class="l-contact__main-area l-contact-main-area contact-main-area">
    <div class="l-container contact-main-area__container">
      <div class="contact-main-area__form contact-form">
        <?php echo do_shortcode('[contact-form-7 id="211" title="お問い合わせフォーム"]'); ?>
      </div><!-- /.contact-main-area__form contact-form -->
    </div><!-- /.l-container contact-main-area__container -->
  </div><!-- /.l-contact__main-area l-contact-main-area contact-main-area -->
</main><!-- /.l-contact -->

<?php get_footer(); ?>