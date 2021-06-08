<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規掲載画面</title>
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/reset/_reset.scss">
    <link rel="stylesheet" href="/admin_hina_css/style.css">
    <link rel="stylesheet" href="/admin_hina_css/newagent.css">
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
                <p class="newpublish">新規掲載</p>
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
                        <h3>新規掲載</h3>
                    </div>
                    <div class="inputfield">
                        <form id="#" action="/admin_hina/newagent_confirm.php" method="POST" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="companyname" class="label">会社名</label>
                                <input type="text" name="agent_name" id="companyname" required
                                    value="<?php echo htmlspecialchars($_POST['agent_name'], ENT_QUOTES); ?>">

                            </div>

                            <div class="form-group">
                                <span class="label">写真</span>
                                <div id="dragDropArea">
                                    <div class="drag-drop-inside">
                                        <p class="drag-drop-info">ここにファイルをドロップ</p>
                                        <p>または</p>
                                        <p class="drag-drop-buttons">
                                            <input id="fileInput" type="file" name="image_url" accept="image/*"
                                                onChange="photoPreview(event)" required
                                                value="<?php echo htmlspecialchars($_POST['image_url'], ENT_QUOTES); ?>">
                                        </p>
                                    </div>
                                    <div id="previewArea"></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="overview" class="label">概要</label>
                                <input type="textarea" name="overview" id="overview" required
                                    value="<?php echo htmlspecialchars($_POST['overview'], ENT_QUOTES); ?>">
                            </div>

                            <div class="form-group">
                                <label for="max-data-limit" class="label">掲載上限</label>
                                <input type="text" name="upper_limit" id="max-data-limit" 
                                    value="<?php echo htmlspecialchars($_POST['upper_limit'], ENT_QUOTES); ?>">
                            </div>

                            <div class="form-group">
                                <label for="limitdate" class="label">掲載期限</label>
                                <input type="date" name="deadline" id="limitdate"
                                    value="<?php echo htmlspecialchars($_POST['deadline'], ENT_QUOTES); ?>">
                            </div>

                            <div class="form-group">
                                <p class="label">申し込み形態</p>
                                <input id="radio-a" type="radio" name="button_type" value="0"><label for="radio-a"
                                    class="option__text">内部サイトから申し込み</label>
                                <input id="radio-b" type="radio" name="button_type" value="1"><label for="radio-b"
                                    class="option__text">外部サイトから申し込み</label>
                            </div>

                            <div class="form-group">
                                <p class="label">PICK UPへの掲載の可否</p>
                                <input id="check-a" type="checkbox" name="pickup" value="0"><label for="check-a"
                                    class="option__text">PICK UP</label>
                            </div>

                            <div class="form-group">
                                <label for="stars-rate" class="label">星の数</label>
                                <select name="star" id="stars-rate" required>
                                    <option value='' disabled selected style='display:none;'>個</option>
                                    <option value="0.5">0.5</option>
                                    <option value="1">1</option>
                                    <option value="1.5">1.5</option>
                                    <option value="2">2</option>
                                    <option value="2.5">2.5</option>
                                    <option value="3">3</option>
                                    <option value="3.5">3.5</option>
                                    <option value="4">4</option>
                                    <option value="4.5">4.5</option>
                                    <option value="5">5</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="companylink" class="label">公式サイトリンク</label>
                                <input type="text" name="official_link" id="companylink" required
                                    value="<?php echo htmlspecialchars($_POST['official_link'], ENT_QUOTES);?>">
                            </div>

                            <div class="form-group">
                                <label for="articlelink" class="label">詳細記事ページリンク</label>
                                <input type="text" name="article_link" id="articlelink" required
                                    value="<?php echo htmlspecialchars($_POST['article_link'], ENT_QUOTES); ?>">
                            </div>

                            <div class="form-group">
                                <label for="hashtag" class="label">タグ</label>
                                <input id="check-b" type="checkbox" name="tag[]" value="1"><label for="check-b"
                                    class="option__text">理系</label>
                                <input id="check-c" type="checkbox" name="tag[]" value="2"><label for="check-c"
                                    class="option__text">文系</label>
                                <input id="check-d" type="checkbox" name="tag[]" value="3"><label for="check-d"
                                    class="option__text">星3以上</label>
                                <input id="check-e" type="checkbox" name="tag[]" value="4"><label for="check-e"
                                    class="option__text">星4以上</label>
                            </div>

                            <div class="form-group">
                                <label for="notes" class="label">メモ</label>
                                <input type="text" name="memo" id="notes"
                                    value="<?php echo htmlspecialchars($_POST['memo'], ENT_QUOTES); ?>">
                            </div>

                            <div class="form-group">
                                <p class="label">掲載状況</p>
                                <input id="radio-c" type="radio" name="status" required value="0"><label for="radio-c"
                                    class="option__text">掲載</label>
                                <input id="radio-d" type="radio" name="status" required value="1"><label for="radio-d"
                                    class="option__text">非掲載</label>
                            </div>

                    </div>
                    <input type="submit" name="confirm" value="新規登録" class="submitbtn">
                </div>
            </div>
        </main>
        </form>
    </div>

    <script src="/admin_hina_js/dragdrop.js"></script>
</body>

</html>