<?php get_header(); ?>
<!-- ページコンテンツ -->
<div class="page-campaign page-campaign-layout">
          <div class="page-campaign__body">
            <div class="page-campaign__inner inner">
              <!-- カテゴリーボタン -->
              <div class="page-campaign__category-buttons category-buttons">
              <a class="category-buttons__item category-button <?php if(!is_tax()) echo 'is-active'; ?>" href="<?php echo get_post_type_archive_link('campaign'); ?>">ALL</a>
              <?php
    $taxonomy = 'campaign_category'; // ACFで紐づけたタクソノミー
    $terms = get_terms([
        'taxonomy' => $taxonomy,
        'hide_empty' => true,
    ]);

    if($terms && !is_wp_error($terms)):
        foreach($terms as $term):
    ?>
        <a class="category-buttons__item category-button <?php if(is_tax($taxonomy, $term->slug)) echo 'is-active'; ?>" href="<?php echo esc_url(get_term_link($term)); ?>">
            <?php echo esc_html($term->name); ?>
        </a>
    <?php
        endforeach;
    endif;
    ?>
              </div>

              <!-- campaignカード -->
              <div class="page-campaign__cards campaign-cards">
                <div class="campaign-cards__item campaign-card campaign-card--page" data-category="license">
                  <div class="campaign-card__image campaign-card__image--page">
                    <img src="./assets/images/common/campaign_1.jpg" alt="キャンペーン画像1">
                  </div>
                  <div class="campaign-card__body campaign-card__body--page">
                    <p class="campaign-card__category">ライセンス講習</p>
                    <p class="campaign-card__title campaign-card__title--page">ライセンス取得</p>
                    <p class="campaign-card__note campaign-card__note--page">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price campaign-card__price--page">
                      <p class="campaign-card__selling">¥56,000</p>
                      <p class="campaign-card__special">¥46,000</p>
                    </div>
                    <p class="campaign-card__text campaign-card__text--page">
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                    </p>
                    <div class="campaign-card__cta campaign-card__cta--page">
                      <p class="campaign-card__period">2023/6/1-9/30</p>
                      <p class="campaign-card__lead campaign-card__lead--page">ご予約・お問い合わせはコチラ</p>
                      <div class="campaign-card__button campaign-card__button--page">
                        <a href="page-contact.html" class="button">
                          Contact us
                          <span></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="campaign-cards__item campaign-card campaign-card--page" data-category="trial-diving">
                  <div class="campaign-card__image campaign-card__image--page">
                    <img src="./assets/images/common/campaign_2.jpg" alt="キャンペーン画像2">
                  </div>
                  <div class="campaign-card__body campaign-card__body--page">
                    <p class="campaign-card__category">体験ダイビング</p>
                    <p class="campaign-card__title campaign-card__title--page">貸切体験ダイビング</p>
                    <p class="campaign-card__note campaign-card__note--page">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price campaign-card__price--page">
                      <p class="campaign-card__selling">¥24,000</p>
                      <p class="campaign-card__special">¥18,000</p>
                    </div>
                    <p class="campaign-card__text campaign-card__text--page">
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                    </p>
                    <div class="campaign-card__cta campaign-card__cta--page">
                      <p class="campaign-card__period">2023/6/1-9/30</p>
                      <p class="campaign-card__lead campaign-card__lead--page">ご予約・お問い合わせはコチラ</p>
                      <div class="campaign-card__button campaign-card__button--page">
                        <a href="page-contact.html" class="button">
                          Contact us
                          <span></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="campaign-cards__item campaign-card campaign-card--page" data-category="trial-diving">
                  <div class="campaign-card__image campaign-card__image--page">
                    <img src="./assets/images/common/campaign_3.jpg" alt="キャンペーン画像3">
                  </div>
                  <div class="campaign-card__body campaign-card__body--page">
                    <p class="campaign-card__category">体験ダイビング</p>
                    <p class="campaign-card__title campaign-card__title--page">ナイトダイビング</p>
                    <p class="campaign-card__note campaign-card__note--page">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price campaign-card__price--page">
                      <p class="campaign-card__selling">¥10,000</p>
                      <p class="campaign-card__special">¥8,000</p>
                    </div>
                    <p class="campaign-card__text campaign-card__text--page">
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                    </p>
                    <div class="campaign-card__cta campaign-card__cta--page">
                      <p class="campaign-card__period">2023/6/1-9/30</p>
                      <p class="campaign-card__lead campaign-card__lead--page">ご予約・お問い合わせはコチラ</p>
                      <div class="campaign-card__button campaign-card__button--page">
                        <a href="page-contact.html" class="button">
                          Contact us
                          <span></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="campaign-cards__item campaign-card campaign-card--page" data-category="fun-diving">
                  <div class="campaign-card__image campaign-card__image--page">
                    <img src="./assets/images/common/campaign_4.jpg" alt="キャンペーン画像4">
                  </div>
                  <div class="campaign-card__body campaign-card__body--page">
                    <p class="campaign-card__category">ファンダイビング</p>
                    <p class="campaign-card__title campaign-card__title--page">貸切ファンダイビング</p>
                    <p class="campaign-card__note campaign-card__note--page">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price campaign-card__price--page">
                      <p class="campaign-card__selling">¥20,000</p>
                      <p class="campaign-card__special">¥16,000</p>
                    </div>
                    <p class="campaign-card__text campaign-card__text--page">
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                    </p>
                    <div class="campaign-card__cta campaign-card__cta--page">
                      <p class="campaign-card__period">2023/6/1-9/30</p>
                      <p class="campaign-card__lead campaign-card__lead--page">ご予約・お問い合わせはコチラ</p>
                      <div class="campaign-card__button campaign-card__button--page">
                        <a href="page-contact.html" class="button">
                          Contact us
                          <span></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- ページネーション -->
              <nav class="page-campaign__pagination pagination">
                <a href="#" class="pagination__prev">前へ</a>
                <div class="pagination__pages">
                  <a href="#" class="pagination__page is-current">1</a>
                  <a href="#" class="pagination__page">2</a>
                  <a href="#" class="pagination__page">3</a>
                  <a href="#" class="pagination__page">4</a>
                  <a href="#" class="pagination__page pagination__page--pc">5</a>
                  <a href="#" class="pagination__page pagination__page--pc">6</a>
                </div>
                <a href="#" class="pagination__next">次へ</a>
              </nav>
            </div>
          </div>
</div>

<?php get_footer(); ?>
