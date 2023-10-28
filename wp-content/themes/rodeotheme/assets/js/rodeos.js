var RODEOS = {
  inits: function(){
    window.onscroll = function (e) {
      if(window.screen.width <= 768 && window.scrollY >= 360){
        $('#header-bot').hide();
      }else{
        $('#header-bot').show();
      }
    }
  },
  home: function(){
    //Tabs
    $( "#tabs" ).tabs({
      active: 0,
      show: { effect: "blind", duration: 800 }
    });
    //End tab
    //owl-carousel
    var owl = $('.owl-carousel');
    owl.owlCarousel({
      margin: 25,
      loop: true,
      responsive: {
        0: {
          items: 1.2
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    });
    //end owl-carousel
    //JSSOR SLIDE
    var options = { $AutoPlay: 1 };
    var jssor_1_slider = new $JssorSlider$("jssor_1", options);
    var MAX_WIDTH = 1920;
    function ScaleSlider() {
      var containerElement = jssor_1_slider.$Elmt.parentNode;
      var containerWidth = containerElement.clientWidth;

      if (containerWidth) {

        var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

        jssor_1_slider.$ScaleWidth(expectedWidth);
      }
      else {
        window.setTimeout(ScaleSlider, 30);
      }
    }
    ScaleSlider();
    $Jssor$.$AddEvent(window, "load", ScaleSlider);
    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
    var jssor_2_slider = new $JssorSlider$("jssor_2", options);
    //End JSSOR SLIDE
  }
}
$(document).ready(function(){
  RODEOS.inits();
})