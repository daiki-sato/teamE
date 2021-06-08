<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>申し込みフォーム3</title>
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
  
  <?php include($_SERVER['DOCUMENT_ROOT']."/php/parts/_header.php"); ?>

  <div class="container">

  <h1 class="entry-title">&emsp;お申し込み&emsp;</h1>

  <div class="entry-container">

    <div class="entry-page__top">
    　<div class="entry-page__title">
    　  <div class="entry-page__title-triangle"></div>
    　  <h1 class="entry-page__title-text">ご連絡先をご入力ください</h1>
    　</div>
    
    　<div class="entry-page__whereareyouat">
        <div class="whereareyouat__icon">
          <span class="whereareyouat__invalid">
            <span class="whereareyouat__invalid-number">1</span>
          </span>
        </div>
        <div class="whereareyouat__icon">
          <span class="whereareyouat__invalid">
            <span class="whereareyouat__invalid-number">2</span>
          </span>
        </div>
        <div class="whereareyouat__icon">
          <span class="whereareyouat__valid">
            <span class="whereareyouat__valid-number">3</span>
          </span>
        </div>
    　</div>
    </div>
  
    <div class="entry-area">
      <form id="main_contact" method="post" action="confirm.php">
        <div class="form-group">
          <label for="email" class="entry-label">メールアドレス</label>
          <div class="inputarea">
            <span class="error"><?php echo h( $error_email ); ?></span>
            <input type="text" class="form-control validate email required" id="email" name="email" placeholder="Email アドレス" value="<?php echo h($email); ?>">
          </div>
        </div>
        
        <div class="form-group">
          <label for="email_check" class="entry-label">メールアドレス（確認用）</label>
          <div class="inputarea">
            <span class="error"><?php echo h( $error_email_check ); ?></span>
            <input type="text" class="form-control validate email_check required" id="email_check" name="email_check" placeholder="Email アドレス（確認のためもう一度ご入力ください。）" value="<?php echo h($email_check); ?>">
          </div> 
        </div>
        
        <div class="form-group">
          <label for="tel" class="entry-label">お電話番号（半角英数字）</label>
          <div class="inputarea">
            <span class="error"><?php echo h( $error_tel ); ?></span>
            <span class="error"><?php echo h( $error_tel_format ); ?></span>
            <input type="text" class="validate max30 tel form-control" id="tel" name="tel" value="<?php echo h($tel); ?>" placeholder="お電話番号（半角英数字でご入力ください）">
          </div>
        </div>
        
        <div class="form-group">
          <label for="body" class="entry-label">ご要望欄（任意） </label>
          <div class="inputarea">
            <span class="error"><?php echo h( $error_body ); ?></span>
            <textarea class="form-control validate max1000 required" id="body" name="body" placeholder="お問い合わせ内容（1000文字まで）をお書きください" rows="3"><?php echo h($body); ?></textarea>
            <!-- <span id="count"> </span>/1000 -->
          </div>
        </div>
        
      </form>
    </div>
    
    <div class="compare__box">
      <div class="compare__title">
        <p class="compare__title-text">よく比較・検討されているエージェント</p>
        <p class="compare__title-text2">内定者は平均5エージェントから話を聞いています！</p>
      </div>
      <div class="compare__contents">
        <!-- cardが入ります -->
      </div>
    </div>
    
    <div class="entry__buttons">
      
      <div class="entry__submitbutton">
        <p>
          <span>確認画面へ</span>
        </p>
      </div>
      
      <div class="entry__cancelbutton">
        <p>
          <span>申し込みをキャンセルする<br>(入力情報は保存されません)</span>
        </p>
      </div>
      
    </div>
    
    <div>
      <details class="confirmlist__box">
        <summary class="confirmlist__title">資料請求リスト</summary>
        <div class="card"><p>card入れる</p></div>
      </details>
    </div>
  
  </div>

  </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="/js/header.js"></script>
</body>
</html>