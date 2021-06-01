
  const listadd = document.getElementById('submitbtn');
  listadd.addEventListener('click', () => {
    if(listadd.classList.contains('card-pc__button-unsubmit')){
　　//　containsメソッドで、test2クラスが既に付与されているか判定 
      listadd.classList.remove('card-pc__button-unsubmit');
　　//　test2クラスがついている場合、test２クラスを削除する 
    }else{
      listadd.classList.add('card-pc__button-unsubmit');
　　//　test2クラスがついていない場合、test２クラスを追加する 
    }});

  const text = document.getElementById('text');
  listadd.addEventListener('click', () => {
    if (text.innerHTML == "お申し込みリストに<br>追加する") {
      text.innerHTML = "リストから外す";
    } else {
      text.innerHTML = "お申し込みリストに<br>追加する";
    }});