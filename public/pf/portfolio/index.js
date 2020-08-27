
var $window = $(window);
var $html = $('html');

var PageLayout__ani1Delay = 1000;

function PageLayout__init() {
  
  $('.section-wrap').imagesLoaded(function() {
    setTimeout(function() {
      $('.loading').remove();
    }, PageLayout__ani1Delay + 300);
    
    $('.section-wrap > .con > .section').mouseenter(function() {
      var $el = $(this);

      var sectionName = $el.attr('data-section-name');
      PageLayout__changeSectionMode(sectionName);
    });
    
    $('.section-wrap .btn-to-chagne-section').click(function() {
      var $el = $(this);

      var sectionName = $el.attr('data-section-name');
      PageLayout__changeSectionMode(sectionName);
    });

    PageLayout__changeSectionMode('studio');

    $('.masonry-grid').masonry({
      itemSelector: '.grid-item'
    });

    $window.resize(_.debounce(function() {
      $('.masonry-grid').masonry('layout');
    }, PageLayout__ani1Delay + 200));
  });
}

function PageLayout__changeSectionMode(modeName) {
  $html.attr('data-section-mode', modeName);

  $('.section-wrap > .con > .section.active').removeClass('active');
  $('.section-wrap > .con > .section[data-section-name="' + modeName + '"]').addClass('active');

  setTimeout(function() {
    $('.masonry-grid').masonry('layout');
  }, PageLayout__ani1Delay + 200);
}

$(function() {  
  PageLayout__init();
});