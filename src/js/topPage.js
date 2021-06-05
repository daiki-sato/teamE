// header固定
$(function() {
  var height=$("#header").height();
  $(".container").css("margin-top", height + "15px");
});
//footer固定
$(function() {
  var height=$("#footer").height();
  $("body").css("padding-bottom", height +"15px");
});


const categorypush = document.querySelectorAll('#category');
categorypush.forEach(function(target){
  target.addEventListener('click', () => {
    if(target.classList.contains('category-pushed__button')){
  　//　containsメソッドで、クラスが既に付与されているか判定 
      target.classList.remove('category-pushed__button');
  　//　クラスがついている場合、test２クラスを削除する 
    }else{
      target.classList.add('category-pushed__button');
  　//　クラスがついていない場合、test２クラスを追加する 
}})});
const tagpush = document.querySelectorAll('#tag');
tagpush.forEach(function(target){
  target.addEventListener('click', () => {
    if(target.classList.contains('tag-pushed__button')){
  　//　containsメソッドで、クラスが既に付与されているか判定 
      target.classList.remove('tag-pushed__button');
  　//　クラスがついている場合、test２クラスを削除する 
    }else{
      target.classList.add('tag-pushed__button');
  　//　クラスがついていない場合、test２クラスを追加する 
}})});



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


// 検索結果n件ありますの表示（ボタン押下時）
const search = document.getElementById('searchbtn');
const searched = document.getElementById('searched');
search.addEventListener('click',() => {
  searched.style.display = "block";
  console.log('検索ボタンが押されました');
})
