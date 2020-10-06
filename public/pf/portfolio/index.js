var $window = $(window);
var $html = $("html");

function Loader__init() {
  $(".loader >.start>a").click(function () {
    alert("hi");
    $(".loader").fadeOut(5000);
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
  Loader__init();
  ImgSlider__init();
});

var OnePageMenu__data = [];
var OnePageMenu__currentLinkNo = 0;
var OnePageMenu__initialNo = window.location.hash.replace("#page", "") * 1;
if (isNaN(OnePageMenu__initialNo)) {
  OnePageMenu__initialNo = 0;
}
var scrollTop = $(window).scrollTop();
var windowHeight = $(window).height();

function OnePageMenu__changeLinkNo(linkNo) {
  if (OnePageMenu__currentLinkNo !== linkNo) {
    $(
      'a.one-page-link[href="#page' + OnePageMenu__currentLinkNo + '"]'
    ).removeClass("active");
    OnePageMenu__currentLinkNo = linkNo;

    $(
      'a.one-page-link[href="#page' + OnePageMenu__currentLinkNo + '"]'
    ).addClass("active");

    window.location.hash = "page" + OnePageMenu__currentLinkNo;
  }
}

function OnePageMenu__init() {
  $("[data-one-page-link]").addClass("one-page-menu-target");

  $(window).scroll(_.debounce(OnePageMenu__checkAndActive, 50));

  $(window).resize(_.debounce(OnePageMenu__initOffset, 500));
  OnePageMenu__initOffset();

  $("a.one-page-link").click(function () {
    var $el = $(this);

    var href = $el.attr("href");

    var no = href.replace("#page", "");

    var top = $('[data-one-page-link="page' + no + '"]').offset().top;

    $("html,body").stop().animate({
      scrollTop: top
    }, 300);

    return false;
  });

  if (OnePageMenu__initialNo > 0) {
    if (OnePageMenu__initialNo <= OnePageMenu__data.length) {
      $('a.one-page-link[href="#page' + OnePageMenu__initialNo + '"]').click();
    }
  }
}

function OnePageMenu__initOffset() {
  OnePageMenu__data = [];

  $(".one-page-menu-target").each(function (index, node) {
    var $node = $(node);

    var offsetTop = $node.offset().top;
    $node.attr("data-one-page-menu-target-offsetTop", offsetTop);

    if (!$node.attr("data-one-page-menu-target-diff-y")) {
      $node.attr("data-one-page-menu-target-diff-y", "0");
    }

    var diffY = $node.attr("data-one-page-menu-target-diff-y");

    if (diffY.substr(-2, 2) == "vh") {
      diffY = parseInt(diffY);

      diffY = (diffY * $(window).height()) / 100;
    } else if (diffY.substr(-1, 1) == "%") {
      diffY = parseInt(diffY);

      diffY = (diffY * $node.height()) / 100;
    } else {
      diffY = parseInt(diffY);
    }

    $node.data("data-one-page-menu-target-diff-y", diffY);

    var link = $node.attr("data-one-page-link");

    OnePageMenu__data.push({
      link: link,
      offsetTop: offsetTop,
      diffY: diffY,
      linkNo: index + 1
    });
  });

  OnePageMenu__checkAndActive();
}

function OnePageMenu__checkAndActive() {
  scrollTop = $(window).scrollTop();
  windowHeight = $(window).height();

  var linkNo = 0;

  for (var i = OnePageMenu__data.length - 1; i >= 0; i--) {
    var row = OnePageMenu__data[i];

    if (scrollTop + windowHeight + row.diffY > row.offsetTop) {
      linkNo = row.linkNo;

      if (
        i > 0 &&
        scrollTop + OnePageMenu__data[i - 1].diffY <=
        OnePageMenu__data[i - 1].offsetTop
      ) {
        linkNo--;
      }

      break;
    }
  }

  OnePageMenu__changeLinkNo(linkNo);

  $(".one-page-menu-target").each(function (index, node) {
    var $node = $(node);

    var offsetTop = $node.attr("data-one-page-menu-target-offsetTop") * 1;
    var diffY = parseInt($node.data("data-one-page-menu-target-diff-y"));

    var nodeHeight = $node.height();

    if (scrollTop + windowHeight + diffY > offsetTop) {
      if ($node.hasClass("active") == false) {
        $node.addClass("active");
      }
    } else {
      if ($node.hasClass("active")) {
        $node.removeClass("active");
      }
    }
  });
}

$(function () {
  OnePageMenu__init();
});

/* 발견되면 활성화시키는 라이브러리 시작 */
function ActiveOnVisible__init() {
  $(".active-on-visible").each(function (index, node) {
    var $node = $(node);

    var onFuncName = $node.attr("data-active-on-visible-on-func-name");
    var offFuncName = $node.attr("data-active-on-visible-off-func-name");

    $node.data("data-active-on-visible-on-func-name", onFuncName);
    $node.data("data-active-on-visible-off-func-name", offFuncName);
  });

  $(window).resize(_.debounce(ActiveOnVisible__initOffset, 500));
  ActiveOnVisible__initOffset();

  $(window).scroll(_.debounce(ActiveOnVisible__checkAndActive, 50));
  ActiveOnVisible__checkAndActive();
}

function ActiveOnVisible__initOffset() {
  var windowHeight = $(window).height();

  $(".active-on-visible:not(.actived)").each(function (index, node) {
    var $node = $(node);

    var offsetTop = $node.offset().top;

    var matrix = $node
      .css("transform")
      .replace(/[^0-9\-.,]/g, "")
      .split(",");
    var translateX = matrix[12] || matrix[4];
    var translateY = matrix[13] || matrix[5];

    if (translateY) {
      offsetTop -= translateY;
    }

    $node.attr("data-active-on-visible-offsetTop", offsetTop);
    $node.data("data-active-on-visible-offsetTop", offsetTop);

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

      diffY = windowHeight * (diffY / 100);
    } else if (diffY.substr(-1, 1) == "%") {
      diffY = parseInt(diffY);

      diffY = $node.height() * (diffY / 100);
    } else {
      diffY = parseInt(diffY);
    }

    $node.attr("data-active-on-visible-diff-y-real", diffY);
    $node.data("data-active-on-visible-diff-y", diffY);
    $node.data("data-active-on-visible-delay", delay);
  });

  ActiveOnVisible__checkAndActive();
}

