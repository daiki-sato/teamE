<?php
require(dirname(__FILE__) . "/check.php");
?>

<!DOCTYPE html>
<html lang="en">
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

    <title>ダッシュボード</title>

    <link rel="icon" href="favicon.ico">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="/css/reset/_reset.scss">
    <link rel="stylesheet" href="/admin_css/style.css">
</head>

<body>
    <header class="header">
    <span class="header__text">管理画面</span>
    <img src="../logo.png" class="header__logo" alt="就活の教科書ロゴ">
    <nav class="menu">
        <a href="logout.php" class="header__logout">ログアウト</a>
    </nav>
    </header>

    <main>
        <div class="wrapper">
            <div class="container">
                <div class="wrapper-title">
                    <h3>ダッシュボード</h3>
                </div>

                <div class="boxs">
                    <a href="newagent.php" class="box">
                    <i class="far fa-folder-plus"></i><!-- fontawesome利用部分 -->
                        <p>新規掲載</p>
                    </a>
                </div>

                <div class="boxs">
                    <a href="infosetting.php" class="box">
                    <i class="far fa-folder-plus"></i><!-- fontawesome利用部分 -->
                        <p>掲載情報一覧</p>
                    </a>
                </div>

            </div>
        </div>
    </main>
</body>
</html>