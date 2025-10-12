
<?php
$blog_page_id = get_option('page_for_posts');
$blog_page_url = $blog_page_id ? get_permalink($blog_page_id) : home_url();
$contact_page = get_page_by_path('contact');
$contact_page_url = $contact_page ? get_permalink($contact_page->ID) :  home_url();
$page_header_title = get_field('page_header_title');
?>

<?php if (is_singular('post')): ?>
<nav class="breadcrumb" aria-label="パンくずリスト">
  <div class="breadcrumb__inner inner">
    <ol class="breadcrumb__list">
      <li class="breadcrumb__item"><a href="<?php echo home_url(); ?>">TOP</a></li>
      <li class="breadcrumb__item"><a href="<?php echo esc_url($blog_page_url); ?>">ブログ一覧</a></li>
      <li class="breadcrumb__item" aria-current="page"><?php the_title(); ?></li>
    </ol>
  </div>
</nav>

<?php elseif (is_page('contact-error') ): ?>
  <nav class="breadcrumb" aria-label="パンくずリスト">
    <div class="breadcrumb__inner inner">
      <ol class="breadcrumb__list">
        <li class="breadcrumb__item"><a href="<?php echo home_url(); ?>">TOP</a></li>
        <li class="breadcrumb__item"><a href="<?php echo esc_url($contact_page_url); ?>">お問い合わせ</a></li>
        <li class="breadcrumb__item" aria-current="page">お問い合わせエラー</li>
      </ol>
    </div>
  </nav>
 
<?php elseif (is_page('contact-thanks') ): ?>
  <nav class="breadcrumb" aria-label="パンくずリスト">
    <div class="breadcrumb__inner inner">
      <ol class="breadcrumb__list">
        <li class="breadcrumb__item"><a href="<?php echo home_url(); ?>">TOP</a></li>
        <li class="breadcrumb__item"><a href="<?php echo esc_url($contact_page_url); ?>">お問い合わせ</a></li>
        <li class="breadcrumb__item" aria-current="page">送信完了</li>
      </ol>
    </div>
  </nav>

<?php else: ?>
  <nav class="breadcrumb" aria-label="パンくずリスト">
    <div class="breadcrumb__inner inner">
      <ol class="breadcrumb__list">
        <li class="breadcrumb__item"><a href="<?php echo home_url(); ?>">TOP</a></li>
        <li class="breadcrumb__item" aria-current="page">
          <?php echo esc_html($page_header_title); ?>
        </li>
      </ol>
    </div>
  </nav>
<?php endif; ?>