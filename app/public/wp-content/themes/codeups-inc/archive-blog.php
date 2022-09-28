<?php get_header(); ?>

<main class="l-blog">
  <div class="l-blog__mv l-sub-mv l-blog-mv sub-mv blog-mv js-mv">
    <div class="sub-mv__image blog-mv__image">
      <picture>
        <source srcset="<?php echo esc_url(get_template_directory_uri() . '/img/blog/blog-archive_mv.jpg'); ?>" media="(min-width: 768px)" />
        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/blog/sp/blog-archive_mv_sp.jpg'); ?>" alt="<?php post_type_archive_title(); ?>" />
      </picture>
    </div><!-- /.sub-mv__image blog-mv__image -->
    <h1 class="sub-mv__title blog-mv__title"><?php post_type_archive_title(); ?></h1>
  </div><!-- /.l-blog__mv l-sub-mv l-blog-mv sub-mv blog-mv -->

  <?php get_template_part('template-parts/breadcrumb'); ?>

  <?php
  $args = array(
    'post_type' => 'blog',
    'tax' => 'blog_genre',
  );
  get_template_part('template-parts/term-nav', null, $args);
  ?>

  <div class="l-blog__archive l-blog-archive blog-archive">
    <div class="l-container blog-archive__container">
      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      if (have_posts()) :
      ?>
        <ul class="blog-archive__items">
          <?php while (have_posts()) : the_post(); ?>
            <li class="blog-archive__item js-animation-target">
              <?php
              $args = array(
                'class' => 'p-blog-card',
                'anchor' => false,
                'tax' => 'blog_genre',
              );
              get_template_part('template-parts/blog-card', null, $args);
              ?>
            </li><!-- /.blog-archive__item -->
          <?php endwhile; ?>
        </ul><!-- /.blog-archive__items -->
      <?php else : ?>
        <p>記事はありません。</p>
      <?php endif; ?>
    </div><!-- /.l-container blog-archive__container -->
  </div><!-- /.l-blog__archive l-blog-archive blog-archive -->

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
</main><!-- /.l-blog -->

<?php get_footer(); ?>