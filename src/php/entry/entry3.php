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
$email = isset($_SESSION['email']) ? $_SESSION['email'] : NULL;
$email_check = isset($_SESSION['email_check']) ? $_SESSION['email_check'] : NULL;
$tel = isset($_SESSION['tel']) ? $_SESSION['tel'] : NULL;
$body = isset($_SESSION['body']) ? $_SESSION['body'] : NULL;

//POSTされたデータを変数に格納
$university = isset($_POST['university']) ? $_POST['university'] : NULL;
$department = isset($_POST['department']) ? $_POST['department'] : NULL;
$subject = isset($_POST['subject']) ? $_POST['subject'] : NULL;
$graduationyear = isset($_POST['graduationyear']) ? $_POST['graduationyear'] : NULL;
$worklocation = isset($_POST['worklocation']) ? $_POST['worklocation'] : NULL;


//POSTされたデータを整形（前後にあるホワイトスペースを削除）
$university = trim($university);
$department = trim($department);
$subject = trim($subject);

//POSTされたデータとエラーの配列をセッション変数に保存
$_SESSION['university'] = $university;
$_SESSION['department'] = $department;
$_SESSION['subject'] = $subject;
$_SESSION['graduationyear'] = $graduationyear;
$_SESSION['worklocation'] = $worklocation;

?>

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
      <form id="main_contact" method="post" action="../applicationconfirm/applicationconfirm.php">
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
            <button type="submit" class="btn btn-success" id="nextbutton">確認画面へ</button>
          </form>
      </div>
      
      <div class="entry__cancelbutton">
      <form action="entry1.php" method="post" class="confirm">
            <button type="submit" class="btn btn-secondary" id="cancelbutton">申し込みをキャンセルする<br>(入力情報は保存されません)</button>
          </form>
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
<script src="/js/entry.js"></script>
</body>
</html>