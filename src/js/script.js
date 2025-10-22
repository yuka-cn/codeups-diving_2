jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

// メインビューのスライダー
  function mvSwiper() {
    new Swiper(".js-mvSwiper", {
      effect: "fade",
      fadeEffect: { crossFade: true },
      speed: 3000,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      loop: true,
    });
  }

// pcの初回表示のみローディングアニメーション
  if (window.matchMedia("(max-width: 767px)").matches) {
    mvSwiper();
  } else {
    const loadingEl = document.querySelector(".loading");
    const header = document.querySelector(".header");
    const mvHeader = document.querySelector(".mv__header");
    const isFirstVisit = !sessionStorage.getItem("firstVisit");

    if (loadingEl && isFirstVisit) {
      sessionStorage.setItem("firstVisit", "done");

      loadingEl.style.display = "block";
      document.body.style.overflow = "hidden";
      loadingEl.addEventListener("animationend", function () {
        if(mvHeader){
          mvHeader.style.opacity = "1";
        }
        setTimeout(mvSwiper, 1000);
        setTimeout(function () {
          loadingEl.style.opacity = "0";
        }, 1000);
        setTimeout(function () {
          loadingEl.style.display = "none";
          document.body.style.overflow = "";
        }, 2000);
      });
    } else {
      if(mvHeader){
        mvHeader.style.opacity = "1";
      }
      if (header) {
        header.classList.remove("header--top");
      }
      mvSwiper();
    }
  }

// MVとヘッダーの下ラインが重なった時に、ヘッダーに背景色をつける
  let header = $(".header");
  let headerHeight = $(".header").height();
  let height = $(".mv").height();

  $(window).scroll(function () {
    if ($(this).scrollTop() > height - headerHeight) {
      header.addClass("is-color");
    } else {
      header.removeClass("is-color");
    }
  });

//ドロワーメニュー
  $(function () {
    $(".js-hamburger").click(function () {
      $(".js-hamburger, .header, .js-sp-nav").toggleClass("is-active");
      if ($(".js-hamburger").hasClass("is-active")) {
        $("body").css("overflow", "hidden"); //背景がスクロールされないようにする
      } else {
        $("body").css("overflow", "auto");
      }
    });
  });

  //pc画面幅ではドロワーメニューを非表示にする
  $(window).resize(function () {
    if ($(window).width() >= 768) {
      $(".js-sp-nav").removeClass("is-active").css("display", ""); // is-active を削除
      $(".header").removeClass("is-active").css("display", ""); // is-active を削除
    }
  });

// キャンペーンカードのスライダー
  // inner幅の基準値を設定
  const INNER_WIDTH = 1080;

  // SwiperのspaceBetweenを計算
  function getSpaceBetween() {
    let windowWidth = window.innerWidth;

    if (windowWidth <= 375) {
      return windowWidth * (6.4 / 100); // 375px以下は 6.4vw ←(24px/375px)×100
    } else if (windowWidth > 375 && windowWidth < 768) {
      return 24; // 376px〜767px は固定 24px
    } else if (windowWidth >= 768 && windowWidth < INNER_WIDTH) {
      return windowWidth * (3.7 / 100); // 768px〜inner幅未満は 3.7vw ←(40px/1080px)×100
    } else {
      return 40; // inner幅以上は固定 40px
    }
  }
  
  // Swiperインスタンスを管理する変数
  let campaignSwiper;

  function initSwiper() {
    // 既存のSwiperを削除
    if (campaignSwiper) {
      campaignSwiper.destroy(true, true);
    }

    // 計算した spaceBetween を適用
    let spaceBetweenValue = getSpaceBetween();

    // Swiperを再初期化
    campaignSwiper = new Swiper(".js-campaignSwiper", {

      spaceBetween: spaceBetweenValue,
      slidesPerView: "auto",
      loop: true,
      loopedSlides: 4,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

  }

  // 初回実行
  initSwiper();

  // リサイズ時にSwiperを再初期化
  window.addEventListener("resize", initSwiper);

// 画像アニメーション
  // 要素の取得とスピードの設定
  let imageAnimation = $(".information__image, .voice-card__image, .price__image"),
    speed = 700;

  // ..information__image, .voice-card__image, .price__image の付いた全ての要素に対して処理を行う
  imageAnimation.each(function () {
    let $this = $(this);

    // <div class="color"></div> を追加
    $this.append('<div class="color"></div>');

    let color = $this.find(".color"),
      image = $this.find("img"),
      counter = 0;

    // 初期スタイル設定
    image.css("opacity", "0");
    color.css("width", "0%");

    // inviewイベントを適用（背景色が画面に現れたら処理をする）
    $this.on("inview", function (event, isInView) {
      if (isInView && counter === 0) {
        color.delay(200).animate({ width: "100%" }, speed, function () {
          image.css("opacity", "1");
          $(this).css({ left: "0", right: "auto" });
          $(this).animate({ width: "0%" }, speed);
        });
        counter = 1; // 2回目の起動を制御
      }
    });
  });

// topへ戻るボタン
  let topBtn = $(".c-to-top");
  topBtn.hide();

  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 90) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });

  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $("body,html").animate(
      {
        scrollTop: 0,
      },
      300,
      "swing"
    );
    return false;
  });



