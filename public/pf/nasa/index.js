// 로딩 페이지 플레이 
function Loading__onVideoCanPlay(src, callback) {
  var video = document.createElement("video");
  video.setAttribute("src", src);
  video.oncanplay = function () {
    callback();
  };
}

function Loading__init(afterLoadingCallback) {
  Loading__onVideoCanPlay("https://her2237.github.io/img1/pf/space/Space%20-%202381.mp4", function () {
    $('.loading-icon').remove();
  });

  Loading__fakeDelay = 3000;

  Loading__onVideoCanPlay("https://her2237.github.io/img1/pf/space/Space%20Ship%20-%203.mp4", function () {
    setTimeout(function () {
      $('.loading').fadeOut();
      afterLoadingCallback();
    }, Loading__fakeDelay);
  });
}

// 전체 슬라이드 페이지
function SliderBox1__init() {
  $('.slider-box-1 > .slick').slick({
    autoplay: true,
    autoplaySpeed: 5000,
    pauseOnHover: false,
    arrows: false
  });

  setTimeout(function () {
    $('.slider-box-1').addClass('animation-on');
  }, 10);

  $('.slider-box-1 video').each(function (i, el) {
    el.play();
  });
}

// 메뉴버튼 클릭시 메뉴 페이지 나오고 사라짐
function MenuPage__init() {
  $('.menu-icon .btn-icon-bar').click(function () {
    var $this = $(this);

    if ($this.hasClass('active')) {
      $this.removeClass('active');
      $('.menu-page').removeClass('active');
    } else {
      $this.addClass('active')
      $('.menu-page').addClass('active');
    }
  });
}

$(function () {
  MenuPage__init();
});


/*
function a() {
  $('div.abc').css('color', 'red');
}

$(function() {
  // 프로그램 시작시에 실행되어야 하는 함수실행 코드 넣기
  a();
});
*/

/*
// 특정 스크롤바 위치로 이동
setTimeout(function() {
  $(window).scrollTop(0);
}, 500);
*/


$(function () {
  Loading__init(function () {
    SliderBox1__init();
  });
});