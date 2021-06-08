<!-- header.phpとfooter.phpを挿入する -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>top_pc</title>
  <link rel="stylesheet" href="/css/style.css">

  <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">

</head>
<body class="topPage__body">
  
　<?php include($_SERVER['DOCUMENT_ROOT']."/php/parts/_header.php"); ?>


  <div class="container">
  
  <div class="main">
    
    <div class="search-place">

      <div class="search__pc">
  
      <div class="search-area">
      <h2 class="search-area__title">サービス・タグから探す</h2>
      </div>
  
      <div class="category-tag-search">
      
        <section class="category-search__menu">
          <div class="category-search__list">
            <input type="checkbox" id="agent"></input>
            <label id="category" for="agent" class="category-search__button">
              <div class="checkmark"></div>
              <div class="category-search__button-text">エージェント</div>
              <div class="category-search_button-q">?
                <span class="service-description">
                  就活エージェントとは専任のキャリアコンサルタントが就職活動の始めから終わりまでを支援してくれるサービスです。 就職活動において、「自己分析が上手くできない」、「行きたい企業がわからない」という初期の段階での悩みは多くあります。
                </span>
              </div>
            </label>
          </div>
          <div class="category-search__list">
            <input type="checkbox" id="event"></input>
            <label id="category" for="event" class="category-search__button">
              <div class="checkmark"></div>
              <div class="category-search__button-text">イベント</div>
              <div class="category-search_button-q">?
                <span class="service-description">
                  就活エージェントとは専任のキャリアコンサルタントが就職活動の始めから終わりまでを支援してくれるサービスです。 就職活動において、「自己分析が上手くできない」、「行きたい企業がわからない」という初期の段階での悩みは多くあります。
                </span>
              </div>
            </label>
          </div>
          <div class="category-search__list">
            <input type="checkbox" id="service"></input>
            <label id="category" for="service" class="category-search__button">
              <div class="checkmark"></div>
              <div class="category-search__button-text">サービス</div>
              <div class="category-search_button-q">?
                <span class="service-description">
                  就活エージェントとは専任のキャリアコンサルタントが就職活動の始めから終わりまでを支援してくれるサービスです。 就職活動において、「自己分析が上手くできない」、「行きたい企業がわからない」という初期の段階での悩みは多くあります。
                </span>
              </div>
            </label>
          </div>
        </section>
        
        <section class="tag-search__menu">
          <div class="tag-search__list">
            <input type="checkbox" id="1"></input>
            <label id="tag" for="1" class="tag-search__button">
              <div class="checkmark"></div>
              <p class="tag-search__button-text">理系</p>
            </label>
          </div>
          <div class="tag-search__list">
            <input type="checkbox" id="2"></input>
            <label id="tag" for="2" class="tag-search__button">
              <div class="checkmark"></div>
              <p class="tag-search__button-text">文系</p>
            </label>
          </div>
          <div class="tag-search__list">
            <input type="checkbox" id="3"></input>
            <label id="tag" for="3" class="tag-search__button">
              <div class="checkmark"></div>
              <p class="tag-search__button-text">星3以上</p>
            </label>
          </div>
          <div class="tag-search__list">
            <input type="checkbox" id="4"></input>
            <label id="tag" for="4" class="tag-search__button">
              <div class="checkmark"></div>
              <p class="tag-search__button-text">理系</p>
            </label>
          </div>
          <div class="tag-search__list">
            <input type="checkbox" id="5"></input>
            <label id="tag" for="5" class="tag-search__button">
              <div class="checkmark"></div>
              <p class="tag-search__button-text">文系</p>
            </label>
          </div>
          <div class="tag-search__list">
            <input type="checkbox" id="6"></input>
            <label id="tag" for="6" class="tag-search__button">
              <div class="checkmark"></div>
              <p class="tag-search__button-text">星3以上</p>
            </label>
          </div>
          <div class="tag-search__list">
            <input type="checkbox" id="7"></input>
            <label id="tag" for="7" class="tag-search__button">
              <div class="checkmark"></div>
              <p class="tag-search__button-text">理系</p>
            </label>
          </div>
          <div class="tag-search__list">
            <input type="checkbox" id="8"></input>
            <label id="tag" for="8" class="tag-search__button">
              <div class="checkmark"></div>
              <p class="tag-search__button-text">文系</p>
            </label>
          </div>
          <div class="tag-search__list">
            <input type="checkbox" id="9"></input>
            <label id="tag" for="9" class="tag-search__button">
              <div class="checkmark"></div>
              <p class="tag-search__button-text">星3以上</p>
            </label>
          </div>
        </section>

      </div>

      </div>
    
    
      <div class="search__sp">

    <section>
      <div class="search-area">
        <h2 class="search-area__title">就活サービスから探す</h2>
      </div>
      <div class="category-search__menu">
      <div class="category-search__list">
        <input type="checkbox" id="agent"></input>
        <label id="category" for="agent" class="category-search__button">
          <div class="checkmark"></div>
          <p class="category-search__button-text">エージェント</p>
          <p id="popup__btn0" class="category-search_button-q">?</p>
          <p id="popup0" class="service-description__popup">就活エージェントとは専任のキャリアコンサルタントが就職活動の始めから終わりまでを支援してくれるサービスです。 就職活動において、「自己分析が上手くできない」、「行きたい企業がわからない」という初期の段階での悩みは多くあります。
          </p>
          <div id="overlay0" class="service-description__popup__closer"></div>
        </label>
      </div>
      <div class="category-search__list">
        <input type="checkbox" id="event"></input>
        <label id="category" for="event" class="category-search__button">
          <div class="checkmark"></div>
          <p class="category-search__button-text">イベント</p>
          <p id="popup__btn1" class="category-search_button-q">?</p>
          <p id="popup1" class="service-description__popup">就活エージェントとは専任のキャリアコンサルタントが就職活動の始めから終わりまでを支援してくれるサービスです。 就職活動において、「自己分析が上手くできない」、「行きたい企業がわからない」という初期の段階での悩みは多くあります。
          </p>
          <div id="overlay1" class="service-description__popup__closer"></div>
        </label>
      </div>
      <div class="category-search__list">
        <input type="checkbox" id="survice"></input>
        <label id="category" for="survice" class="category-search__button">
          <div class="checkmark"></div>
          <p class="category-search__button-text">サービス</p>
          <p id="popup__btn2" class="category-search_button-q">?</p>
          <p id="popup2" class="service-description__popup">就活エージェントとは専任のキャリアコンサルタントが就職活動の始めから終わりまでを支援してくれるサービスです。 就職活動において、「自己分析が上手くできない」、「行きたい企業がわからない」という初期の段階での悩みは多くあります。
          </p>
          <div id="overlay2" class="service-description__popup__closer"></div>
        </label>
      </div>
    </div>
    </section>
    
    <section>
      <div class="search-area">
        <h2 class="search-area__title">タグからから探す</h2>
      </div>
      <div class="tag-search__menu">
        <div class="tag-search__list">
        <input type="checkbox" id="1"></input>
        <label id="tag" for="1" class="tag-search__button">
          <div class="checkmark"></div>
          <p class="tag-search__button-text">理系</p>
        </label>
        </div>
        <div class="tag-search__list">
        <input type="checkbox" id="2"></input>
        <label id="tag" for="2" class="tag-search__button">
          <div class="checkmark"></div>
          <p class="tag-search__button-text">文系</p>
        </label>
        </div>
        <div class="tag-search__list">
        <input type="checkbox" id="3"></input>
        <label id="tag" for="3" class="tag-search__button">
          <div class="checkmark"></div>
          <p class="tag-search__button-text">星3以上</p>
        </label>
        </div>
        <div class="tag-search__list">
        <input type="checkbox" id="4"></input>
        <label id="tag" for="4" class="tag-search__button">
          <div class="checkmark"></div>
          <p class="tag-search__button-text">理系</p>
        </label>
        </div>
        <div class="tag-search__list">
        <input type="checkbox" id="5"></input>
        <label id="tag" for="5" class="tag-search__button">
          <div class="checkmark"></div>
          <p class="tag-search__button-text">文系</p>
        </label>
        </div>
        <div class="tag-search__list">
        <input type="checkbox" id="6"></input>
        <label id="tag" for="6" class="tag-search__button">
          <div class="checkmark"></div>
          <p class="tag-search__button-text">星3以上</p>
        </label>
        </div>
        <div class="tag-search__list">
        <input type="checkbox" id="7"></input>
        <label id="tag" for="7" class="tag-search__button">
          <div class="checkmark"></div>
          <p class="tag-search__button-text">理系</p>
        </label>
        </div>
        <div class="tag-search__list">
        <input type="checkbox" id="8"></input>
        <label id="tag" for="8" class="tag-search__button">
          <div class="checkmark"></div>
          <p class="tag-search__button-text">文系</p>
        </label>
        </div>
        <div class="tag-search__list">
        <input type="checkbox" id="9"></input>
        <label id="tag" for="9" class="tag-search__button">
          <div class="checkmark"></div>
          <p class="tag-search__button-text">星3以上</p>
        </label>
        </div>
      </div>
    </section>

      </div>
      
      <div class="application-area">
    <p class="application-area__text">就活相談なら</p>
      <button class="application-area__button">エージェント一括申し込み！</button>
      <div class="application-area__balloon">
        1分でできる！
      </div>
    <span class="application-area__description">就活のプロが話を聞いてくれます</span>
      </div>
      
      
      <div class="search-box"> 
    <button id="searchbtn" class="search-box__button">検索</button>
      </div>
      
      <div id="searched" class="number-of-searches-box">
        <p class="number-of-searches__text">↓検索結果がn件あります↓</p>
      </div>

    </div>
    
  
    
    <section class="pick-up">
    <div class="pick-up__title__box">
      <img src="/img/指差しの手の線画アイコン.png" class="pick-up__title__img" alt="pickup">
      <h2 class="pick-up__title__text">PICK UP</h2>
    </div>
  

    　<?php include($_SERVER['DOCUMENT_ROOT']."/php/parts/card-internal_pc.php"); ?>


    </section>
    
    <section class="search-results">
    <div class="search-results__title-box">
      <i class="fas fa-search"></i>
      <p class="section__title-text">検索結果 n件表示</p>
    </div>
  
    <p class="search-result__agent">&emsp;エージェント&emsp;</p>

  
    <div class="search-results-lists">
      <div class="search-results-list">
  
      </div>

      <div class="search-results-list">
  
      </div>
      
      <div class="application-area">
        <p class="application-area__text">よくわからない方は</p>
          <button class="application-area__button" id="checkAll">エージェント一括申し込み！</button>
          <div class="application-area__balloon">
            1分でできる！
          </div>
        <span class="application-area__description">就活のプロが話を聞いてくれます</span>
      </div>
      
      <div class="search-results-list">
  
      </div>
      
    </div>
  
    </section>
    
    <section class="article">
    <div class="article__title-box">
      <i class="fa fa-book"></i>
      <p class="section__title-text">記事</p>
    </div>
  
    <div class="article__items">

      <div class="article__item">
        <article class="cardtype__article">
          <a class="cardtype__link" href="https://reashu.com/category/%e5%b0%b1%e6%b4%bb%e6%94%af%e6%8f%b4%e3%82%b5%e3%83%bc%e3%83%93%e3%82%b9/" data-wpel-link="internal" target="_blank" rel="noopener noreferrer">
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
          <a class="cardtype__link" href="https://reashu.com/category/%e5%b0%b1%e6%b4%bb%e3%82%b5%e3%82%a4%e3%83%88/" data-wpel-link="internal" target="_blank" rel="noopener noreferrer">
          
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
  
    

    
  </div>
  
  <div class="sidebar"></div>

  </div>

  <?php include($_SERVER['DOCUMENT_ROOT']."/php/parts/_footer.php"); ?>

<!-- jquery↓↓↓↓  -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="/js/topPage.js"></script>
<script src="/js/header.js"></script>
<script src="/js/footer.js"></script>
<script src="/js/card.js"></script>



</body>
</html>
