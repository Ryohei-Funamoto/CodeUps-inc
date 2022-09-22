<a href="<?php the_permalink(); ?>" class="<?php echo $args['class']; ?>">
  <div class="works-card__head">
    <figure class="works-card__image">
      <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('large', array('alt' => get_the_title())); ?>
      <?php else : ?>
        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/common/noimg.png'); ?>" alt="">
      <?php endif; ?>
    </figure><!-- /.works-card__image -->
    <div class="works-card__category"><?php my_the_post_term($args['anchor'], $args['tax'], $args['id']); ?></div>
  </div><!-- /.works-card__head -->

  <div class="works-card__body">
    <h2 class="works-card__title"><?php the_title(); ?></h2>
  </div><!-- /.works-card__body -->
</a><!-- /.works-card -->