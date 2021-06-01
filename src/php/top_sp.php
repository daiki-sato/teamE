<!-- header.phpとfooter.phpを挿入する -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/reset">
  <link rel="stylesheet" href="../css/top.css">
  <link rel="stylesheet" href="../css/header.css">

  <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">

</head>
<body>
  
  <header class="header">

    <div class="header__top">

        <div id="nav-drawer">
          <input id="nav-input" type="checkbox" class="nav-unshown">
          <label id="nav-open" for="nav-input"><span></span></label>
          <label class="nav-unshown" id="nav-close" for="nav-input"></label>

          <div id="nav-content">

            <div class="sidebar-wrap">

              <div class="sidebar-wrap__menu">MENU
                <label class="close" for="drawer__input"><span></span></label>
              </div>

              <div class="sidebar-wrap__searcharea"></div>

              <div class="sidebar-wrap__group">
                <div class="sidebar-wrap__title"></div>
                <div class="sidebar-wrap__content"></div>
              </div>

            </div>

            <div class="nav-content__recomended"></div>

          </div>
          
        </div>
  
        <h1 class="header-logo">
          <img src="./logo.png" class="header-logo__img" alt="就活の教科書_ロゴ">
        </h1>

    </div>

    <nav class="header-nav">
      <ul class="header-nav__group">
        <li class="header-nav__content"><a href="https://reashu.com/category/%e5%b0%b1%e6%b4%bb%e3%81%ae%e3%82%84%e3%82%8a%e6%96%b9/" class="header-nav__content-text">就活やり方</a></li>
        <li class="header-nav__content"><a href="https://reashu.com/category/%e8%87%aa%e5%b7%b1%e5%88%86%e6%9e%90/" class="header-nav__content-text">自己分析</a></li>
        <li class="header-nav__content"><a href="https://reashu.com/category/%e8%87%aa%e5%b7%b1%e5%88%86%e6%9e%90_%e8%a8%ba%e6%96%ad%e3%83%84%e3%83%bc%e3%83%ab/" class="header-nav__content-text">自己分析ツール</a></li>
        <li class="header-nav__content"><a href="https://reashu.com/category/es%e5%af%be%e7%ad%96/" class="header-nav__content-text">ES書き方</a></li>
        <li class="header-nav__content"><a href="https://reashu.com/category/es%e5%af%be%e7%ad%96/es%e6%b7%bb%e5%89%8a/" class="header-nav__content-text">ES添削</a></li>
        <li class="header-nav__content"><a href="https://reashu.com/category/%e9%9d%a2%e6%8e%a5%e5%af%be%e7%ad%96/" class="header-nav__content-text">面接対策</a></li>
        <li class="header-nav__content"><a href="https://reashu.com/category/%e5%b0%b1%e6%b4%bb%e3%82%b5%e3%82%a4%e3%83%88/" class="header-nav__content-text">就活サイト</a></li>
        <li class="header-nav__content"><a href="https://reashu.com/category/%e9%80%86%e6%b1%82%e4%ba%ba%e3%82%b9%e3%82%ab%e3%82%a6%e3%83%88%e3%82%b5%e3%82%a4%e3%83%88/" class="header-nav__content-text">スカウトアプリ</a></li>
        <li class="header-nav__content"><a href="https://reashu.com/category/%e5%b0%b1%e6%b4%bb%e3%82%a8%e3%83%bc%e3%82%b8%e3%82%a7%e3%83%b3%e3%83%88/" class="header-nav__content-text">就活エージェント</a></li>
        <li class="header-nav__content"><a href="https://reashu.com/what-is-reashu/" class="header-nav__content-text">就活の教科書とは</a></li>
      </ul>
    </nav>

    <div class="header-info">
      <a href="https://reashu.com/category/%e5%b0%b1%e6%b4%bb%e6%94%af%e6%8f%b4%e3%82%b5%e3%83%bc%e3%83%93%e3%82%b9/" class="header-info__text"> >>内定者おすすめの就活支援サービス15選<< </a>
    </div>

  </header>

  <div class="container">

  <div class="search-area">
    <h2 class="search-area__title">就活サービスから探す</h2>
  </div>

  <div class="category-search__menu">
    <div class="category-search__list">
      <input type="checkbox" class="category-search__button">
        <p><img src="./checking.png" class="category-search__button-check" alt="チェックマーク"></p>
        <p class="category-search__button-text">エージェント</p>
        <p class="category-search_button-q">?</p>
      </input>
    </div>
    <div class="category-search__list">
      <input type="checkbox" class="category-search__button">
        <p><img src="./checking.png" class="category-search__button-check" alt="チェックマーク"></p>
        <p class="category-search__button-text">イベント</p>
        <p class="category-search_button-q">?</p>
      </input>
    </div>
    <div class="category-search__list">
      <input type="checkbox" class="category-search__button">
        <p><img src="./checking.png" class="category-search__button-check" alt="チェックマーク"></p>
        <p class="category-search__button-text">サービス</p>
        <p class="category-search_button-q">?</p>
      </input>
    </div>
  </div>
