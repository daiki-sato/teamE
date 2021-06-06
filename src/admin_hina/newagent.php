<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>新規掲載画面</title>
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
  integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/reset/_reset.scss">
  <link rel="stylesheet" href="/admin_hina_css/style.css">
  <link rel="stylesheet" href="/admin_hina_css/newagent.css">
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
                      <h3>新規掲載</h3>
                  </div>
                  <div class="inputfield">
                    <form id="#" method="post" action="#"></form>
                    <div class="form-group">
                      <label for="companyname" class="label">会社名</label>
                      <input type="text" name="name" id="companyname">
                    </div>
                    <div class="form-group">
                      <span class="label">写真</span>
                      <div id="dragDropArea">
                        <div class="drag-drop-inside">
                          <p class="drag-drop-info">ここにファイルをドロップ</p>
                          <p>または</p>
                          <p class="drag-drop-buttons">
                              <input id="fileInput" type="file" accept="image/*" value="ファイルを選択" name="photo" onChange="photoPreview(event)">
                          </p>
                        </div>
                        <div id="previewArea"></div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="overview" class="label">概要</label>
                      <input type="text" name="summary" id="overview">
                    </div>
                    <div class="form-group">
                      <label for="max-data-limit" class="label">掲載上限</label>
                      <select name="items" id="max-data-limit">
                        <option value='' disabled selected style='display:none;'>件</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="limitdate" class="label">掲載期限</label>
                      <input type="date" name="limitdate" id="limitdate">
                    </div>
                    <div class="form-group">
                      <p class="label">ボタンの種類</p>
                      <input id="radio-a" type="radio" name="buttontype" value="内部サイト"><label for="radio-a" class="option__text">内部サイトから申し込み</label>
                      <input id="radio-b" type="radio" name="buttontype" value="外部サイト"><label for="radio-b" class="option__text">外部サイトから申し込み</label>
                    </div>
                    <div class="form-group">
                      <p class="label">PICK UPへの掲載の可否</p>
                      <input id="check-a" type="checkbox" name="pickup" value="PICK UP"><label for="check-a" class="option__text">PICK UP</label>
                    </div>
                    <div class="form-group">
                      <label for="stars-rate" class="label">星の数</label>
                      <select name="pull-down" id="stars-rate">
                        <option value='' disabled selected style='display:none;'>個</option>
                        <option value="0.5">0.5</option>
                        <option value="1">1</option>
                        <option value="1.5">1.5</option>
                        <option value="2">2</option>
                        <option value="2.5">2.5</option>
                        <option value="3">3</option>
                        <option value="3.5">3.5</option>
                        <option value="4">4</option>
                        <option value="4.5">4.5</option>
                        <option value="5">5</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="companylink" class="label">公式サイトリンク</label>
                      <input type="text" name="companylink" id="companylink">
                    </div>
                    <div class="form-group">
                      <label for="articlelink" class="label">詳細記事ページリンク</label>
                      <input type="text" name="articlelink" id="articlelink">
                    </div>
                    <div class="form-group">
                      <label for="hashtag" class="label">タグ</label>
                      <input type="text" name="hashtag" id="hashtag">
                    </div>
                    <div class="form-group">
                      <label for="notes" class="label">メモ</label>
                      <input type="text" name="notes" id="notes">
                    </div>
                    <div class="form-group">
                      <p class="label">掲載状況</p>
                      <input id="check-b" type="checkbox" name="publish" value="publish"><label for="check-b" class="option__text">掲載</label>
                    </div>
                  </div>
                  <button type="submit" name="submit" value="登録" class="submitbtn">登録</button>
              </div>
          </div>
      </main>
    </div>

<script src="/admin_hina_js/dragdrop.js"></script>
</body>
</html>