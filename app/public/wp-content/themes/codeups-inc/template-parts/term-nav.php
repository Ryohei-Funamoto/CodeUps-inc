<div class="l-term-nav p-term-nav">
  <div class="l-container p-term-nav__container">
    <ul class="p-term-nav__items">
      <?php if (is_post_type_archive('works') || is_post_type_archive('blog')) : ?>
        <li class="p-term-nav__item is-active"><a href="<?php echo get_post_type_archive_link($args['post_type']); ?>">ALL</a></li>
        <?php
        $terms = get_terms($args['tax'], array(
          'order' => 'ASC',
          'orderby' => 'id',
          'hide_empty' => false,
        ));
        foreach ($terms as $term) :
        ?>
          <li class="p-term-nav__item"><a href="<?php echo esc_url(get_term_link($term, $args['tax'])); ?>"><?php echo esc_html($term->name); ?></a></li>
        <?php endforeach; ?>
      <?php elseif (is_tax('works_genre') || is_tax('blog_genre')) : ?>
        <li class="p-term-nav__item"><a href="<?php echo get_post_type_archive_link($args['post_type']); ?>">ALL</a></li>
        <?php
        $term_obj = get_queried_object();
        $term_name = $term_obj->name;
        $terms = get_terms($args['tax'], array(
          'order' => 'ASC',
          'orderby' => 'id',
          'hide_empty' => false,
        ));
        foreach ($terms as $term) :
        ?>
          <li class="<?php if ($term_name === $term->name) {
                        echo 'p-term-nav__item is-active';
                      } else {
                        echo 'p-term-nav__item';
                      } ?>"><a href="<?php echo esc_url(get_term_link($term, $args['tax'])); ?>"><?php echo esc_html($term->name); ?></a></li>
        <?php endforeach; ?>
      <?php endif; ?>
    </ul><!-- /.p-term-nav__items -->
  </div><!-- /.l-container p-term-nav__container -->
</div><!-- /.l-term-nav p-term-nav -->