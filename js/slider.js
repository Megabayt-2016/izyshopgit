(function($) {
    "use strict";



  //home slider carousel

  $(document).ready(function() {
    var owl = $(".home-slider");
    owl.owlCarousel({
      autoplay: true,
      dots: true,
      loop: true,
      items: 1
    });
    
    $("#form-slider input,#form-slider select").focus(function(){
      owl.trigger('stop.owl.autoplay');
    });
  });


  $('.owl-carousel').find('.owl-nav').removeClass('disabled');
$('.owl-carousel').on('changed.owl.carousel', function(event) {
	$(this).find('.owl-nav').removeClass('disabled');
});



})(jQuery);