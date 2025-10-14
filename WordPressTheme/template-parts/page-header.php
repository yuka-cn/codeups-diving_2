
  <!-- ページタイトル -->
  <?php
  $page_header_sp = get_field('page_header_sp');
  $page_header_pc = get_field('page_header_pc');
  ?>

  <div class="page-header">
    <h1 class="page-header__title"><?php the_title(); ?></h1>
    <div class="page-header__image">
      <picture>
      <?php if (!empty($page_header_pc['url'])): ?>
        <source srcset="<?php echo esc_url($page_header_pc['url']); ?>" media="(min-width: 768px)">
      <?php endif; ?>
      <img src="<?php echo esc_url($page_header_sp['url']); ?>" alt="">
      </picture>
    </div>

    <!-- パンくずリスト -->
    <div class="page-header__breadcrumb">
      <?php get_template_part( 'template-parts/breadcrumb' ); ?>
    </div>
  </div> 