</section>

<section class="tag-search">
  <div class="search-area">
    <h2 class="search-area__title">タグからから探す</h2>
  </div>

  <ul class="tag-search__menu">
    <li class="tag-search__list"  ><a href="" onclick="buttonClick()">#理系</a></li>
    <li class="tag-search__list"  onclick="buttonClick()"><a href="">#文系</a></li>
    <li class="tag-search__list"  onclick="buttonClick()"><a href="">#星3以上</a></li>
    <li class="tag-search__list"  onclick="buttonClick()"><a href="">#理系</a></li>
    <li class="tag-search__list"  onclick="buttonClick()"><a href="">#文系</a></li>
    <li class="tag-search__list"  onclick="buttonClick()"><a href="">#星3以上</a></li>
    <li class="tag-search__list"  onclick="buttonClick()"><a href="">#理系</a></li>
    <li class="tag-search__list"  onclick="buttonClick()"><a href="">#文系</a></li>
    <li class="tag-search__list"  onclick="buttonClick()"><a href="">#星3以上</a></li>
  </ul>
</section>

<!-- だいきへー↓↓↓↓↓これはなんですか？↓↓↓ -->

<!-- 
<section class="category-tag-search">
  <div class="search-area">
    <h2 class="search-area__title">サービス・タグから探す</h2>
  </div>

  <div class="aa"> -->

    
    <!-- <div class="category-search__menu">
      <div class="category-search__list">
        <button class="category-search__button">
          <i class="fas fa-check">エージェント</i>
        </button>
      </div>
      <div class="category-search__list">
        <button class="category-search__button">
          <i class="fas fa-check">イベント</i>
        </button>
      </div>
      <div class="category-search__list">
        <button class="category-search__button">
          <i class="fas fa-check">サービス</i>
        </button>
      </div>
    </div> -->


    <!-- <ul class="tag-search__menu">
      <li class="tag-search__list"  ><a href="" onclick="buttonClick()">#理系</a></li>
      <li class="tag-search__list"  onclick="buttonClick()"><a href="">#文系</a></li>
      <li class="tag-search__list"  onclick="buttonClick()"><a href="">#星3以上</a></li>
      <li class="tag-search__list"  onclick="buttonClick()"><a href="">#理系</a></li>
      <li class="tag-search__list"  onclick="buttonClick()"><a href="">#文系</a></li>
      <li class="tag-search__list"  onclick="buttonClick()"><a href="">#星3以上</a></li>
      <li class="tag-search__list"  onclick="buttonClick()"><a href="">#理系</a></li>
      <li class="tag-search__list"  onclick="buttonClick()"><a href="">#文系</a></li>
      <li class="tag-search__list"  onclick="buttonClick()"><a href="">#星3以上</a></li>
    </ul> -->

  </div>

