<?php

/** global-styles-inline-cssをなくす */
add_action('wp_enqueue_scripts', 'remove_my_global_styles');
function remove_my_global_styles()
{
  wp_dequeue_style('global-styles');
}
