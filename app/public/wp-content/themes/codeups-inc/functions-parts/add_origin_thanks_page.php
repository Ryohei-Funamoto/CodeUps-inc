<?php

/** Contact Form7の送信ボタンをクリックした後の遷移先設定 */
function add_origin_thanks_page()
{
  $thanks = esc_url(home_url('/contact_thanks/'));
  echo <<< EOC
    <script>
      var thanksPage = {
        211: '{$thanks}',
      };
      document.addEventListener('wpcf7mailsent', function(event) {
        location = thanksPage[event.detail.contactFormId];
      }, false);
    </script>
  EOC;
}
add_action('wp_footer', 'add_origin_thanks_page');
