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
  
  $(function() {
    LangSelect__init();
  });