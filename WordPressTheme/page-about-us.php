<?php get_header(); ?>

<!-- ページコンテンツ -->
<div class="page-about page-about-layout">
  <!-- SPレイアウト -->
  <section class="page-about__lead-sp about-lead">
    <div class="about-lead__inner inner">
      <div class="about-lead__image">
        <img src="<?php echo get_theme_file_uri('/assets/images/common/about_2.jpg'); ?>" alt="">
      </div>
      <h2 class="about-lead__title">Dive into<br>the Ocean</h2>
      <p class="about-lead__text">
        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
        <br>
        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
      </p>
    </div>
  </section>
  <!-- PCレイアウト -->
  <section class="page-about__lead-pc about about--page-about">
    <div class="about__inner inner">
      <div class="about__images">
        <div class="about__left-image">
          <img src="<?php echo get_theme_file_uri('/assets/images/common/about_1.jpg'); ?>" alt="">
        </div>
        <div class="about__right-image">
          <img src="<?php echo get_theme_file_uri('/assets/images/common/about_2.jpg'); ?>" alt="">
        </div>
      </div>
      <div class="about__body">
        <h2 class="about__title">Dive into<br>the Ocean</h2>
        <div class="about__content">
          <p class="about__text">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            <br>
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
          </p>
        </div>
      </div>
    </div>
  </section>
  
  <?php $gallery = SCF::get('gallery');
  if ($gallery): ?>
  <!-- Gallery -->
  <div class="page-about__gallery gallery">
    <div class="gallery__inner inner">
      <div class="gallery__header section-header">
        <p class="section-header__entitle">Gallery</p>
        <h2 class="section-header__jatitle">フォト</h2>
      </div>
      <div class="gallery__body">

      <?php 
      $total = count($gallery);
      for ($i = 0; $i < $total; $i += 6):

        $img1 = $gallery[$i]['image'] ?? null;
        $img2 = $gallery[$i+1]['image'] ?? null;
        $img3 = $gallery[$i+2]['image'] ?? null;
        $img4 = $gallery[$i+3]['image'] ?? null;
        $img5 = $gallery[$i+4]['image'] ?? null;
        $img6 = $gallery[$i+5]['image'] ?? null;

      ?>

      <?php if (!empty($img1)): ?>
        <div class="gallery__column">
          <div class="gallery__item gallery__item--single">
            <img src="<?php echo esc_url(wp_get_attachment_url($img1)); ?>" 
                 alt="<?php echo esc_attr($gallery[$i]['alt'] ?? ''); ?>">
          </div>
          <?php if (!empty($img2)): ?>
          <div class="gallery__stack">
            <div class="gallery__item gallery__item--stacked">
              <img src="<?php echo esc_url(wp_get_attachment_url($img2)); ?>"
                   alt="<?php echo esc_attr($gallery[$i+1]['alt'] ?? ''); ?>">
            </div>
            <?php if (!empty($img3)): ?>
            <div class="gallery__item gallery__item--stacked">
              <img src="<?php echo esc_url(wp_get_attachment_url($img3)); ?>"
                   alt="<?php echo esc_attr($gallery[$i+2]['alt'] ?? ''); ?>">
            </div>
            <?php endif; ?>
          </div>
          <?php endif; ?>
        </div>
      <?php endif; ?>

      <?php if (!empty($img4)): ?>
        <div class="gallery__column gallery__column--reverse">
          <div class="gallery__stack">
            <div class="gallery__item gallery__item--stacked">
              <img src="<?php echo esc_url(wp_get_attachment_url($img4)); ?>"
              alt="<?php echo esc_attr($gallery[$i+3]['alt'] ?? ''); ?>">
            </div>
            <?php if (!empty($img5)): ?>
            <div class="gallery__item gallery__item--stacked">
              <img src="<?php echo esc_url(wp_get_attachment_url($img5)); ?>"
              alt="<?php echo esc_attr($gallery[$i+4]['alt'] ?? ''); ?>">
            </div>
            <?php endif; ?>
          </div>
          <?php if (!empty($img6)): ?>
          <div class="gallery__item gallery__item--single">
            <img src="<?php echo esc_url(wp_get_attachment_url($img6)); ?>" 
                 alt="<?php echo esc_attr($gallery[$i+5]['alt'] ?? ''); ?>">
          </div>
          <?php endif; ?>
        </div>
      <?php endif; ?>
      <?php endfor; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>

</div>

<?php get_footer(); ?>