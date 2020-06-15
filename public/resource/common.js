console.clear();
function MobileSideBar__toggle() {
    var $btn = $(".btn-toggle-mobile-side-bar");
  
    if ($btn.hasClass("active")) {
      $btn.removeClass("active");
      $(".mobile-side-bar").removeClass("active");
    } else {
      $btn.addClass("active");
      $(".mobile-side-bar").addClass("active");
    }
  }
  
  function MobileSideBar__init() {
    $(".btn-toggle-mobile-side-bar").click(MobileSideBar__toggle);
  }
  $(function () {
    MobileSideBar__init();
  });
  