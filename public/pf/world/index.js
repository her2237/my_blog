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


function scrollTopBar(){
    $(window).scroll(function(){
        
        var windowSt = $(window).scrollTop();
        
        if(windowSt >= 40) {
            $('.top-bar').addClass('active');
        }
        else {
            $('.top-bar').removeClass('active');
        }
    })
}

$(function(){
  MainSlider__init();
  scrollTopBar();
});
