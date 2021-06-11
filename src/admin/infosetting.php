<?php
require(dirname(__FILE__) . "/check.php");
    try{
      $stmt = $db->prepare('SELECT * FROM `agents`');
      $stmt->execute();
      $agents = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }catch (PDOException $e) {
      echo "agents error!". $e->getMessage() . PHP_EOL;
      exit;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>掲載情報一覧</title>
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="/css/reset/_reset.scss"> -->
    <link rel="stylesheet" href="/admin_css/style.css">
    <link rel="stylesheet" href="/admin_css/infosetting.css">
</head>

<body>
    <header class="header">
        <span class="header__text">管理画面</span>
        <img src="../logo.png" class="header__logo" alt="就活の教科書ロゴ">
        <nav class="menu">
            <a href="logout.php" class="header__logout">ログアウト</a>
        </nav>
    </header>

    <div class="body">
        <div class="sidebar">
            <div class="sidebar__content">
                <i class="fas fa-plus fa-6x"></i>
                <a class="newpublish">新規掲載</a>
            </div>

            <div class="sidebar__content">
                <i class="far fa-address-book fa-6x"></i>
                <a class="infosetting">掲載情報一覧</a>
            </div>

            <div class="sidebar__content">
                <i class="fas fa-hashtag fa-6x"></i>
                <a class="tagsetting">タグ管理</a>
            </div>
        </div>

        <main>
            <div class="wrapper">
                <div class="container">
                    <div class="wrapper-title">
                        <h3>掲載情報一覧</h3>
                    </div>
                    <form method="post" action="infoedit.php">
                        <?php foreach($agents as $index => $agent):?>
                        <!-- カードここから -->
                        <div class="companycard">
                            <div>
                                <span class="companyname__text"><?= $agent["agent_name"];?></span>
                            </div>
                            <div class="companyinfo">
                                <div class="companyinfo__left">
                                    <img src="<?= $agent["image_url"];?>" alt="企業写真" class="companyimg">
                                </div>
                                <div class="companyinfo__right">
                                    <div class="info">
                                        <span class="info__title">概要</span>
                                        <p class="overview"><?= $agent["overview"];?></p>
                                    </div>
                                    <div class="info">
                                        <span class="info__title">掲載上限数</span>
                                        <p class="max-data-limit">
                                        <?php if(is_null($agent["upper_limit"])){
                                            echo "なし";
                                          }else{
                                            echo $agent["upper_limit"] . "件";
                                          }?>
                                        </p>
                                    </div>
                                    <div class="info">
                                        <span class="info__title">掲載期限</span>
                                        <p class="limitdate">
                                          <?php if(is_null($agent["deadline"])){
                                            echo "なし";
                                          }else{
                                            echo $agent["deadline"];
                                          }?>
                                        </p>
                                    </div>
                                    <div class="info">
                                        <span class="info__title">申し込み形態</span>
                                        <p class="buttontype">
                                          <?php if($agent["button_type"] === 0){
                                            echo "内部サイトタイプ";
                                          }else{
                                            echo "外部サイトタイプ";
                                          }?>
                                        </p>
                                    </div>
                                    <div class="info">
                                        <span class="info__title">PICKUP状況</span>
                                        <p class="buttontype">
                                        <?php if(is_null($agent["pickup"])){
                                            echo "PICKUP非対象";
                                          }else{
                                            echo "PICKUP対象";
                                          }?>
                                        </p>
                                    </div>
                                    <div class="info">
                                        <span class="info__title">公式サイトリンク</span>
                                        <a href="<?= $agent["official_link"];?>" class="companylink"><?= $agent["official_link"];?></a>
                                    </div>
                                    <div class="info">
                                        <span class="info__title">詳細記事ページリンク</span>
                                        <a href="<?= $agent["article_link"];?>" class="articlelink"><?= $agent["article_link"];?></a>
                                    </div>
                                    <div class="info">
                                        <span class="info__title">タグ</span>
                                        <p class="hashtag">
                                          <?php
                                            $stmt = $db->prepare('SELECT tag_name
                                            FROM `agent_tag_table`
                                            INNER JOIN `tag_table` ON agent_tag_table.tag_id = tag_table.id
                                            WHERE agent_id = ?
                                            ');
                                            $stmt->execute(array($agent["id"]));
                                            $tag_names = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                            foreach($tag_names as $key => $tag_name){
                                              echo "#" . $tag_name["tag_name"] . " ";
                                             }
                                          ?>
                                        </p>
                                    </div>
                                    <div class="info">
                                        <span class="info__title">メモ</span>
                                        <p class="notes"><?= $agent["memo"];?></p>
                                    </div>
                                    <div class="info">
                                        <span class="info__title">掲載状況</span>
                                        <p class="buttontype">
                                        <?php if($status === 0){
                                            echo "掲載";
                                          }else{
                                             echo "非掲載";
                                          }?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                        <!-- カードここまで -->
                    </form>

                </div>
            </div>
        </main>
        <!-- <script src="./post.js"></script> -->
    </div>
</body>

</html>