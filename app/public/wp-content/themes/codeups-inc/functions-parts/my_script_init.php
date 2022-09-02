<?php

/** CSS・JSの読み込み */
function my_script_init()
{
  /** Google Fonts */
  wp_enqueue_style('noto-sans-jp', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap', array(), '1.0.0');
  wp_enqueue_style('noto-serif-jp', 'https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap', array(), '1.0.0');
  /** Font Awesome */
  wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css', array(), '6.1.1');
  /** style.css */
  wp_enqueue_style('common-style', get_template_directory_uri() . '/css/style.css', array(), date('YmdGis', filemtime(get_theme_file_path('/css/style.css'))));
  /** home.css */
  if (is_front_page()) {
    wp_enqueue_style('home-style', get_template_directory_uri() . '/css/home.css', array(), date('YmdGis', filemtime(get_theme_file_path('/css/home.css'))));
  }
  /** lower.css */
  if (!is_front_page()) {
    wp_enqueue_style('sub-style', get_template_directory_uri() . '/css/sub.css', array(), date('YmdGis', filemtime(get_theme_file_path('/css/sub.css'))));
  }
  /** news.css */
  if (is_home() || is_category() || is_singular('post')) {
    wp_enqueue_style('news-style', get_template_directory_uri() . '/css/news.css', array(), date('YmdGis', filemtime(get_theme_file_path('/css/news.css'))));
  }
  /** content.css */
  if (is_page('content')) {
    wp_enqueue_style('content-style', get_template_directory_uri() . '/css/content.css', array(), date('YmdGis', filemtime(get_theme_file_path('/css/content.css'))));
  }
  /** works.css */
  if (is_post_type_archive('works') || is_tax('works_genre') || is_singular('works')) {
    wp_enqueue_style('works-style', get_template_directory_uri() . '/css/works.css', array(), date('YmdGis', filemtime(get_theme_file_path('/css/works.css'))));
  }
  /** blog.css */
  if (is_post_type_archive('blog') || is_tax('blog_genre')) {
    wp_enqueue_style('blog-style', get_template_directory_uri() . '/css/blog.css', array(), date('YmdGis', filemtime(get_theme_file_path('/css/blog.css'))));
  }
  /** overview.css */
  if (is_page('overview')) {
    wp_enqueue_style('overview-style', get_template_directory_uri() . '/css/overview.css', array(), date('YmdGis', filemtime(get_theme_file_path('/css/overview.css'))));
  }
  /** single.css */
  if (is_singular(array('post', 'blog'))) {
    wp_enqueue_style('single-style', get_template_directory_uri() . '/css/single.css', array(), date('YmdGis', filemtime(get_theme_file_path('/css/single.css'))));
  }
  /** contact.css */
  if (is_page(array('contact', 'contact_thanks'))) {
    wp_enqueue_style('contact-style', get_template_directory_uri() . '/css/contact.css', array(), date('YmdGis', filemtime(get_theme_file_path('/css/contact.css'))));
  }
  /** 404.css */
  if (is_404()) {
    wp_enqueue_style('page-404-style', get_template_directory_uri() . '/css/page-404.css', array(), date('YmdGis', filemtime(get_theme_file_path('/css/page-404.css'))));
  }
  /** jQuery */
  if (!is_admin()) {
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/lib/jquery-3.6.0.min.js', array(), '3.6.0', false);
  }
  /** smoothscroll.min.js */
  wp_enqueue_script('smoothscroll-polyfill-script', get_template_directory_uri() . '/js/lib/smoothscroll.min.js', array(), '1.0.0', true);
  /** swiper-bundle.min.js */
  if (is_front_page() || is_singular('works')) {
    wp_enqueue_script('swiper-script', get_template_directory_uri() . '/js/lib/swiper-bundle.min.js', array(), '8.3.1', true);
  }
  /** gsap.min.js */
  if (is_front_page() || is_page('content')) {
    wp_enqueue_script('gsap-script', get_template_directory_uri() . '/js/lib/gsap.min.js', array(), '3.11.0', true);
  }
  /** ScrollTrigger.min.js */
  if (is_front_page() || is_page('content')) {
    wp_enqueue_script('scrolltrigger-script', get_template_directory_uri() . '/js/lib/ScrollTrigger.min.js', array(), '3.11.0', true);
  }
  /** common.js */
  wp_enqueue_script('common-script', get_template_directory_uri() . '/js/common.js', array('jquery'), date('YmdGis', filemtime(get_theme_file_path('/js/common.js'))), true);
  /** header_scroll.js */
  if (!is_singular(array('post', 'works', 'blog')) && !is_page('contact-thanks') && !is_404()) {
    wp_enqueue_script('header-scroll-script', get_template_directory_uri() . '/js/header_scroll.js', array('jquery'), date('YmdGis', filemtime(get_theme_file_path('/js/header_scroll.js'))), true);
  }
  /** home.js */
  if (is_front_page()) {
    wp_enqueue_script('home-script', get_template_directory_uri() . '/js/home.js', array('jquery'), date('YmdGis', filemtime(get_theme_file_path('/js/home.js'))), true);
  }
  /** content.js */
  if (is_page('content')) {
    wp_enqueue_script('content-script', get_template_directory_uri() . '/js/content.js', array('jquery'), date('YmdGis', filemtime(get_theme_file_path('/js/content.js'))), true);
  }
  /** works.js */
  if (is_singular('works')) {
    wp_enqueue_script('works-script', get_template_directory_uri() . '/js/works.js', array('jquery'), date('YmdGis', filemtime(get_theme_file_path('/js/works.js'))), true);
  }
}
add_action('wp_enqueue_scripts', 'my_script_init');
