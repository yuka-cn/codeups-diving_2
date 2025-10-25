<?php get_header(); ?>
<!-- ページコンテンツ -->
 <div class="page-voice page-voice-layout">
  <div class="page-voice__body">
    <div class="page-voice__inner inner">
        <!-- カテゴリーボタン -->
        <div class="page-voice__category-buttons category-buttons">
        <a class="category-buttons__item category-button" href="<?php echo get_post_type_archive_link('voice'); ?>">ALL</a>
              <?php
              $taxonomy = 'voice_category';
              $terms = get_terms([
                    'taxonomy' => $taxonomy,
                    'hide_empty' => true,
                    'orderby' => 'id',
              ]);

              if($terms && !is_wp_error($terms)):
                  foreach($terms as $term):
              ?>
              <a class="category-buttons__item category-button <?php if(is_tax($taxonomy, $term->slug)) echo 'is-active'; ?>" href="<?php echo esc_url(get_term_link($term)); ?>">
                  <?php echo esc_html($term->name); ?>
              </a>
              <?php endforeach; endif;?>
        </div>

        <!-- voiceカード -->
        <div class="page-voice__cards voice-cards">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>

        <?php
        $terms = get_the_terms(get_the_ID(), 'voice_category');
        $term_name = '';
        if ($terms && !is_wp_error($terms)) {
            $term = $terms[0];
            $term_name = $term->name;
        }

        $demographic = get_field('voice_demographic');
        $image = get_field('voice_image');
        $text = get_field('voice_text');
        ?>

        <div class="voice-cards__item voice-card voice-card--page-voice" data-category="license">
          <div class="voice-card__header">
            <div class="voice-card__text-block">
              <div class="voice-card__meta">
                <p class="voice-card__demographic"><?php echo esc_html($demographic); ?></p>
                <p class="voice-card__category"><?php echo esc_html($term_name); ?></p>
              </div>
              <h3 class="voice-card__title"><?php the_title(); ?></h3>
            </div>
            <div class="voice-card__image">
            <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr( ($demographic ? $demographic . 'の写真' : 'お客様の写真') ); ?>">
            </div>
          </div>
          <p class="voice-card__text"><?php echo nl2br(esc_html($text)); ?></p>
        </div>   
        <?php endwhile; endif; ?>
      </div>
        
      <!-- ページネーション -->
      <nav class="page-voice__pagination pagination">
      <?php wp_pagenavi(); ?>
      </nav>
    </div>
  </div>

<?php get_footer(); ?>
