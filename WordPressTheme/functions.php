<?php

// テーマの基本設定
function codeups_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);
  register_nav_menus([
    'global' => 'グローバルナビゲーション',
    'footer' => 'フッターナビゲーション',
  ]);
}
add_action('after_setup_theme', 'codeups_theme_setup');

// アセット読み込み
function codeups_enqueue_assets() {
  $theme_uri = get_template_directory_uri();

  // Google Fonts
  wp_enqueue_style('codeups-google-fonts-preconnect', 'https://fonts.googleapis.com', [], null);
  wp_enqueue_style('codeups-google-fonts-preconnect-gstatic', 'https://fonts.gstatic.com', [], null, 'crossorigin');
  wp_enqueue_style(
    'codeups-google-fonts',
    'https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Gotu&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans+JP&family=Noto+Serif+JP&family=Noto+Serif:ital,wght@1,700&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,500;1,500&display=swap',
    [],
    null
  );

  // メインCSS
  wp_enqueue_style('codeups-style', $theme_uri . '/assets/css/style.css', [], null);

  // Swiper CSS
  wp_enqueue_style('codeups-swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', [], '11');

  // jQuery（WordPress同梱）
  wp_enqueue_script('jquery');

  // Swiper JS
  wp_enqueue_script('codeups-swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', ['jquery'], '11', true);

  // inview（ローカル）
  wp_enqueue_script('codeups-inview', $theme_uri . '/assets/js/jquery.inview.min.js', ['jquery'], null, true);

  // メインJS（ローカル）
  wp_enqueue_script('codeups-script', $theme_uri . '/assets/js/script.js', ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', 'codeups_enqueue_assets');