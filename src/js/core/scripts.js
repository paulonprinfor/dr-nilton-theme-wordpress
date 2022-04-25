$(function() {

  $('.banners-slider').slick({
    prevArrow:
      '<button class="button-nav button-nav-prev"></button>',
    nextArrow:
      '<button class="button-nav button-nav-next"></button>',
  });

  $('.article-treatments__carousel').slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay: true,
    autoplaySpeed: 6000,
    arrows: false,
    dots: true,

    responsive: [
      {
        breakpoint: 1023,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true, // porque tu colocou aqueles 50% de largura?
          dots: true
        }
      },

      {
        breakpoint: 999,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3
         
        }
      },

      {
        breakpoint: 599,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },

      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }

    ]

  });

});

var nav = false;
	$('.menu-button').click(function(event) {
		event.stopPropagation();
		$('nav').toggleClass('menu-opened');
  });
  
 