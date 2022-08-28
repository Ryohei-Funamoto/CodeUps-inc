<?php get_header(); ?>

<main class="l-overview">
  <div class="l-overview__mv l-sub-mv l-overview-mv sub-mv overview-mv js-mv">
    <div class="sub-mv__image overview-mv__image">
      <picture>
        <source srcset="<?php echo esc_url(get_template_directory_uri() . '/img/overview/overview_mv.jpg'); ?>" media="(min-width: 768px)" />
        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/overview/sp/overview_mv_sp.jpg'); ?>" alt="" />
      </picture>
    </div><!-- /.sub-mv__image overview-mv__image -->
    <h1 class="sub-mv__title overview-mv__title"><?php echo single_post_title(); ?></h1>
  </div><!-- /.l-overview__mv l-sub-mv l-overview-mv sub-mv overview-mv -->

  <?php get_template_part('template-parts/breadcrumb'); ?>

  <div class="l-overview__info l-overview-info overview-info">
    <div class="l-container overview-info__container">
      <table class="overview-info__table overview-table">
        <?php
        $info_group = scf::get('company_info');
        foreach ($info_group as $info) :
        ?>
          <tr class="overview-table__row overview-table-row">
            <?php if ($info['company_info_header']) : ?>
              <th class="overview-table-row__header"><?php echo $info['company_info_header']; ?></th>
            <?php endif; ?>
            <?php if ($info['company_info_data']) : ?>
              <td class="overview-table-row__data"><?php echo $info['company_info_data']; ?></td>
            <?php endif; ?>
          </tr><!-- /.overview-table__row overview-table-row -->
        <?php endforeach; ?>
      </table><!-- /.overview-info__table overview-table -->
    </div><!-- /.l-container overview-info__container -->
  </div><!-- /.l-overview__info l-overview-info overview-info -->

  <div class="l-overview__footer l-overview-footer overview-footer">
    <div class="l-container overview-footer__container">
      <div class="overview-footer__map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.1041150244323!2d130.88038711550087!3d33.88697233386821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3543bf4bf949501b%3A0x6918bbd9f307b06c!2z5bCP5YCJ6aeF!5e0!3m2!1sja!2sjp!4v1658738628560!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div><!-- /.overview-footer__map -->
    </div><!-- /.l-container overview-footer__container -->
  </div><!-- /.l-overview__footer l-overview-footer overview-footer -->
</main><!-- /.l-overview -->

<?php get_footer(); ?>