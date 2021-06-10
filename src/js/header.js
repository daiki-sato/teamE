// header固定
$(document).ready(function(){
  if ($(window).width() < 767) {
    var height=$("#header").height();
  $(".container").css("margin-top", height );
  }}
);