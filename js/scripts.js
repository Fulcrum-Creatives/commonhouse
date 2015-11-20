var $ = jQuery.noConflict();
/* Skip navigation fix for accessibility */
(function() {
    var is_webkit = navigator.userAgent.toLowerCase().indexOf( 'webkit' ) > -1,
        is_opera  = navigator.userAgent.toLowerCase().indexOf( 'opera' )  > -1,
        is_ie     = navigator.userAgent.toLowerCase().indexOf( 'msie' )   > -1;

    if ( ( is_webkit || is_opera || is_ie ) && document.getElementById && window.addEventListener ) {
        window.addEventListener( 'hashchange', function() {
            var id = location.hash.substring( 1 ),
                element;

            if ( ! ( /^[A-z0-9_-]+$/.test( id ) ) ) {
                return;
            }

            element = document.getElementById( id );

            if ( element ) {
                if ( ! ( /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ) ) {
                    element.tabIndex = -1;
                }

                element.focus();
            }
        }, false );
    }
})();
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
