//// 共通変数
const body = $(".js-body");
const main = $(".js-main");
let window_height = $(window).height();
let header_height = $(".js-header").innerHeight();
let footer_height = $(".js-footer").innerHeight();
let main_height = window_height - (header_height + footer_height);

//// ローディング
const loading = $(".js-loading");
const loading_after = $(".js-loading-after");
//// レイアウト
$(function () {
  loading.css("height", window_height);
  loading_after.css("height", window_height);
  main.css("height", main_height);
});
//// 挙動
$(window).on("load", function () {
  loading.delay(3000).fadeOut(1000);
  loading_after.delay(4000).fadeIn(1000);
});
//// タイムアウト
$(function () {
  setTimeout(function () {
    loading.fadeOut(1000);
    loading_after.delay(1000).fadeIn(1000);
  }, 8000);
});
//// リサイズ
$(window).on("resize", function () {
  loading_after.css("height", window_height);
  main.css("height", main_height);
});





//// ヘッダー
const header_hamburger_trigger = $(".js-header__hamburger");
const header_navigation = $(".js-header__navigation");
//// レイアウト
$(window).on("load resize", function () {
  if (window.matchMedia("(max-width: 1024px)").matches) {
    header_navigation.css("height", main_height);
    header_navigation.css("margin-top", header_height);
  } else {
    header_navigation.css("height", "auto");
    header_navigation.css("margin-top", "0");
  }
});
//// ハンバーガーイベント
$(function () {
  header_hamburger_trigger.on("click", function () {
    $(this).stop().toggleClass("on");
    header_navigation.stop().toggleClass("on");
    main.stop().toggleClass("hide");
  });
});





//// 共通アイコンのトグル挙動
$(function () {
  const trigger = $(".js-section-box__icon");
  trigger.on("click", function () {
    const target = $(this).parents(".js-section-box__header").next();
    $(this).stop().toggleClass("js-section-box__icon--open");
    target.stop().slideToggle();
  });
});





//// 編集可能なコンテンツの余白制御
$(function () {
  //// トグルがないパーツの関係でjs-prefixなし
  const target = $(".section-box__content :first-child");
  target.css("margin-top", "0");
});
