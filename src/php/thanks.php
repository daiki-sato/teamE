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
    </div>



  <?php
  require "top_sp_card.php"; //top_sp_card.phpのプログラムを使うよ
  ?>
  
  <!--$thanksPage_recommended__image,:  エージェント画像    
      $thanksPage_recommended__agant_name,：企業の名前 （例）キャリセン
      $thanksPage_recommended__hashtag,    :（例）星3以上、理系,文系
      $thanksPage_recommended__stars_rating  :（例）4.0 星の数
      $thanksPage_recommended__contents_explanation: 企業の説明文
      thanksPage_recommended_button__submit: 続けて申し込むor外部サイトから追加するor資料請求資料請求リストに追加する -->

      <!-- ここの引数に関数を入れてfor文で回してね -->
      
  <?php
  for ($i=0; $i < 132; $i++) { 
    part_sp_card(
      "../img/キャリセン.png",
      "キャリセン",
      "#星3以上",
      "4.0",
      "採用コンサルタントが、じっくり1時間の個別面談。
      一人一人に合った納得内定獲得を徹底的にサポート。",
      "続けて申し込む"
    ); 
  }
  ?>

  <script src="../js/thanks.js"></script>
</body>
</html>