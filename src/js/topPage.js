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



//一括申し込みのjs
// function allcheck( tf ) {
  
//   var ElementsCount = document.sampleform.elements.length; // チェックボックスの数
//   for( i=0 ; i<ElementsCount ; i++ ) {
//      document.sampleform.elements[i].checked = tf; // ON・OFFを切り替え
//   }
// }



// <form name="sampleform">
// <p>
//    <label><input type="checkbox" value="YES" name="sc5">チェックボックスA</label><br>
//    <label><input type="checkbox" value="YES" name="sc6">チェックボックスB</label><br>
//    <label><input type="checkbox" value="YES" name="sc7">チェックボックスC</label><br>
//    <label><input type="checkbox" value="YES" name="sc8">チェックボックスD</label><br>
// </p>
// </form>


// <p>
//   <input type="button" value="全部ON！" onclick="allcheck(true);">
//   <input type="button" value="全部OFF！" onclick="allcheck(false);">
// </p>





//「全て選択」のチェックボックス
// $(function(){
//   $('button.application-area__button').each(function(i){
//       $(this).attr('id','checkAll' + (i));
//   });
// });


// for (let i = 0; i< document.getElementById(`"checkAll + ${i}"`).length; i++) {
// }


let checkAlls = document.getElementsByClassName("application-area__button");
checkAlls = Array.from(checkAlls);
checkAlls.forEach(function(checkAll) {
  //「全て選択」のチェックボックスをクリックした時
checkAll.addEventListener(
  "click",
  () => {
      funcCheckAll(checkAll.checked);
      console.log("ok");
  },
  false
);

  console.log(checkAll);
});

// console.log(checkAll);

//「全て選択」以外のチェックボックス
let check = document.getElementsByClassName("checks");
// checks = Array.from(checks);
// checks.forEach(function(check) {
//   console.log(checks);
// });
// // let check = document.getElementsByClassName("checks");





// console.log(el);



//全てのチェックボックスをON/OFFする
const funcCheckAll = (bool) => {
    for (let i = 0; i < check.length; i++) {
      check[i].checked = bool;
    }
};
//「checks」のclassを持つ要素のチェック状態で「全て選択」のチェック状態をON/OFFする
const funcCheck = () => {
    let count = 0;
    for (let i = 0; i < check.length; i++) {
        if (check[i].checked) {
            count += 1;
        }
    }
    if (check.length === count) {
        checkAll.checked = true;
    } else {
        checkAll.checked = false;
    }
};

//「全て選択」以外のチェックボックスをクリックした時
for (let i = 0; i < check.length; i++) {
  check[i].addEventListener("click", funcCheck, false);
}




