<?php get_header(); ?>
<!-- ページコンテンツ -->
<div class="page-campaign page-campaign-layout">
    <div class="page-campaign__body">
      <div class="page-campaign__inner inner">
        <!-- カテゴリーボタン -->
        <div class="page-campaign__category-buttons category-buttons">
            <a class="category-buttons__item category-button" href="<?php echo get_post_type_archive_link('campaign'); ?>">ALL</a>
            <?php
            $taxonomy = 'campaign_category';
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

        <!-- campaignカード -->
        <div class="page-campaign__cards campaign-cards">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>

        <?php
        $terms = get_the_terms(get_the_ID(), 'campaign_category');
        $term_name = '';
        if ($terms && !is_wp_error($terms)) {
            $term = $terms[0];
            $term_name = $term->name;
        }

        $image = get_field('campaign_image');
        $note = get_field('campaign_note');
        $selling = get_field('campaign_selling');
        $special = get_field('campaign_special');
        $text = get_field('campaign_text');
        $period = get_field('campaign_period');
        ?>

            <div class="campaign-cards__item campaign-card campaign-card--page">
                <div class="campaign-card__image campaign-card__image--page">
                    <?php if ($image) : ?>
                        <img src="<?php echo esc_url($image); ?>" alt="">
                    <?php else: ?>
                        <img src="<?php echo get_theme_file_uri('/assets/images/common/campaign_1.jpg'); ?>" alt="">
                    <?php endif; ?>
                </div>
                <div class="campaign-card__body campaign-card__body--page">
                    <p class="campaign-card__category"><?php echo esc_html($term_name); ?></p>
                    <p class="campaign-card__title campaign-card__title--page"><?php the_title(); ?></p>
                    <p class="campaign-card__note campaign-card__note--page"><?php echo esc_html($note); ?></p>
                    <div class="campaign-card__price campaign-card__price--page">
                        <p class="campaign-card__selling"><?php echo esc_html($selling); ?></p>
                        <p class="campaign-card__special"><?php echo esc_html($special); ?></p>
                    </div>
                    <p class="campaign-card__text campaign-card__text--page"><?php echo nl2br(esc_html($text)); ?></p>
                    <div class="campaign-card__cta campaign-card__cta--page">
                        <p class="campaign-card__period"><?php echo esc_html($period); ?></p>
                        <p class="campaign-card__lead campaign-card__lead--page">ご予約・お問い合わせはコチラ</p>
                        <div class="campaign-card__button campaign-card__button--page">
                            <a href="<?php echo esc_url(get_permalink(get_page_by_path('page-contact'))); ?>" class="button">
                                Contact us
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; endif; ?>
        </div>

        <!-- ページネーション -->
        <nav class="page-campaign__pagination pagination">
        <?php wp_pagenavi(); ?>
        </nav>

      </div>
    </div>
</div>

<?php get_footer(); ?>
