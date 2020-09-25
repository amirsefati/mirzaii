$(document).ready(function(){
    $('.carousel_school').slick({
        infinite: true,
        prevArrow : false,
        nextArrow : false,
        responsive: [
            {
                breakpoint: 2500,
                settings: {
                  slidesToShow: 7,
                  slidesToScroll: 7,
                  infinite: true,
                }
              },
            {
              breakpoint: 1800,
              settings: {
                slidesToShow: 6,
                slidesToScroll: 6,
                infinite: true,
              }
            },
            {
              breakpoint: 1000,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3
              }
            },
            {
              breakpoint: 550,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2 
              }
            }
          ]
      });
})