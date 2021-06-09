<?php
session_start();
require('../dbconnect.php');

if (!empty($_POST)) {
  $login = $db->prepare('SELECT * FROM users WHERE email=? AND password=?');
  $login->execute(array(
    $_POST['email'],
    sha1($_POST['password'])
  ));
  $user = $login->fetch();

  if ($user) {
    $_SESSION = array();
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['time'] = time();
    header('Location: http://' . $_SERVER['HTTP_HOST'] . '/admin/newagent.php');
    exit();
  } else {
    $error = 'fail';
  }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理画面ログイン</title>
    <link rel="icon" href="favicon.ico">
    <!-- css -->
    <link rel="stylesheet" href="/css/reset/_reset.scss">
    <link rel="stylesheet" href="/admin_css/style.css">
</head>

<body>
    <header class="header">
        <span class="header__text">管理画面</span>
        <img src="./logo.png" class="header__logo" alt="就活の教科書ロゴ">
    </header>

    <div class="login-wrapper" id="login">
        <div class="container">
            <div class="login">
                <div class="login-wrapper-title">
                    <h3>管理者ログイン</h3>
                </div>
                <form class="login-form" action="/admin/login.php" method="POST">
                    <div class="form-group">
                        <p>メールアドレス</p>
                        <input type="email" name="email" required value="<?php echo htmlspecialchars($_POST['email'], ENT_QUOTES); ?>">
                    </div>
                    <div class="form-group">
                        <p>パスワード</p>
                        <input type="password" required name="password">
                    </div>
                    <button type="submit" value="ログイン" class="btn btn-submit">ログイン</button>
                </form>
                </form>
            </div>
        </div>
    </div>
</body>

</html>