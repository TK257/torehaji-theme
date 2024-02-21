$(window).on("load", function() {
  $("#thumbnail img").on("click", function() {
    let img_src = $(this).attr("src");
    $("#slideshow-image img").attr("src", img_src);
  });
});
$(function() {
  $(".js-accordion-title").on("click", function() {
    $(this)
      .next()
      .slideToggle(300);
    $(this).toggleClass("open", 300);
  });
  //ナビボタン
  $("#nav-button").on("click", function() {
    $(".sp-nav").slideToggle();
  });
  //トップ戻るボタン
  $("#top-button").on("click", function() {
    window.scrollTo({
      top: 0,
      left: 0,
      behavior: "smooth",
    });
  });
  //トップ戻るボタンを表示する
  $(window).on("scroll", function() {
    console.log(window.scrollY);
    if (300 < window.scrollY) {
      $("#top-button").fadeIn();
    } else {
      $("#top-button").fadeOut();
    }
  });
});
