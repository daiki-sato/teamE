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
echo  $_SESSION['year'];


//POSTされたデータを変数に格納
$email = isset($_POST['email']) ? $_POST['email'] : NULL;
$email_check = isset($_POST['email_check']) ? $_POST['email_check'] : NULL;
$tel = isset($_POST['tel']) ? $_POST['tel'] : NULL;
$body = isset($_POST['body']) ? $_POST['body'] : NULL;

//POSTされたデータを整形（前後にあるホワイトスペースを削除）
$email = trim($email);
$email_check = trim($email_check);
$tel = trim($tel);
$body = trim($body);

//POSTされたデータとエラーの配列をセッション変数に保存
$_SESSION['email'] = $email;
$_SESSION['email_check'] = $email_check;
$_SESSION['tel'] = $tel;
$_SESSION['body'] = $body;

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>入力内容確認ページ</title>
  <link rel="stylesheet" href="/css/style.css">
  <!-- google font のリンク-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  　
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>

<body>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/php/parts/_header.php"); ?>

  <div class="container">

    <div class="applicationconfirm-container">

      <div class="applicationconfirm-title">
        <div class="applicationconfirm-title__triangle"></div>
        <h1 class="applicationconfirm-title__text">ご入力内容をご確認ください</h1>
      </div>

      <div class="applicationconfirm-content">
        <ul class="applicationfirm-content__group">
          <li class="applicationconfirm-content__question">お名前</li>
          <ol>
            <li class="applicationconfirm-content__answer"><?= $_SESSION['familyname'] ?>　<?= $_SESSION['firstname'] ?></li>
          </ol>
        </ul>
        <ul class="applicationfirm-content__group">
          <li class="applicationconfirm-content__question">フリガナ</li>
          <ol>
            <li class="applicationconfirm-content__answer"><?= $_SESSION['familyfurigana'] ?>　<?= $_SESSION['firstfurigana'] ?></li>
          </ol>
        </ul>
        <ul class="applicationfirm-content__group">
          <li class="applicationconfirm-content__question">生年月日</li>
          <ol>
            <li class="applicationconfirm-content__answer"><?= $_SESSION['year'] ?>年<?= $_SESSION['month'] ?>月<?= $_SESSION['day'] ?>日</li>
          </ol>
        </ul>
        <ul class="applicationfirm-content__group">
          <li class="applicationconfirm-content__question">性別</li>
          <ol>
            <li class="applicationconfirm-content__answer"><?= $_SESSION['sex'] ?></li>
          </ol>
        </ul>
        <ul class="applicationfirm-content__group">
          <li class="applicationconfirm-content__question">お住まい</li>
          <ol>
            <li class="applicationconfirm-content__answer"><?= $_SESSION['prefecture'] ?></li>
          </ol>
        </ul>
        <ul class="applicationfirm-content__group">
          <li class="applicationconfirm-content__question">大学・大学院</li>
          <ol>
            <li class="applicationconfirm-content__answer"><?= $_SESSION['university'] ?></li>
          </ol>
        </ul>
        <ul class="applicationfirm-content__group">
          <li class="applicationconfirm-content__question">学部名</li>
          <ol>
            <li class="applicationconfirm-content__answer"><?= $_SESSION['department'] ?></li>
          </ol>
        </ul>
        <ul class="applicationfirm-content__group">
          <li class="applicationconfirm-content__question">学科名</li>
          <ol>
            <li class="applicationconfirm-content__answer"><?= $_SESSION['subject'] ?></li>
          </ol>
        </ul>
        <ul class="applicationfirm-content__group">
          <li class="applicationconfirm-content__question">卒業予定年</li>
          <ol>
            <li class="applicationconfirm-content__answer"><?= $_SESSION['graduationyear'] ?>年</li>
          </ol>
        </ul>
        <ul class="applicationfirm-content__group">
          <li class="applicationconfirm-content__question">勤務希望地</li>
          <ol>
            <li class="applicationconfirm-content__answer"><?= $_SESSION['worklocation'] ?></li>
          </ol>
        </ul>
        <ul class="applicationfirm-content__group">
          <li class="applicationconfirm-content__question">電話番号</li>
          <ol>
            <li class="applicationconfirm-content__answer"><?= $_SESSION['tel'] ?></li>
          </ol>
        </ul>
        <ul class="applicationfirm-content__group">
          <li class="applicationconfirm-content__question">メールアドレス</li>
          <ol>
            <li class="applicationconfirm-content__answer"><?= $_SESSION['email'] ?></li>
          </ol>
        </ul>
        <ul class="applicationfirm-content__group">
          <li class="applicationconfirm-content__question">ご要望欄（任意）</li>
          <ol>
            <li class="applicationconfirm-content__answer"><?= $_SESSION['body']  ?></li>
          </ol>
        </ul>
        　　　
        <div class="applicationconfirm-button">
          <button>
            <form action="../thanksPage/thanks.php" method="post" class="confirm">
              <!-- 完了ページへ渡すトークンの隠しフィールド -->
              <input type="hidden" name="ticket" value="<?php echo h($ticket); ?>">
              <button type="submit" class="btn btn-success"><span class="applicationconfirm-button__submit">同意して送信する</span></button>
            </form>
          </button>
          <button>
            <form action="../entry/entry3.php" method="post" class="confirm">
              <button type="submit" class="btn btn-secondary"><span class="applicationconfirm-button__cancel">戻る・修正する</span></button>
            </form>
          </button>
        </div>
      </div>

    </div>

  </div>

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="/js/header.js"></script>
</body>

</html>