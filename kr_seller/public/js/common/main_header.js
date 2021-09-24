$(document).ready(function () {
 //헤더 상단의 언어버튼 클릭시 목록 스크롤
  $(".lang_btn").click(function () {
    $(".langList_ul").slideToggle(100);
  });
  $(".langList_ul").mouseleave(function () {
    $(".langList_ul").slideUp(100);
  });

  //헤더 상단의 통화버튼 클릭시 목록 스크롤
  $(".currency_btn").click(function () {
    $(".currency_ul").slideToggle(100);
  });
  $(".currency_ul").mouseleave(function () {
    $(".currency_ul").slideUp(100);
  });

$(".top_banner_close").click(function () {
  $(".top_banner").slideUp(200);
});


  $(".big_slide_wr").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    dots: true,
    arrows: true,
    pauseOnHover: true
  }); 

$(".big_slide_wr_num").slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: false,
  arrows: true,
  pauseOnHover: true,
  dots: true,
  customPaging: function(slider, i) {
    // this example would render "tabs" with titles
    return '<span class="dot">1</span>';
  },
});
});
/* end script */