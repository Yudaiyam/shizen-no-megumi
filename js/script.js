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

// SPメニューのjs
$(document).ready(function () {
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
