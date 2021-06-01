// スマホ版用語説明popup
$(function () {
  $('#popup__btn0').click(function(){
    $('#popup0, #overlay0').fadeIn();
    scrollPosition = $(window).scrollTop();
    $("html,body").css("overflow", "hidden");
	//	$('body').addClass('fixed').css({'top': -scrollPosition});
  })
  
  $('#overlay0').click(function(){
    $('#popup0, #overlay0').fadeOut();
    $("html,body").removeAttr("style");
	//	$('body').removeClass('fixed').css({'top': 0});
		window.scrollTo( 0 , scrollPosition );
  })
});
$(function () {
  $('#popup__btn1').click(function(){
    $('#popup1, #overlay1').fadeIn();
    scrollPosition = $(window).scrollTop();
    $("html,body").css("overflow", "hidden");
	//	$('body').addClass('fixed').css({'top': -scrollPosition});
  })
  
  $('#overlay1').click(function(){
    $('#popup1, #overlay1').fadeOut();
    $("html,body").removeAttr("style");
	//	$('body').removeClass('fixed').css({'top': 0});
		window.scrollTo( 0 , scrollPosition );
  })
});
$(function () {
  $('#popup__btn2').click(function(){
    $('#popup2, #overlay2').fadeIn();
    scrollPosition = $(window).scrollTop();
    $("html,body").css("overflow", "hidden");
	//	$('body').addClass('fixed').css({'top': -scrollPosition});
  })
  
  $('#overlay2').click(function(){
    $('#popup2, #overlay2').fadeOut();
    $("html,body").removeAttr("style");
	//	$('body').removeClass('fixed').css({'top': 0});
		window.scrollTo( 0 , scrollPosition );
  })
});



// for (var i = 0; i < length; i++) {
//   $(function () {
//     $("#popup__btn" + i).click(function(){
//       $("#popup" + i, "#overlay" + i).fadeIn();
//       scrollPosition = $(window).scrollTop();
//       $("html,body").css("overflow", "hidden");
//     })
//     $("#overlay" + i).click(function(){
//       $("#popup" + i, "#overlay" + i).fadeOut();
//       $("html,body").removeAttr("style");
//     //	$('body').removeClass('fixed').css({'top': 0});
//       window.scrollTo( 0 , scrollPosition );
//     })
//   })};

