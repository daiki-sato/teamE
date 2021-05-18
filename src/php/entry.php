<!-- header.phpとfooter.phpを挿入する -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>申し込みフォーム</title>
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/entry.css">
</head>
<body>
  <?php 
  include("./_header.php"); 
  ?>


  <div class="entry-title">
    <h2>お申し込み</h2>
  </div>

  <section class="entry-page">
    <p class="entry-page__text">基本情報をご入力ください</p>

    <form action="" method="post">
      <div>
        <label class="label" for="name">名前</label>
        <input id="name" type="text" name="name">
      </div>
      <div>
        <label class="label" for="name">ふりがな</label>
        <input id="name" type="text" name="name">
      </div>
      <div>
        <label class="label" for="e-mail">メールアドレス</label>
        <input id="e-mail" type="email" name="email">
      </div>
    </form>

    <div class="">
      <h3>資料請求リスト</h3>
      
    </div>

    
  </section>













<?php 
  include("./_footer.php"); 
?>

</body>
</html>