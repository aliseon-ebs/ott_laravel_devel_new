$(document).ready(function(){
  //event > index > content card slider
  $(".big_slide_wr").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    dots: true,
    arrows: true,
    pauseOnHover: true
  });

  //event > index > 하단 다운로드 버튼 팝업
  $(".btn_eventDown").click(function(){
    $(".down_complete").fadeOut();
    $(this).parents(".event_box").next(".down_complete").fadeIn();
  });
  $(".down_complete").click(function(){
    $(this).fadeOut(200);
  });
});