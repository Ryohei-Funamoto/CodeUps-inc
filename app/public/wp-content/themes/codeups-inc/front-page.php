<?php get_header(); ?>

<main class="l-home">
  <?php
  $home_mv_slider = SCF::get_option_meta('home_mv_slider');
  $home_mv_slider_group = $home_mv_slider['home_mv_slider_group'];
  if (!empty($home_mv_slider_group)) :
  ?>
    <div class="l-home__mv l-home-mv home-mv js-mv">
      <div class="swiper home-mv__slider home-mv-slider js-home-mv-slider">
        <div class="swiper-wrapper home-mv-slider__slides">
          <?php
          foreach ($home_mv_slider_group as $item) :
            // 画像
            $home_mv_img_pc_id = $item['home_mv_slider_img_pc'];
            $home_mv_img_pc_src = wp_get_attachment_url($home_mv_img_pc_id);
            $home_mv_img_sp_id = $item['home_mv_slider_img_sp'];
            $home_mv_img_sp_src = wp_get_attachment_url($home_mv_img_sp_id);

            // alt
            $alt_pc = get_post_meta($home_mv_img_pc_id, '_wp_attachment_image_alt', true);

            // メインタイトル
            $home_mv_slider_main_title = $item['home_mv_slider_main_title'];

            // サブタイトル
            $home_mv_slider_sub_title = $item['home_mv_slider_sub_title'];
          ?>
            <div class="swiper-slide home-mv-slider__slide">
              <div class="home-mv-slider__image">
                <picture>
                  <source srcset="<?php echo $home_mv_img_pc_src; ?>" media="(min-width: 768px)" />
                  <img src="<?php echo $home_mv_img_sp_src; ?>" alt="<?php echo $alt_pc; ?>" />
                </picture>
              </div><!-- /.home-mv-slider__image -->

              <div class="home-mv-slider__content">
                <h2 class="home-mv-slider__main-title"><?php echo $home_mv_slider_main_title; ?></h2>
                <div class="home-mv-slider__sub-title"><?php echo $home_mv_slider_sub_title; ?></div>
              </div><!-- /.home-mv-slider__content -->
            </div><!-- /.home-mv-slider__slide -->
          <?php endforeach; ?>
        </div><!-- /.home-mv-slider__slides -->
      </div><!-- /.home-mv__slider home-mv-slider -->
    </div><!-- /.l-home__mv l-home-mv home-mv -->
  <?php endif; ?>

  <div class="l-home__news l-home-news home-news">
    <div class="l-container home-news__container">
      <div class="home-news__inner">
        <?php
        $news_query = latest_sub_query('post', 3);
        if ($news_query->have_posts()) :
        ?>
          <div class="swiper home-news__slider js-home-news-slider">
            <div class="swiper-wrapper home-news__items">
              <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
                <div class="swiper-slide home-news__item">
                  <?php
                  $args = array(
                    'anchor' => false,
                    'tax' => 'category',
                    'mod' => 'hover-underline',
                  );
                  get_template_part('template-parts/post', null, $args);
                  ?>
                </div><!-- /.swiper-slide home-news__item -->
              <?php endwhile; ?>
            </div><!-- /.swiper-wrapper home-news__items -->
          </div><!-- /.swiper home-news__slider -->
        <?php else : ?>
          <p>記事はありません。</p>
        <?php
        endif;
        wp_reset_postdata();
        ?>

        <div class="home-news__button">
          <a href="<?php echo $u_news; ?>" class="c-button c-button--home-news">すべて見る</a>
        </div><!-- /.home-news__button -->
      </div><!-- /.home-news__inner -->
    </div><!-- /.l-container home-news__container -->
  </div><!-- /.l-home__news l-home-news home-news -->

  <div class="home-diagonal-line home-diagonal-line--downward js-animation-target">
    <div class="home-diagonal-line__body"></div>
  </div><!-- /.home-diagonal-line -->

  <section class="l-home__content l-home-content home-content">
    <div class="l-container home-content__container">
      <?php
      $args = array(
        'wrapper-class' => 'home-content__title-wrapper',
        'sub-class' => 'c-sub-section-title--fade-left home-content__sub-title js-animation-target',
        'en-ttl' => 'content',
        'main-class' => 'c-main-section-title--fade-up home-content__main-title js-animation-target',
        'ja-ttl' => '事業内容',
      );
      get_template_part('template-parts/section-title', null, $args);
      ?>

      <ul class="home-content__items js-home-content-panel-trigger">
        <li class="home-content__item js-animation-target">
          <a href="<?php echo $u_content; ?>" class="home-content-panel">
            <div class="home-content-panel__image">
              <img src="<?php echo esc_url(get_template_directory_uri() . '/img/home/home_content_1.jpg'); ?>" alt="経営理念ページへ">
            </div><!-- /.home-content-panel__image -->
            <h3 class="home-content-panel__title">経営理念ページへ</h3>
          </a><!-- /.home-content-panel -->
        </li><!-- /.home-content__item -->

        <li class="home-content__item js-animation-target">
          <a href="<?php echo $u_content; ?>#mission-1" class="home-content-panel">
            <div class="home-content-panel__image">
              <img src="<?php echo esc_url(get_template_directory_uri() . '/img/home/home_content_2.jpg'); ?>" alt="理念1へ">
            </div><!-- /.home-content-panel__image -->
            <h3 class="home-content-panel__title">理念1へ</h3>
          </a><!-- /.home-content-panel -->
        </li><!-- /.home-content__item -->

        <li class="home-content__item js-animation-target">
          <a href="<?php echo $u_content; ?>#mission-2" class="home-content-panel">
            <div class="home-content-panel__image">
              <img src="<?php echo esc_url(get_template_directory_uri() . '/img/home/home_content_3.jpg'); ?>" alt="理念2へ">
            </div><!-- /.home-content-panel__image -->
            <h3 class="home-content-panel__title">理念2へ</h3>
          </a><!-- /.home-content-panel -->
        </li><!-- /.home-content__item -->

        <li class="home-content__item js-animation-target">
          <a href="<?php echo $u_content; ?>#mission-3" class="home-content-panel">
            <div class="home-content-panel__image">
              <img src="<?php echo esc_url(get_template_directory_uri() . '/img/home/home_content_4.jpg'); ?>" alt="理念3へ">
            </div><!-- /.home-content-panel__image -->
            <h3 class="home-content-panel__title">理念3へ</h3>
          </a><!-- /.home-content-panel -->
        </li><!-- /.home-content__item -->
      </ul><!-- /.home-content__items -->
    </div><!-- /.l-container home-content__container -->
  </section><!-- /.l-home__content l-home-content home-content -->

  <section class="l-home__works l-home-works home-works">
    <div class="l-container home-works__container">
      <?php
      $args = array(
        'wrapper-class' => 'home-works__title-wrapper',
        'sub-class' => 'c-sub-section-title--fade-right home-works__sub-title js-animation-target',
        'en-ttl' => 'works',
        'main-class' => 'c-main-section-title--fade-up home-works__main-title js-animation-target',
        'ja-ttl' => '制作実績',
      );
      get_template_part('template-parts/section-title', null, $args);
      ?>

      <div class="home-works__main-area js-animation-target">
        <?php
        $works_post = latest_sub_query('works', 3);
        if ($works_post->have_posts()) :
        ?>
          <div class="home-works__media home-works-media">
            <div class="home-works-media__head">
              <div class="home-works-media__image-slider-wrapper">
                <div class="swiper home-works-media__image-slider home-works-image-slider js-home-works-image-slider">
                  <div class="swiper-wrapper home-works-image-slider__slides">
                    <?php while ($works_post->have_posts()) : $works_post->the_post(); ?>
                      <div class="swiper-slide home-works-image-slider__slide">
                        <figure class="home-works-image-slider__image">
                          <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large', array('alt' => get_the_title())); ?>
                          <?php else : ?>
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/common/noimg.png') ?>" alt="">
                          <?php endif; ?>
                        </figure>
                      </div><!-- /.home-works-image-slider__slide -->
                    <?php endwhile; ?>
                  </div><!-- /.home-works-image-slider__slides -->
                </div><!-- /.home-works-media__image-slider home-works-image-slider -->
                <div class="swiper-pagination home-works-media__pagination js-home-works-pagination"></div>
              </div><!-- /.home-works-media__image-slider-wrapper -->
            </div><!-- /.home-works-media__head -->

            <div class="home-works-media__body">
              <div class="home-works-media__info-slider-wrapper">
                <div class="swiper home-works-media__info-slider home-works-info-slider js-home-works-info-slider">
                  <div class="swiper-wrapper home-works-info-slider__slides">
                    <?php while ($works_post->have_posts()) : $works_post->the_post(); ?>
                      <div class="swiper-slide home-works-info-slider__slide">
                        <div class="home-works-info-slider__info home-works-info">
                          <h3 class="home-works-info__title"><?php the_title(); ?></h3>
                          <?php
                          $dev_points = scf::get('works_point');
                          if ($dev_points[0]['works_point_description']) :
                          ?>
                            <p class="home-works-info__description">
                              <?php
                              if (mb_strlen($dev_points[0]['works_point_description'], 'UTF-8') > 100) {
                                $content = mb_substr(strip_tags($dev_points[0]['works_point_description']), 0, 100, 'UTF-8');
                                echo $content . '…';
                              } else {
                                echo strip_tags($dev_points[0]['works_point_description']);
                              }
                              ?>
                            </p><!-- /.home-works-info__description -->
                          <?php endif; ?>
                        </div><!-- /.home-works-info-slider__info home-works-info -->
                      </div><!-- /.home-works-info-slider__slide -->
                    <?php endwhile; ?>
                  </div><!-- /.home-works-info-slider__slides -->
                </div><!-- /.home-works-media__info-slider home-works-info-slider -->
              </div><!-- /.home-works-media__info-slider-wrapper -->

              <div class="home-works-media__button">
                <a href="<?php echo $u_works; ?>" class="c-button">詳しく見る</a>
              </div><!-- /.home-works-media__button -->
            </div><!-- /.home-works-media__body -->
          </div><!-- /.home-works__media home-works-media -->
        <?php else : ?>
          <p>記事はありません。</p>
        <?php
        endif;
        wp_reset_postdata();
        ?>
      </div><!-- /.home-works__main-area -->
    </div><!-- /.l-container home-works__container -->
  </section><!-- /.l-home__works l-home-works home-works -->

  <div class="home-diagonal-line home-diagonal-line--upward js-animation-target">
    <div class="home-diagonal-line__body"></div>
  </div><!-- /.home-diagonal-line -->

  <section class="l-home__overview l-home-overview home-overview">
    <div class="l-container home-overview__container">
      <?php
      $args = array(
        'wrapper-class' => 'home-overview__title-wrapper',
        'sub-class' => 'c-sub-section-title--fade-left home-overview__sub-title js-animation-target',
        'en-ttl' => 'overview',
        'main-class' => 'c-main-section-title--fade-up home-overview__main-title js-animation-target',
        'ja-ttl' => '企業概要',
      );
      get_template_part('template-parts/section-title', null, $args);
      ?>

      <div class="home-overview__main-area js-animation-target">
        <div class="home-overview__media home-overview-media">
          <div class="home-overview-media__head">
            <figure class="home-overview-media__image">
              <img src="<?php echo esc_url(get_template_directory_uri() . '/img/home/home_overview.jpg'); ?>" alt="企業概要">
            </figure><!-- /.home-overview-media__image -->
          </div><!-- /.home-overview-media__head -->

          <div class="home-overview-media__body">
            <h3 class="home-overview-media__title">メインタイトルが入ります。</h3>
            <p class="home-overview-media__description">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            <div class="home-overview-media__button">
              <a href="<?php echo $u_overview; ?>" class="c-button">詳しく見る</a>
            </div><!-- /.home-overview-media__button -->
          </div><!-- /.home-overview-media__body -->
        </div><!-- /.home-overview__media home-overview-media -->
      </div><!-- /.home-overview__main-area -->
    </div><!-- /.l-container home-overview__container -->
  </section><!-- /.l-home__overview l-home-overview home-overview -->

  <section class="l-home__blog l-home-blog home-blog">
    <div class="l-container home-blog__container">
      <?php
      $args = array(
        'wrapper-class' => 'home-blog__title-wrapper',
        'sub-class' => 'c-sub-section-title--fade-right home-blog__sub-title js-animation-target',
        'en-ttl' => 'blog',
        'main-class' => 'c-main-section-title--fade-up home-blog__main-title js-animation-target',
        'ja-ttl' => 'ブログ',
      );
      get_template_part('template-parts/section-title', null, $args);
      ?>

      <?php
      $blog_post = latest_sub_query('blog', 3);
      if ($blog_post->have_posts()) :
      ?>
        <ul class="home-blog__items">
          <?php while ($blog_post->have_posts()) : $blog_post->the_post(); ?>
            <li class="home-blog__item js-animation-target">
              <?php
              $args = array(
                'class' => 'p-blog-card',
                'anchor' => false,
                'tax' => 'blog_genre',
              );
              get_template_part('template-parts/blog-card', null, $args);
              ?>
            </li><!-- /.home-blog__item -->
          <?php endwhile; ?>
        </ul><!-- /.home-blog__items -->
      <?php else : ?>
        <p>記事はありません。</p>
      <?php
      endif;
      wp_reset_postdata();
      ?>

      <div class="home-blog__button js-animation-target">
        <a href="<?php echo $u_blog; ?>" class="c-button">詳しく見る</a>
      </div><!-- /.home-blog__button -->
    </div><!-- /.home-blog__container -->
  </section><!-- /.l-home__blog l-home-blog home-blog -->
</main><!-- /.l-home -->

<?php get_footer(); ?>