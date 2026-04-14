$(document).ready(function () {
  $("#nav-button").on("click", function () {
    $(".sp-nav").slideToggle(); // メニューの開閉
    if ($("#menu-icon").hasClass("fa-bars")) {
      $("#menu-icon").removeClass("fa-bars").addClass("fa-times");
    } else if ($("#menu-icon").hasClass("fa-times")) {
      $("#menu-icon").removeClass("fa-times").addClass("fa-bars");
    }
  });
});
