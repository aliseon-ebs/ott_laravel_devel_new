$(document).ready(function(){
  //fresh > index > Fresh Food STORE 슬라이드
  $(".slick_command04").slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    //autoplay: true,
    autoplaySpeed: 4000,
    arrows: true,
    dots: true,
    pauseOnHover: true,
    responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3
          }
        },
        {
            breakpoint: 768,
            settings: {
            slidesToShow: 2
            }
        },
        {
            breakpoint: 425,
            settings: {
            slidesToShow: 1
            }
        }
    ] 
  });

  //fresh > index > Fresh Food 슬라이드
  $(".big_slide_wr").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    dots: true,
    arrows: false,
    pauseOnHover: true
  });

  //fresh > index > Life on Fresh Food 슬라이드
  $(".slick_command03").slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: false,
    arrows: true,
    dots: true,
    pauseOnHover: true,
    responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2
          }
        },
        {
            breakpoint: 425,
            settings: {
                slidesToShow: 1
            }
        }
    ]
  });         


});