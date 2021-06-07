<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>top_sp_card</title>
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
  <div class="card-sp">
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

    <div class="card-sp-buttons">
      <button id="articlebtn" class="card-sp__button-article">
        <p>解説記事</p>
      </button>
        
      <button id="continueapply" class="card-sp__button-submit">
        <p>続けて申し込む</p>
      </button>
    </div>

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


<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="./card.js"></script>
</body>
</html>