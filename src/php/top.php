<!-- header.phpとfooter.phpを挿入する -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/top.css">
</head>
<body>
  <?php 
  include("./_header.php"); 
  ?>


<section class="category-search">
  <div class="search-area">
    <h2 class="search-area__title">就活サービスから探す</h2>
  </div>
  <ul class="category-search__menu">
    <li><a class="category-search__menu__list" href="">エージェント</a></li>
    <li><a class="category-search__menu__list" href="">イベント</a></li>
    <li><a class="category-search__menu__list" href="">サービス</a></li>
  </ul>
</section>

<section class="tag-search">
  <div class="tag-area">
    <h2 class="tag-area__title">タグからから探す</h2>
  </div>
  <ul class="category-tag__menu">
    <li><a class="category-tag__menu__list" href="">理系</a></li>
    <li><a class="category-tag__menu__list" href="">文系</a></li>
    <li><a class="category-tag__menu__list" href="">星3以上</a></li>
  </ul>
</section>






</body>
</html>