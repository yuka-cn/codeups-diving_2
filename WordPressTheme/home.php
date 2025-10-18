<?php get_header(); ?>

<!-- ページコンテンツ -->
<div class="page-blog page-blog-layout">
  <div class="page-blog__content">
    <div class="page-blog__inner inner">
        <div class="page-blog__body">
            <div class="page-blog__cards blog-cards blog-cards--page">
                <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <article class="blog-cards__item blog-card">
                  <a href="<?php the_permalink(); ?>">
                    <div class="blog-card__image">
                    <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail('medium'); ?>
                    <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.png" alt="">
                    <?php endif; ?>
                    </div>
                    <div class="blog-card__body">
                      <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="blog-card__date"><?php echo get_the_date('Y.m.d'); ?></time>
                      <h3 class="blog-card__title"><?php the_title(); ?></h3>
                      <p class="blog-card__text"><?php echo nl2br(get_the_excerpt()); ?></p>
                    </div>
                  </a>
                </article>
                <?php endwhile; endif; ?>
            </div>

            <!-- ページネーション -->
            <nav class="page-campaign__pagination pagination">
            <?php wp_pagenavi(); ?>
            </nav>
        </div>

        <!-- サイドバー -->
        <aside class="page-blog__sidebar sidebar">
          <section class="sidebar__box sidebar-box">
            <h2 class="sidebar-box__heading">
              <span class="sidebar-box__icon"></span>
              <span class="sidebar-box__title">人気記事</span>
            </h2>
            <div class="sidebar-box__body">
              <div class="sidebar-box__popular-list popular-list">
                <a href="single.html" class="popular-list__item">
                  <div class="popular-list__image">
                    <img src="./assets/images/pages/blog_4.jpg" alt="ブログ画像4">
                  </div>
                  <div class="popular-list__body">
                    <time datetime="2023-11-17" class="popular-list__date">2023.11.17</time>
                    <p class="popular-list__title">ライセンス取得</p>
                  </div>
                  <span class="popular-list__mask"></span>
                </a>
                <a href="single.html" class="popular-list__item">
                  <div class="popular-list__image">
                    <img src="./assets/images/pages/blog_2.jpg" alt="ブログ画像2">
                  </div>
                  <div class="popular-list__body">
                    <time datetime="2023-11-17" class="popular-list__date">2023.11.17</time>
                    <p class="popular-list__title">ウミガメと泳ぐ</p>
                  </div>
                  <span class="popular-list__mask"></span>
                </a>
                <a href="single.html" class="popular-list__item">
                  <div class="popular-list__image">
                    <img src="./assets/images/pages/blog_3.jpg" alt="ブログ画像3">
                  </div>
                  <div class="popular-list__body">
                    <time datetime="2023-11-17" class="popular-list__date">2023.11.17</time>
                    <p class="popular-list__title">カクレクマノミ</p>
                    <span class="popular-list__mask"></span>
                  </div>
                </a>
              </div>
            </div>
          </section>
          <section class="sidebar__box sidebar-box">
            <h2 class="sidebar-box__heading">
              <span class="sidebar-box__icon"></span>
              <span class="sidebar-box__title">口コミ</span>
            </h2>
            <div class="sidebar-box__body">
              <div class="sidebar-box__voice-card voice-card-simple">
                <div class="voice-card-simple__image">
                  <img src="./assets/images/pages/voice_5-2.jpg" alt="30代(カップル)の写真">
                </div>
                <p class="voice-card-simple__demographic">30代(カップル)</p>
                <p class="voice-card-simple__title">ここにタイトルが入ります。ここにタイトル</p>
              </div>
              <div class="sidebar-box__button">
                <a href="archive-voice.html" class="button">
                  View more
                  <span></span>
                </a>
              </div>
            </div>
          </section>
          <section class="sidebar__box sidebar-box">
            <h2 class="sidebar-box__heading">
              <span class="sidebar-box__icon"></span>
              <span class="sidebar-box__title">キャンペーン</span>
            </h2>
            <div class="sidebar-box__body">
              <div class="sidebar-box__campaign-card campaign-card">
                <div class="campaign-card__image campaign-card__image--side">
                  <img src="./assets/images/common/campaign_1.jpg" alt="キャンペーン画像1">
                </div>
                <div class="campaign-card__body campaign-card__body--side">
                  <p class="campaign-card__title campaign-card__title--side">ライセンス取得</p>
                  <p class="campaign-card__note campaign-card__note--side">全部コミコミ(お一人様)</p>
                  <div class="campaign-card__price campaign-card__price--side">
                    <p class="campaign-card__selling campaign-card__selling--side">¥56,000</p>
                    <p class="campaign-card__special campaign-card__special--side">¥46,000</p>
                  </div>
                </div>
              </div>
              <div class="sidebar-box__campaign-card campaign-card">
                <div class="campaign-card__image campaign-card__image--side">
                  <img src="./assets/images/common/campaign_2.jpg" alt="キャンペーン画像2">
                </div>
                <div class="campaign-card__body campaign-card__body--side">
                  <p class="campaign-card__title campaign-card__title--side">貸切体験ダイビング</p>
                  <p class="campaign-card__note campaign-card__note--side">全部コミコミ(お一人様)</p>
                  <div class="campaign-card__price campaign-card__price--side">
                    <p class="campaign-card__selling campaign-card__selling--side">¥24,000</p>
                    <p class="campaign-card__special campaign-card__special--side">¥18,000</p>
                  </div>
                </div>
              </div>
              <div class="sidebar-box__button">
                <a href="archive-campaign.html" class="button">
                  View more
                  <span></span>
                </a>
              </div>
            </div>
          </section>
          <section class="sidebar__box sidebar-box">
            <h2 class="sidebar-box__heading">
              <span class="sidebar-box__icon"></span>
              <span class="sidebar-box__title">アーカイブ</span>
            </h2>
            <div class="sidebar-box__body">
              <ul class="sidebar-box__archive-list archive-list">
                <li class="archive-list__year is-open">
                  <button class="archive-list__year-button" type="button">2023</button>
                  <ul class="archive-list__months">
                    <li class="archive-list__month"><a href="#">11月</a></li>
                    <li class="archive-list__month"><a href="#">10月</a></li>
                    <li class="archive-list__month"><a href="#">9月</a></li>
                    <li class="archive-list__month"><a href="#">8月</a></li>
                    <li class="archive-list__month"><a href="#">7月</a></li>
                    <li class="archive-list__month"><a href="#">6月</a></li>
                    <li class="archive-list__month"><a href="#">5月</a></li>
                    <li class="archive-list__month"><a href="#">4月</a></li>
                    <li class="archive-list__month"><a href="#">3月</a></li>
                    <li class="archive-list__month"><a href="#">2月</a></li>
                    <li class="archive-list__month"><a href="#">1月</a></li>
                  </ul>
                </li>
                <li class="archive-list__year">
                  <button class="archive-list__year-button" type="button">2022</button>
                  <ul class="archive-list__months">
                    <li class="archive-list__month"><a href="#">12月</a></li>
                    <li class="archive-list__month"><a href="#">11月</a></li>
                    <li class="archive-list__month"><a href="#">10月</a></li>
                    <li class="archive-list__month"><a href="#">9月</a></li>
                    <li class="archive-list__month"><a href="#">8月</a></li>
                    <li class="archive-list__month"><a href="#">7月</a></li>
                    <li class="archive-list__month"><a href="#">6月</a></li>
                    <li class="archive-list__month"><a href="#">5月</a></li>
                    <li class="archive-list__month"><a href="#">4月</a></li>
                    <li class="archive-list__month"><a href="#">3月</a></li>
                    <li class="archive-list__month"><a href="#">2月</a></li>
                    <li class="archive-list__month"><a href="#">1月</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </section>
        </aside>
    </div>
  </div>
</div>


<?php get_footer(); ?>