<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>タグ管理</title>
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
  integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/reset/_reset.scss">
    <link rel="stylesheet" href="/admin_css/style.css">
    <link rel="stylesheet" href="/admin_css/tagmanage.css">
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

        <div class="sidebar__content">
          <i class="fas fa-hashtag fa-6x"></i>
          <p class="tagsetting">タグ管理</p>
        </div>
      </div> 

      <main>
          <div class="wrapper">
              <div class="container">
                  <div class="wrapper-title">
                      <h3>タグ管理</h3>
                  </div>          

                  <div class="newtag-add-area">
                  <label for="newtag" class="newtag__title">新規タグ：</label>
                  <input type="text" name="newtag" id="newtag">
                  <button type="tag_submit" name="tag_submit" value="登録" class="submitbtn">登録</button>
                  </div>

                  <div class="tagarea">
                    <div class="tagname-area">
                      <p class="tagname">#理系</p>
                    </div>
                    <div class="agentarea">
                      <p class="agentname">キャリセン</p>
                      <p class="agentname">キャリアチケット</p>
                    </div>
                  </div>

              </div>
          </div>
      </main>
    </div>

</body>
</html>