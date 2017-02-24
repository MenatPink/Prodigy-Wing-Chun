$(document).ready(function(){
  $('.Carousel').slick({
      speed:1000
  });
  $('h2:nth-of-type(1)').click(function(){
      console.log('click function active');
      $('.slick-prev').click();
  });
    $('h2:nth-of-type(2)').click(function(){
        console.log('next click function received');
        $('.slick-next').click();
    });

});
