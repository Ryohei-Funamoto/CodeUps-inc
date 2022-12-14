<?php get_header(); ?>

<main class="l-content">
  <div class="l-content__mv l-sub-mv l-content-mv sub-mv content-mv js-mv">
    <div class="sub-mv__image content-mv__image">
      <picture>
        <source srcset="<?php echo esc_url(get_template_directory_uri() . '/img/content/content_mv.jpg'); ?>" media="(min-width: 768px)" />
        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/content/sp/content_mv_sp.jpg'); ?>" alt="<?php single_post_title(); ?>" />
      </picture>
    </div><!-- /.sub-mv__image content-mv__image -->
    <h1 class="sub-mv__title content-mv__title"><?php single_post_title(); ?></h1>
  </div><!-- /.l-content__mv l-sub-mv l-content-mv sub-mv content-mv -->

  <?php get_template_part('template-parts/breadcrumb'); ?>

  <div class="l-content__top-mission l-content-top-mission content-top-mission js-animation-target">
    <div class="l-container content-top-mission__container">
      <?php
      $main_mission_title = scf::get('main_corporate_mission_title');
      if ($main_mission_title) :
      ?>
        <h2 class="content-top-mission__title"><?php echo $main_mission_title; ?></h2>
      <?php
      endif;
      $main_mission_description = scf::get('main_corporate_mission_description');
      if ($main_mission_description) :
      ?>
        <p class="content-top-mission__description"><?php echo $main_mission_description; ?></p>
      <?php endif; ?>
    </div><!-- /.l-container content-top-mission__container -->
  </div><!-- /.l-content__top-mission l-content-top-mission content-top-mission -->

  <div class="l-content__sub-mission l-content-sub-mission content-sub-mission">
    <div class="l-container content-sub-mission__container">
      <ul class="content-sub-mission__items">
        <?php
        $sub_missions = scf::get('sub_corporate_mission');
        foreach ($sub_missions as $index => $sub_mission) :
        ?>
          <li id="mission-<?php echo $index + 1; ?>" class="content-sub-mission__item content-media js-animation-target">
            <div class="content-media__head">
              <div class="content-media__image">
                <?php if ($sub_mission['sub_corporate_mission_image']) : ?>
                  <?php echo wp_get_attachment_image($sub_mission['sub_corporate_mission_image'], 'large'); ?>
                <?php else : ?>
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/img/common/noimg.png'); ?>" alt="">
                <?php endif; ?>
              </div><!-- /.content-media__image -->
            </div><!-- /.content-media__head -->

            <div class="content-media__body">
              <?php if ($sub_mission['sub_corporate_mission_title']) : ?>
                <h3 class="content-media__title"><?php echo $sub_mission['sub_corporate_mission_title']; ?></h3>
              <?php endif; ?>
              <?php if ($sub_mission['sub_corporate_mission_description']) : ?>
                <p class="content-media__description"><?php echo $sub_mission['sub_corporate_mission_description']; ?></p>
              <?php endif; ?>
            </div><!-- /.content-media__body -->
          </li><!-- /.content-sub-mission__item content-media -->
        <?php endforeach; ?>
      </ul><!-- /.content-sub-mission__items -->
    </div><!-- /.l-container content-sub-mission__container -->
  </div><!-- /.l-content__sub-mission l-content-sub-mission content-sub-mission -->
</main><!-- /.l-content -->

<?php get_footer(); ?>