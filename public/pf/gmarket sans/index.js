function scrollTopBar() {
  $(window).scroll(function () {
    var windowSt = $(window).scrollTop();

    if (windowSt >= 40) {
      $(".top-bar").addClass("active");
    } else {
      $(".top-bar").removeClass("active");
    }
  });
}

function BlueSlider__init() {
  $(".section>.page >.blue-slider .owl-carousel").owlCarousel({
    center: true,
    responsive: {
      0: {
        items: 1
      }
    },
    loop: true,
    dots: true
  });
}

function ImgSlider__init() {
  $(".section>.page-5>.img-slider .owl-carousel").owlCarousel({
    center: true,
    autoWidth: true,
    responsive: {
      0: {
        items: 3
      }
    },
    loop: true,
    dots: true
  });
}

/* 발견되면 활성화시키는 라이브러리 시작 */
function ActiveOnVisible__init() {
  $(window).resize(_.debounce(ActiveOnVisible__initOffset, 500));
  ActiveOnVisible__initOffset();

  $(window).scroll(_.throttle(ActiveOnVisible__checkAndActive, 50));
  ActiveOnVisible__checkAndActive();
}

function ActiveOnVisible__initOffset() {
  $(".active-on-visible:not(.actived)").each(function (index, node) {
    var $node = $(node);

    var offsetTop = $node.offset().top;
    $node.attr("data-active-on-visible-offsetTop", offsetTop);

    if (!$node.attr("data-active-on-visible-diff-y")) {
      $node.attr("data-active-on-visible-diff-y", "0");
    }

    if (!$node.attr("data-active-on-visible-delay")) {
      $node.attr("data-active-on-visible-delay", "0");
    }

    var diffY = $node.attr("data-active-on-visible-diff-y");
    var delay = $node.attr("data-active-on-visible-delay");

    if (diffY.substr(-2, 2) == "vh") {
      diffY = parseInt(diffY);

      diffY = (diffY * $(window).height()) / 100;
    } else if (diffY.substr(-1, 1) == "%") {
      diffY = parseInt(diffY);

      diffY = (diffY * $node.height()) / 100;
    }

    $node.data("data-active-on-visible-diff-y", diffY);
    $node.data("data-active-on-visible-delay", delay);
  });

  ActiveOnVisible__checkAndActive();
}

function ActiveOnVisible__checkAndActive() {
  $(".active-on-visible:not(.actived)").each(function (index, node) {
    var $node = $(node);

    var offsetTop = $node.attr("data-active-on-visible-offsetTop") * 1;
    var diffY = parseInt($node.data("data-active-on-visible-diff-y"));
    var delay = parseInt($node.data("data-active-on-visible-delay"));

    var callbackFuncName = $node.attr(
      "data-active-on-visible-callback-func-name"
    );

    var scrollTop = $(window).scrollTop();
    var windowHeight = $(window).height();
    var nodeHeight = $node.height();

    if (scrollTop + windowHeight + diffY > offsetTop) {
      setTimeout(function () {
        $node.addClass("active");

        if ($node.hasClass("active-only-one")) {
          $node.addClass("actived");
        }

        if (window[callbackFuncName]) {
          window[callbackFuncName]($node);
        }
      }, delay);
    } else {
      $node.removeClass("active");
    }
  });
}

/* 발견되면 활성화시키는 라이브러리 끝 */

function TypeTestBox__init() {
  $(".type-test-box > .typing-area").focus(function () {
    var $el = $(this);

    var text = $(this).text().trim();

    if (text == "지마켓 산스를테스트 해보세요.") {
      $(this).text("");
    }
  });

  $(".type-test-box > .typing-area").blur(function () {
    var $el = $(this);
    var text = $(this).text().trim();

    if (text.length == 0) {
      $(this).html("지마켓 산스를<br>테스트 해보세요.<i></i>");
    }
  });

  $('.test-box input[name="font-name"]').change(function () {
    var $el = $(this);
    var val = $el.val();

    $(".type-test-box > .typing-area").removeClass(
      "font-GmarketSansLight font-GmarketSansMedium font-GmarketSansBold"
    );
    $(".type-test-box > .typing-area").addClass(val);
  });

  $('.test-box input[name="font-name"]').eq(0).click();

  $('.test-box input[type="range"]').change(function () {
    var $el = $(this);
    var val = $el.val();
    $(".type-test-box > .typing-area").css("font-size", val + "px");
  });

  $('.test-box input[type="range"]').change();
}

$(function () {
  scrollTopBar();
  BlueSlider__init();
  ImgSlider__init();
  ActiveOnVisible__init();
  TypeTestBox__init();
});