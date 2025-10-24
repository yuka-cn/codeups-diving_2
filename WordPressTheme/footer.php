<?php 
$campaign = esc_url( home_url( '/campaign/' ) );
$about = esc_url( home_url( '/about-us/' ) );
$information = esc_url( home_url( '/information/' ) );
$blog = esc_url( home_url( '/home/' ) );
$voice = esc_url( home_url( '/voice/' ) );
$price = esc_url( home_url( '/price/' ) );
$faq = esc_url( home_url( '/faq/' ) );
$contact = esc_url( home_url( '/contact/' ) );
$privacy_policy = esc_url( home_url( '/privacypolicy/' ) );
$terms = esc_url( home_url( '/terms-of-service/' ) );

$exclude_pages = array( 'contact', 'contact-error', 'contact-thanks' );

if ( ! is_page( $exclude_pages ) && ! is_404() ) :
?>

      <!-- contactセクション -->
      <section class="contact contact-layout <?php echo is_page() ? 'contact-page-layout' : ''; ?>">
        <div class="contact__inner inner">
          <div class="contact__box">
            <div class="contact__company-overview company">
              <div class="company__name">
                <img src="<?php echo get_theme_file_uri('/assets/images/common/codeups.png'); ?>" alt="CodeUps">
              </div>
              <div class="company__flex">
                <div class="company__details">
                  <p class="company__address">沖縄県那覇市1-1</p>
                  <p class="company__tel">TEL:0120-000-0000</p>
                  <p class="company__business-hours">営業時間:8:30-19:00</p>
                  <p class="company__closed-day">定休日:毎週火曜日</p>
                </div>
                <div class="company__map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1881.7860220603193!2d127.67874270072544!3d26.21403021336403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e5699dc05bf813%3A0x3501764c0a57176d!2z44CSOTAwLTAwMTUg5rKW57iE55yM6YKj6KaH5biC5LmF6IyC5Zyw77yR5LiB55uu77yR4oiS77yR!5e0!3m2!1sja!2sjp!4v1741890163409!5m2!1sja!2sjp" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="map"></iframe>
                </div>
              </div>
            </div>
            <div class="contact__block">
              <div class="contact__header section-header">
                <p class="section-header__entitle section-header__entitle--big">Contact</p>
                <h2 class="section-header__jatitle section-header__jatitle--big">お問い合わせ</h2>
              </div>
              <p class="contact__text">ご予約・お問い合わせはコチラ</p>
              <div class="contact__button">
                <a href="page-contact.html" class="button">
                  Contact us
                  <span></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php endif; ?>


    <!-- topへ戻るボタン -->
    <div class="to-top">
      <a href="#top">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri('./assets/images/common/to-top-sp.png'); ?>">
          <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri('./assets/images/common/to-top-pc.png'); ?>">
          <img src="<?php echo get_theme_file_uri('/assets/images/common/to-top-sp.png'); ?>" alt="topへ戻る">
        </picture>
      </a>
    </div>

    <!-- フッター -->
    <footer class="footer footer-layout <?php echo is_404() ? 'footer-layout--404' : ''; ?>">
      <div class="footer__inner inner">
        <div class="footer__header">
          <div class="footer__logo">
            <a href="<?php echo home_url(); ?>" class="footer__logolink">
              <img src="<?php echo get_theme_file_uri('/assets/images/common/codeups.svg'); ?>" alt="CodeUps">
            </a>
          </div>
          <div class="footer__sns">
            <a href="#" class="footer__facebooklink">
              <img src="<?php echo get_theme_file_uri('/assets/images/common/facebook.png'); ?>" alt="facebook">
            </a>
            <a href="#" class="footer__instagramlink">
              <img src="<?php echo get_theme_file_uri('/assets/images/common/instagram.png'); ?>" alt="instagram">
            </a>
          </div>
        </div>
        <div class="footer__nav nav">
          <div class="nav__left">
            <div class="nav__block">
              <ul class="nav__items">
                <li class="nav__item"><a href="<?php echo $campaign; ?>">キャンペーン</a></li>
                <li class="nav__item"><a href="<?php echo $campaign; ?>">ライセンス取得</a></li>
                <li class="nav__item"><a href="<?php echo $campaign; ?>">貸切体験ダイビング</a></li>
                <li class="nav__item"><a href="<?php echo $campaign; ?>">ナイトダイビング</a></li>
              </ul>
              <ul class="nav__items">
                <li class="nav__item"><a href="<?php echo $about; ?>">私たちについて</a></li>
              </ul>
            </div>
            <div class="nav__block">
              <ul class="nav__items">
                <li class="nav__item"><a href="<?php echo $information; ?>">ダイビング情報</a></li>
                <li class="nav__item"><a href="<?php echo $information; ?>">ライセンス講習</a></li>
                <li class="nav__item"><a href="<?php echo $information; ?>">体験ダイビング</a></li>
                <li class="nav__item"><a href="<?php echo $information; ?>">ファンダイビング</a></li>
              </ul>
              <ul class="nav__items">
              <li class="sp-nav__item"><a href="<?php echo $blog; ?>">ブログ</a></li>
              </ul>
            </div>
          </div>
          <div class="nav__right">
            <div class="nav__block">
              <ul class="nav__items">
                <li class="nav__item"><a href="<?php echo $voice; ?>">お客様の声</a></li>
              </ul>
              <ul class="nav__items">
                <li class="nav__item"><a href="<?php echo $price; ?>">料金一覧</a></li>
                <li class="nav__item"><a href="<?php echo $price; ?>">ライセンス講習</a></li>
                <li class="nav__item"><a href="<?php echo $price; ?>">体験ダイビング</a></li>
                <li class="nav__item"><a href="<?php echo $price; ?>">ファンダイビング</a></li>
              </ul>
            </div>
            <div class="nav__block">
              <ul class="nav__items">
                <li class="nav__item"><a href="<?php echo $faq; ?>">よくある質問</a></li>
              </ul>
              <ul class="nav__items u-mobile">
                <li class="nav__item nav__item--multiline"><a href="<?php echo $privacy_policy; ?>">プライバシー<br>ポリシー</a></li>
              </ul>
              <ul class="nav__items u-desktop">
                <li class="nav__item"><a href="<?php echo $privacy_policy; ?>">プライバシーポリシー</a></li>
              </ul>
              <ul class="nav__items">
                <li class="nav__item"><a href="<?php echo $terms; ?>">利用規約</a></li>
              </ul>
              <ul class="nav__items">
                <li class="nav__item"><a href="<?php echo $contact; ?>">お問い合わせ</a></li>
              </ul>
            </div>
          </div>
        </div>
        <p class="footer__copyright">
          Copyright &copy; 2021 - 2023 CodeUps LLC. All Rights Reserved.
        </p>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>

