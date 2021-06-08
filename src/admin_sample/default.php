<?php
session_start();

if (isset($_SESSION['user_id']) && $_SESSION['time'] + 60 * 60 * 24 > time()) {
    $_SESSION['time'] = time();
    
    if (!empty($_POST)) {
        $stmt = $db->prepare('INSERT INTO events SET title=?');
        $stmt->execute(array(
            $_POST['title']
        ));

        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/admin/index.php');
        exit();
    }
} else {
  header('Location: http://' . $_SERVER['HTTP_HOST'] . '/admin/login.php');
  exit();
  require('./header.php');
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<header style="background:#27A69B; height:75px; margin: 0px;">
    <div class="contents" style="display: flex; justify-content: space-between;">
      <div class="left" style="display: flex; align-items: center; height: 75px;">
        <h1 style="color: white; height: 50px; margin: 0px 10px;">管理画面</h1>
      </div>
      <div class="right" style="display: flex; align-items: center; height: 75px;">
      <img src= "../img/shukatsu_text-logo-1.png" style="height: 50px; width: 118.109px; margin: 0px 10px;">
      </div>
    </div>
</header>

<div class="screen" style="display:flex;">
 <div class="menu">
    <?php require('./menu.php');?>
  </div>