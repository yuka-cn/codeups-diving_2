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


//アーカイブの表示件数変更
function change_posts_per_page($query) {
  if ( is_admin() || ! $query->is_main_query() )
      return;
  if ( $query->is_archive('campaign') ) { //カスタム投稿タイプを指定
      $query->set( 'posts_per_page', '4' ); //表示件数を指定
  }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );


//ページネーション
function my_custom_pagenavi($html) {
  global $wp_query;

  $max_page = $wp_query->max_num_pages;
  $paged = max(1, get_query_var('paged'));

  // 前へボタンを常に表示
  if ($paged > 1) {
      $prev = get_previous_posts_link('前へ');
      $prev = preg_replace('/<a /', '<a class="pagination__prev"', $prev, 1);
  } else {
      $prev = '<span class="pagination__prev"></span>'; // クリック不可
  }

  // 次へボタンを常に表示
  if ($paged < $max_page) {
      $next = get_next_posts_link('次へ', $max_page);
      $next = preg_replace('/<a /', '<a class="pagination__next"', $next, 1);
  } else {
      $next = '<span class="pagination__next"></span>'; // クリック不可
  }

  // 5~6ページのリンクに pagination__page--pcを付与
  $html = preg_replace_callback('/<a ([^>]+)>(\d+)<\/a>/', function($matches) {
    $attrs = $matches[1];
    $num = (int)$matches[2];

    if ($num >= 5 && $num <= 6) {
        if (preg_match('/class="([^"]+)"/', $attrs, $classMatch)) {
            $newClass = $classMatch[1] . ' pagination__page--pc';
            $attrs = preg_replace('/class="[^"]+"/', 'class="'.$newClass.'"', $attrs);
        } else {
            $attrs .= ' class="pagination__page--pc"';
        }
    }

    return '<a ' . $attrs . '>' . $num . '</a>';
  }, $html);

  return $prev . $html . $next;
}
add_filter('wp_pagenavi', 'my_custom_pagenavi');