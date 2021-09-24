$(document).ready(function () {
  //맨 상단의 이미지 배너 닫기
  $(".top_banner_close").click(function () {
    $(".top_banner").slideUp(200);
  });

  //헤더 상단의 ship to uae 클릭시 목록 스크롤
  $(".ship_menu_li").click(function () {
    $(".ship_ul").slideToggle(100);
  });
  $(".ship_ul").mouseleave(function () {
    $(".ship_ul").slideUp(100);
  });

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

  //all category menu 버튼 클릭시 on/off
  $(".all_category").click(function(){
    if ( $(this).hasClass("act") ) {
      $(this).removeClass("act");
      $(".allcate_bg").slideUp();      
    } else {
      $(this).addClass("act");
      $(".allcate_bg").slideDown();     
    }    
  });  
  
  $(".all_category2").click(function(){
    if ( $(this).hasClass("act") ) {
      $(this).removeClass("act");
      $(".allcate_bg2").slideUp();      
    } else {
      $(this).addClass("act");
      $(".allcate_bg2").slideDown();     
    }    
  });  


  //all category menu > 카테고리 별 하위 메뉴 노출
  $(".allca_menu_ul > li > a").mouseover(function(){
    var adbg_show = $(this).attr("data-ad");
    //alert(adbg_show);
    $(".allcate_adbg").removeClass("open");
    $("#adbg_"+adbg_show).addClass("open");
  });


  
}); /* end script */