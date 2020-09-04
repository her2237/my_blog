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