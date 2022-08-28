<?php get_header(); ?>

<main class="l-news">
  <div class="l-news__mv l-sub-mv l-news-mv sub-mv news-mv js-mv">
    <div class="sub-mv__image news-mv__image">
      <picture>
        <source srcset="<?php echo esc_url(get_template_directory_uri() . '/img/news/news_mv.jpg'); ?>" media="(min-width: 768px)" />
        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/news/sp/news_mv_sp.jpg'); ?>" alt="" />
      </picture>
    </div><!-- /.sub-mv__image news-mv__image -->
    <h1 class="sub-mv__title news-mv__title"><?php echo single_post_title(); ?></h1>
  </div><!-- /.l-news__mv l-sub-mv l-news-mv sub-mv news-mv -->

  <?php get_template_part('template-parts/breadcrumb'); ?>

  <div class="l-news__archive l-news-archive news-archive">
    <div class="l-container news-archive__container">
      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      if (have_posts()) :
      ?>
        <ul class="news-archive__items">
          <?php while (have_posts()) : the_post(); ?>
            <li class="news-archive__item">
              <?php
              $args = array(
                'anchor' => false,
                'id' => $post->ID,
                'mod' => 'hover-colored',
              );
              get_template_part('template-parts/post', null, $args);
              ?>
            </li><!-- /.news-archive__item -->
          <?php endwhile; ?>
        </ul><!-- /.news-archive__items -->
      <?php endif; ?>
    </div><!-- /.l-container news-archive__container -->
  </div><!-- /.l-news__archive l-news-archive news-archive -->

  <?php if (paginate_links()) : ?>
    <div class="l-pagination p-pagination">
      <?php
      $args = array(
        'current' => max(1, $paged),
        'end_size' => 1,
        'mid_size' => 1,
        'prev_next' => true,
        'prev_text' => 'prev',
        'next_text' => 'next',
        // 'type' => 'list',
      );
      echo paginate_links($args);
      ?>
    </div><!-- /.l-pagination p-pagination -->
  <?php endif; ?>
</main><!-- /.l-news -->

<?php get_footer(); ?>