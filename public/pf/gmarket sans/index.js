function BlueSlider__init() {
    $('.page-box >.section>.page >.blue-slider .owl-carousel').owlCarousel({
      center:true,
      responsive:{
        0:{
          items:1
        }
      },
      loop:true,
      dots:true
    });
  }
  
  
  function ImgSlider__init() {
    $('.page-box >.section>.page-5>.img-slider .owl-carousel').owlCarousel({
      center:true,
      autoWidth:true,
      responsive:{
        0:{
          items:3
        }
      },
      loop:true,
      dots:true
     
    });
  }
  
  $(function(){
    BlueSlider__init();
    ImgSlider__init();
  });
  
  
  
  
  
  