
<?php
$breadcrumb_title = get_the_title();

if (is_home()) {
  $breadcrumb_title = 'ブログ一覧';
} elseif (is_post_type_archive('campaign')) {
  $breadcrumb_title = 'キャンペーン';
} elseif (is_post_type_archive('voice')) {
  $breadcrumb_title = 'お客様の声';
} elseif (is_page('about-us')) {
  $breadcrumb_title = '私たちについて';
} elseif (is_page('information')) {
  $breadcrumb_title = 'ダイビング情報';
} elseif (is_page('price')) {
  $breadcrumb_title = '料金一覧';
} elseif (is_page('faq')) {
  $breadcrumb_title = 'よくある質問';
} elseif (is_page('contact')) {
  $breadcrumb_title = 'お問い合わせ';
} elseif (is_page('sitemap')) {
  $breadcrumb_title = 'サイトマップ';
} elseif (is_page()) {
  $slug = get_post_field('post_name', get_the_ID());
  if ($slug === 'privacypolicy') {
    $breadcrumb_title = 'プライバシーポリシー';
  } elseif ($slug === 'terms-of-service') {
    $breadcrumb_title = '利用規約';
  }
} elseif (is_404()) {
  $breadcrumb_title = '404';
}
?>


<?php if (is_singular('post')): ?>
<nav class="breadcrumb" aria-label="パンくずリスト">
  <div class="breadcrumb__inner inner">
    <ol class="breadcrumb__list">
      <li class="breadcrumb__item"><a href="<?php echo home_url(); ?>">TOP</a></li>
      <li class="breadcrumb__item"><a href="<?php echo home_url('/blog/'); ?>">ブログ一覧</a></li>
      <li class="breadcrumb__item" aria-current="page">ブログ詳細</li>
    </ol>
  </div>
</nav>

<?php elseif (is_page('contact-error') ): ?>
  <nav class="breadcrumb" aria-label="パンくずリスト">
    <div class="breadcrumb__inner inner">
      <ol class="breadcrumb__list">
        <li class="breadcrumb__item"><a href="<?php echo home_url(); ?>">TOP</a></li>
        <li class="breadcrumb__item"><a href="<?php echo home_url('/contact/'); ?>">お問い合わせ</a></li>
        <li class="breadcrumb__item" aria-current="page">お問い合わせエラー</li>
      </ol>
    </div>
  </nav>
 
<?php elseif (is_page('contact-thanks') ): ?>
  <nav class="breadcrumb" aria-label="パンくずリスト">
    <div class="breadcrumb__inner inner">
      <ol class="breadcrumb__list">
        <li class="breadcrumb__item"><a href="<?php echo home_url(); ?>">TOP</a></li>
        <li class="breadcrumb__item"><a href="<?php echo home_url('/contact/'); ?>">お問い合わせ</a></li>
        <li class="breadcrumb__item" aria-current="page">送信完了</li>
      </ol>
    </div>
  </nav>

<?php else: ?>
  <nav class="breadcrumb" aria-label="パンくずリスト">
    <div class="breadcrumb__inner inner">
      <ol class="breadcrumb__list">
        <li class="breadcrumb__item"><a href="<?php echo home_url(); ?>">TOP</a></li>
        <li class="breadcrumb__item" aria-current="page"><?php echo esc_html($breadcrumb_title); ?></li>
      </ol>
    </div>
  </nav>
<?php endif; ?>