<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>サンクスページ_sp</title>
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/thanks.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
　<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>
<body>
  <div id='text' class="thanksPage-container">

    <div class="thanksPage-title__text">
      <h1 class="thanksPage-title__pagetop">Thanks!</h1>
      <h2 class="thanksPage-title__pagetop2">お申し込みありがとうございます</h2>
      <h3 class="thanksPage-title__pagetop3">お申し込み内容の確認についてのメールを送信しました。</h3>
    </div>

    <div class="thanksPage-title__alert--parent">
      <p class="thanksPage-title__alert--child">
        メールが届かない場合、まずは迷惑フォルダをご確認ください。<br>
        無い場合には、お手数ですが<br>
        就活の教科書△△△○○@□□.com<br>
        までお問い合わせください。
      </p>
    </div>

    <div class="thanksPage-recommended__title--parent">
      <div class="thanksPage-recommended__title--child">
        <div class="thanksPage-recommended__triangle"></div>
        <h4 class="thanksPage-recommended__text">あなたにおすすめのエージェント</h4>
        <div class="thanksPage-recommended__triangle"></div>
        <div class="thanksPage-recommended--parent"></div>
    </div>

    <div class="thanksPage-reccomended__contents--parent">
      <div class="thanksPage-recommended__contents-summary">

        <div class="thanksPage-recommended__contents-summary--left">
          <img src="#" class="thanksPage-recommended__image" alt="エージェント画像が入ります">
        </div>

        <div class="thanksPage-recommended__contents-summary--right">    
          <p class="thanksPage-recommended__agant-name--box">
            <a href="#" class="thanksPage-recommended__agant-name">キャリセン</a>
          </p>
          <p class="thanksPage-recommended__hashtag">
            #星3以上
          </p>
          <p class="thanksPage-recommended__stars">
            <span class="thanksPage-recommended__stars-rating" data-rate="3"></span>&ensp;3.0
          </p>
        </div>

      </div>

      <div class="thanksPage-recommended__contents-explanation">
        採用コンサルタントが、じっくり1時間の個別面談。<br>
        一人一人に合った納得内定獲得を徹底的にサポート。
      </div>

      <div class="thanksPage-recommended-buttons">
        <p>
          <span class="thanksPage-recommended-button__article">解説記事</span>
        </p>
        <p id="submitbutton" onClick='showDialog()'>
          <span class="thanksPage-recommended-button__submit">続けて申し込む</span>
        </p>

        <!-- 申し込み完了モーダル -->
        <div id="modal" class="thanksPafe-container__hidden">
          <div class="thanksPage_modal-content">
            <div class="thanksPage_modal-body">
            <h4>申し込み完了！</h4>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <script src="../js/thanks/js"></script>
</body>
</html>