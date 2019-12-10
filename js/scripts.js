$(function() {


    //slick slider
    $('.homepage-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        asNavFor: '.homepage-slider-nav'
      });
      $('.homepage-slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.homepage-slider',
        dots: false,
        arrows: false,
        focusOnSelect: true,
        adaptiveHeight: true
      });
});