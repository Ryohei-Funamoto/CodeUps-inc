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
        $news_query = latest_sub_query('post', 1);
        if ($news_query->have_posts()) :
        ?>
          <ul class="home-news__items">
            <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
              <li class="home-news__item js-home-news">
                <?php
                $args = array(
                  'anchor' => false,
                  'id' => $post->ID,
                  'mod' => 'hover-underline',
                );
                get_template_part('template-parts/post', null, $args);
                ?>
              </li><!-- /.home-news__item -->
            <?php endwhile; ?>
          </ul><!-- /.home-news__items -->
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

  <div class="home-diagonal-line home-diagonal-line--downward">
    <div class="home-diagonal-line__body">
      <div class="home-diagonal-line__extend-color js-diagonal-line-downward"></div>
    </div><!-- /.home-diagonal-line__body -->
  </div><!-- /.home-diagonal-line -->

  <section class="l-home__content l-home-content home-content">
    <div class="l-container home-content__container">
      <?php
      $args = array(
        'wrapper-class' => 'home-content__title-wrapper',
        'sub-class' => 'home-content__sub-title js-sub-title-fade-right',
        'en-ttl' => 'content',
        'main-class' => 'home-content__main-title js-main-title',
        'ja-ttl' => '事業内容',
      );
      get_template_part('template-parts/section-title', null, $args);
      ?>

      <ul class="home-content__items js-home-content-panel-trigger">
        <li class="home-content__item js-home-content-panel">
          <a href="<?php echo $u_content; ?>" class="home-content-panel">
            <div class="home-content-panel__image">
              <img src="<?php echo esc_url(get_template_directory_uri() . '/img/home/home_content_1.jpg'); ?>" alt="経営理念ページへ">
            </div><!-- /.home-content-panel__image -->
            <h3 class="home-content-panel__title">経営理念ページへ</h3>
          </a><!-- /.home-content-panel -->
        </li><!-- /.home-content__item -->

        <li class="home-content__item js-home-content-panel">
          <a href="<?php echo $u_content; ?>#mission-1" class="home-content-panel">
            <div class="home-content-panel__image">
              <img src="<?php echo esc_url(get_template_directory_uri() . '/img/home/home_content_2.jpg'); ?>" alt="理念1へ">
            </div><!-- /.home-content-panel__image -->
            <h3 class="home-content-panel__title">理念1へ</h3>
          </a><!-- /.home-content-panel -->
        </li><!-- /.home-content__item -->

        <li class="home-content__item js-home-content-panel">
          <a href="<?php echo $u_content; ?>#mission-2" class="home-content-panel">
            <div class="home-content-panel__image">
              <img src="<?php echo esc_url(get_template_directory_uri() . '/img/home/home_content_3.jpg'); ?>" alt="理念2へ">
            </div><!-- /.home-content-panel__image -->
            <h3 class="home-content-panel__title">理念2へ</h3>
          </a><!-- /.home-content-panel -->
        </li><!-- /.home-content__item -->

        <li class="home-content__item js-home-content-panel">
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
        'sub-class' => 'home-works__sub-title js-sub-title-fade-left',
        'en-ttl' => 'works',
        'main-class' => 'home-works__main-title js-main-title',
        'ja-ttl' => '制作実績',
      );
      get_template_part('template-parts/section-title', null, $args);
      ?>

      <div class="home-works__main-area js-home-works-trigger">
        <?php
        $works_post = latest_sub_query('works', 3);
        if ($works_post->have_posts()) :
        ?>
          <div class="home-works__media home-works-media js-home-works-media">
            <div class="home-works-media__head">
              <div class="home-works-media__image-slider-wrapper">
                <div class="swiper home-works-media__image-slider home-works-image-slider js-home-works-image-slider">
                  <div class="swiper-wrapper home-works-image-slider__slides">
                    <?php while ($works_post->have_posts()) : $works_post->the_post(); ?>
                      <div class="swiper-slide home-works-image-slider__slide">
                        <figure class="home-works-image-slider__image">
                          <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large', array('alt' => the_title_attribute(array('echo' => true)))); ?>
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
                          <p class="home-works-info__description"><?php echo get_the_excerpt(); ?></p>
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
        <?php
        endif;
        wp_reset_postdata();
        ?>

        <div class="home-works__extend-bg js-home-works-extend-bg"></div>
      </div><!-- /.home-works__main-area -->
    </div><!-- /.l-container home-works__container -->
  </section><!-- /.l-home__works l-home-works home-works -->

  <div class="home-diagonal-line home-diagonal-line--upward">
    <div class="home-diagonal-line__body">
      <div class="home-diagonal-line__extend-color js-diagonal-line-upward"></div>
    </div><!-- /.home-diagonal-line__body -->
  </div><!-- /.home-diagonal-line -->

  <section class="l-home__overview l-home-overview home-overview">
    <div class="l-container home-overview__container">
      <?php
      $args = array(
        'wrapper-class' => 'home-overview__title-wrapper',
        'sub-class' => 'home-overview__sub-title js-sub-title-fade-right',
        'en-ttl' => 'overview',
        'main-class' => 'home-overview__main-title js-main-title',
        'ja-ttl' => '企業概要',
      );
      get_template_part('template-parts/section-title', null, $args);
      ?>

      <div class="home-overview__main-area js-home-overview-trigger">
        <div class="home-overview__media home-overview-media js-home-overview-media">
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

        <div class="home-overview__extend-bg js-home-overview-extend-bg"></div>
      </div><!-- /.home-overview__main-area -->
    </div><!-- /.l-container home-overview__container -->
  </section><!-- /.l-home__overview l-home-overview home-overview -->

  <section class="l-home__blog l-home-blog home-blog">
    <div class="l-container home-blog__container">
      <?php
      $args = array(
        'wrapper-class' => 'home-blog__title-wrapper',
        'sub-class' => 'home-blog__sub-title js-sub-title-fade-left',
        'en-ttl' => 'blog',
        'main-class' => 'home-blog__main-title js-main-title',
        'ja-ttl' => 'ブログ',
      );
      get_template_part('template-parts/section-title', null, $args);
      ?>

      <?php
      $blog_post = latest_sub_query('blog', 3);
      if ($blog_post->have_posts()) :
      ?>
        <ul class="home-blog__items js-home-blog-cards">
          <?php while ($blog_post->have_posts()) : $blog_post->the_post(); ?>
            <li class="home-blog__item js-home-blog-card">
              <?php
              $args = array(
                'anchor' => false,
                'id' => $post->ID,
                'tax' => 'blog_genre',
              );
              get_template_part('template-parts/blog-card', null, $args);
              ?>
            </li><!-- /.home-blog__item -->
          <?php endwhile; ?>
        </ul><!-- /.home-blog__items -->
      <?php
      endif;
      wp_reset_postdata();
      ?>

      <div class="home-blog__button js-home-blog-button">
        <a href="<?php echo $u_blog; ?>" class="c-button">詳しく見る</a>
      </div><!-- /.home-blog__button -->
    </div><!-- /.home-blog__container -->
  </section><!-- /.l-home__blog l-home-blog home-blog -->
</main><!-- /.l-home -->

<?php get_footer(); ?>