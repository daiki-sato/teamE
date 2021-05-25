  <?php
  //セッションを開始
  session_start();
  //セッションIDを更新して変更（セッションハイジャック対策）
  session_regenerate_id( TRUE );
  //エスケープ処理やデータチェックを行う関数のファイルの読み込み
  require '../../libs/functions.php';
  //初回以外ですでにセッション変数に値が代入されていれば、その値を。そうでなければNULLで初期化
  $name = isset( $_SESSION[ 'name' ] ) ? $_SESSION[ 'name' ] : NULL;
  $furigana =isset( $_SESSION[ 'furigana' ] ) ? $_SESSION[ 'furigana' ] : NULL;
  $email = isset( $_SESSION[ 'email' ] ) ? $_SESSION[ 'email' ] : NULL;
  $email_check = isset( $_SESSION[ 'email_check' ] ) ? $_SESSION[ 'email_check' ] : NULL;
  $tel = isset( $_SESSION[ 'tel' ] ) ? $_SESSION[ 'tel' ] : NULL;
  $subject = isset( $_SESSION[ 'subject' ] ) ? $_SESSION[ 'subject' ] : NULL;
  $body = isset( $_SESSION[ 'body' ] ) ? $_SESSION[ 'body' ] : NULL;
  $error = isset( $_SESSION[ 'error' ] ) ? $_SESSION[ 'error' ] : NULL;
  
  //個々のエラーを初期化
  $error_name = isset( $error['name'] ) ? $error['name'] : NULL;
  $error_furigana = isset( $error['furigana'] ) ? $error['furigana'] : NULL;
  $error_email = isset( $error['email'] ) ? $error['email'] : NULL;
  $error_email_check = isset( $error['email_check'] ) ? $error['email_check'] : NULL;
  $error_tel = isset( $error['tel'] ) ? $error['tel'] : NULL;
  $error_tel_format = isset( $error['tel_format'] ) ? $error['tel_format'] : NULL;
  $error_subject = isset( $error['subject'] ) ? $error['subject'] : NULL;
  $error_body = isset( $error['body'] ) ? $error['body'] : NULL;
  
  //CSRF対策の固定トークンを生成
  if ( !isset( $_SESSION[ 'ticket' ] ) ) {
    //セッション変数にトークンを代入
    $_SESSION[ 'ticket' ] = sha1( uniqid( mt_rand(), TRUE ) );
  }
  
  //トークンを変数に代入
  $ticket = $_SESSION[ 'ticket' ];
  ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>申し込みフォーム</title>
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/entry.css">
  <link href="../style.css" rel="stylesheet">
  <link href="../bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <div class="entry-title">
    <h2>お申し込み</h2>
  </div>

  <section class="entry-page">
    <p class="entry-page__text">基本情報をご入力ください</p>

<div class="container">
  
  <form id="main_contact" method="post" action="confirm.php">
    <div class="form-group">
      <label for="familyname">お名前
        <span class="error"><?php echo h( $error_familyname ); ?></span>
      </label>
      <input type="text" class="form-control validate max50 required" id="familyname" name="familyname" placeholder="高橋" value="<?php echo h($familyname); ?>">
    </div>

    <div class="form-group">
      <label for="firstname">
        <span class="error"><?php echo h( $error_firstname ); ?></span>
      </label>
      <input type="text" class="form-control validate max50 required" id="firstname" name="firstname" placeholder="日菜" value="<?php echo h($firstname); ?>">
    </div>

    <div class="form-group">フリガナ
      <label for="familyfurigana">
        <span class="error"><?php echo h( $error_familyfurigana ); ?></span>
      </label>
      <input type="text" class="form-control validate max50 required" id="familyfurigana" name="familyfurigana" placeholder="たかはし" value="<?php echo h($familyfurigana); ?>">
    </div>

    <div class="form-group">
      <label for="firstfurigana">
        <span class="error"><?php echo h( $error_firstfurigana ); ?></span>
      </label>
      <input type="text" class="form-control validate max50 required" id="firstfurigana" name="firstfurigana" placeholder="ひな" value="<?php echo h($firstfurigana); ?>">
    </div>


    <div class="form-group">
      <label for="year">生年月日
        <span class="error"><?php echo h( $year ); ?></span>
      </label>
      <select class="form-control validate max50 required" id="year" name="year" placeholder="年" value="<?php echo h($year); ?>">
        <option value='' disabled selected style='display:none;'>年</option>
        <option value="1995">1995</option>
        <option value="1996">1996</option>
        <option value="1997">1997</option>
        <option value="1998">1998</option>
        <option value="1999">1999</option>
        <option value="2000">2000</option>
        <option value="2001">2001</option>
        <option value="2002">2002</option>
        <option value="2003">2003</option>
        <option value="2004">2004</option>
        <option value="2005">2005</option>
      </select>
    </div>

    <div class="form-group">
      <label for="month">
        <span class="error"><?php echo h( $month ); ?></span>
      </label>
      <select class="form-control validate max50 required" id="month" name="month" placeholder="月" value="<?php echo h($month); ?>">
        <option value='' disabled selected style='display:none;'>月</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
      </select>
    </div>

    <div class="form-group">
      <label for="day">
        <span class="error"><?php echo h( $day ); ?></span>
      </label>
      <select class="form-control validate max50 required" id="day" name="day" value="<?php echo h($day); ?>">
        <option value='' disabled selected style='display:none;'>日</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
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
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
      </select>
    </div>

    <div class="form-group">
      <label for="sex">
        <span class="error"><?php echo h( $sex ); ?></span>
      </label>
      <select class="form-control validate max50 required" id="sex" name="sex" value="<?php echo h($sex); ?>">
        <option value="男性">男性</option>
        <option value="女性">女性</option>
        <option value="その他">その他</option>
      </select>
    </div>

    <div class="form-group">
      <label for="prefecture">
        <span class="error"><?php echo h( $prefecture ); ?></span>
      </label>
      <select class="form-control validate max50 required" id="prefecture" name="prefecture" value="<?php echo h($prefecture); ?>">
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

    


    <div class="form-group">
      <label for="email">Email（必須） 
        <span class="error"><?php echo h( $error_email ); ?></span>
      </label>
      <input type="text" class="form-control validate mail required" id="email" name="email" placeholder="Email アドレス" value="<?php echo h($email); ?>">
    </div>

    <div class="form-group">
      <label for="email_check">Email（確認用 必須） 
        <span class="error"><?php echo h( $error_email_check ); ?></span>
      </label>
      <input type="text" class="form-control validate email_check required" id="email_check" name="email_check" placeholder="Email アドレス（確認のためもう一度ご入力ください。）" value="<?php echo h($email_check); ?>">
    </div>

    <div class="form-group">
      <label for="tel">お電話番号（半角英数字） 
        <span class="error"><?php echo h( $error_tel ); ?></span>
        <span class="error"><?php echo h( $error_tel_format ); ?></span>
      </label>
      <input type="text" class="validate max30 tel form-control" id="tel" name="tel" value="<?php echo h($tel); ?>" placeholder="お電話番号（半角英数字でご入力ください）">
    </div>

    <div class="form-group">
      <label for="subject">件名（必須） 
        <span class="error"><?php echo h( $error_subject ); ?></span> 
      </label>
      <input type="text" class="form-control validate max100 required" id="subject" name="subject" placeholder="件名" value="<?php echo h($subject); ?>">
    </div>

    <div class="form-group">
      <label for="body">お問い合わせ内容（必須） 
        <span class="error"><?php echo h( $error_body ); ?></span>
      </label>
      <span id="count"> </span>/1000
      <textarea class="form-control validate max1000 required" id="body" name="body" placeholder="お問い合わせ内容（1000文字まで）をお書きください" rows="3"><?php echo h($body); ?></textarea>
    </div>

    <button type="submit" class="btn btn-primary">確認画面へ</button>
    <!--確認ページへトークンをPOSTする、隠しフィールド「ticket」-->
    <input type="hidden" name="ticket" value="<?php echo h($ticket); ?>">
  </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
