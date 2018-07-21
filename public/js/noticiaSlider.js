  $('.slider-noticias').not('.slick-initialized').slick({
    dots: true,
    dotsClass: "slick-dots",
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    touchMove: true,
    responsive: [
      {
        breakpoint: 939,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          arrows: true,
          dots: false,
          autoplay: true,
          centerMode: true,
          centerPadding: '40px'
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          autoplay: true,
          infinite: true,
          dots: false,
          arrows: true,
          centerMode: true,
          centerPadding: '40px'
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          infinite: true,
          dots: false,
          arrows: true,
          centerMode: false,
          centerPadding: '40px'

        }
      }
    ]
  });
