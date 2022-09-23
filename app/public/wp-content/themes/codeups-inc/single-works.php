<?php get_header(); ?>

<main class="l-works-single">
  <?php get_template_part('template-parts/breadcrumb'); ?>

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article <?php post_class('l-works-single__article l-works-single-article works-single-article'); ?>>
        <div class="l-container works-single-article__container">
          <h1 class="works-single-article__title"><?php the_title(); ?></h1>

          <div class="works-single-article__meta">
            <time datetime="<?php the_time('c'); ?>" class="works-single-article__published"><?php the_time('Y.m.d'); ?></time>
            <div class="works-single-article__category-wrapper">
              <div class="works-single-article__category"><?php my_the_post_term(true, 'works_genre'); ?></div>
            </div><!-- /.works-single-article__category-wrapper -->
          </div><!-- /.works-single-article__meta -->

          <div class="works-single-article__preview works-preview">
            <div class="swiper works-preview__main works-preview-main-slider js-works-main-slider">
              <div class="swiper-wrapper works-preview-main-slider__slides">
                <?php
                $main_imgs = scf::get('works_preview');
                foreach ($main_imgs as $main_img) :
                ?>
                  <div class="swiper-slide works-preview-main-slider__slide">
                    <?php if ($main_img['works_preview_image']) : ?>
                      <div class="works-preview-main-slider__image">
                        <?php echo wp_get_attachment_image($main_img['works_preview_image'], 'large'); ?>
                      </div><!-- /.works-preview-main-slider__image -->
                    <?php endif; ?>
                  </div>
                <?php endforeach; ?>
              </div>
              <div class="swiper-button-prev works-preview-main-slider__button js-works-button-prev"></div>
              <div class="swiper-button-next works-preview-main-slider__button js-works-button-next"></div>
            </div>

            <div class="swiper works-preview__thumbs works-preview-thumbs-slider js-works-thumbs-slider">
              <div class="swiper-wrapper works-preview-thumbs-slider__slides">
                <?php
                $main_imgs = scf::get('works_preview');
                foreach ($main_imgs as $main_img) :
                ?>
                  <div class="swiper-slide works-preview-thumbs-slider__slide">
                    <?php if ($main_img['works_preview_image']) : ?>
                      <div class="works-preview-thumbs-slider__image">
                        <?php echo wp_get_attachment_image($main_img['works_preview_image'], 'large'); ?>
                      </div><!-- /.works-preview-thumbs-slider__image -->
                    <?php endif; ?>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div><!-- /.works-single-article__preview works-preview -->

          <ul class="works-single-article__points">
            <?php
            $points = scf::get('works_point');
            foreach ($points as $point) :
            ?>
              <li class="works-single-article__point works-point">
                <?php if ($point['works_point_title']) : ?>
                  <div class="works-point__title"><?php echo $point['works_point_title']; ?></div>
                <?php endif; ?>
                <?php if ($point['works_point_description']) : ?>
                  <p class="works-point__description"><?php echo $point['works_point_description']; ?></p>
                <?php endif; ?>
              </li><!-- /.works-single-article__point works-point -->
            <?php endforeach; ?>
          </ul><!-- /.works-single-article__points -->

          <div class="l-article-nav p-article-nav">
            <ul class="p-article-nav__items">
              <?php if (get_previous_post()) : ?>
                <li class="p-article-nav__item p-article-nav__item--prev"><?php previous_post_link('%link', 'prev'); ?></li>
              <?php endif; ?>
              <li class="p-article-nav__item p-article-nav__item--center"><a href="<?php echo get_post_type_archive_link('works'); ?>">一覧</a></li>
              <?php if (get_next_post()) : ?>
                <li class="p-article-nav__item p-article-nav__item--next"><?php next_post_link('%link', 'next'); ?></li>
              <?php endif; ?>
            </ul><!-- /.p-article-nav__items -->
          </div><!-- /.l-article-nav p-article-nav -->
        </div><!-- /.l-container works-single-article__container -->
      </article>
    <?php endwhile; ?>
  <?php endif; ?>

  <div class="l-related-posts p-related-posts">
    <div class="l-container p-related-posts__container">
      <div class="p-related-posts__title">関連記事</div>
      <?php
      $related_post = related_sub_query('works', 'works_genre');
      if ($related_post->have_posts()) :
      ?>
        <ul class="p-related-posts__items">
          <?php while ($related_post->have_posts()) : $related_post->the_post(); ?>
            <li class="p-related-posts__item">
              <?php
              $args = array(
                'class' => 'p-blog-card p-blog-card--related-posts',
                'anchor' => false,
                'tax' => 'works_genre',
              );
              get_template_part('template-parts/blog-card', null, $args);
              ?>
            </li><!-- /.p-related-posts__item -->
          <?php endwhile; ?>
        </ul><!-- /.p-related-posts__items -->
      <?php else : ?>
        <p>記事はありません。</p>
      <?php
      endif;
      wp_reset_postdata();
      ?>
    </div><!-- /.l-container p-related-posts__container -->
  </div><!-- /.l-related-posts p-related-posts -->
</main><!-- /.l-works-single -->

<?php get_footer(); ?>