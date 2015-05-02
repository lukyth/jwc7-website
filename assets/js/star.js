$(document).ready(function(){
  $(".next, .back").click(function(e) {
    $(".male, .female").toggleClass('active');
    $('html, body').animate({scrollTop : 0}, 800);
  });
  $('body').height($(document).height());
});
