<?php

/** CSS読み込みのlinkタグとJS読み込みのscriptタグのtype属性をなくす */
add_action('template_redirect', function () {
  ob_start(function ($buffer) {
    $scriptTags = [
      '<script type="text/javascript"',
      '<script type=\'text/javascript\'',
    ];

    $styleTags = [
      '<style type="text/css"',
      '<style type=\'text/css\'',
    ];

    $buffer = str_replace($scriptTags, '<script', $buffer);
    $buffer = str_replace($styleTags, '<style', $buffer);

    return $buffer;
  });
});

add_filter('style_loader_tag', function ($tag) {
  $tags = [
    ' type="text/css"',
    ' type=\'text/css\'',
  ];
  $tag = str_replace($tags, '', $tag);

  return $tag;
});

add_filter('script_loader_tag', function ($tag) {
  $tags = [
    ' type="text/javascript"',
    ' type=\'text/javascript\'',
  ];
  $tag = str_replace($tags, '', $tag);

  return $tag;
});
