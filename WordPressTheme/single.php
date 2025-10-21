<?php get_header(); ?>

<!-- ページコンテンツ -->
<div class="single-blog single-blog-layout">
  <div class="single-blog__content">
    <div class="single-blog__inner inner">
      <div class="single-blog__body">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php 
        if ( is_single() ) {
          set_post_views( get_the_ID() );
        }
        ?>

        <article class="single-blog__article blog-article">
          <header class="blog-article__header">
            <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="blog-article__date">
                <?php echo get_the_date('Y.m.d'); ?>
            </time>
            <h2 class="blog-article__title"><?php the_title(); ?></h2>
          </header>

          <div class="blog-article__content">
            <?php if ( has_post_thumbnail() ) : ?>
              <figure class="blog-article__figure">
                <?php the_post_thumbnail('large'); ?>
              </figure>
            <?php endif; ?>
            <div class="blog-article__text">
              <?php the_content(); ?>
            </div>
          </div>
        </article>
        <?php endwhile; endif; ?>

        <!-- ページネーション -->
        <nav class="single-blog__pagination pagination pagination--simple">
        <?php wp_pagenavi(); ?>
        </nav>
        <nav class="single-blog__pagination pagination pagination--simple">
            <a href="#" class="pagination__prev">前へ</a>
            <a href="#" class="pagination__next">次へ</a>
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
            <?php
              $popular = new WP_Query(array(
                'posts_per_page' => 3,
                'post_type'      => 'post',
                'meta_key'       => 'post_views_count',
                'orderby'        => 'meta_value_num',
                'order'          => 'DESC',
                'ignore_custom_sort' => true,
              ));
              
            if($popular->have_posts()): while($popular->have_posts()): $popular->the_post();
            ?>
              <a href="<?php the_permalink(); ?>" class="popular-list__item">
                <div class="popular-list__image">
                <?php if (has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('medium'); ?>
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.png" alt="">
                <?php endif; ?>
                </div>
                <div class="popular-list__body">
                  <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="popular-list__date">
                    <?php echo get_the_date('Y.m.d'); ?>
                  </time>
                  <p class="popular-list__title"><?php the_title(); ?></p>
                </div>
                <span class="popular-list__mask"></span>
              </a>
            <?php endwhile; endif;?>
            <?php wp_reset_postdata();?>
            </div>
          </div>
        </section>

        <section class="sidebar__box sidebar-box">
          <h2 class="sidebar-box__heading">
            <span class="sidebar-box__icon"></span>
            <span class="sidebar-box__title">口コミ</span>
          </h2>
          <div class="sidebar-box__body">
          <?php
            $voice = new WP_Query(array(
              'posts_per_page' => 1,
              'post_type'      => 'voice',
              'orderby'        => 'date',
              'order'          => 'DESC'
            ));
          if($voice->have_posts()): while($voice->have_posts()): $voice->the_post();
            $voice_img = get_post_meta(get_the_ID(), 'voice_image', true);
            $voice_demographic = get_post_meta(get_the_ID(), 'voice_demographic', true);
          ?>
            <div class="sidebar-box__voice-card voice-card-simple">
              <div class="voice-card-simple__image">
              <?php echo wp_get_attachment_image($voice_img, 'medium', false, array('alt' => $voice_demographic . 'の写真')); ?>
              </div>
              <p class="voice-card-simple__demographic"><?php echo esc_html($voice_demographic); ?></p>
              <p class="voice-card-simple__title"><?php the_title(); ?></p>
            </div>
            <div class="sidebar-box__button">
              <a href="archive-voice.html" class="button">
                View more
                <span></span>
              </a>
            </div>
            <?php endwhile; endif;?>
            <?php wp_reset_postdata();?>
          </div>
        </section>

        <section class="sidebar__box sidebar-box">
          <h2 class="sidebar-box__heading">
            <span class="sidebar-box__icon"></span>
            <span class="sidebar-box__title">キャンペーン</span>
          </h2>
          <div class="sidebar-box__body">
          <?php
            $campaign = new WP_Query(array(
              'posts_per_page' => 2,
              'post_type'      => 'campaign',
              'orderby'        => 'date',
              'order'          => 'DESC'
            ));
          if($campaign->have_posts()): while($campaign->have_posts()): $campaign->the_post();
            $campaign_img = get_post_meta(get_the_ID(), 'campaign_image', true);
            $campaign_note = get_post_meta(get_the_ID(), 'campaign_note', true);
            $campaign_selling = get_post_meta(get_the_ID(), 'campaign_price_selling', true);
            $campaign_special = get_post_meta(get_the_ID(), 'campaign_price_special', true);
          ?>
            <div class="sidebar-box__campaign-card campaign-card">
              <div class="campaign-card__image campaign-card__image--side">
              <?php if ($campaign_img): ?>
                <?php echo wp_get_attachment_image($campaign_img, 'medium'); ?>
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.png" alt="">
              <?php endif; ?>
              </div>
              <div class="campaign-card__body campaign-card__body--side">
                <p class="campaign-card__title campaign-card__title--side"><?php the_title(); ?></p>
                <p class="campaign-card__note campaign-card__note--side"><?php echo esc_html($campaign_note); ?></p>
                <div class="campaign-card__price campaign-card__price--side">
                  <p class="campaign-card__selling campaign-card__selling--side"><?php echo esc_html($campaign_selling); ?></p>
                  <p class="campaign-card__special campaign-card__special--side"><?php echo esc_html($campaign_special); ?></p>
                </div>
              </div>
            </div>
            <?php endwhile; endif;?>
            <?php wp_reset_postdata();?>
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
            <?php
            global $wpdb;
            $years = $wpdb->get_col("
                SELECT DISTINCT YEAR(post_date) 
                FROM $wpdb->posts 
                WHERE post_status='publish' AND post_type='post' 
                ORDER BY post_date DESC
            ");
            foreach($years as $year):
            ?>
              <li class="archive-list__year <?php echo $year === '2023' ? 'is-open' : ''; ?>">
                <button class="archive-list__year-button" type="button"><?php echo $year; ?></button>
                <ul class="archive-list__months">
                <?php
                $months = $wpdb->get_col($wpdb->prepare(
                  "SELECT DISTINCT MONTH(post_date) 
                   FROM $wpdb->posts 
                   WHERE post_status='publish' AND post_type='post' AND YEAR(post_date)=%d 
                   ORDER BY post_date DESC",
                  $year
                ));
                foreach($months as $month):
                  $link = get_month_link($year, $month);
                ?>
                  <li class="archive-list__month"><a href="<?php echo esc_url($link); ?>"><?php echo $month; ?>月</a></li>
                <?php endforeach; ?>
                  
                </ul>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </section>
        
      </aside>
    </div>
  </div>
</div>

<?php get_footer(); ?>