function test(index){
  add_pc = document.getElementById('submit__pc' + index);
  //cardのクラス付与、文字の書き換え PC
  if(add_pc.classList.contains('card-pc__button-unsubmit')){
　//　containsメソッドで、test2クラスが既に付与されているか判定 
    add_pc.classList.remove('card-pc__button-unsubmit');
　//　test2クラスがついている場合、test２クラスを削除する 
  }else{
    add_pc.classList.add('card-pc__button-unsubmit');
  //　test2クラスがついていない場合、test２クラスを追加する 
  }

  text_pc = document.getElementById('text__pc' + index);
  if (text_pc.innerHTML == "お申し込みリストに<br>追加する") {
    text_pc.innerHTML = "リストから外す";
  } else {
    text_pc.innerHTML = "お申し込みリストに<br>追加する";
  };
}

function test(index){
  add_sp = document.getElementById('submit__sp' + index);
  //cardのクラス付与、文字の書き換え sp
  if(add_sp.classList.contains('card-sp__button-unsubmit')){
　//　containsメソッドで、test2クラスが既に付与されているか判定 
    add_sp.classList.remove('card-sp__button-unsubmit');
　//　test2クラスがついている場合、test２クラスを削除する 
  }else{
    add_sp.classList.add('card-sp__button-unsubmit');
  //　test2クラスがついていない場合、test２クラスを追加する 
  }

  text_sp = document.getElementById('text__sp' + index);
  if (text_sp.innerHTML == "お申し込みリストに<br>追加する") {
    text_sp.innerHTML = "リストから外す";
  } else {
    text_sp.innerHTML = "お申し込みリストに<br>追加する";
  };
}













