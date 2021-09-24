$(document).ready(function () {
  //main > visual slider 슬라이딩
  var main_visual_slider = $(".main_visual_slider");

  main_visual_slider.slick({
    dots: true,
    arrows: true
  });

  //main > Today A-Trend 슬라이딩
  $(".big_slide_wr").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    dots: true,
    arrows: true,
    pauseOnHover: true
  });


  //main > influencer 슬라이딩
  $(".influencer_slide_type").slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    dots: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
            }
        ]
  });

  
  //main > flash deal 슬라이딩
  $(".flash_deal_box_type").slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    dots: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        }
            },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
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

  //main > hot trend 카테고리 탭
  if ( $(window).width() < 768  ){ //모바일 사이즈 일때 
    $(".tab-link li").click(function(){ //카테고리 목록 펼치기
      $(this).siblings().slideToggle(300); 
    });
  
    $(".tabct_keyword_txt").click(function(){ //hot keywords 내용 on/off
      $(this).next(".tabct_keyword_ul").slideToggle(); 
    });
  } 

  //main > hot trend 컨텐츠 슬라이드
  $(".tab_slide").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    dots: true,
    arrows: true,
    pauseOnHover: true
  });

  //top btn
  var btn = $('#top_button');

  $(window).scroll(function() { //스크롤 일정 이상 내렸을 때 버튼 보임
    if ($(window).scrollTop() > 300) {
      btn.addClass('show');
    } else {
      btn.removeClass('show');
    }
  });

  btn.on('click', function(e) { //버튼 클릭하면 맨 상단으로 이동
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '300');
  });
  
}); /* end script */


