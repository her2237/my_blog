console.clear();

function MobileSideBar__toggle() {
  var $btn = $(".btn-toggle-mobile-side-bar");

  if ($btn.hasClass("active")) {
    $btn.removeClass("active");
    $(".mobile-side-bar").removeClass("active");
    $(".mobile-side-bar-bg").removeClass("active");
    $('html').removeClass('mobile-side-bar-actived');
  } else {
    $btn.addClass("active");
    $(".mobile-side-bar").addClass("active");
    $(".mobile-side-bar-bg").addClass("active");
    $('html').addClass('mobile-side-bar-actived');
  }
}

function MobileSideBar__init() {
  $(".btn-toggle-mobile-side-bar, .mobile-side-bar-bg").click(MobileSideBar__toggle);
  $(".mobile-side-bar ul>li").click(function(e) {
    if ( $(this).hasClass('active') ) {
      $(this).removeClass('active');
    }
    else {
      $(this).addClass('active');
    }
    e.stopPropagation();
  });
}
$(function () {
  MobileSideBar__init();
});