// aboutページのモーダル
  const modal = document.getElementById('modal');
  if (modal) {
    const overlay = modal.querySelector('.modal__overlay');
    const backgroundInner = modal.querySelector('.modal__background .inner');
    const content = modal.querySelector('.modal__content');

  // クリック時の処理
    if (window.innerWidth >= 768) {
    document.querySelectorAll('.gallery__item img').forEach(img => {
      img.addEventListener('click', () => {
        const column = img.closest('.gallery__column');
        if (!column) return;
        // モーダル内に画像を複製
        const clickedImg = img.cloneNode(true);
        content.innerHTML = '';
        content.appendChild(clickedImg);
        // 背景として.gallery__columnを複製
        backgroundInner.innerHTML = '';
        backgroundInner.appendChild(column.cloneNode(true));
        // モーダル表示 + スクロール禁止
        document.body.style.overflow = 'hidden';
        modal.setAttribute('aria-hidden', 'false');
      });
    });

  // 閉じる処理
    function closeModal() {
      modal.setAttribute('aria-hidden', 'true');
      content.innerHTML = '';
      backgroundInner.innerHTML = '';
      document.body.style.overflow = '';
    }
    overlay.addEventListener('click', closeModal);
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && modal.getAttribute('aria-hidden') === 'false') {
        closeModal();
        }
      });
    }
  }


// informationのタブ
  const tabButtons = document.querySelectorAll(".tab-button");
  const tabPanels = document.querySelectorAll(".tab-panel");
  
  tabButtons.forEach(button => {
    button.addEventListener("click", function () {
      const targetId = this.getAttribute("data-target");
      const targetPanel = document.querySelector(targetId);

      // ボタンのactive切り替え
      tabButtons.forEach(btn => btn.classList.remove("is-active"));
      this.classList.add("is-active");

      // パネルの表示切り替え
      tabPanels.forEach(panel => panel.classList.remove("is-active"));
      if (targetPanel) {
        targetPanel.classList.add("is-active");
      }
    });
  });

// サイトマップからアクセス時のハッシュスクロール
  window.addEventListener('load', function() {
    const hash = window.location.hash;
    if (!hash) return;


      const headerOffset = document.querySelector('header').offsetHeight;

      //informationページ
      const targetTabButton = document.querySelector(`[data-target="${hash}"]`);
      const targetPanel = document.querySelector(hash);
  
      if (targetTabButton && targetPanel) {
        document.querySelectorAll('.tab-button.is-active, .tab-panel.is-active').forEach(el => {
          el.classList.remove('is-active');
        });
        targetTabButton.classList.add('is-active');
        targetPanel.classList.add('is-active');

        const buttonTop = targetTabButton.getBoundingClientRect().top + window.scrollY;
        window.scrollTo({ top: buttonTop - headerOffset, behavior: 'smooth' });

        return; 
      }

      //priceページ
      const targetSection = document.querySelector(hash);

      if (targetSection) {
        const sectionTop = targetSection.getBoundingClientRect().top + window.scrollY;
        window.scrollTo({ top: sectionTop - headerOffset, behavior: 'smooth' });
      }

  });


// サイドバーのアーカイブ開閉
document.addEventListener('DOMContentLoaded', function () {
  const archiveYears = document.querySelectorAll('.archive-list__year');
  archiveYears.forEach(year => {
    const button = year.querySelector('.archive-list__year-button');
    const months = year.querySelector('.archive-list__months');
    if (!button || !months) return;

    // 初期ARIAセット
    const isOpen = year.classList.contains('is-open');
    const monthsId = months.id || `archive-months-${Math.random().toString(36).slice(2, 9)}`;
    months.id = monthsId;
    button.setAttribute('aria-controls', monthsId);
    button.setAttribute('aria-expanded', String(isOpen));
    months.hidden = !isOpen;

    // クリックでトグル
    button.addEventListener('click', () => {
      const expanded = button.getAttribute('aria-expanded') === 'true';
      button.setAttribute('aria-expanded', String(!expanded));
      year.classList.toggle('is-open');
      months.hidden = expanded;
    });
  });
});

//contact
  //独自送信ボタン
  document.getElementById('submit').addEventListener('click', function() {
    const form = document.getElementById('my-cf7-form');
    const submitEvent = new Event('submit', { bubbles: true, cancelable: true });
    form.dispatchEvent(submitEvent);
  });

  //エラーメッセージ
  document.addEventListener('wpcf7invalid', function(event) {
    const errorContainer = document.getElementById('contact-error');
    errorContainer.innerHTML = '※必須項目が入力されていません。<br>入力してください。';
    errorContainer.style.display = 'block';
  });

});