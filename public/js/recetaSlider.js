$('.recetas-productos').slick({
          dots: false,
          slidesToShow: 5,
          slidesToScroll: 1,
          touchMove: true,
          autoplay:true,
          responsive: [
          {
            breakpoint: 1279,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 1,
              infinite: true,
              autoplay:true,
              dots: false
            }
          },
          {
            breakpoint: 939,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              arrows: false,
              dots: false,
              autoplay:true,
              centerMode: true,
              centerPadding: '40px'
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              arrows: false,
              dots: false,
              autoplay:true,
              centerMode: true,
              centerPadding: '40px'
            }
          },
          {
            breakpoint: 415,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: false,
              dots: false,
              autoplay:true,
              centerMode: true,
              centerPadding: '40px'
            }
          }
        ]
      });
});
