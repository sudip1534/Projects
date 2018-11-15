$(document).ready(function () {
    $('.banner_slider').slick({
        dots: false,
        infinite: false,
        arrows: false,
        speed: 1000,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
         autoplaySpeed: 2000,
       
    });






$('.team_profile').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.team_img_slide'
});
    
$('.team_img_slide').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  asNavFor: '.team_profile',
  dots: false,
    arrows:false,
    centerPadding:'0px',
  centerMode: true,
  focusOnSelect: true,
    
});
    
    
    });
    
    