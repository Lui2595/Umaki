$(document).ready(function() {
  $("#myCarousel").on("slide.bs.carousel", function(e) {
    var car="#myCarousel";
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 3;
    var totalItems = $(car+" .carousel-item").length;
    //alert(idx +" >= "+ totalItems +"- ("+itemsPerSlide+"-1");
    if (idx >= totalItems - (itemsPerSlide - 1)) {
      var it = itemsPerSlide - (totalItems - idx);
      for (var i = 0; i < it; i++) {
        // append slides to end
        if (e.direction == "left") {
          $(car+" .carousel-item")
            .eq(i)
            .appendTo(car+" .carousel-inner");
        } else {
          //alert( $(car+".carousel-item").eq(i).nodeName);
          $(car+" .carousel-item")
            .eq((totalItems-1))
            .prependTo(car+" .carousel-inner");
        }
      }
    }
  });
  $("#myCarousel1").on("slide.bs.carousel", function(e) {
    var car="#myCarousel1";
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 3;
    var totalItems = $(car+" .carousel-item").length;
    //alert(idx +" >= "+ totalItems +"- ("+itemsPerSlide+"-1");
    if (idx >= totalItems - (itemsPerSlide - 1)) {
      var it = itemsPerSlide - (totalItems - idx);
      for (var i = 0; i < it; i++) {
        // append slides to end
        if (e.direction == "left") {
          $(car+" .carousel-item")
            .eq(i)
            .appendTo(car+" .carousel-inner");
        } else {
          //alert( $(car+".carousel-item").eq(i).nodeName);
          $(car+" .carousel-item")
            .eq((totalItems-1))
            .prependTo(car+" .carousel-inner");
        }
      }
    }
  });
  $("#myCarousel2").on("slide.bs.carousel", function(e) {
    var car="#myCarousel2";
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 3;
    var totalItems = $(car+" .carousel-item").length;
    //alert(idx +" >= "+ totalItems +"- ("+itemsPerSlide+"-1");
    if (idx >= totalItems - (itemsPerSlide - 1)) {
      var it = itemsPerSlide - (totalItems - idx);
      for (var i = 0; i < it; i++) {
        // append slides to end
        if (e.direction == "left") {
          $(car+" .carousel-item")
            .eq(i)
            .appendTo(car+" .carousel-inner");
        } else {
          //alert( $(car+".carousel-item").eq(i).nodeName);
          $(car+" .carousel-item")
            .eq((totalItems-1))
            .prependTo(car+" .carousel-inner");
        }
      }
    }
  });
  $("#myCarousel3").on("slide.bs.carousel", function(e) {
    var car="#myCarousel3";
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 3;
    var totalItems = $(car+" .carousel-item").length;
    //alert(idx +" >= "+ totalItems +"- ("+itemsPerSlide+"-1");
    if (idx >= totalItems - (itemsPerSlide - 1)) {
      var it = itemsPerSlide - (totalItems - idx);
      for (var i = 0; i < it; i++) {
        // append slides to end
        if (e.direction == "left") {
          $(car+" .carousel-item")
            .eq(i)
            .appendTo(car+" .carousel-inner");
        } else {
          //alert( $(car+".carousel-item").eq(i).nodeName);
          $(car+" .carousel-item")
            .eq((totalItems-1))
            .prependTo(car+" .carousel-inner");
        }
      }
    }
  });
});
