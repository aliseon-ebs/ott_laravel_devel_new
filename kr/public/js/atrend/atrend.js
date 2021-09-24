$(document).ready(function(){
  //image hover action
  // $(".blog-post-item").mousehover(function(){
  //   $(this).find(".blog-info").animate({height:"100%"}, 500, linear);
  // });


  //comment more
  $("#btn_commentMore").click(function(){   
    if( $(this).hasClass("act") ){
      $(this).removeClass("act");
      $(".blog-comment-content ul:not('.defalut')").slideUp();
    } else {
      $(this).addClass("act");
      $(".blog-comment-content ul").slideDown();
    }    
  });

  //image hover
  $(".blog_box").mouseover(function(){
    $(this).addClass("hover");
  });
  $(".blog_box").mouseleave(function(){
    $(this).removeClass("hover");
  });
});