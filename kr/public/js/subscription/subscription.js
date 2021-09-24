$(document).ready(function(){
  //hot trend 카테고리 탭
  if ( $(window).width() < 768  ){ //모바일 사이즈 일때 
    $(".tab-link li").click(function(){ //카테고리 목록 펼치기
      $(this).siblings().slideToggle(300); 
    });
  
    $(".tabct_keyword_txt").click(function(){ //hot keywords 내용 on/off
      $(this).next(".tabct_keyword_ul").slideToggle(); 
    });
  }   

  //keywords 컨텐츠 슬라이드
  $(".tab_slide").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    dots: true,
    arrows: true,
    pauseOnHover: true
  });

  //trend subscribe slider
  $(".big_slide_wr").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    dots: true,
    arrows: false,
    pauseOnHover: true
  }); 

  //life on subscribe service
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