// サンクスページのモーダルの表示、1.5秒後に非表示
$(function () {
  $('#continueapply').click(function(){
    $('#modal').fadeIn();
    scrollPosition = $(window).scrollTop();
    $("html,body").css("overflow", "hidden");
    $('body').addClass('fixed').css({'top': -scrollPosition});
    setTimeout(function(){
    $('#modal').fadeOut();
    $("html,body").removeAttr("style");
		window.scrollTo( 0 , scrollPosition );
  },1500)
  })
});
