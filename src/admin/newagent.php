<?php
require(dirname(__FILE__) . "/check.php");

$id = $_GET['id'];
if (isset($id)) {
    try {
        $stmt = $db->prepare('SELECT * FROM `agents`
        WHERE id =?');
        $stmt->execute(array($id));
        $agent = $stmt->fetch(PDO::FETCH_ASSOC);
        var_dump($agent);
    } catch (PDOException $e) {
        echo "agent error!" . $e->getMessage() . PHP_EOL;
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (isset($id)) {
                                echo "登録情報変更画面";
                            } else {
                                echo "新規掲載画面";
                            } ?></title>
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/reset/_reset.scss">
    <link rel="stylesheet" href="/admin_css/style.css">
    <link rel="stylesheet" href="/admin_css/newagent.css">
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
                <p class="newpublish">新規登録</p>
            </div>

            <div class="sidebar__content">
                <i class="far fa-address-book fa-6x"></i>
                <p class="infosetting">掲載情報一覧</p>
            </div>

            <!-- <div class="sidebar__content">
          <i class="fas fa-sort-amount-down fa-6x"></i>
          <p class="ordersetting">掲載順位管理</p>
        </div> -->

            <div class="sidebar__content">
                <i class="fas fa-hashtag fa-6x"></i>
                <p class="tagsetting">タグ管理</p>
            </div>
        </div>

        <main>
            <div class="wrapper">
                <div class="container">
                    <div class="wrapper-title">
                        <h3><?php if (isset($id)) {
                                echo "登録内容変更";
                            } else {
                                echo "新規登録";
                            } ?>
                        </h3>
                    </div>
                    <div class="inputfield">
                        <form id="#" action="/admin/newagent_confirm.php" method="POST" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="companyname" class="label">会社名</label>
                                <input type="text" name="agent_name" id="companyname" required value="<?= $agent['agent_name']; ?>">

                            </div>

                            <div class="form-group">
                                <span class="label">写真</span>
                                <div id="dragDropArea">
                                    <div class="drag-drop-inside">
                                        <p class="drag-drop-info">ここにファイルをドロップ</p>
                                        <p>または</p>
                                        <p class="drag-drop-buttons">
                                            <input id="fileInput" type="file" name="image_url" accept="image/*" onChange="photoPreview(event)" required>
                                        </p>
                                    </div>
                                    <div id="previewArea"></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="overview" class="label">概要</label>
                                <input type="textarea" name="overview" id="overview" required value="<?= $agent['overview']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="max-data-limit" class="label">掲載上限</label>
                                <input type="text" name="upper_limit" id="max-data-limit" value="<?= $agent['upper_limit']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="limitdate" class="label">掲載期限</label>
                                <input type="date" name="deadline" id="limitdate" value="<?= $agent['deadline']; ?>">
                            </div>

                            <div class="form-group">
                                <p class="label">申し込み形態</p>
                                <input id="radio-a" type="radio" name="button_type" value="0" <?php if ($agent['button_type'] === "0") {
                                                                                                    echo "checked";
                                                                                                } ?>><label for="radio-a" class="option__text">内部サイトから申し込み</label>
                                <input id="radio-b" type="radio" name="button_type" value="1" <?php if ($agent['button_type'] === "1") {
                                                                                                    echo "checked";
                                                                                                } ?>><label for="radio-b" class="option__text">外部サイトから申し込み</label>
                            </div>

                            <div class="form-group">
                                <p class="label">PICK UPへの掲載の可否</p>
                                <input id="check-a" type="checkbox" name="pickup" value="0" <?php if ($agent['pickup'] === "0") {
                                                                                                echo "checked";
                                                                                            } ?>><label for="check-a" class="option__text">PICK UP</label>
                            </div>

                            <div class="form-group">
                                <label for="stars-rate" class="label">星の数</label>
                                <select name="star" id="stars-rate" required>
                                    <option value='' disabled selected style='display:none;'></option>
                                    <option value="0.5" <?php if ($agent['star'] === "0.5") {
                                                            echo "selected";
                                                        } ?>>0.5</option>
                                    <option value="1" <?php if ($agent['star'] === "1") {
                                                            echo "selected";
                                                        } ?>>1</option>
                                    <option value="1.5" <?php if ($agent['star'] === "1.5") {
                                                            echo "selected";
                                                        } ?>>1.5</option>
                                    <option value="2" <?php if ($agent['star'] === "2") {
                                                            echo "selected";
                                                        } ?>>2</option>
                                    <option value="2.5" <?php if ($agent['star'] === "2.5") {
                                                            echo "selected";
                                                        } ?>>2.5</option>
                                    <option value="3" <?php if ($agent['star'] === "3") {
                                                            echo "selected";
                                                        } ?>>3</option>
                                    <option value="3.5" <?php if ($agent['star'] === "3.5") {
                                                            echo "selected";
                                                        } ?>>3.5</option>
                                    <option value="4" <?php if ($agent['star'] === "4") {
                                                            echo "selected";
                                                        } ?>>4</option>
                                    <option value="4.5" <?php if ($agent['star'] === "4.5") {
                                                            echo "selected";
                                                        } ?>>4.5</option>
                                    <option value="5" <?php if ($agent['star'] === "5") {
                                                            echo "selected";
                                                        } ?>>5</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="companylink" class="label">公式サイトリンク</label>

                                <input type="text" name="official_link" id="companylink" required value="<?= $agent['official_link']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="articlelink" class="label">詳細記事ページリンク</label>

                                <input type="text" name="article_link" id="articlelink" required value="<?= $agent['article_link']; ?>">
                            </div>

                            <?php
                            // 選択肢のタグ名吸い出し
                            $stmt = $db->prepare('SELECT tag_name
                                 FROM `tag_table`
                                 ORDER BY id');
                            $stmt->execute();
                            $tag_names = $stmt->fetchAll(PDO::FETCH_ASSOC);

                            // 選んだエージェントのタグ名吸い出し
                            $stmt = $db->prepare('SELECT tag_name
                                  FROM `agent_tag_table`
                                  INNER JOIN `tag_table` ON agent_tag_table.tag_id = tag_table.id
                                  WHERE agent_id = ?
                                  ');
                            $stmt->execute(array($agent["id"]));
                            $agent_tag_names = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            ?>

                            <div class="form-group">
                                <label for="hashtag" class="label">タグ</label>

                                <?php
                                foreach ($tag_names as $index => $tag_name) :?>
                                    <input id="check-b" type="checkbox" name="tag[]" value="<?=$index+1?>" 
                                        <?php foreach ($agent_tag_names as $agent_tag_name){
                                            if ($tag_name["tag_name"] === $agent_tag_name["tag_name"]) {
                                                echo "checked";
                                            }
                                        }?>
                                    >
                                    <label for="check-b" class="option__text">#<?=$tag_name["tag_name"]?></label>
                                <?php endforeach; ?>
                            </div>

                            <div class="form-group">
                                <label for="notes" class="label">メモ</label>
                                <input type="text" name="memo" id="notes" value="<?= $agent['memo']; ?>">
                            </div>

                            <div class="form-group">
                                <p class="label">掲載状況</p>
                                <input id="radio-c" type="radio" name="status" required value="0" <?php if ($agent['status'] === "0") {
                                                                                                        echo "checked";
                                                                                                    } ?>><label for="radio-c" class="option__text">掲載</label>
                                <input id="radio-d" type="radio" name="status" required value="1" <?php if ($agent['status'] === "1") {
                                                                                                        echo "checked";
                                                                                                    } ?>><label for="radio-d" class="option__text">非掲載</label>
                            </div>
                    </div>
                    <button type="submit" name="confirm" class="btn btn-success" value="確認画面へ">確認画面へ</button>
                        <input type="hidden" name="id" value="<?= $id ?>">
                </div>
            </div>
        </main>
        </form>
    </div>

    <script src="/admin_js/dragdrop.js"></script>
</body>

</html>