
  <!-- ページタイトル -->
  <div class="page-header">
    <h1 class="page-header__title"><?php the_title(); ?></h1>
    <div class="page-header__image">
      <picture>
        <source srcset="<?php the_post_thumbnail_url('medium'); ?>" media="(max-width: 767px)">
        <source srcset="<?php the_post_thumbnail_url('large'); ?>" media="(min-width: 768px)">
        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="">
      </picture>
    </div>
    <!-- パンくずリスト -->
    <nav class="page-header__breadcrumb breadcrumb" aria-label="パンくずリスト">
      <div class="breadcrumb__inner inner">
        <ol class="breadcrumb__list">
          <li class="breadcrumb__item"><a href="<?php echo home_url(); ?>">TOP</a></li>
          <li class="breadcrumb__item" aria-current="page"><?php the_title(); ?></li>
        </ol>
      </div>
    </nav>
  </div> 