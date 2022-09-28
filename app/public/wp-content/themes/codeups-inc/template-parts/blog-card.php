<a href="<?php the_permalink(); ?>" class="<?php echo $args['class']; ?>">
  <?php
  $post_time = get_the_time('U');
  $days = 7; // 7日以内に投稿された記事にNewバッジを表示
  $last = time() - ($days * 24 * 60 * 60);
  if ($post_time > $last) :
  ?>
    <span class="p-blog-card__badge">new</span>
  <?php endif; ?>
  <div class="p-blog-card__head">
    <figure class="p-blog-card__image">
      <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('medium', array('alt' => the_title_attribute(array('echo' => false)))); ?>
      <?php else : ?>
        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/common/noimg.png') ?>" alt="">
      <?php endif; ?>
    </figure><!-- /.p-blog-card__image -->
  </div><!-- /.p-blog-card__head -->

  <div class="p-blog-card__body">
    <?php if (is_post_type_archive('blog') || is_tax('blog_genre')) : ?>
      <h2 class="p-blog-card__title"><?php echo my_flexible_title($post->post_title, 20); ?></h2>
    <?php elseif (is_front_page()) : ?>
      <h3 class="p-blog-card__title"><?php echo my_flexible_title($post->post_title, 20); ?></h3>
    <?php elseif (is_singular(array('post', 'works', 'blog'))) : ?>
      <div class="p-blog-card__title"><?php echo my_flexible_title($post->post_title, 20); ?></div>
    <?php endif; ?>
    <p class="p-blog-card__description"><?php echo my_flexible_excerpt($post->post_content, 30); ?></p>
  </div><!-- /.p-blog-card__body -->

  <div class="p-blog-card__footer">
    <div class="p-blog-card__category-wrapper">
      <div class="p-blog-card__category">
        <?php my_the_post_term($args['anchor'], $args['tax'], $args['id']); ?>
      </div>
    </div><!-- /.p-blog-card__category-wrapper -->
    <time datetime="<?php the_time('c'); ?>" class="p-blog-card__published"><?php the_time('Y.m.d'); ?></time>
  </div><!-- /.p-blog-card__footer -->
</a><!-- /.blog-card -->