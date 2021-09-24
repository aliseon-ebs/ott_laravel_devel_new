$(document).ready(function(){
  //exhibition > index > card slide
  $(".big_slide_wr").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    dots: true,
    arrows: true,
    pauseOnHover: true
  });
});