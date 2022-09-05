<?php get_header(); ?>

<main class="l-single">
  <?php get_template_part('template-parts/breadcrumb'); ?>

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article <?php post_class('l-single__article l-single-article single-article'); ?>>
        <div class="l-container single-article__container">
          <h1 class="single-article__title"><?php the_title(); ?></h1>

          <div class="single-article__meta">
            <time datetime="<?php the_time('c'); ?>" class="single-article__published"><?php the_time('Y.m.d'); ?></time>
            <div class="single-article__category-wrapper">
              <div class="single-article__category"><?php my_the_post_term(true, $post->ID, 'blog_genre'); ?></div>
            </div><!-- /.single-article__category-wrapper -->
          </div><!-- /.single-article__meta -->

          <figure class="single-article__eyecatch">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('large'); ?>
            <?php endif; ?>
          </figure><!-- /.single-article__eyecatch -->

          <div class="single-article__body">
            <?php the_content(); ?>
          </div><!-- /.single-article__body -->

          <div class="single-article__nav p-article-nav">
            <ul class="p-article-nav__items">
              <?php if (get_previous_post()) : ?>
                <li class="p-article-nav__item p-article-nav__item--prev"><?php previous_post_link('%link', 'prev'); ?></li>
              <?php endif; ?>
              <li class="p-article-nav__item p-article-nav__item--center"><a href="<?php echo get_post_type_archive_link('blog'); ?>">一覧</a></li>
              <?php if (get_next_post()) : ?>
                <li class="p-article-nav__item p-article-nav__item--next"><?php next_post_link('%link', 'next'); ?></li>
              <?php endif; ?>
            </ul><!-- /.p-article-nav__items -->
          </div><!-- /.single-article__nav p-article-nav -->
        </div><!-- /.l-container single-article__container -->
      </article>
    <?php endwhile; ?>
  <?php endif; ?>

  <?php
  $terms = get_the_terms($post->ID, 'blog_genre');
  foreach ($terms as $term) {
    $term_slug = $term->slug;
  }
  $args = array(
    'post_type' => 'blog',
    'posts_per_page' => 4,
    'post__not_in' => array($post->ID),
    'orderby' => 'rand',
    'tax_query' => array(
      array(
        'taxonomy' => 'blog_genre',
        'field' => 'slug',
        'terms' => array($term->slug),
      ),
    ),
  );
  $related_post = new WP_Query($args);
  if ($related_post->have_posts()) :
  ?>
    <div class="l-related-posts p-related-posts">
      <div class="l-container p-related-posts__container">
        <div class="p-related-posts__title">関連記事</div>

        <ul class="p-related-posts__items">
          <?php while ($related_post->have_posts()) : $related_post->the_post(); ?>
            <li class="p-related-posts__item">
              <?php
              $args = array(
                'class' => 'p-blog-card p-blog-card--related-posts',
                'anchor' => false,
                'id' => $post->ID,
                'tax' => 'blog_genre',
              );
              get_template_part('template-parts/blog-card', null, $args);
              ?>
            </li><!-- /.p-related-posts__item -->
          <?php endwhile; ?>
        </ul><!-- /.p-related-posts__items -->
      </div><!-- /.l-container p-related-posts__container -->
    </div><!-- /.l-related-posts p-related-posts -->
  <?php
  endif;
  wp_reset_postdata();
  ?>
</main><!-- /.l-single -->

<?php get_footer(); ?>