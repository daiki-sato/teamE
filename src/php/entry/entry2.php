<?php
//セッションを開始
session_start();
//エスケープ処理やデータチェックを行う関数のファイルの読み込み
require '../libs/functions.php';
//POSTされたデータをチェック
$_POST = checkInput($_POST);
//固定トークンを確認（CSRF対策）
if (isset($_POST['ticket'], $_SESSION['ticket'])) {
  $ticket = $_POST['ticket'];
  if ($ticket !== $_SESSION['ticket']) {
    //トークンが一致しない場合は処理を中止
    die('Access Denied!');
  }
} else {
  //トークンが存在しない場合は処理を中止（直接このページにアクセスするとエラーになる）
  die('Access Denied（直接このページにはアクセスできません）');
}

// 申し込みエージェント情報
$agent = isset($_SESSION['agent']) ? $_SESSION['agent'] : NULL;
var_dump($agent);

//初回以外ですでにセッション変数に値が代入されていれば、その値を。そうでなければNULLで初期化
$university = isset($_SESSION['university']) ? $_SESSION['university'] : NULL;
$department = isset($_SESSION['department']) ? $_SESSION['department'] : NULL;
$subject = isset($_SESSION['subject']) ? $_SESSION['subject'] : NULL;
$graduationyear = isset($_SESSION['graduationyear']) ? $_SESSION['graduationyear'] : NULL;
$worklocation = isset($_SESSION['worklocation']) ? $_SESSION['worklocation'] : NULL;

//POSTされたデータを変数に格納
$familyname = isset($_POST['familyname']) ? $_POST['familyname'] : NULL;
$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : NULL;
$familyfurigana = isset($_POST['familyfurigana']) ? $_POST['familyfurigana'] : NULL;
$firstfurigana = isset($_POST['firstfurigana']) ? $_POST['firstfurigana'] : NULL;
$year = isset($_POST['year']) ? $_POST['year'] : NULL;
$month = isset($_POST['month']) ? $_POST['month'] : NULL;
$day = isset($_POST['day']) ? $_POST['day'] : NULL;
$sex = isset($_POST['sex']) ? $_POST['sex'] : NULL;
$prefecture = isset($_POST['prefecture']) ? $_POST['prefecture'] : NULL;


//POSTされたデータを整形（前後にあるホワイトスペースを削除）
$familyname = trim($familyname);
$firstname = trim($firstname);
$familyfurigana = trim($familyfurigana);
$firstfurigana = trim($firstfurigana);


//POSTされたデータとエラーの配列をセッション変数に保存
$_SESSION['familyname'] = $familyname;
$_SESSION['firstname'] = $firstname;
$_SESSION['familyfurigana'] = $familyfurigana;
$_SESSION['firstfurigana'] = $firstfurigana;
$_SESSION['year'] = $year;
$_SESSION['month'] = $month;
$_SESSION['day'] = $day;
$_SESSION['sex'] = $sex;
$_SESSION['prefecture'] = $prefecture;
?>

<!DOCTYPE html>
<html lang="ja">
  
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>申し込みフォーム2</title>
  <link rel="stylesheet" href="/css/style.css">
</head>

<body>
  
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/php/parts/_header.php"); ?>
  
  <div class="container">
    
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
        <form id="main_contact" method="post" action="entry3.php">
          <div class="form-group">
            <label for="university" class="entry-label">大学・大学院</label>
            <div class="inputarea">
              <span class="error"><?php echo h($error_university); ?></span>
              <input type="text" class="form-control validate university required" id="university" name="university" placeholder="大学・大学院" value="<?php echo h($university); ?>">
            </div>
          </div>

          <div class="form-group">
            <label for="department" class="entry-label">学部</label>
            <div class="inputarea">
              <span class="error"><?php echo h($error_department); ?></span>
              <input type="text" class="form-control validate department required" id="department" name="department" placeholder="Email アドレス（確認のためもう一度ご入力ください。）" value="<?php echo h($department); ?>">
            </div>
          </div>

          <div class="form-group">
            <label for="subject" class="entry-label">学科</label>
            <div class="inputarea">
              <span class="error"><?php echo h($error_subject); ?></span>
              <span class="error"><?php echo h($error_subject_format); ?></span>
              <input type="text" class="validate max30 subject form-control" id="subject" name="subject" value="<?php echo h($subject); ?>" placeholder="お電話番号（半角英数字でご入力ください）">
            </div>
          </div>

          <div class="form-group">
            <label for="graduationyear" class="entry-label">卒業年</label>
            <div class="inputarea">
              <span class="error"><?php echo h($error_graduationyear); ?></span>
              <select class="form-control validate max50 required" id="graduationyear" name="graduationyear" placeholder="年" value="<?php echo h($graduationyear); ?>">
                <option value='' disabled selected style='display:none;'>年</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="worklocation" class="entry-label">勤務希望地</label>
            <span class="error"><?php echo h($error_worklocation); ?></span>
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
            <!-- 完了ページへ渡すトークンの隠しフィールド -->
            <input type="hidden" name="ticket" value="<?php echo h($ticket); ?>">
            <button type="submit" class="btn btn-success">次へ</button>
          </form>
        </div>

        <div class="entry__cancelbutton">
          <form action="entry1.php" method="post" class="confirm">
            <button type="submit" class="btn btn-secondary"><span>申し込みをキャンセルする<br>(入力情報は保存されません)</span></button>
          </form>
        </div>

      </div>

      <div>
        <details class="confirmlist__box">
          <summary class="confirmlist__title">資料請求リスト</summary>
          <div class="card">
            <p>card入れる</p>
          </div>
        </details>
      </div>

    </div>

  </div>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="/js/header.js"></script>
</body>

</html>