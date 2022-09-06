<a href="<?php the_permalink(); ?>" class="p-post p-post--<?php echo $args['mod']; ?>">
  <div class="p-post__meta">
    <time datetime="<?php the_time('c') ?>" class="p-post__published"><?php the_time('Y.m.d'); ?></time>
    <div class="p-post__category-wrapper">
      <div class="p-post__category"><?php my_the_post_category($args['anchor'], $args['id']); ?></div><!-- /.p-post__category -->
    </div><!-- /.p-post__category-wrapper -->
  </div><!-- /.p-post__meta -->
  <?php if (is_front_page()) : ?>
    <h3 class="p-post__title"><?php the_title(); ?></h3>
  <?php elseif (is_home() || is_category()) : ?>
    <h2 class="p-post__title"><?php the_title(); ?></h2>
  <?php endif; ?>
</a><!-- /.p-post -->