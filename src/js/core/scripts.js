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
          slidesToShow: 2,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },

      {
        breakpoint: 600,
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
