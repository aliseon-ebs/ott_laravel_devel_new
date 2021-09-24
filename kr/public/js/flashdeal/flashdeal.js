$(document).ready(function(){
  //flashdeal > index > 상단 더블배너 중 큰 영역 슬라이딩
  $(".banSld_wr").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    dots: true,
    arrows: false,
    autoplaySpeed: 4000,
  });

  //flashdeal > index > 상단 더블 배너 중 작은 영역 슬라이딩
  $(".flash_banner_box_wr").slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    dots: true,
    arrows: false,
    pauseOnHover: true,
    vertical: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          vertical: false
        }
      },
      {
          breakpoint: 601,
          settings: {
              slidesToShow: 1,
              vertical: false
          }
      }
  ]
  });

  //flashdeal > index > 중간 영역 상품 카드 슬라이드
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