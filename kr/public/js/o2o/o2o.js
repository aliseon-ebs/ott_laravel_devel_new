$(document).ready(function(){
  //o2o > index > 검색 focus
  $(".search_bar_input").focus(function(){
    $(".search").css("border","1px solid #2196f3");
  });

  //o2o > index > O2O STORE 슬라이드
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

  //main > 이미지 카테고리 슬라이드
  $(".category_slider").slick({
    //autoplay: true,
    autoplaySpeed: 3000,
    slidesToShow: 8,
    slidesToScroll: 1,
    arrows: true,
    dots: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 6
        }
            },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 4
        }
            },
      {
        breakpoint: 580,
        settings: {
          slidesToShow: 3
        }
            },
      {
        breakpoint: 425,
        settings: {
          slidesToShow: 2
        }
            }
        ]
  });


  //o2o > index > Product & Service 카테고리 스크롤 
  $(".o2o_cate").mCustomScrollbar({  
    axis: "x", //가로 스크롤
    autoHideScrollbar : true, //스크롤바 실행시에만 스크롤 나옴
    mouseWheel : true, //마우스 휠로 스크롤 동작
    //mouseWheel:{ scrollAmount: "180px" }, //마우스 휠 스크롤 px 설정  
    contentTouchScroll : true, //터치 스크롤 지원
    theme:"dark" //테마 
  });

  //o2o > index > Product & Service 컨텐츠 슬라이드
  $(".big_slide_wr").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    dots: true,
    arrows: true,
    pauseOnHover: true
  });

  //o2o > index > Life on O2O 슬라이드
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
            breakpoint: 451,
            settings: {
                slidesToShow: 1
            }
        }
    ]
  });        

  
});