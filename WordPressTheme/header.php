<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">

  <?php
function output_archive_meta($group_name, $post_type) {
    // アーカイブページかどうか
    if (!is_post_type_archive($post_type)) return;

    // SEO設定ページを取得
    $seo_page = get_page_by_path('seo-settings');
    if (!$seo_page || !isset($seo_page->ID)) return;

    $group = get_field($group_name, $seo_page->ID);
    if (!$group) return;

    if (!empty($group['title'])) {
        echo '<title>' . esc_html($group['title']) . '</title>' . "\n";
    }
    if (!empty($group['description'])) {
        echo '<meta name="description" content="' . esc_attr($group['description']) . '">' . "\n";
    }
    if (!empty($group['noindex']) && $group['noindex'] === true) {
        echo '<meta name="robots" content="noindex">' . "\n";
    }
}

// 出力
output_archive_meta('campaign', 'campaign');
output_archive_meta('voice', 'voice');
?>
  <?php wp_head(); ?>
</head>

<?php 
$campaign = esc_url( home_url( '/campaign/' ) );
$campaign_license = esc_url( home_url( '/campaign_category/license/' ) );
$campaign_trial = esc_url( home_url( '/campaign_category/trial-diving/' ) );
$campaign_fun = esc_url( home_url( '/campaign_category/fun-diving/' ) );

$about = esc_url( home_url( '/about-us/' ) );
$information = esc_url( home_url( '/information/' ) );
$blog = esc_url( home_url( '/blog/' ) );
$voice = esc_url( home_url( '/voice/' ) );
$price = esc_url( home_url( '/price/' ) );
$faq = esc_url( home_url( '/faq/' ) );
$contact = esc_url( home_url( '/contact/' ) );
$privacy_policy = esc_url( home_url( '/privacypolicy/' ) );
$terms = esc_url( home_url( '/terms-of-service/' ) );
?>

  <body>
    <!-- ヘッダー -->
    <header class="header header-layout">
      <div class="header__inner">
      <?php if ( is_front_page()) : ?>
        <h1 class="header__logo">
          <a href="<?php echo home_url(); ?>" class="header__logolink">
            <img src="<?php echo get_theme_file_uri('/assets/images/common/codeups.svg'); ?>" alt="CodeUps">
          </a>
        </h1>
        <?php else : ?>
        <div class="header__logo">
          <a href="<?php echo home_url(); ?>" class="header__logolink">
            <img src="<?php echo get_theme_file_uri('/assets/images/common/codeups.svg'); ?>" alt="CodeUps">
          </a>
        </div>
        <?php endif;?>
        <!-- ハンバーガー -->
        <div class="header__drawer hamburger js-hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <!-- sp-nav -->
        <nav class="header__sp-nav sp-nav js-sp-nav">
          <div class="sp-nav__flex">
            <div class="sp-nav__left">
              <ul class="sp-nav__items">
                <li class="sp-nav__item"><a href="<?php echo $campaign; ?>">キャンペーン</a></li>
                <li class="sp-nav__item"><a href="<?php echo $campaign_license; ?>">ライセンス講習</a></li>
                <li class="sp-nav__item"><a href="<?php echo $campaign_trial; ?>">体験ダイビング</a></li>
                <li class="sp-nav__item"><a href="<?php echo $campaign_fun; ?>">ファンダイビング</a></li>
              </ul>
              <ul class="sp-nav__items">
                <li class="sp-nav__item"><a href="<?php echo $about; ?>">私たちについて</a></li>
              </ul>
              <ul class="sp-nav__items">
                <li class="sp-nav__item"><a href="<?php echo $information; ?>">ダイビング情報</a></li>
                <li class="sp-nav__item"><a href="<?php echo $information; ?>#tab-license">ライセンス講習</a></li>
                <li class="sp-nav__item"><a href="<?php echo $information; ?>#tab-trial-diving">体験ダイビング</a></li>
                <li class="sp-nav__item"><a href="<?php echo $information; ?>#tab-fun-diving">ファンダイビング</a></li>
              </ul>
              <ul class="sp-nav__items">
                <li class="sp-nav__item"><a href="<?php echo $blog; ?>">ブログ</a></li>
              </ul>
            </div>
            <div class="sp-nav__right">
              <ul class="sp-nav__items">
                <li class="sp-nav__item"><a href="<?php echo $voice; ?>">お客様の声</a></li>
              </ul>
              <ul class="sp-nav__items">
                <li class="sp-nav__item"><a href="<?php echo $price; ?>">料金一覧</a></li>
                <li class="sp-nav__item"><a href="<?php echo $price; ?>#price-license">ライセンス講習</a></li>
                <li class="sp-nav__item"><a href="<?php echo $price; ?>#price-trial-diving">体験ダイビング</a></li>
                <li class="sp-nav__item"><a href="<?php echo $price; ?>#price-fun-diving">ファンダイビング</a></li>
              </ul>
              <ul class="sp-nav__items">
                <li class="sp-nav__item"><a href="<?php echo $faq; ?>">よくある質問</a></li>
              </ul>
              <ul class="sp-nav__items">
                <li class="sp-nav__item sp-nav__item--multiline">
                  <a href="<?php echo $privacy_policy; ?>">プライバシー<br>ポリシー</a>
                </li>
              </ul>
              <ul class="sp-nav__items">
                <li class="sp-nav__item">
                  <a href="<?php echo $terms; ?>">利用規約</a>
                </li>
              </ul>
              <ul class="sp-nav__items">
                <li class="sp-nav__item">
                  <a href="<?php echo $contact; ?>">お問い合わせ</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- pc-nav -->
        <nav class="header__pc-nav pc-nav js-pc-nav">
          <ul class="pc-nav__items">
            <li class="pc-nav__item">
              <a href="<?php echo $campaign; ?>" class="pc-nav__itemlink">
                <p class="pc-nav__en">Campaign</p>
                <p class="pc-nav__ja">キャンペーン</p>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="<?php echo $about; ?>" class="pc-nav__itemlink">
                <p class="pc-nav__en">About us</p>
                <p class="pc-nav__ja">私たちについて</p>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="<?php echo $information; ?>" class="pc-nav__itemlink">
                <p class="pc-nav__en">Information</p>
                <p class="pc-nav__ja">ダイビング情報</p>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="<?php echo $blog; ?>" class="pc-nav__itemlink">
                <p class="pc-nav__en">Blog</p>
                <p class="pc-nav__ja">ブログ</p>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="<?php echo $voice; ?>" class="pc-nav__itemlink">
                <p class="pc-nav__en">Voice</p>
                <p class="pc-nav__ja">お客様の声</p>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="<?php echo $price; ?>" class="pc-nav__itemlink">
                <p class="pc-nav__en">Price</p>
                <p class="pc-nav__ja">料金一覧</p>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="<?php echo $faq; ?>" class="pc-nav__itemlink">
                <p class="pc-nav__en">FAQ</p>
                <p class="pc-nav__ja">よくある質問</p>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="<?php echo $contact; ?>" class="pc-nav__itemlink">
                <p class="pc-nav__en">Contact</p>
                <p class="pc-nav__ja">お問い合わせ</p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <?php wp_head(); ?>
    </header>

    <?php if ( !is_front_page() && !is_404() ) :?>

    <main>
    <?php get_template_part( 'template-parts/page-header' );?>

    <?php endif;?>
