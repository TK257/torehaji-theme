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
});
$(document).ready(function() {
  $("#nav-button").on("click", function() {
    $(".sp-nav").slideToggle();
  });
});
