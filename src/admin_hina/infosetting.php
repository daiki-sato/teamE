<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>掲載情報一覧</title>
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
  integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/reset/_reset.scss">
  <link rel="stylesheet" href="/admin_hina_css/style.css">
  <link rel="stylesheet" href="/admin_hina_css/infosetting.css">
</head>
<body>
    <header class="header">
    <span class="header__text">管理画面</span>
    <img src="../logo.png" class="header__logo" alt="就活の教科書ロゴ">
    <nav class="menu">
        <a href="logout.php" class="header__logout">ログアウト</a>
    </nav>
    </header>

    <div class="body">
      <div class="sidebar">
        <div class="sidebar__content">
          <i class="fas fa-plus fa-6x"></i>
          <p class="newpublish">新規掲載</p>
        </div>

        <div class="sidebar__content">
          <i class="far fa-address-book fa-6x"></i>
          <p class="infosetting">掲載情報一覧</p>
        </div>

        <!-- <div class="sidebar__content">
          <i class="fas fa-sort-amount-down fa-6x"></i>
          <p class="ordersetting">掲載順位管理</p>
        </div> -->

        <div class="sidebar__content">
          <i class="fas fa-hashtag fa-6x"></i>
          <p class="tagsetting">タグ管理</p>
        </div>
      </div> 

      <main>
          <div class="wrapper">
              <div class="container">
                  <div class="wrapper-title">
                      <h3>掲載情報一覧</h3>
                  </div>
                  <div class="companycard">
                    <div>
                      <span class="companyname__text">キャリセン</span>
                    </div>
                    <div class="companyinfo">
                      <div class="companyinfo__left">
                        <img src="#" alt="企業写真" class="companyimg">
                      </div>
                      <div class="companyinfo__right">
                        <div class="info">
                          <span class="info__title">概要</span>
                          <p class="overview">採用コンサルタントが、じっくり1時間の個別面談。
                            一人ひとりに合った納得内定獲得を徹底的にサポート。</p>
                        </div>
                        <div class="info">
                          <span class="info__title">掲載上限数</span>
                          <p class="max-data-limit">n件</p>
                        </div>
                        <div class="info">
                          <span class="info__title">掲載期限</span>
                          <p class="limitdate">n件</p>
                        </div>
                        <div class="info">
                          <span class="info__title">ボタンの種類</span>
                          <p class="buttontype">内部サイト</p>
                        </div>
                        <div class="info">
                          <span class="info__title">公式サイトリンク</span>
                          <p class="companylink">a</p>
                        </div>
                        <div class="info">
                          <span class="info__title">詳細記事ページリンク</span>
                          <p class="articlelink">b</p>
                        </div>
                        <div class="info">
                          <span class="info__title">タグ</span>
                          <p class="hashtag">#理系</p>
                        </div>
                        <div class="info">
                          <span class="info__title">メモ</span>
                          <p class="notes">あいう</p>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
      </main>
    </div>

<!-- <script src="./post.js"></script> -->
</body>
</html>