<?php get_header(); ?>

<!-- ローディングアニメーション -->
<div class="loading">
  <div class="loading__header section-header">
    <p class="loading__title">DIVING</p>
    <p class="loading__subtitle">into the ocean</p>
  </div>
  <div class="loading__mask">
    <img class="loading__img loading__img-left" src="<?php echo get_theme_file_uri('/assets/images/common/loading_1.jpg'); ?>" alt="">
    <img class="loading__img loading__img-right" src="<?php echo get_theme_file_uri('/assets/images/common/loading_2.jpg'); ?>" alt="">
  </div>
</div>

<main>
  <!-- ファーストビュー -->
  <section class="mv">
    <div class="mv__slider swiper js-mvSwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide mv__slide">
          <picture>
            <source srcset="./assets/images/common/mv-sp_1.jpg" media="(max-width: 767px)">
            <source srcset="./assets/images/common/mv-pc_1.jpg" media="(min-width: 768px)">
            <img src="./assets/images/common/mv-sp_1.jpg" alt="">
          </picture>
        </div>
        <div class="swiper-slide mv__slide">
          <picture>
            <source srcset="./assets/images/common/mv-sp_2.jpg" media="(max-width: 767px)">
            <source srcset="./assets/images/common/mv-pc_2.jpg" media="(min-width: 768px)">
            <img src="./assets/images/common/mv-sp_2.jpg" alt="">
          </picture>
        </div>
        <div class="swiper-slide mv__slide">
          <picture>
            <source srcset="./assets/images/common/mv-sp_3.jpg" media="(max-width: 767px)">
            <source srcset="./assets/images/common/mv-pc_3.jpg" media="(min-width: 768px)">
            <img src="./assets/images/common/mv-sp_3.jpg" alt="">
          </picture>
        </div>
        <div class="swiper-slide mv__slide">
          <picture>
            <source srcset="./assets/images/common/mv-sp_4.jpg" media="(max-width: 767px)">
            <source srcset="./assets/images/common/mv-pc_4.jpg" media="(min-width: 768px)">
            <img src="./assets/images/common/mv-sp_4.jpg" alt="">
          </picture>
        </div>
      </div>
    </div>
    <div class="mv__header">
      <h2 class="mv__title">DIVING</h2>
      <p class="mv__subtitle">into the ocean</p>
    </div>
  </section>

  <!-- campaignセクション -->
  <section class="campaign campaign-layout">
    <div class="campaign__inner inner">
      <div class="campaign__header section-header">
        <p class="section-header__entitle">Campaign</p>
        <h2 class="section-header__jatitle">キャンペーン</h2>
      </div>
      <div class="campaign__body">
        <div class="campaign__cards swiper js-campaignSwiper">
          <div class="campaign__flex swiper-wrapper">
            <div class="campaign__slide swiper-slide">
              <div class="campaign__card campaign-card">
                <div class="campaign-card__image">
                  <img src="./assets/images/common/campaign_1.jpg" alt="キャンペーン画像1">
                </div>
                <div class="campaign-card__body">
                  <p class="campaign-card__category">ライセンス講習</p>
                  <p class="campaign-card__title">ライセンス取得</p>
                  <p class="campaign-card__note">全部コミコミ(お一人様)</p>
                  <div class="campaign-card__price">
                    <p class="campaign-card__selling">¥56,000</p>
                    <p class="campaign-card__special">¥46,000</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="campaign__slide swiper-slide">
              <div class="campaign__card campaign-card">
                <div class="campaign-card__image">
                  <img src="./assets/images/common/campaign_2.jpg" alt="キャンペーン画像2">
                </div>
                <div class="campaign-card__body">
                  <p class="campaign-card__category">体験ダイビング</p>
                  <p class="campaign-card__title">貸切体験ダイビング</p>
                  <p class="campaign-card__note">全部コミコミ(お一人様)</p>
                  <div class="campaign-card__price">
                    <p class="campaign-card__selling">¥24,000</p>
                    <p class="campaign-card__special">¥18,000</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="campaign__slide swiper-slide">
              <div class="campaign__card campaign-card">
                <div class="campaign-card__image">
                  <img src="./assets/images/common/campaign_3.jpg" alt="キャンペーン画像3">
                </div>
                <div class="campaign-card__body">
                  <p class="campaign-card__category">体験ダイビング</p>
                  <p class="campaign-card__title">ナイトダイビング</p>
                  <p class="campaign-card__note">全部コミコミ(お一人様)</p>
                  <div class="campaign-card__price">
                    <p class="campaign-card__selling">¥10,000</p>
                    <p class="campaign-card__special">¥8,000</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="campaign__slide swiper-slide">
              <div class="campaign__card campaign-card">
                <div class="campaign-card__image">
                  <img src="./assets/images/common/campaign_4.jpg" alt="キャンペーン画像4">
                </div>
                <div class="campaign-card__body">
                  <p class="campaign-card__category">ファンダイビング</p>
                  <p class="campaign-card__title">貸切ファンダイビング</p>
                  <p class="campaign-card__note">全部コミコミ(お一人様)</p>
                  <div class="campaign-card__price">
                    <p class="campaign-card__selling">¥20,000</p>
                    <p class="campaign-card__special">¥16,000</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="campaign__slide swiper-slide">
              <div class="campaign__card campaign-card">
                <div class="campaign-card__image">
                  <img src="./assets/images/common/campaign_1.jpg" alt="キャンペーン画像1">
                </div>
                <div class="campaign-card__body">
                  <p class="campaign-card__category">ライセンス講習</p>
                  <p class="campaign-card__title">ライセンス取得</p>
                  <p class="campaign-card__note">全部コミコミ(お一人様)</p>
                  <div class="campaign-card__price">
                    <p class="campaign-card__selling">¥56,000</p>
                    <p class="campaign-card__special">¥46,000</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="campaign__slide swiper-slide">
              <div class="campaign__card campaign-card">
                <div class="campaign-card__image">
                  <img src="./assets/images/common/campaign_2.jpg" alt="キャンペーン画像2">
                </div>
                <div class="campaign-card__body">
                  <p class="campaign-card__category">体験ダイビング</p>
                  <p class="campaign-card__title">貸切体験ダイビング</p>
                  <p class="campaign-card__note">全部コミコミ(お一人様)</p>
                  <div class="campaign-card__price">
                    <p class="campaign-card__selling">¥24,000</p>
                    <p class="campaign-card__special">¥18,000</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="campaign__slide swiper-slide">
              <div class="campaign__card campaign-card">
                <div class="campaign-card__image">
                  <img src="./assets/images/common/campaign_3.jpg" alt="キャンペーン画像3">
                </div>
                <div class="campaign-card__body">
                  <p class="campaign-card__category">体験ダイビング</p>
                  <p class="campaign-card__title">ナイトダイビング</p>
                  <p class="campaign-card__note">全部コミコミ(お一人様)</p>
                  <div class="campaign-card__price">
                    <p class="campaign-card__selling">¥10,000</p>
                    <p class="campaign-card__special">¥8,000</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="campaign__slide swiper-slide">
              <div class="campaign__card campaign-card">
                <div class="campaign-card__image">
                  <img src="./assets/images/common/campaign_4.jpg" alt="キャンペーン画像4">
                </div>
                <div class="campaign-card__body">
                  <p class="campaign-card__category">ファンダイビング</p>
                  <p class="campaign-card__title">貸切ファンダイビング</p>
                  <p class="campaign-card__note">全部コミコミ(お一人様)</p>
                  <div class="campaign-card__price">
                    <p class="campaign-card__selling">¥20,000</p>
                    <p class="campaign-card__special">¥16,000</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="campaign__swiper-button-prev swiper-button-prev">
        <img src="./assets/images/common/prev.png" alt="前へ">
      </div>
      <div class="campaign__swiper-button-next swiper-button-next">
        <img src="./assets/images/common/next.png" alt="次へ">
      </div>
      <div class="campaign__button">
        <a href="archive-campaign.html" class="button">
          View more
          <span></span>
        </a>
      </div>
    </div>
  </section>

  <!-- aboutセクション -->
  <section class="about about-layout">
    <div class="about__inner inner">
      <div class="about__header section-header">
        <p class="section-header__entitle">About us</p>
        <h2 class="section-header__jatitle">私たちについて</h2>
      </div>
      <div class="about__images">
        <div class="about__left-image">
          <img src="./assets/images/common/about_1.jpg" alt="">
        </div>
        <div class="about__right-image">
          <img src="./assets/images/common/about_2.jpg" alt="">
        </div>
      </div>
      <div class="about__body">
        <h3 class="about__title">Dive into<br>the Ocean</h3>
        <div class="about__content">
          <p class="about__text">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            <br>
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
          </p>
          <div class="about__button">
            <a href="page-about.html" class="button">
              View more
              <span></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section> 

  <!-- informationセクション -->
  <section class="information information-layout">
    <div class="information__inner inner">
      <div class="information__header section-header">
        <p class="section-header__entitle">Information</p>
        <h2 class="section-header__jatitle">ダイビング情報</h2>
      </div>
      <div class="information__body">
        <div class="information__image">
          <img src="./assets/images/common/information.jpg" alt="">
        </div>
        <div class="information__content">
          <h3 class="information__title">ライセンス講習</h3>
          <p class="information__text">
            当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。
            <br>
            正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
          </p>
          <div class="information__button">
            <a href="page-information.html" class="button">
              View more
              <span></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>   

  <!-- blogセクション -->
  <section class="blog blog-layout">
    <div class="blog__inner inner">
      <div class="blog__header section-header">
        <p class="section-header__entitle section-header__entitle--white">Blog</p>
        <h2 class="section-header__jatitle section-header__jatitle--white">ブログ</h2>
      </div>
      <div class="blog__cards blog-cards">
        <article class="blog-cards__item blog-card">
          <a href="single.html">
            <div class="blog-card__image">
              <img src="./assets/images/common/blog_1.jpg" alt="ブログ画像1">
            </div>
            <div class="blog-card__body">
              <time datetime="2023-11-17" class="blog-card__date">2023.11.17</time>
              <h3 class="blog-card__title">ライセンス取得</h3>
              <p class="blog-card__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                <br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
              </p>
            </div>
          </a>
        </article>
        <article class="blog-cards__item blog-card">
          <a href="single.html">
            <div class="blog-card__image">
              <img src="./assets/images/common/blog_2.jpg" alt="ブログ画像2">
            </div>
            <div class="blog-card__body">
              <time datetime="2023-11-17" class="blog-card__date">2023.11.17</time>
              <h3 class="blog-card__title">ウミガメと泳ぐ</h3>
              <p class="blog-card__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                <br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
              </p>
            </div>
          </a>
        </article>
        <article class="blog-cards__item blog-card">
          <a href="single.html">
            <div class="blog-card__image">
              <img src="./assets/images/common/blog_3.jpg" alt="ブログ画像3">
            </div>
            <div class="blog-card__body">
              <time datetime="2023-11-17" class="blog-card__date">2023.11.17</time>
              <h3 class="blog-card__title">カクレクマノミ</h3>
              <p class="blog-card__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                <br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
              </p>
            </div>
          </a>
        </article>
      </div>
      <div class="blog__button">
        <a href="home.html" class="button">
          View more
          <span></span>
        </a>
      </div>
    </div>
  </section>  

  <!-- voiceセクション -->
  <section class="voice voice-layout">
    <div class="voice__inner inner">
      <div class="voice__header section-header">
        <p class="section-header__entitle">Voice</p>
        <h2 class="section-header__jatitle">お客様の声</h2>
      </div>
      <div class="voice__cards voice-cards">
        <div class="voice-cards__item voice-card">
          <div class="voice-card__header">
            <div class="voice-card__text-block">
              <div class="voice-card__meta">
                <p class="voice-card__demographic">20代(女性)</p>
                <p class="voice-card__category">ライセンス講習</p>
              </div>
              <h3 class="voice-card__title">
                ここにタイトルが入ります。ここにタイトル
              </h3>
            </div>
            <div class="voice-card__image">
              <img src="./assets/images/common/voice_1.jpg" alt="20代(女性)の写真">
            </div>
          </div>
          <p class="voice-card__text">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            <br>
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            <br>
            ここにテキストが入ります。ここにテキストが入ります。
          </p>
        </div>
        <div class="voice-cards__item voice-card">
          <div class="voice-card__header">
            <div class="voice-card__text-block">
              <div class="voice-card__meta">
                <p class="voice-card__demographic">20代(男性)</p>
                <p class="voice-card__category">ファンダイビング</p>
              </div>
              <h3 class="voice-card__title">
                ここにタイトルが入ります。ここにタイトル
              </h3>
            </div>
            <div class="voice-card__image">
              <img src="./assets/images/common/voice_2.jpg" alt="20代(男性)の写真">
            </div>
          </div>
          <p class="voice-card__text">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            <br>
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            <br>
            ここにテキストが入ります。ここにテキストが入ります。
          </p>
        </div>
      </div>
      <div class="voice__button">
        <a href="archive-voice.html" class="button">
          View more
          <span></span>
        </a>
      </div>
    </div>
  </section>

  <!-- priceセクション -->
  <section class="price price-layout">
    <div class="price__inner inner">
      <div class="price__header section-header">
        <p class="section-header__entitle">Price</p>
        <h2 class="section-header__jatitle">料金一覧</h2>
      </div>
      <div class="price__body">
        <div class="price__image">
          <picture>
            <source media="(max-width: 767px)" srcset="./assets/images/common/price-sp.jpg">
            <source media="(min-width: 768px)" srcset="./assets/images/common/price-pc.jpg">
            <img src="./assets/images/common/price-sp.jpg" alt="">
          </picture>
        </div>
        <div class="price__lists price-lists">
          <div class="price-lists__item price-list">
            <h3 class="price-list__title">ライセンス講習</h3>
            <dl class="price-list__item">
              <dt>オープンウォーターダイバーコース</dt>
              <dd>¥50,000</dd>
              <dt>アドバンスドオープンウォーターコース</dt>
              <dd>¥60,000</dd>
              <dt>レスキュー＋EFRコース</dt>
              <dd>¥70,000</dd>
            </dl>
          </div>
          <div class="price-lists__item price-list">
            <h3 class="price-list__title">体験ダイビング</h3>
            <dl class="price-list__item">
              <dt>ビーチ体験ダイビング(半日)</dt>
              <dd>¥7,000</dd>
              <dt>ビーチ体験ダイビング(1日)</dt>
              <dd>¥14,000</dd>
              <dt>ボート体験ダイビング(半日)</dt>
              <dd>¥10,000</dd>
              <dt>ボート体験ダイビング(1日)</dt>
              <dd>¥18,000</dd>
            </dl>
          </div>
          <div class="price-lists__item price-list">
            <h3 class="price-list__title">ファンダイビング</h3>
            <dl class="price-list__item">
              <dt>ビーチダイビング(2ダイブ)</dt>
              <dd>¥14,000</dd>
              <dt>ボートダイビング(2ダイブ)</dt>
              <dd>¥18,000</dd>
              <dt>スペシャルダイビング(2ダイブ)</dt>
              <dd>¥24,000</dd>
              <dt>ナイトダイビング(1ダイブ)</dt>
              <dd>¥10,000</dd>
            </dl>
          </div>
          <div class="price-lists__item price-list">
            <h3 class="price-list__title">スペシャルダイビング</h3>
            <dl class="price-list__item">
              <dt>貸切ダイビング(2ダイブ)</dt>
              <dd>¥24,000</dd>
              <dt>1日ダイビング(3ダイブ)</dt>
              <dd>¥32,000</dd>
            </dl>
          </div>
        </div>
      </div>
      <div class="price__button">
        <a href="page-price.html" class="button">
          View more
          <span></span>
        </a>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