function ActiveOnVisible__checkAndActive() {
  $(".active-on-visible:not(.actived)").each(function (index, node) {
    var $node = $(node);

    var offsetTop = $node.data("data-active-on-visible-offsetTop") * 1;
    var diffY = parseInt($node.data("data-active-on-visible-diff-y"));
    var delay = parseInt($node.data("data-active-on-visible-delay"));

    var onFuncName = $node.data("data-active-on-visible-on-func-name");
    var offFuncName = $node.data("data-active-on-visible-off-func-name");

    var scrollTop = $(window).scrollTop();
    var windowHeight = $(window).height();
    var nodeHeight = $node.height();

    if (scrollTop + windowHeight + diffY > offsetTop) {
      setTimeout(function () {
        if ($node.hasClass("active") == false) {
          $node.addClass("active");

          if ($node.hasClass("can-active-once")) {
            $node.addClass("actived");
          }

          if (window[onFuncName]) {
            window[onFuncName]($node);
          }
        }
      }, delay);
    } else {
      if ($node.hasClass("active")) {
        $node.removeClass("active");

        if (window[offFuncName]) {
          window[offFuncName]($node);
        }
      }
    }
  });
}

$(function () {
  ActiveOnVisible__init();
});
/* 발견되면 활성화시키는 라이브러리 끝 */

function middleBarPassed() {
  $("html").addClass("middle-bar-passed");
}

function middleBarNoPassed() {
  $("html").removeClass("middle-bar-passed");
}

function nl2br(str) {
  return str.replace(/\n/g, "<br />");
}

function Email__callback(data) {
  if (data.resultCode.substr(0, 2) == 'S-') {
    document.sendEmailForm.reset();
  }

  alert(data.msg);
}

function sendEmailFormSubmit(form) {
  if (form.receiverName.value.length == 0) {
    alert('폼안에 receiverName 의 value 를 입력해주세요.');
    return false;
  }

  if (form.receiverEmail.value.length == 0) {
    alert('폼안에 receiverEmail 의 value 를 입력해주세요.');
    return false;
  }

  form.senderName.value = form.senderName.value.trim();

  if (form.senderName.value.length == 0) {
    alert('당신의 이름을 입력해주세요.');
    form.senderName.focus();
    return false;
  }

  form.senderEmail.value = form.senderEmail.value.trim();

  if (form.senderEmail.value.length == 0) {
    alert('당신의 이메일을 입력해주세요.');
    form.senderEmail.focus();
    return false;
  }

  form.body.value = form.body.value.trim();

  if (form.body.value.length == 0) {
    alert('내용을 입력해주세요.');
    form.senderEmail.focus();
    return false;
  }

  var senderName = form.senderName.value;
  var senderEmail = form.senderEmail.value;
  var title = '[이력서 보고 연락 드립니다]';
  var body = nl2br(form.body.value);
  var receiverName = form.receiverName.value;
  var receiverEmail = form.receiverEmail.value;

  var url = 'https://email.oa.gg/doSendEmail2.php?senderName=' + senderName + '&senderEmail=' + senderEmail + '&receiverName=' + receiverName + '&receiverEmail=' + receiverEmail + '&title=' + title + '&body=' + body;

  //console.log("URL : " + url);

  var head = document.getElementsByTagName('head')[0];
  var script = document.createElement('script');
  script.type = 'text/javascript';
  script.src = url;
  head.appendChild(script)
}