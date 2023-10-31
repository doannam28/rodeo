var RODEOS = {
  inits: function(){
    window.onscroll = function (e) {
      if ((window.innerHeight + Math.round(window.scrollY)) >= (document.body.offsetHeight - $('#footer').height())) {
        $('#header-bot').hide();
      }else{
        $('#header-bot').show();
      }
    };
    //Active menu
    $("#navbarSupportedContent .nav-link").on("click", function(){
      $("#navbarSupportedContent").find(".active").removeClass("active");
      $(this).addClass("active");
    });
    if(window.location.pathname!='/'){
      $("#navbarSupportedContent .nav-link").removeClass("active");
      $('a[href$="' + window.location.pathname + '"]').addClass('active');
    }
   /* if(window.location.pathname!='/en/'){
      $(".a-ja").removeClass("active");
      $('.a-en').addClass('active');
    }else{
      $(".a-en").removeClass("active");
      $('.a-ja').addClass('active');
    }*/
    //End active menu
    //Tab
    $('#tabs ul li').click(function(){
      $("#tabs ul").find(".li-active").removeClass("li-active");
      $(this).addClass("li-active");
    })
  },
  home: function(){
    //Tabs
   /* $( "#tabs" ).tabs({
      active: 0,
      show: { effect: "blind", duration: 800 }
    });*/
    //End tab
    //owl-carousel
    var owl = $('#owl-carousel');
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
    var owl2 = $('#owl-carousel2');
    owl2.owlCarousel({
      loop: false,
      mouseDrag: false,
      center: true,
      responsive: {
        0: {
          items: 1
        },
        1000: {
          items: 1.5
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
  RODEOS.home();
})