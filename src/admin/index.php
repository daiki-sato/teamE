<?php
session_start();
require('./header.php');


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
}
?>

 <div class="screen" style="display:flex;">
 <div class="menu">
<?php require('./menu.php');?>
</div>


<div class="contents" style>
<?php require('./new_agent.php'); ?>
 </div>

 <?php require('./footer.php');
?>
