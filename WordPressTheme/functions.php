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
  $theme_uri = get_theme_file_uri();

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
  if ( is_admin() || ! $query->is_main_query() ) {
      return;
  }
  if ( $query->is_post_type_archive('campaign') ) {
      $query->set( 'posts_per_page', 4 );
  }
  if ( $query->is_post_type_archive('voice') ) {
      $query->set( 'posts_per_page', 6 );
  }
  if ( is_tax('campaign_category') ) {
      $query->set( 'posts_per_page', 4 );
  }
  if ( is_tax('voice_category') ) {
      $query->set( 'posts_per_page', 6 );
  }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );


//投稿→ブログに変更
function change_post_menu_label() {
  global $menu, $submenu;
  $menu[5][0] = 'ブログ';
  $submenu['edit.php'][5][0]  = 'ブログ一覧';
  $submenu['edit.php'][10][0] = '新規追加';
}
add_action( 'admin_menu', 'change_post_menu_label' );

function change_post_object_label() {
  global $wp_post_types;
  $labels = &$wp_post_types['post']->labels;
  $labels->name               = 'ブログ';
  $labels->singular_name      = 'ブログ';
  $labels->all_items          = 'ブログ一覧';
  $labels->add_new_item       = '新規ブログを追加';
  $labels->edit_item          = 'ブログを編集';
  $labels->menu_name          = 'ブログ';
}
add_action( 'init', 'change_post_object_label' );


// 閲覧数を取得
function get_post_views($postID){
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  return $count ? $count : 0;
}

// 閲覧数を1増やす
function set_post_views($postID) {
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count==''){
      add_post_meta($postID, $count_key, '1');
  } else {
      $count++;
      update_post_meta($postID, $count_key, $count);
  }
}
  

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

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}

//
function add_campaign_titles_to_cf7($tag) {
  // 対象タグ名を確認
  if ($tag['name'] !== 'campaign') {
    return $tag;
  }

  // カスタム投稿「campaign」から投稿を取得
  $args = array(
    'post_type'      => 'campaign',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
  );
  $posts = get_posts($args);

  if (!$posts) return $tag;

  // 投稿タイトルを選択肢として追加
  $titles = [];
  foreach ($posts as $post) {
    $titles[] = get_the_title($post->ID);
  }

  // 重複を除外して（もし同名タイトルがある場合）
  $unique_titles = array_unique($titles);

  // 先頭に「キャンペーン内容を選択」を追加
  array_unshift($unique_titles, 'キャンペーン内容を選択');

  // CF7に値を渡す
  $tag['raw_values'] = $unique_titles;
  $tag['values'] = $unique_titles;
  $tag['labels'] = $unique_titles;

  return $tag;
}
add_filter('wpcf7_form_tag', 'add_campaign_titles_to_cf7');

add_filter('ssp_output_title', function($title){
  $seo_page = get_page_by_path('seo-settings');
  if (!$seo_page) return $title;

  if (is_post_type_archive('campaign')) {
    $new_title = get_field('campaign_meta_title', $seo_page->ID);
    if ($new_title) return $new_title;
  } elseif (is_post_type_archive('voice')) {
    $new_title = get_field('voice_meta_title', $seo_page->ID);
    if ($new_title) return $new_title;
  }

  return $title;
});

add_filter('ssp_output_description', function($desc){
  $seo_page = get_page_by_path('seo-settings');
  if (!$seo_page) return $desc;

  if (is_post_type_archive('campaign')) {
    $new_desc = get_field('campaign_meta_description', $seo_page->ID);
    if ($new_desc) return $new_desc;
  } elseif (is_post_type_archive('voice')) {
    $new_desc = get_field('voice_meta_description', $seo_page->ID);
    if ($new_desc) return $new_desc;
  }

  return $desc;
});