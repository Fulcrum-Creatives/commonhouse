/*---------------------------------------------------------
 * Slick Init
---------------------------------------------------------*/
(function( $ ) {
  'use strict';

  $(function() {
    $('.slick-slider').slick({
      dots: false,
      infinite: true,
      speed: 300,
      prevArrow: '<div class="slider__prev"><span class="ir">Previous</span></div>',
      nextArrow: '<div class="slider__next"><span class="ir">Next</span></div>',
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
        {
          breakpoint: 770,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 720,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
  });
  

})( jQuery );
