
function MySlider1__init() {
    $('.my-slider-1 > .owl-carousel').owlCarousel({
      responsive:{
        0:{
          items:3
        }
      },
      loop:true,
      dots:true,
    });
}

$(function(){
    MySlider1__init();
});