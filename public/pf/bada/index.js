/*클릭하면 언어바 변경*/
function LangSelect__init() {
  $('.lang-select').click(function() {
    $(this).toggleClass('active');
  });
  
  $('.lang-select > ul > li').click(function() {
    $(this).addClass('flex-order-m1');
    $(this).siblings('.flex-order-m1').removeClass('flex-order-m1');
  });
  
}



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


   
/* 발견되면 활성화시키는 라이브러리 끝 */

function ShipAniBox__init() {
  var path = anime.path('.ship-ani-box path');

  var motionPath = anime({
    targets: '.ship-ani-box .follow-path',
    translateX: path('x'),
    translateY: path('y'),
    rotate: path('angle'),
    easing: 'easeInOutQuad',
    duration: 3000,
    loop: false 
  });
}

$(function() {
  LangSelect__init();
  ActiveOnVisible__init();
  ShipAniBox__init();
});

