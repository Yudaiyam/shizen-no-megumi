// 360px以下のレイアウト崩れ対策
// 参考記事：https://zenn.dev/tak_dcxi/articles/690caf6e9c4e26
!(function () {
  const viewport = document.querySelector('meta[name="viewport"]');
  function switchViewport() {
    const value =
      window.outerWidth > 360
        ? "width=device-width,initial-scale=1"
        : "width=360";
    if (viewport.getAttribute("content") !== value) {
      viewport.setAttribute("content", value);
    }
  }
  addEventListener("resize", switchViewport, false);
  switchViewport();
})();

$(document).ready(function () {
  //aタグの遷移ずれ
  //*cssのscroll-behavior: smooth; との併用は不可→scroll-behavior: smooth;を削除
  $(function () {
    // スムーズスクロールの処理
    $('a[href*="#"]').click(function (e) {
      var target = $(this.hash === "" ? "html" : this.hash);
      if (target.length) {
        e.preventDefault();
        var headerHeight = $(".header").outerHeight();
        var position = target.offset().top - headerHeight - 40;
        $("html, body").animate({ scrollTop: position }, 500, "swing");
        if (!target.is("html")) {
          // URLにハッシュを含める
          history.pushState(null, "", this.hash);
        }
      }
    });

    // ページ読み込み時にハッシュがある場合の処理
    if (window.location.hash) {
      var target = $(window.location.hash);
      if (target.length) {
        var headerHeight = $(".header").outerHeight();
        var position = target.offset().top - headerHeight - 40;
        // スクロール
        $("html, body").animate({ scrollTop: position }, 0); // 初回は即時スクロール
      }
    }
  });

  // SPメニューのjs
  $(".header__btn").on("click", function () {
    $(this).toggleClass("opened");
    $(".header__menu").toggleClass("opened");
    // SPメニュー展開時の背景固定
    if ($(".header__menu").hasClass("opened")) {
      $("body").css({ height: "100%", overflow: "hidden" });
    } else {
      $("body").css({ height: "", overflow: "" });
    }
  });

  // SPメニュー内のリンククリック後にメニューが閉じる設定
  $(".header__menu a").on("click", function () {
    $(".header__btn").removeClass("opened");
    $(".header__menu").removeClass("opened");
    $("body").css({ height: "", overflow: "" });
  });
  // FVのオレンジの四角
  $(function () {
    $(window).on("scroll", function () {
      const sliderHeight = $(".fv__news").height();
      if (sliderHeight - 30 < $(this).scrollTop()) {
        $(".fv__news").addClass("hidden");
      } else {
        $(".fv__news").removeClass("hidden");
      }
    });
  });

  //紹介文の画像一つずつフェードイン
  $(function () {
    $(".fade-up").on("inview", function (event, isInView) {
      if (isInView) {
        $(this).stop().addClass("is-show");
      }
    });
  });

  //活動紹介のタブ
  $(function () {
    let tabs = $(".introduction__tab");
    $(".introduction__tab").on("click", function (e) {
      e.preventDefault();
      $(".introduction__tab").removeClass("selected");
      $(this).addClass("selected");
      const index = tabs.index(this);
      $(".introduction__area").removeClass("show").eq(index).addClass("show");
      $(".introduction__slider").slick("setPosition");
    });
  });

  //活動紹介のスライダー
  $(".introduction__slider").slick({
    autoplay: true,
    autoplaySpeed: 0,
    speed: 2000,
    infinite: true,
    cssEase: "linear",
    swipe: false,
    pauseOnHover: false,
    pauseOnFocus: false,
    arrows: false,
    dots: false,
    variableWidth: true,
  });

  //よくあるご質問のアコーディオン
  $(function () {
    $(".faq__item:first .faq__answer").css("display", "flex").slideDown();
    $(".faq__item:first").addClass("opened");

    $(".faq__question").on("click", function () {
      const currentItem = $(this).parent(".faq__item");

      $(".faq__item")
        .not(currentItem)
        .removeClass("opened")
        .find(".faq__answer")
        .slideUp();

      currentItem.toggleClass("opened");

      if (currentItem.hasClass("opened")) {
        currentItem.find(".faq__answer").slideDown().css("display", "flex");
      } else {
        currentItem.find(".faq__answer").slideUp();
      }
    });
  });

  //お問い合わせフォームのドロップダウンメニュー
  $(function () {
    $(".contact-option").on("click", function () {
      $(this).toggleClass("clicked");
      $(this).next(".contact-select").slideToggle();
    });
    $(".contact-select").on("click", function () {
      $(this).slideUp();
      $(this).prev(".contact-option").removeClass("clicked");
    });
  });
});
