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

$ (function () {
  $('.sbs-slider > .side-bars > div').click(function() {
    // this 클릭 당사자
    var $clickedBtn = $(this);
    // closest => 조상중에서 가장 가까운 엘리먼트 하나 찾아주세요.
    var $slider = $clickedBtn.closest('.sbs-slider');
    
    //.index() => 형제번호
    var isLeft = $clickedBtn.index() == 0;
    
    // find => 지역탐색
    // $currnet => 현재 active 된 녀석
    var $currnet = $slider.find('.slides > .active');
    // next => 다음 형제 가져와
    var $post = null;
    
    if ( isLeft ) {
        $post = $currnet.prev();
    }
    else {
        $post = $currnet.next();
    }
    
    if ( $post.length == 0 ) {
        if ( isLeft ) {
            $post = $slider.find('.slides > div:last-child');
        }
        else {
            $post = $slider.find('.slides > div:first-child');
        }
    }
    
    $currnet.removeClass('active');
    $post.addClass('active');
  });
});

function a() {
  $('.sbs-slider > .side-bars >div:last-child').click();
}

setInterval(a, 5000);

$(function(){
function MySlider1__init() {
  $('.my-slider-1 > .owl-carousel').owlCarousel({
    responsive:{
      0:{
        items:3
      }
    },
    loop:true,
    dots:false,
    nav:true,
  });
}
MySlider1__init();
})



/* 숫자 카운트 라이브러리 시작 */
function NumAni__start(selector) {
  $(selector).each(function(index, node) {
      var $el = $(node);
      
      var start = parseInt($el.attr('data-num-ani-start'));
      var interval = parseInt($el.attr('data-num-ani-interval'));

      $el.attr('data-num-ani-interval-current', interval);

      $el.text(start);

      NumAni__increaseNum($el);
  });
}

function NumAni__increaseNum($el) {
  var current = parseInt($el.text());
  var end = parseInt($el.attr('data-num-ani-end'));
  var stride = parseInt($el.attr('data-num-ani-stride'));
  var interval = parseInt($el.attr('data-num-ani-interval-current'));
  var slowPoint = parseFloat($el.attr('data-num-ani-slow-point'))

  if (current < end) {
      if ( current > end * slowPoint ) {
          interval += parseInt($el.attr('data-num-ani-slow-add-interval'));
          if ( interval > 100 ) {
              interval = 100;
          }
          $el.attr('data-num-ani-interval-current', interval);
      }

      if ( current + stride > end ) {
          $el.text(end);
      }
      else {
          $el.text(current + stride);
      }

      setTimeout(function () {
          NumAni__increaseNum($el);
      }, interval);
  }
  else {
      $el.addClass('num-action-done');
  }
}
/* 숫자 카운트 라이브러리 끝 */

/* 발견되면 활성화시키는 라이브러리 시작 */
function ActiveOnVisible__init() {
  $(window).resize(ActiveOnVisible__initOffset);
  ActiveOnVisible__initOffset();

  $(window).scroll(ActiveOnVisible__checkAndActive);
  ActiveOnVisible__checkAndActive();
}

function ActiveOnVisible__initOffset() {
  $('.active-on-visible').each(function(index, node) {
      var $node = $(node);

      var offsetTop = $node.offset().top;
      $node.attr('data-active-on-visible-offsetTop', offsetTop);

      if ( !$node.attr('data-active-on-visible-diff-y') ) {
          $node.attr('data-active-on-visible-diff-y', '0');
      }

      if ( !$node.attr('data-active-on-visible-delay') ) {
          $node.attr('data-active-on-visible-delay', '0');
      }
  });

  ActiveOnVisible__checkAndActive();
}

function ActiveOnVisible__checkAndActive() { 
  $('.active-on-visible:not(.actived)').each(function(index, node) {
      var $node = $(node);

      var offsetTop = $node.attr('data-active-on-visible-offsetTop') * 1;
      var diffY = parseInt($node.attr('data-active-on-visible-diff-y'));
      var delay = parseInt($node.attr('data-active-on-visible-delay'));

      var callbackFuncName = $node.attr('data-active-on-visible-callback-func-name');

      if ( $(window).scrollTop() + $(window).height() + diffY > offsetTop ) {
          $node.addClass('actived');

          setTimeout(function() {
              $node.addClass('active');
              if ( window[callbackFuncName] ) {
                  window[callbackFuncName]($node);
              }
          }, delay);
      }
  });
}

$(function() {
  ActiveOnVisible__init();
})
/* 발견되면 활성화시키는 라이브러리 끝 */

// 커스텀 시작
function count($node) {
  NumAni__start('.num');
}
// 커스텀 끝