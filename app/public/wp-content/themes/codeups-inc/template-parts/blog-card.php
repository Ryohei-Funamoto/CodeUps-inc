<a href="<?php the_permalink(); ?>" class="p-blog-card">
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
    <h3 class="p-blog-card__title">
      <?php
      if (mb_strlen($post->post_title, 'UTF-8') > 20) {
        $title = mb_substr($post->post_title, 0, 20, 'UTF-8');
        echo $title . '…';
      } else {
        echo $post->post_title;
      }
      ?>
    </h3>
    <p class="p-blog-card__description">
      <?php
      if (mb_strlen($post->post_content, 'UTF-8') > 80) {
        $content = mb_substr(strip_tags($post->post_content), 0, 80, 'UTF-8');
        echo $content . '…';
      } else {
        echo strip_tags($post->post_content);
      }
      ?>
    </p>
  </div><!-- /.p-blog-card__body -->

  <div class="p-blog-card__footer">
    <div class="p-blog-card__category-wrapper">
      <div class="p-blog-card__category">
        <?php if (is_singular('post')) : ?>
          <?php my_the_post_category($args['anchor'], $args['id']); ?>
        <?php elseif (is_front_page() || is_post_type_archive('blog') || is_tax('blog_genre') || is_singular(array('works', 'blog'))) : ?>
          <?php my_the_post_term($args['anchor'], $args['id'], $args['tax']); ?>
        <?php endif; ?>
      </div>
    </div><!-- /.p-blog-card__category-wrapper -->
    <time datetime="<?php the_time('c'); ?>" class="p-blog-card__published"><?php the_time('Y.m.d'); ?></time>
  </div><!-- /.p-blog-card__footer -->
</a><!-- /.blog-card -->