var $window = $(window);
var $html = $("html");

var PageLayout__ani1Delay = 1000;

function PageLayout__init() {
  $(".section-wrap").imagesLoaded(function () {
    setTimeout(function () {
      $(".loading").remove();
    }, PageLayout__ani1Delay + 300);

    $window.resize(
      _.debounce(function () {
        $(".masonry-grid").masonry("layout");
      }, PageLayout__ani1Delay + 200)
    );
  });
}

function ImgSlider__init() {
  $(".page-box >.section>.page>.img-slider .owl-carousel").owlCarousel({
    center: true,
    autoWidth: true,
    responsive: {
      0: {
        items: 2
      }
    },
    loop: true,
    dots: true
  });
}

$(function () {
  PageLayout__init();
  ImgSlider__init();
});

/* 발견되면 활성화시키는 라이브러리 시작 */
function ActiveOnVisible__init() {
  $(window).resize(ActiveOnVisible__initOffset);
  ActiveOnVisible__initOffset();

  $(window).scroll(ActiveOnVisible__checkAndActive);
  ActiveOnVisible__checkAndActive();
}

function ActiveOnVisible__initOffset() {
  $(".active-on-visible").each(function (index, node) {
    var $node = $(node);

    var offsetTop = $node.offset().top;
    $node.attr("data-active-on-visible-offsetTop", offsetTop);

    if (!$node.attr("data-active-on-visible-diff-y")) {
      $node.attr("data-active-on-visible-diff-y", "0");
    }

    if (!$node.attr("data-active-on-visible-delay")) {
      $node.attr("data-active-on-visible-delay", "0");
    }
  });

  ActiveOnVisible__checkAndActive();
}

function ActiveOnVisible__checkAndActive() {
  $(".active-on-visible:not(.actived)").each(function (index, node) {
    var $node = $(node);

    var offsetTop = $node.attr("data-active-on-visible-offsetTop") * 1;
    var diffY = parseInt($node.attr("data-active-on-visible-diff-y"));
    var delay = parseInt($node.attr("data-active-on-visible-delay"));

    var callbackFuncName = $node.attr(
      "data-active-on-visible-callback-func-name"
    );

    if ($(window).scrollTop() + $(window).height() + diffY > offsetTop) {
      $node.addClass("actived");

      setTimeout(function () {
        $node.addClass("active");
        if (window[callbackFuncName]) {
          window[callbackFuncName]($node);
        }
      }, delay);
    }
  });
}

$(function () {
  ActiveOnVisible__init();
});
/* 발견되면 활성화시키는 라이브러리 끝 */