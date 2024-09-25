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

  // お知らせ詳細ページの目次生成
  $(document).ready(function () {
    function generateToc() {
      var $tocInner = $(".toc__inner");
      $("article h2, article h3").each(function (index) {
        var $this = $(this);
        var tag = $this.prop("tagName").toLowerCase();
        var id = "h" + tag.charAt(1) + "-" + (index + 1);
        $this.attr("id", id);

        if (tag === "h2") {
          $tocInner.append(
            '<li><a href="#' +
              id +
              '" class="toc__h2">' +
              $this.text() +
              "</a><ul></ul></li>"
          );
        } else if (tag === "h3") {
          $tocInner
            .find("li:last ul")
            .append(
              '<li><a href="#' +
                id +
                '" class="toc__h3">' +
                $this.text() +
                "</a></li>"
            );
        }
      });
    }
    generateToc();

    $(".toc a").on("click", function (event) {
      event.preventDefault(); // デフォルトのリンク動作を無効化

      var target = $(this.getAttribute("href")); // クリックされたリンクのターゲット取得
      if (target.length) {
        var headerHeight = $(".header").outerHeight();
        var position = target.offset().top - headerHeight - 40;
        $("html, body").animate({ scrollTop: position }, 500, "swing");
        if (!target.is("html")) {
          // URLにハッシュを含める
          history.pushState(null, "", this.hash);
        }
      }
    });
  });

  // ページが読み込まれたときに選択肢をリセット（CSSや内部状態の初期化）
  $(".custom-select-trigger").text("選択してください"); // 初期表示を設定
  $("select").val("default");
  $(".custom-options .custom-option").removeClass("selection");
  $(".custom-select-trigger").css("color", "#CBCBCB");

  // ドロップダウンメニューの生成
  $(".contact-select").each(function () {
    var $this = $(this);
    var template = '<div class="custom-select">';
    template += '<span class="custom-select-trigger">選択してください</span>';
    template += '<div class="custom-options">';
    $this.find("span").each(function () {
      var value = $(this).text();
      template +=
        '<span class="custom-option" data-value="' +
        value +
        '">' +
        value +
        "</span>";
    });
    template += "</div></div>";

    $this.wrap('<div class="custom-select-wrapper"></div>');
    $this.hide();
    $this.after(template);
  });

  // ドロップダウンを開閉する処理
  $(document).on("click", ".custom-select-trigger", function () {
    $(this).parents(".custom-select").toggleClass("opened");
  });

  // オプションがクリックされた時の処理
  $(document).on("click", ".custom-option", function () {
    var selectedValue = $(this).data("value");

    // 「選択してください」は一度選択された後に選べないようにする
    if ($(this).hasClass("disabled") || selectedValue === "default") {
      return;
    }

    var triggerText = $(this).text();
    $(this).parents(".custom-select-wrapper").find("select").val(selectedValue);
    $(this)
      .parents(".custom-options")
      .find(".custom-option")
      .removeClass("selection");
    $(this).addClass("selection");
    $(this).parents(".custom-select").removeClass("opened");
    $(this)
      .parents(".custom-select")
      .find(".custom-select-trigger")
      .text(triggerText);

    // テキスト色を変更
    $(".custom-select-trigger").css("color", "#000");

    // 「選択してください」を無効化する
    $(".custom-options .custom-option[data-value='default']").addClass(
      "disabled"
    );
  });

  // ページ外クリック時にドロップダウンを閉じる
  $(document).on("click", function (e) {
    if (!$(e.target).closest(".custom-select").length) {
      $(".custom-select").removeClass("opened");
    }
  });

  // Contact Form 7で「選択してください」が選ばれている場合にエラーを表示
  $("form").on("submit", function (e) {
    var selectedValue = $("select").val();
    if (selectedValue === "default") {
      e.preventDefault(); // フォームの送信をキャンセル
      alert("「選択してください」以外の項目を選んでください。");
    }
  });

  // ページリロード時の処理（リセット）
  window.onpageshow = function (event) {
    if (event.persisted || event.type === "pageshow") {
      $("select").val("default"); // 初期値に戻す
      $(".custom-select-trigger").text("選択してください"); // 初期テキストに戻す
      $(".custom-options .custom-option").removeClass("selection disabled"); // 選択解除と「選択してください」の有効化
      $(".custom-select-trigger").css("color", "#CBCBCB"); // 初期テキスト色に戻す
    }
  };
});

// スムーズスクロールの処理
$('a[href*="#"]').click(function (e) {
  if ($(this).hasClass("introduction__tab")) {
    return;
  }
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
