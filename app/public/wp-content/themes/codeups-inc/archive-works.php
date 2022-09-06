<?php get_header(); ?>

<main class="l-works">
  <div class="l-works__mv l-sub-mv l-works-mv sub-mv works-mv js-mv">
    <div class="sub-mv__image works-mv__image">
      <picture>
        <source srcset="<?php echo esc_url(get_template_directory_uri() . '/img/works/works-archive_mv.jpg'); ?>" media="(min-width: 768px)" />
        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/works/sp/works-archive_mv_sp.jpg'); ?>" alt="<?php post_type_archive_title(); ?>" />
      </picture>
    </div><!-- /.sub-mv__image works-mv__image -->
    <h1 class="sub-mv__title works-mv__title"><?php echo post_type_archive_title(); ?></h1>
  </div><!-- /.l-works__mv l-sub-mv l-works-mv sub-mv works-mv -->

  <?php get_template_part('template-parts/breadcrumb'); ?>

  <?php
  $args = array(
    'post_type' => 'works',
    'tax' => 'works_genre',
  );
  get_template_part('template-parts/term-nav', null, $args);
  ?>

  <div class="l-works__archive l-works-archive works-archive">
    <div class="l-container works-archive__container">
      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      if (have_posts()) :
      ?>
        <ul class="works-archive__items">
          <?php while (have_posts()) : the_post(); ?>
            <li class="works-archive__item js-works-card">
              <?php
              $args = array(
                'anchor' => false,
                'id' => $post->ID,
                'tax' => 'works_genre',
              );
              get_template_part('template-parts/works-card', null, $args);
              ?>
            </li><!-- /.works-archive__item -->
          <?php endwhile; ?>
        </ul><!-- /.works-archive__items -->
      <?php endif; ?>
    </div><!-- /.l-container works-archive__container -->
  </div><!-- /.l-works__archive l-works-archive works-archive -->

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
</main><!-- /.l-works -->

<?php get_footer(); ?>