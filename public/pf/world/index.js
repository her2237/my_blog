function MainSlider__init() {
    $('.main-slider > .owl-carousel').owlCarousel({
      responsive:{
        0:{
          items:1
        }
      },
      loop:true,
      dots:true,
    
    });
  }
  $(function(){
    MainSlider__init();
  });
  