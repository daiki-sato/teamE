<?php
//セッションを開始
session_start(); 
//エスケープ処理やデータをチェックする関数を記述したファイルの読み込み
require '../libs/functions.php'; 
//メールアドレス等を記述したファイルの読み込み
require '../libs/mailvars.php'; 
 
//お問い合わせ日時を日本時間に
date_default_timezone_set('Asia/Tokyo'); 
 
//POSTされたデータをチェック
$_POST = checkInput( $_POST );
//固定トークンを確認（CSRF対策）
if ( isset( $_POST[ 'ticket' ], $_SESSION[ 'ticket' ] ) ) {
  $ticket = $_POST[ 'ticket' ];
  if ( $ticket !== $_SESSION[ 'ticket' ] ) {
    //トークンが一致しない場合は処理を中止
    die( 'Access denied' );
  }
} else {
  //トークンが存在しない場合（入力ページにリダイレクト）
  //die( 'Access Denied（直接このページにはアクセスできません）' );  //処理を中止する場合
  $dirname = dirname( $_SERVER[ 'SCRIPT_NAME' ] );
  $dirname = $dirname == DIRECTORY_SEPARATOR ? '' : $dirname;
  $url = ( empty( $_SERVER[ 'HTTPS' ] ) ? 'http://' : 'https://' ) . $_SERVER[ 'SERVER_NAME' ] . $dirname . '/contact.php';
  header( 'HTTP/1.1 303 See Other' );
  header( 'location: ' . $url );
  exit; //忘れないように
}
 
//変数にエスケープ処理したセッション変数の値を代入
$name = h( $_SESSION[ 'name' ] );
$furigana = h( $_SESSION[ 'furigana' ] );
$email = h( $_SESSION[ 'email' ] ) ;
$tel =  h( $_SESSION[ 'tel' ] ) ;
$subject = h( $_SESSION[ 'subject' ] );
$body = h( $_SESSION[ 'body' ] );

//スプシのwebURL
$url = 'https://script.google.com/macros/s/AKfycbza_W0W9nfKHOW-XGeuhvqSoYYer16177s6WdcuOQpV2UXTIR0Gcq24zEoCdhK9DAZXUw/exec';
// すぷしに持っていくデータの設定
$data = array(
    'name' => $name,
    'furigana' => $furigana,
);
// リクエスト情報の設定
$context = array(
    'http' => array(
        'method'  => 'POST',
        'header'  => implode("\r\n", array('Content-Type: application/x-www-form-urlencoded',)),
        'content' => http_build_query($data)
    )
);
// リクエストの実装
$response_json = file_get_contents($url, false, stream_context_create($context));
// jsonの文字列をPHPで扱いやすくしている
$response_data = json_decode($response_json);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>コンタクトフォーム（完了）</title>
<link href="../bootstrap.min.css" rel="stylesheet">
<link href="../style.css" rel="stylesheet">
</head>
<body>
<div class="container">
  <h2>お問い合わせフォーム</h2>
  <!-- スプシにsession情報をおくれている　→　成功 -->
  <?php if ( $response_data->status === 200 ): ?>
  <h3>送信完了!</h3>
  <p>お問い合わせいただきありがとうございます。</p>
  <p>送信完了いたしました。</p>
  <?php else: ?>
  <p>申し訳ございませんが、送信に失敗しました。</p>
  <p>しばらくしてもう一度お試しになるか、メールにてご連絡ください。</p>
  <p>ご迷惑をおかけして誠に申し訳ございません。</p>
  <?php endif; ?>
</div>
</body>
</html>