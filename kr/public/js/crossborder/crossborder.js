$(document).ready(function(){
  //crossboerder > index > 상단 더블 배너 (aliseon pick)
  $(".banSld_wr").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    dots: true,
    arrows: false
  });

  //top brands by country category slide
  $(".tab_button_sld").slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 5,
    dots: false,
    arrows: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3
        }
      },
      {
        breakpoint: 451,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      }
    ]
  });

  //top brands by country card slide
  $(".big_slide_wr").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    dots: true,
    arrows: false,
    pauseOnHover: true
  });    
  
});