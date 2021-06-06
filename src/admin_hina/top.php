<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-13xxxxxxxxx"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-13xxxxxxxxx');
    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>管理画面ログイン</title>

    <link rel="icon" href="favicon.ico">

    <!-- css -->
    <link rel="stylesheet" href="/css/reset/_reset.scss">
    <link rel="stylesheet" href="/admin_hina_css/style.css">
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
                    <h3>ログイン</h3>
                </div>
                <form class="login-form" action="check.php" method="POST">
                    <div class="form-group">
                        <p>メールアドレス</p>
                        <input type="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <p>パスワード</p>
                        <input type="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-submit">ログイン</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>