<script>
jQuery(function($){
  
  //エラーを表示する関数（error クラスの p 要素を追加して表示）
  function show_error(message, this$) {
    text = this$.parent().find('label').text() + message;
    this$.parent().append("<p class='error'>" + text + "</p>");
  }
  
  //フォームが送信される際のイベントハンドラの設定
  $("#main_contact").submit(function(){
    //エラー表示の初期化
    $("p.error").remove();
    $("div").removeClass("error");
    var text = "";
    $("#errorDispaly").remove();
    
    //メールアドレスの検証
    var email =  $.trim($("#email").val());
    if(email && !(/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/gi).test(email)){
      $("#email").after("<p class='error'>メールアドレスの形式が異なります</p>");
    }
    //確認用メールアドレスの検証
    var email_check =  $.trim($("#email_check").val());
    if(email_check && email_check != $.trim($("input[name="+$("#email_check").attr("name").replace(/^(.+)_check$/, "$1")+"]").val())){
      show_error("が異なります", $("#email_check"));
    }
    //電話番号の検証
    var tel = $.trim($("#tel").val());
    if(tel && !(/^\(?\d{2,5}\)?[-(\.\s]{0,2}\d{1,4}[-)\.\s]{0,2}\d{3,4}$/gi).test(tel)){
      $("#tel").after("<p class='error'>電話番号の形式が異なります（半角英数字でご入力ください）</p>");
    }
    
    //1行テキスト入力フォームとテキストエリアの検証
    $(":text,textarea").filter(".validate").each(function(){
      //必須項目の検証
      $(this).filter(".required").each(function(){
        if($(this).val()==""){
          show_error(" は必須項目です", $(this));
        }
      });
      //文字数の検証
      $(this).filter(".max30").each(function(){
        if($(this).val().length > 30){
          show_error(" は30文字以内です", $(this));
        }
      });
      $(this).filter(".max50").each(function(){
        if($(this).val().length > 50){
          show_error(" は50文字以内です", $(this));
        }
      });
      $(this).filter(".max100").each(function(){
        if($(this).val().length > 100){
          show_error(" は100文字以内です", $(this));
        }
      });
      //文字数の検証
      $(this).filter(".max1000").each(function(){
        if($(this).val().length > 1000){
          show_error(" は1000文字以内でお願いします", $(this));
        }
      });
    });
 
    //error クラスの追加の処理
    if($("p.error").length > 0){
      $("p.error").parent().addClass("error");
      $('html,body').animate({ scrollTop: $("p.error:first").offset().top-180 }, 'slow');
      return false;
    }
  });
  
  //テキストエリアに入力された文字数を表示
  $("textarea").on('keydown keyup change', function() {
    var count = $(this).val().length;
    $("#count").text(count);
    if(count > 1000) {
      $("#count").css({color: 'red', fontWeight: 'bold'});
    }else{
      $("#count").css({color: '#333', fontWeight: 'normal'});
    }
  });
})
</script>
</body>
</html>

    <div class="">
      <h3>資料請求リスト</h3>
      
    </div>

    
  </section>

</body>
</html>