<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>申し込みフォーム2</title>
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
      <h1 class="entry-page__title-text">現在の状況をご入力ください</h1>
    　</div>
    　
    　<div class="entry-page__whereareyouat">
      <div class="whereareyouat__icon">
        <span class="whereareyouat__invalid">
          <span class="whereareyouat__invalid-number">1</span>
        </span>
      </div>
      <div class="whereareyouat__icon">
        <span class="whereareyouat__valid">
          <span class="whereareyouat__valid-number">2</span>
        </span>
      </div>
      <div class="whereareyouat__icon">
        <span class="whereareyouat__invalid">
          <span class="whereareyouat__invalid-number">3</span>
        </span>
      </div>
    　</div>
    </div>
  
    <div class="entry-area">
      <form id="main_contact" method="post" action="confirm.php">
        <div class="form-group">
          <label for="university" class="entry-label">大学・大学院</label>
          <div class="inputarea">
            <span class="error"><?php echo h( $university ); ?></span>
            <input type="text" class="form-control validate university required" id="university" name="university" placeholder="大学・大学院" value="<?php echo h($email); ?>">
          </div>
        </div>
        
        <div class="form-group">
          <label for="department" class="entry-label">学部</label>
          <div class="inputarea">
            <span class="error"><?php echo h( $error_department ); ?></span>
            <input type="text" class="form-control validate department required" id="department" name="department" placeholder="Email アドレス（確認のためもう一度ご入力ください。）" value="<?php echo h($department); ?>">
          </div> 
        </div>
        
        <div class="form-group">
          <label for="subject" class="entry-label">学科</label>
          <div class="inputarea">
            <span class="error"><?php echo h( $error_subject ); ?></span>
            <span class="error"><?php echo h( $error_subject_format ); ?></span>
            <input type="text" class="validate max30 subject form-control" id="subject" name="subject" value="<?php echo h($subject); ?>" placeholder="お電話番号（半角英数字でご入力ください）">
          </div>
        </div>
        
        <div class="form-group">
          <label for="graduationyear" class="entry-label">卒業年</label>
          <div class="inputarea">
            <span class="error"><?php echo h( $graduationyear ); ?></span>
            <select class="form-control validate max50 required" id="graduationyear" name="graduationyear" placeholder="年" value="<?php echo h($graduationyear); ?>">
            <option value='' disabled selected style='display:none;'>年</option>
            <option value="1995">2021</option>
            <option value="1996">2022</option>
            <option value="1997">2023</option>
            <option value="1998">2024</option>
            <option value="1999">2025</option>
            <option value="2000">2026</option>
            </select>
          </div>
        </div>
        
        <div class="form-group">
          <label for="worklocation" class="entry-label">勤務希望地</label>
            <span class="error"><?php echo h( $worklocation ); ?></span>
          <div class="inputarea">
            <select class="form-control validate max50 required" id="worklocation" name="worklocation" value="<?php echo h($worklocation); ?>">
            <option value='' disabled selected style='display:none;'>都道府県を選択してください</option>
            <option value="北海道">北海道</option>
            <option value="青森県">青森県</option>
            <option value="岩手県">岩手県</option>
            <option value="宮城県">宮城県</option>
            <option value="秋田県">秋田県</option>
            <option value="山形県">山形県</option>
            <option value="福島県">福島県</option>
            <option value="茨城県">茨城県</option>
            <option value="栃木県">栃木県</option>
            <option value="群馬県">群馬県</option>
            <option value="埼玉県">埼玉県</option>
            <option value="千葉県">千葉県</option>
            <option value="東京都" selected>東京都</option>
            <option value="神奈川県">神奈川県</option>
            <option value="新潟県">新潟県</option>
            <option value="富山県">富山県</option>
            <option value="石川県">石川県</option>
            <option value="福井県">福井県</option>
            <option value="山梨県">山梨県</option>
            <option value="長野県">長野県</option>
            <option value="岐阜県">岐阜県</option>
            <option value="静岡県">静岡県</option>
            <option value="愛知県">愛知県</option>
            <option value="三重県">三重県</option>
            <option value="滋賀県">滋賀県</option>
            <option value="京都府">京都府</option>
            <option value="大阪府">大阪府</option>
            <option value="兵庫県">兵庫県</option>
            <option value="奈良県">奈良県</option>
            <option value="和歌山県">和歌山県</option>
            <option value="鳥取県">鳥取県</option>
            <option value="島根県">島根県</option>
            <option value="岡山県">岡山県</option>
            <option value="広島県">広島県</option>
            <option value="山口県">山口県</option>
            <option value="徳島県">徳島県</option>
            <option value="香川県">香川県</option>
            <option value="愛媛県">愛媛県</option>
            <option value="高知県">高知県</option>
            <option value="福岡県">福岡県</option>
            <option value="佐賀県">佐賀県</option>
            <option value="長崎県">長崎県</option>
            <option value="熊本県">熊本県</option>
            <option value="大分県">大分県</option>
            <option value="宮崎県">宮崎県</option>
            <option value="鹿児島県">鹿児島県</option>
            <option value="沖縄県">沖縄県</option>
            </select>
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
        <span>次へ</span>
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