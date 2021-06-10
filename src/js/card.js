const add_pc = document.getElementById('submit__pc');
const add_sp = document.getElementById('submit__sp');
const text_pc = document.getElementById('text__pc');
const text_sp = document.getElementById('text__sp');

//cardのクラス付与、文字の書き換え PC
add_pc.addEventListener('click', () => {
  if(add_pc.classList.contains('card-pc__button-unsubmit')){
　//　containsメソッドで、test2クラスが既に付与されているか判定 
    add_pc.classList.remove('card-pc__button-unsubmit');
　//　test2クラスがついている場合、test２クラスを削除する 
  }else{
    add_pc.classList.add('card-pc__button-unsubmit');
　//　test2クラスがついていない場合、test２クラスを追加する 
  }});

add_pc.addEventListener('click', () => {
  if (text_pc.innerHTML == "お申し込みリストに<br>追加する") {
    text_pc.innerHTML = "リストから外す";
  } else {
    text_pc.innerHTML = "お申し込みリストに<br>追加する";
  }});

// sp版
//cardのクラス付与、文字の書き換え
add_sp.addEventListener('click', () => {
  if(add_sp.classList.contains('card-sp__button-unsubmit')){
　//　containsメソッドで、test2クラスが既に付与されているか判定 
    add_sp.classList.remove('card-sp__button-unsubmit');
　//　test2クラスがついている場合、test２クラスを削除する 
  }else{
    add_sp.classList.add('card-sp__button-unsubmit');
　//　test2クラスがついていない場合、test２クラスを追加する 
  }});

add_sp.addEventListener('click', () => {
  if (text.innerHTML == "お申し込みリストに<br>追加する") {
    text.innerHTML = "リストから外す";
  } else {
    text.innerHTML = "お申し込みリストに<br>追加する";
  }});


