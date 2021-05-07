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
</head>
<body>
  <?php 
  include("./_header.php"); 
  ?>


  <div class="entry-title">
    <h2>お申し込み</h2>
  </div>

  <section class="entry-form">
    <p>基本情報をご入力ください</p>

    <form action="#" method="post">
      <p>お名前（必須）：<br>
      <input type="text" name="name"></p>
      <p>メールアドレス：<br>
      <input type="text" name="mail"></p>
    </form>

  </section>













<?php 
  include("./_footer.php"); 
?>

</body>
</html>