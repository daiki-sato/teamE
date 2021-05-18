<!-- header.phpとfooter.phpを挿入する -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <?php 
  include("./_header.php"); 
  ?>


<section class="keyword-search">
  <div class="search-area">
    <h2 class="search-area__title">KW検索</h2>
  </div>
  
  <p class="keyword-search__text">キーワードで検索</p>
  <form class="keyword-search-form" action="">
    <input class="keyword-search-form__input" type="search" placeholder="例：出版社">
    <button class="keyword-search-form__button" type="submit">検索</button>
  </form>

</section>

<section class="category-search">
  <div class="search-area">
    <h2 class="search-area__title">就活サービスから探す</h2>
  </div>


  <div class="category-search__-menu">
    <div class="category-search__list">
      <div class="category-search__title-box">
        <h3 class="category-search__title">エージェント</h3>
      </div>
      <p class="category-search__text">
        就活エージェントとは専任キャリアコンサルタントが就活活動の始めから終わりまで支援してくれるサービスです。就職活動において、「自己分析が上手くできない」、「行きたい企業がわからない」という初期の段階での悩みは多くあります。
      </p>
    </div>

    <div class="category-search__list">
      <div class="category-search__title-box">
        <h3 class="category-search__title">イベント</h3>
      </div>
      <p class="category-search__text">
        就活エージェントとは専任キャリアコンサルタントが就活活動の始めから終わりまで支援してくれるサービスです。就職活動において、「自己分析が上手くできない」、「行きたい企業がわからない」という初期の段階での悩みは多くあります。
      </p>
    </div>

    <div class="category-search__list">
      <div class="category-search__title-box">
        <h3 class="category-search__title">サービス</h3>
      </div>
      <p class="category-search__text">
        就活エージェントとは専任キャリアコンサルタントが就活活動の始めから終わりまで支援してくれるサービスです。就職活動において、「自己分析が上手くできない」、「行きたい企業がわからない」という初期の段階での悩みは多くあります。
      </p>
    </div>



  </div>

</section>

<section class="tag-search">
  <div class="search-area">
    <h2 class="search-area__title">タグからから探す</h2>
  </div>

  <ul class="tag-search__menu">
    <li class="tag-search__list"><a href="">理系</a></li>
    <li class="tag-search__list"><a href="">文系</a></li>
    <li class="tag-search__list"><a href="">星3以上</a></li>
    <li class="tag-search__list"><a href="">理系</a></li>
    <li class="tag-search__list"><a href="">文系</a></li>
    <li class="tag-search__list"><a href="">星3以上</a></li>
    <li class="tag-search__list"><a href="">理系</a></li>
    <li class="tag-search__list"><a href="">文系</a></li>
    <li class="tag-search__list"><a href="">星3以上</a></li>
  </ul>
</section>

<div class="search-box"> 
  <button class="search-box__button">検索</button>
</div>

<div class="application-area">
  <p class="application-area__text">よくわからない方は</p>
  <button class="application-area__button">一括申し込み！</button>
  <span class="application-area__description">就活のプロが話を聞いてくれます</span>
</div>


<section class="pick-up">
  <h2 class="pick-up__title">PICK UP</h2>
  <div class="pick-up-lists">
    <div class="pick-up-list">
      <img class="pick-up-list__img" src="../img/キャリセン.png" alt="キャリセンの画像">
      <p>キャリセン</p>
      <p>採用コンサルタントが、じっくり1時間の個別面談。一人一人に合った納得内定獲得を徹底的にサポート。</p>
      <button>解説記事</button>
      <button>資料請求リストに追加する</button>
    </div>
  </div>
</section>

<section class="search-results">

  <div class="search-results__title">
    <h2>検索結果</h2>
  </div>

  <div class="search-results__agent">
    <p>エージェント</p>
  </div>

  <div class="search-results-lists">
    <div class="search-results-list">

    </div>
    <div class="search-results-list">

    </div>
    
    <div class="application-area">
      <p class="application-area__text">よくわからない方は</p>
      <button class="application-area__button">一括申し込み！</button>
      <span class="application-area__description">就活のプロが話を聞いてくれます</span>
    </div>
    
    <div class="search-results-list">

    </div>
    
  </div>




</section>

<?php 
  include("./_footer.php"); 
?>



</body>
</html>
