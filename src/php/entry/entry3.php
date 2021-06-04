<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>申し込みフォーム3</title>
  <link rel="stylesheet" href="/css/reset/reset.css">
  <link rel="stylesheet" href="/css/parts/header.css">
  <link rel="stylesheet" href="/css/parts/entry.css">
  <link rel="stylesheet" href="/css/parts/confirmlist.css">
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

</body>
</html>