</section>










<div class="application-area">
  <p class="application-area__text">就活相談なら</p>
  <button class="application-area__button">エージェント一括申し込み！</button>
  <span class="application-area__description">就活のプロが話を聞いてくれます</span>
</div>


<div class="search-box"> 
  <button class="search-box__button">検索</button>
</div>

<div class="number-of-searches-box">
  <p class="number-of-searches__text">↓検索結果がn件あります↓</p>
</div>



<section class="pick-up">
  <div class="pick-up__title__box">
    <img src="../img/指差しの手の線画アイコン.png" class="pick-up__title__img" alt="">
    <h2 class="pick-up__title__text">PICK UP</h2>
  </div>

  <div class="pick-up-lists">
    <!-- この中にcardを入れる -->
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
  <div class="search-results__title-box">
    <i class="fas fa-search"></i>
    <p>検索結果 n件表示</p>
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

<section class="article">
  <div class="article__title-box">
    <i class="fa fa-book"></i>
    <p>記事</p>
  </div>

  <div class="article__items">
    <div class="article__item">
      <article class="cardtype__article">
        <a class="cardtype__link" href="https://reashu.com/category/%e5%b0%b1%e6%b4%bb%e6%94%af%e6%8f%b4%e3%82%b5%e3%83%bc%e3%83%93%e3%82%b9/" data-wpel-link="internal">
          <p class="cardtype__img">
            <img loading="lazy" class="lazy alignnone size-thumb-520 wp-image-3370" src="https://reashu.com/wp-content/uploads/2020/02/090a909fd57f1ca462afab4214525b84.png" alt="【内定者が選んだ】就活支援サービスおすすめ15選｜学生は完全無料" width="520" height="300" />
            <noscript>
              <img loading="lazy" class="alignnone size-thumb-520 wp-image-3370" src="https://reashu.com/wp-content/uploads/2020/02/090a909fd57f1ca462afab4214525b84.png" alt="【内定者が選んだ】就活支援サービスおすすめ15選｜学生は完全無料" width="520" height="300" />
            </noscript>
          </p>
          <div class="cardtype__article-info">
            <h3>内定にさらに一歩近づこう！ 就活支援サービスおすすめ15選</h3>
          </div>
        </a>
      </article> 
    </div>

    <div class="article__item">
      <article class="cardtype__article">
        <a class="cardtype__link" href="https://reashu.com/category/%e5%b0%b1%e6%b4%bb%e3%82%b5%e3%82%a4%e3%83%88/" data-wpel-link="internal">
        
        <p class="cardtype__img">
          <img loading="lazy" class="lazy alignnone size-thumb-520 wp-image-3370" src="https://reashu.com/wp-content/uploads/2020/02/d60865890e72ece3d5c6e94107f110ec.png" alt="【内定者が選んだ】就活サイトおすすめ30選！ 就活生はみんな登録してる！？" width="520" height="300" />
          <noscript>
            <img loading="lazy" class="alignnone size-thumb-520 wp-image-3370" src="https://reashu.com/wp-content/uploads/2020/02/d60865890e72ece3d5c6e94107f110ec.png" alt="【内定者が選んだ】就活サイトおすすめ30選！ 就活生はみんな登録してる！？" width="520" height="300" />
          </noscript>
          </p>
        
        <div class="cardtype__article-info">
        <h3>就活生はみんな登録してる！？ 就活サイトおすすめ30選</h3>
        </div></a>
        </article>
    </div>

  </div>
</section>


<footer class="footer">
  <p class="footer__text">2件の製品が資料請求リストにあります。</p>
  <div>
    <button class="footer__form-button">資料請求フォームへ</button>
    <button class="footer__reset-button">リストをリセット</button>
  </div>
</footer>

</div>

<!-- <script src="../js/top.js"></script> -->


</body>
</html>
