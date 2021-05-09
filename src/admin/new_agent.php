<div class="new_agent_information" style="display: inline-block; background: white;">
    <h1>新規掲載</h1>

    <div >
        <h2>会社名</h2>
        <form action="/admin/index.php" method="POST">
            <input type="text" name="agent_name" required value="<?php echo htmlspecialchars($_POST['agent_name'], ENT_QUOTES); ?>">
        </form>
    </div>

    <div>
        <h2>写真</h2>
        <form action="/admin/index.php" method="POST">
            <input type="file" name="image_url" required value="<?php echo htmlspecialchars($_POST['image_url'], ENT_QUOTES); ?>"> 
        </form>
    </div>

    <div>
        <h2>概要</h2>
        <form action="/admin/index.php" method="POST">
            <textarea name="overview" required value="<?php echo htmlspecialchars($_POST['overview'], ENT_QUOTES); ?>"></textarea>
        </form>
    </div>

    <div>
        <h2>掲載上限</h2>
        <form action="/admin/index.php" method="POST">
            <input type="text" name="upper_limit" required value="<?php echo htmlspecialchars($_POST['upper_limit'], ENT_QUOTES); ?>"> 
        </form>
    </div>

    <div>
        <h2>掲載期限</h2>
        <form action="/admin/index.php" method="POST">
            <input type="text" name="deadline_year" required value="<?php echo htmlspecialchars($_POST['deadline'], ENT_QUOTES); ?>"><h3>年</h3>
            <input type="text" name="deadline_month" required value="<?php echo htmlspecialchars($_POST['deadline'], ENT_QUOTES); ?>"> <h3>月</h3>
            <input type="text" name="deadline_day" required value="<?php echo htmlspecialchars($_POST['deadline'], ENT_QUOTES); ?>"> <h3>日</h3>
        </form>
    </div>

    <div>
        <h2>ボタンの種類</h2>
        <form action="/admin/index.php" method="POST">
            <input type="radio" name="button_type_A" required value="<?php echo htmlspecialchars($_POST['button_type'], ENT_QUOTES); ?>"><h3>Aタイプ</h3>
            <input type="radio" name="button_type_B" required value="<?php echo htmlspecialchars($_POST['button_type'], ENT_QUOTES); ?>"> <h3>Bタイプ</h3>
        </form>
    </div>

    <div>
        <h2>PICKUP</h2>
        <form action="/admin/index.php" method="POST">
            <input type="checkbox" name="PICKUP" required value="<?php echo htmlspecialchars($_POST['button_type'], ENT_QUOTES); ?>">
        </form>
    </div>

    <div>
        <h2>星の数</h2>
        <form action="/admin/index.php" method="POST">
            <input type="text" name="star" required value="<?php echo htmlspecialchars($_POST['star'], ENT_QUOTES); ?>"> 
        </form>
    </div>

    <div>
        <h2>公式サイトリンク</h2>
        <form action="/admin/index.php" method="POST">
            <input type="text" name="offcial_link" required value="<?php echo htmlspecialchars($_POST['offcial_link'], ENT_QUOTES); ?>"> 
        </form>
    </div>

    <div>
        <h2>詳細記事ページリンク</h2>
        <form action="/admin/index.php" method="POST">
            <input type="text" name="article_link" required value="<?php echo htmlspecialchars($_POST['article_link'], ENT_QUOTES); ?>"> 
        </form>
    </div>

    <div>
        <h2>タグ</h2>
        <form action="/admin/index.php" method="POST">
            <select name="tag" required value="<?php echo htmlspecialchars($_POST['tag'], ENT_QUOTES); ?>">
                <option value="">タグを選択</option>
                <option value="理系">理系</option>
                <option value="文系">文系</option>
                <option value="星3以上">星3以上</option>
            </select>
        </form>
    </div>

    <div>
        <h2>検索KW</h2>
        <form action="/admin/index.php" method="POST">
            <textarea type="text" name="search_kw" required value="<?php echo htmlspecialchars($_POST['search_kw'], ENT_QUOTES); ?>"> </textarea>
        </form>
    </div>

    <div>
        <h2>メモ</h2>
        <form action="/admin/index.php" method="POST">
            <textarea type="text" name="memo" required value="<?php echo htmlspecialchars($_POST['memo'], ENT_QUOTES); ?>"> </textarea>
        </form>
    </div>

    <div>
        <h2>掲載状況</h2>
        <form action="/admin/index.php" method="POST">
        <input type="radio" name="status_on" required value="<?php echo htmlspecialchars($_POST['button_type'], ENT_QUOTES); ?>"><h3>掲載</h3>
        <input type="radio" name="status_off" required value="<?php echo htmlspecialchars($_POST['button_type'], ENT_QUOTES); ?>"><h3>非掲載</h3>
        </form>
    </div>


    <form>
        <input type="submit" value="新規登録">
    </form>
    <a href="/index.php">掲載情報一覧</a>
</div>