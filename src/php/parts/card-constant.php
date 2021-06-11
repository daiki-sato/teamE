<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
  
<!-- PC版無限ループ用カード -->
  <div class="card-pc__container">
  
    <div class="card-pc__left">
      <img src="#" class="card-pc__img" alt="エージェント画像が入ります">
    </div>

    <div class="card-pc__right"> 

　　　　　　　<div class="card-pc__agent-top">
        <p>
          <a href="#" class="card-pc__agant-name">キャリセン</a>
        </p>
        <p class="card-pc__hashtag">
          #星3以上
        </p>
      </div>
      
      <p class="card-pc__stars">
        <span class="card-pc__stars-rating" data-rate="3"></span>&ensp;3.0
      </p>

      <div class="card-pc__agent-explanation">
        採用コンサルタントが、じっくり1時間の個別面談。<br>
        一人一人に合った納得内定獲得を徹底的にサポート。
      </div>

      <div class="card-pc__buttons">
        <button id="articlebtn" class="card-pc__button-article">
          <p>解説記事</p> 
        </button>
      　<button id="continueapply" class="card-pc__button-submit">
      　  <p>続けて申し込む</p>
      　</button>  
    　</div>
    <!-- PC版無限ループ用カードここまで -->

    　<!-- 申し込み完了モーダル -->
    　<div id="modal" class="thanksPafe-container__hidden">
    　  <div class="thanksPage_modal-content">
    　    <div class="thanksPage_modal-body">
    　    <p>申し込み完了！</p>
    　    </div>
    　  </div>
    　</div>            

    </div>

  </div>

  <!-- SP版無限ループ用カード -->
  <div class="card-sp__container">
    <div class="card-sp-summary">

      <div class="card-sp-summary-left">
        <img src="#" class="card-sp__image" alt="エージェント画像が入ります">
      </div>

      <div class="card-sp-summary-right">    
        <p>
          <a href="#" class="card-sp__agent-name">キャリセン</a>
        </p>
        <p class="card-sp__hashtag">
          #星3以上
        </p>
        <p class="card-sp__stars">
          <span class="card-sp__stars-rating" data-rate="3"></span>&ensp;3.0
        </p>
      </div>

    </div>

    <div class="card-sp-explanation">
      採用コンサルタントが、じっくり1時間の個別面談。<br>
      一人一人に合った納得内定獲得を徹底的にサポート。
    </div>

    <div class="card-sp__buttons">
      <button id="articlebtn" class="card-sp__button-article">
        <p>解説記事</p>
      </button>
      <button id="continueapply" class="card-sp__button-submit">
        <p>続けて申し込む</p>
      </button>
    </div>
    <!-- SP版無限ループ用カードここまで -->

    <!-- 申し込み完了モーダル -->
    <div id="modal" class="thanksPafe-container__hidden">
      <div class="thanksPage_modal-content">
        <div class="thanksPage_modal-body">
        <p>申し込み完了！</p>
        </div>
      </div>
    </div>      
</div>
</div>

<script src="/js/card.js"></script>
<script src="/js/thanks.js"></script>
</body>
</html>