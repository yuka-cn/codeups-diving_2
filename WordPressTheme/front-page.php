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
      <?php for ($i = 1; $i <= 4; $i++): 
        $mv_pc = get_field("mv_pc_{$i}");
        $mv_sp = get_field("mv_sp_{$i}");
        if ($mv_pc && $mv_sp): ?>
        <div class="swiper-slide mv__slide">
          <picture>
            <source srcset="<?php echo esc_url($mv_pc); ?>" media="(min-width: 768px)">
            <img src="<?php echo esc_url($mv_sp); ?>" alt="メインビジュアル<?php echo $i; ?>">
          </picture>
        </div>
        <?php endif; endfor; ?>
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
            <?php
            $args = array(
                'post_type'      => 'campaign',
                'posts_per_page' => -1,
            );
            $campaigns = new WP_Query($args);
            if ($campaigns->have_posts()): 
                while ($campaigns->have_posts()): $campaigns->the_post();

                $terms = get_the_terms(get_the_ID(), 'campaign_category');
                $term_name = '';
                if ($terms && !is_wp_error($terms)) {
                    $term_name = $terms[0]->name;
                }

                $image = get_field('campaign_image');
                $note = get_field('campaign_note');
                $selling = get_field('campaign_price_selling');
                $special = get_field('campaign_price_special');
            ?>
            <div class="campaign__slide swiper-slide">
              <div class="campaign__card campaign-card">
                <div class="campaign-card__image">
                <?php if ($image) : ?>
                    <img src="<?php echo esc_url($image); ?>" alt="">
                <?php else: ?>
                    <img src="<?php echo get_theme_file_uri('/assets/images/common/campaign_1.jpg'); ?>" alt="">
                <?php endif; ?>
                </div>
                <div class="campaign-card__body">
                  <p class="campaign-card__category"><?php echo esc_html($term_name); ?></p>
                  <p class="campaign-card__title"><?php the_title(); ?></p>
                  <p class="campaign-card__note"><?php echo esc_html($note); ?></p>
                  <div class="campaign-card__price">
                    <p class="campaign-card__selling"><?php echo esc_html($selling); ?></p>
                    <p class="campaign-card__special"><?php echo esc_html($special); ?></p>
                  </div>
                </div>
              </div>
            </div>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
          </div>
        </div>
      </div>
      <div class="campaign__swiper-button-prev swiper-button-prev">
        <img src="<?php echo get_theme_file_uri('/assets/images/common/prev.png'); ?>" alt="前へ">
      </div>
      <div class="campaign__swiper-button-next swiper-button-next">
        <img src="<?php echo get_theme_file_uri('/assets/images/common/next.png'); ?>" alt="次へ">
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
          <img src="<?php echo get_theme_file_uri('/assets/images/common/about_1.jpg'); ?>" alt="">
        </div>
        <div class="about__right-image">
          <img src="<?php echo get_theme_file_uri('/assets/images/common/about_2.jpg'); ?>" alt="">
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
          <img src="<?php echo get_theme_file_uri('/assets/images/common/information.jpg'); ?>" alt="">
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
      <?php
      $args = array(
          'post_type'      => 'post',
          'posts_per_page' => 3,
      );
      $posts = new WP_Query($args);
      if ($posts->have_posts()): 
          while ($posts->have_posts()): $posts->the_post();
      ?>
        <article class="blog-cards__item blog-card">
          <a href="single.html">
            <div class="blog-card__image">
            <?php if ( has_post_thumbnail() ): ?>
                <?php the_post_thumbnail('medium'); ?>
            <?php else: ?>
                <img src="<?php echo get_theme_file_uri('/assets/images/common/noimage.png'); ?>" alt="">
            <?php endif; ?>
            </div>
            <div class="blog-card__body">
              <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="blog-card__date">
                <?php echo get_the_date('Y.m.d'); ?>
              </time>
              <h3 class="blog-card__title"><?php the_title(); ?></h3>
              <p class="blog-card__text">
              <?php
                if ( has_excerpt() ) {
                  $excerpt = get_the_excerpt();
                  $excerpt = mb_strimwidth( $excerpt, 0, 172, '', 'UTF-8' );
                  echo nl2br( esc_html( $excerpt ) );
                } else {
                  $excerpt = wp_strip_all_tags( get_the_content() );
                  $excerpt = mb_strimwidth( $excerpt, 0, 172, '', 'UTF-8' );
                  echo esc_html( $excerpt );
                }
              ?>
              </p>
            </div>
          </a>
        </article>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
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
        <?php
        $args = array(
            'post_type'      => 'voice',
            'posts_per_page' => 2,
        );
        $voices = new WP_Query($args);
        if ($voices->have_posts()): 
            while ($voices->have_posts()): $voices->the_post();
            
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
        <div class="voice-cards__item voice-card">
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
        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
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
            <source srcset="<?php echo get_theme_file_uri('/assets/images/common/price-pc'); ?>.jpg" media="(min-width: 768px)">
            <img src="<?php echo get_theme_file_uri('/assets/images/common/price-sp.jpg'); ?>" alt="">
          </picture>
        </div>
        <div class="price__lists price-lists">
          <?php
          $tables = [
             'ライセンス講習' => 'license',
             '体験ダイビング' => 'trial-diving', 
             'ファンダイビング' => 'fun-diving', 
             'スペシャルダイビング' => 'special-diving',
          ];

          foreach ($tables as $title => $field_name):
            $courses = SCF::get($field_name,57);
            if (!empty($courses)):
          ?>
          <div class="price-lists__item price-list">
            <h3 class="price-list__title"><?php echo esc_html($title); ?></h3>
            <dl class="price-list__item">
              <?php foreach ($courses as $course): ?>
              <dt><?php echo esc_html($course[$field_name . '_course']); ?></dt>
              <dd><?php echo esc_html($course[$field_name . '_price']); ?></dd>
              <?php endforeach; ?>
            </dl>
          </div>
          <?php endif; endforeach; ?>
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
