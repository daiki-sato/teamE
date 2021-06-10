<?php
// セッションを開始
session_start();
require(dirname(__FILE__, 3) . "/dbconnect.php");
try {
    $stmt = $db->prepare('SELECT tag_name
FROM `tag_table`
ORDER BY id');
    $stmt->execute();
    $tag_selections = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "tag_selections error!" . $e->getMessage() . PHP_EOL;
    exit;
}

$tag = [];
if (isset($_POST['tag']) && is_array($_POST['tag'])) {
    $tag = $_POST["tag"];
    var_dump($tag);
}

// 配列の初期化
$agents = [];
//検索ボタンが押されたかどうかの確認
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // 内部エージェント検索
    try {
        $sql = 'SELECT DISTINCT agents.id,agents.agent_name,agents.image_url,agents.overview,agents.button_type,agents.star,agents.official_link,agents.article_link,agents.status
      FROM `agent_tag_table` 
      JOIN  `agents` ON agent_tag_table.agent_id = agents.id
      WHERE (button_type = 1 AND status = 0)';
        if (count($tag) > 0) {
            $sql .= ' AND tag_id IN (' . substr(str_repeat(',?', count($tag)), 1) . ')';
        }
        $stmt = $db->prepare($sql);
        $stmt->execute($tag);
        $agent_internals = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "agent_internals error!" . $e->getMessage() . PHP_EOL;
        exit;
    }

    // 外部エージェント検索
    try {
        $sql = 'SELECT DISTINCT agents.id,agents.agent_name,agents.image_url,agents.overview,agents.button_type,agents.star,agents.official_link,agents.article_link
      FROM `agent_tag_table` 
      JOIN  `agents` ON agent_tag_table.agent_id = agents.id
      WHERE button_type = 2';
        if (count($tag) > 0) {
            $sql .= ' AND tag_id IN (' . substr(str_repeat(',?', count($tag)), 1) . ')';
        }
        $stmt = $db->prepare($sql);
        $stmt->execute($tag);
        $agent_externals = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "agent_externals error!" . $e->getMessage() . PHP_EOL;
        exit;
    }
    // ここからタグ名抜き出し
    try {
        $sql = 'SELECT tag_name
      FROM `tag_table`';
        if (count($tag) > 0) {
            $sql .= 'WHERE id in (' . substr(str_repeat(',?', count($tag)), 1) . ')';
        }
        $stmt = $db->prepare($sql);
        $stmt->execute($tag);
        $tag_names = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "tag_name error!" . $e->getMessage() . PHP_EOL;
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
    <title>top_pc</title>
    <link rel="stylesheet" href="/css/style.css">

    <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">

</head>

<body class="topPage__body">

    <?php include($_SERVER['DOCUMENT_ROOT'] . "/php/parts/_header.php"); ?>


    <div class="container">

        <div class="main">

            <div class="search-place">

                <div class="search__pc">

                    <div class="search-area">
                        <h2 class="search-area__title">サービス・タグから探す</h2>
                    </div>

                    <div class="category-tag-search">

                        <section class="category-search__menu">
                            <div class="category-search__list">
                                <input type="checkbox" id="agent"></input>
                                <label id="category" for="agent" class="category-search__button">
                                    <div class="checkmark"></div>
                                    <div class="category-search__button-text">エージェント</div>
                                    <div class="category-search_button-q">?
                                        <span class="service-description">
                                            就活エージェントとは専任のキャリアコンサルタントが就職活動の始めから終わりまでを支援してくれるサービスです。 就職活動において、「自己分析が上手くできない」、「行きたい企業がわからない」という初期の段階での悩みは多くあります。
                                        </span>
                                    </div>
                                </label>
                            </div>
                            <div class="category-search__list">
                                <input type="checkbox" id="event"></input>
                                <label id="category" for="event" class="category-search__button">
                                    <div class="checkmark"></div>
                                    <div class="category-search__button-text">イベント</div>
                                    <div class="category-search_button-q">?
                                        <span class="service-description">
                                            就活エージェントとは専任のキャリアコンサルタントが就職活動の始めから終わりまでを支援してくれるサービスです。 就職活動において、「自己分析が上手くできない」、「行きたい企業がわからない」という初期の段階での悩みは多くあります。
                                        </span>
                                    </div>
                                </label>
                            </div>
                            <div class="category-search__list">
                                <input type="checkbox" id="service"></input>
                                <label id="category" for="service" class="category-search__button">
                                    <div class="checkmark"></div>
                                    <div class="category-search__button-text">サービス</div>
                                    <div class="category-search_button-q">?
                                        <span class="service-description">
                                            就活エージェントとは専任のキャリアコンサルタントが就職活動の始めから終わりまでを支援してくれるサービスです。 就職活動において、「自己分析が上手くできない」、「行きたい企業がわからない」という初期の段階での悩みは多くあります。
                                        </span>
                                    </div>
                                </label>
                            </div>
                        </section>
                        <form method="post" action="">
                            <section class="tag-search__menu">
                                <?php foreach ($tag_selections as $index => $tag_selection) : ?>
                                    <div class="tag-search__list">
                                        <input type="checkbox" name="tag[]" value="<?= $index + 1 ?>" id="<?= $index ?>"></input>
                                        <label id="tag" for="<?= $index ?>" class="tag-search__button">
                                            <div class="checkmark"></div>
                                            <p class="tag-search__button-text"><?= $tag_selection['tag_name']; ?></p>
                                        </label>
                                    </div>
                                <?php endforeach; ?>
                            </section>

                    </div>

                </div>


                <div class="search__sp">

                    <section>
                        <div class="search-area">
                            <h2 class="search-area__title">就活サービスから探す</h2>
                        </div>
                        <div class="category-search__menu">
                            <div class="category-search__list">
                                <input type="checkbox" id="agent"></input>
                                <label id="category" for="agent" class="category-search__button">
                                    <div class="checkmark"></div>
                                    <p class="category-search__button-text">エージェント</p>
                                    <p id="popup__btn0" class="category-search_button-q">?</p>
                                    <p id="popup0" class="service-description__popup">就活エージェントとは専任のキャリアコンサルタントが就職活動の始めから終わりまでを支援してくれるサービスです。 就職活動において、「自己分析が上手くできない」、「行きたい企業がわからない」という初期の段階での悩みは多くあります。
                                    </p>
                                    <div id="overlay0" class="service-description__popup__closer"></div>
                                </label>
                            </div>
                            <div class="category-search__list">
                                <input type="checkbox" id="event"></input>
                                <label id="category" for="event" class="category-search__button">
                                    <div class="checkmark"></div>
                                    <p class="category-search__button-text">イベント</p>
                                    <p id="popup__btn1" class="category-search_button-q">?</p>
                                    <p id="popup1" class="service-description__popup">就活エージェントとは専任のキャリアコンサルタントが就職活動の始めから終わりまでを支援してくれるサービスです。 就職活動において、「自己分析が上手くできない」、「行きたい企業がわからない」という初期の段階での悩みは多くあります。
                                    </p>
                                    <div id="overlay1" class="service-description__popup__closer"></div>
                                </label>
                            </div>
                            <div class="category-search__list">
                                <input type="checkbox" id="survice"></input>
                                <label id="category" for="survice" class="category-search__button">
                                    <div class="checkmark"></div>
                                    <p class="category-search__button-text">サービス</p>
                                    <p id="popup__btn2" class="category-search_button-q">?</p>
                                    <p id="popup2" class="service-description__popup">就活エージェントとは専任のキャリアコンサルタントが就職活動の始めから終わりまでを支援してくれるサービスです。 就職活動において、「自己分析が上手くできない」、「行きたい企業がわからない」という初期の段階での悩みは多くあります。
                                    </p>
                                    <div id="overlay2" class="service-description__popup__closer"></div>
                                </label>
                            </div>
                        </div>
                    </section>

                    <section>
                        <div class="search-area">
                            <h2 class="search-area__title">タグからから探す</h2>
                        </div>
                        <div class="tag-search__menu">
                            <?php foreach ($tag_selections as $index => $tag_selection) : ?>
                                <div class="tag-search__list">
                                    <input type="checkbox" name="tag[]" value="<?= $index + 1 ?>" id="<?= $index ?>"></input>
                                    <label id="tag" for="<?= $index ?>" class="tag-search__button">
                                        <div class="checkmark"></div>
                                        <p class="tag-search__button-text"><?= $tag_selection['tag_name']; ?></p>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </section>

                </div>

                <div class="application-area">
                    <p class="application-area__text">就活相談なら</p>
                    <button class="application-area__button">エージェント一括申し込み！</button>
                    <div class="application-area__balloon">
                        1分でできる！
                    </div>
                    <span class="application-area__description">就活のプロが話を聞いてくれます</span>
                </div>


                <div class="search-box">
                    <button type="submit" id="searchbtn" class="search-box__button">検索</button>
                </div>
                </form>

                <div id="searched" class="number-of-searches-box">
                    <p class="number-of-searches__text">↓検索結果がn件あります↓</p>
                </div>

            </div>



            <section class="pick-up">
                <div class="pick-up__title__box">
                    <img src="/img/指差しの手の線画アイコン.png" class="pick-up__title__img" alt="pickup">
                    <h2 class="pick-up__title__text">PICK UP</h2>
                </div>
            </section>

            <section class="search-results">
                <div class="search-results__title-box">
                    <i class="fas fa-search"></i>
                    <p class="section__title-text">検索結果 n件表示</p>
                </div>

                <p class="search-result__agent">&emsp;エージェント&emsp;</p>
                <form method="post" action="application/contact.php">

                    <!-- PC版内部サイト用エージェントのforeachここから-->
                    <?php if (!is_null($agent_internals)) : ?>
                        <?php foreach ($agent_internals as $index => $agent_internal) : ?>
                            <?php if ($index === 2) : ?>
                                <div class="application-area">
                                    <p class="application-area__text">よくわからない方は</p>
                                    <button class="application-area__button">エージェント一括申し込み！</button>
                                    <div class="application-area__balloon">
                                        1分でできる！
                                    </div>
                                    <span class="application-area__description">就活のプロが話を聞いてくれます</span>
                                </div>
                            <?php endif; ?>
                            <div class="card-pc__container">
                                <div class="card-pc__left">
                                    <img src="<?= $agent_internal["image_url"]; ?>" class="card-pc__img" alt="エージェント画像が入ります">
                                </div>

                                <div class="card-pc__right">

                                    　　　　<div class="card-pc__agent-top">
                                        <p>
                                            <a href="<?= $agent_internal["offcial_link"]; ?>" class="card-pc__agant-name" data-wpel-link="internal" target="_blank" rel="noopener noreferrer"><?= $agent_internal["agent_name"]; ?></a>
                                        </p>
                                        <p class="card-pc__hashtag">
                                            <?php
                                            $stmt = $db->prepare('SELECT tag_name
                                              FROM `agent_tag_table`
                                              INNER JOIN `tag_table` ON agent_tag_table.tag_id = tag_table.id
                                              WHERE agent_id = ?
                                              ');
                                            $stmt->execute(array($agent_internal["id"]));
                                            $tag_names = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                            foreach ($tag_names as $key => $tag_name) {
                                                echo "#" . $tag_name["tag_name"] . " ";
                                            }
                                            ?>
                                        </p>
                                    </div>

                                    <p class="card-pc__stars">
                                        <span class="card-pc__stars-rating" data-rate="<?= $agent_internal["star"]; ?>"></span>&ensp;<?= $agent_internal["star"]; ?>
                                    </p>

                                    <div class="card-pc__agent-explanation">
                                        <?= $agent_internal["overview"]; ?>
                                    </div>

                                    <div class="card-pc__buttons">
                                        <button id="articlebtn" class="card-pc__button-article">
                                            <a href="<?= $agent_internal["article_link"]; ?>" data-wpel-link="internal" target="_blank" rel="noopener noreferrer">解説記事</a>
                                        </button>
                                        <input type="checkbox" id="application" class="checks" name="agent[]" value="<?= $agent_internal["id"]; ?>">
                                        <label for="application">
                                            <span id="submit__pc" class="card-pc__button-submit">
                                                <p id="text__pc">お申し込みリストに<br>追加する</p>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <?php if ($index === (count($agent_internals) - 1) && $index !== 1) : ?>
                                <div class="application-area">
                                    <p class="application-area__text">よくわからない方は</p>
                                    <button class="application-area__button">エージェント一括申し込み！</button>
                                    <div class="application-area__balloon">
                                        1分でできる！
                                    </div>
                                    <span class="application-area__description">就活のプロが話を聞いてくれます</span>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <!-- PC版内部サイト用エージェントのforeachここまで -->

                    <!-- SP版内部サイト用エージェントのforeachここから -->
                    <?php if (!is_null($agent_internals)) : ?>
                        <?php foreach ($agent_internals as $index => $agent_internal) : ?>
                            <?php if ($index === 2) : ?>
                                <div class="application-area">
                                    <p class="application-area__text">よくわからない方は</p>
                                    <button class="application-area__button">エージェント一括申し込み！</button>
                                    <div class="application-area__balloon">
                                        1分でできる！
                                    </div>
                                    <span class="application-area__description">就活のプロが話を聞いてくれます</span>
                                </div>
                                <?php endif; ?>
                                <div class="card-sp__container">
                                <div class="card-sp-summary">
                                    <div class="card-sp-summary-left">
                                        <img src="<?= $agent_internal["image_url"]; ?>" class="card-sp__image" alt="エージェント画像が入ります">
                                    </div>

                                    <div class="card-sp-summary-right">
                                        <p>
                                            <a href="<?= $agent_internal["offcial_link"]; ?>" class="card-sp__agent-name" data-wpel-link="internal" target="_blank" rel="noopener noreferrer"><?= $agent_internal["agent_name"]; ?></a>
                                        </p>
                                        <p class="card-sp__hashtag">
                                            <?php
                                            $stmt = $db->prepare('SELECT tag_name
                                              FROM `agent_tag_table`
                                              INNER JOIN `tag_table` ON agent_tag_table.tag_id = tag_table.id
                                              WHERE agent_id = ?
                                              ');
                                            $stmt->execute(array($agent_internal["id"]));
                                            $tag_names = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                            foreach ($tag_names as $key => $tag_name) {
                                                echo "#" . $tag_name["tag_name"] . " ";
                                            }
                                            ?>
                                        </p>
                                        <p class="card-sp__stars">
                                            <span class="card-sp__stars-rating" data-rate="<?= $agent_internal["star"]; ?>"></span>&ensp;<?= $agent_internal["star"]; ?>
                                        </p>
                                    </div>

                                </div>

                                <div class="card-sp-explanation">
                                    <?= $agent_internal["overview"]; ?>
                                </div>

                                <div class="card-sp__buttons">
                                    <button id="articlebtn" class="card-sp__button-article">
                                        <a href="<?= $agent_internal["article_link"]; ?>" data-wpel-link="internal" target="_blank" rel="noopener noreferrer">解説記事</a>
                                    </button>
                                    <input type="checkbox" id="application" class="checks" name="agent[]" value="<?= $agent_internal["id"]; ?>">
                                    <label for="application">
                                        <span id="submit__sp" class="card-sp__button-submit">
                                            <p id="text__sp">お申し込みリストに<br>追加する</p>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <?php if ($index === (count($agent_internals) - 1) && $index !== 1) : ?>
                                <div class="application-area">
                                    <p class="application-area__text">よくわからない方は</p>
                                    <button class="application-area__button">エージェント一括申し込み！</button>
                                    <div class="application-area__balloon">
                                        1分でできる！
                                    </div>
                                    <span class="application-area__description">就活のプロが話を聞いてくれます</span>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <!-- SP版内部サイト用エージェントのforeachここまで -->

                    <!-- PC版外部サイト用エージェント用のforeachここから -->
                    <?php if (!is_null($agent_externals)) : ?>
                        <?php foreach ($agent_externals as $index => $agent_external) : ?>
                            <div class="card-pc__container">

                                <div class="card-pc__left">
                                    <img src="<?= $agent_external["image_url"]; ?>" class="card-pc__img" alt="エージェント画像が入ります">
                                </div>

                                <div class="card-pc__right">

                                    　　　　　　　<div class="card-pc__agent-top">
                                        <p>
                                            <a href="<?= $agent_external["official_link"]; ?>" class="card-pc__agant-name" data-wpel-link="internal" target="_blank" rel="noopener noreferrer"><?= $agent_external["agent_name"]; ?></a>
                                        </p>
                                        <p class="card-pc__hashtag">
                                            <?php
                                            $stmt = $db->prepare('SELECT tag_name
                                     FROM `agent_tag_table`
                                     INNER JOIN `tag_table` ON agent_tag_table.tag_id = tag_table.id
                                     WHERE agent_id = ?
                                     ');
                                            $stmt->execute(array($agent_external["id"]));
                                            $tag_names = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                            foreach ($tag_names as $key => $tag_name) {
                                                echo "#" . $tag_name["tag_name"] . " ";
                                            }
                                            ?>
                                        </p>
                                    </div>

                                    <p class="card-pc__stars">
                                        <span class="card-pc__stars-rating" data-rate="<?= $agent_external["star"]; ?>"></span>&ensp;<?= $agent_external["star"]; ?>
                                    </p>

                                    <div class="card-pc__agent-explanation">
                                        <?= $agent_external["overview"]; ?>
                                    </div>

                                    <div class="card-pc__buttons">
                                        <button id="articlebtn" class="card__button-article">
                                            <a href="<?= $agent_external["article_link"]; ?>" data-wpel-link="internal" target="_blank" rel="noopener noreferrer">解説記事</a>
                                        </button>
                                        <button id="exterminalsitebtn" class="card__button-submit">
                                            <p id="text"><a href="<?= $agent_external["official_link"]; ?>" data-wpel-link="internal" target="_blank" rel="noopener noreferrer">外部サイトから<br>申し込む</a></p>
                                        </button>
                                    </div>

                                </div>

                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <!-- PC版外部サイト用エージェント用のforeachここまで -->

                    <!-- SP版外部サイト用エージェント用のforeachここから -->
                    <?php if (!is_null($agent_externals)) : ?>
                        <?php foreach ($agent_externals as $index => $agent_external) : ?>
                            <div class="card-sp__container">
                                <div class="card-sp-summary">

                                    <div class="card-sp-summary-left">
                                        <img src="<?= $agent_external["image_url"]; ?>" class="card-sp__image" alt="エージェント画像が入ります">
                                    </div>

                                    <div class="card-sp-summary-right">
                                        <p>
                                            <a href="<?= $agent_external["official_link"]; ?>" class="card-sp__agent-name" data-wpel-link="internal" target="_blank" rel="noopener noreferrer"><?= $agent_external["agent_name"]; ?></a>
                                        </p>
                                        <p class="card-sp__hashtag">
                                            <?php
                                            $stmt = $db->prepare('SELECT tag_name
                                     FROM `agent_tag_table`
                                     INNER JOIN `tag_table` ON agent_tag_table.tag_id = tag_table.id
                                     WHERE agent_id = ?
                                     ');
                                            $stmt->execute(array($agent_external["id"]));
                                            $tag_names = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                            foreach ($tag_names as $key => $tag_name) {
                                                echo "#" . $tag_name["tag_name"] . " ";
                                            }
                                            ?>
                                        </p>
                                        <p class="card-sp__stars">
                                            <span class="card-sp__stars-rating" data-rate="<?= $agent_external["star"]; ?>"></span>&ensp;<?= $agent_external["star"]; ?>
                                        </p>
                                    </div>

                                </div>

                                <div class="card-sp-explanation">
                                    <?= $agent_external["overview"]; ?>
                                </div>

                                <div class="card-sp-buttons">
                                    <button id="articlebtn" class="card-sp-button__article">
                                        <a href="<?= $agent_external["article_link"]; ?>" data-wpel-link="internal" target="_blank" rel="noopener noreferrer">解説記事</a>
                                    </button>

                                    <button id="exterminalsitebtn" class="card-sp__button-submit">
                                        <p id="text"><a href="<?= $agent_external["official_link"]; ?>" data-wpel-link="internal" target="_blank" rel="noopener noreferrer">外部サイトから<br>申し込む</a></p>
                                    </button>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <!-- SP版外部サイト用エージェント用のforeachここから -->
            </section>

            <section class="article">
                <div class="article__title-box">
                    <i class="fa fa-book"></i>
                    <p class="section__title-text">記事</p>
                </div>

                <div class="article__items">

                    <div class="article__item">
                        <article class="cardtype__article">
                            <a class="cardtype__link" href="https://reashu.com/category/%e5%b0%b1%e6%b4%bb%e6%94%af%e6%8f%b4%e3%82%b5%e3%83%bc%e3%83%93%e3%82%b9/" data-wpel-link="internal" target="_blank" rel="noopener noreferrer">
                                <p class="cardtype__img">
                                    <img loading="lazy" class="lazy alignnone size-thumb-520 wp-image-3370" src="https://reashu.com/wp-content/uploads/2020/02/090a909fd57f1ca462afab4214525b84.png" alt="【内定者が選んだ】就活支援サービスおすすめ15選｜学生は完全無料" width="520" height="300" />
                                    <noscript>
                                        <img loading="lazy" class="alignnone size-thumb-520 wp-image-3370" src="https://reashu.com/wp-content/uploads/2020/02/090a909fd57f1ca462afab4214525b84.png" alt="【内定者が選んだ】就活支援サービスおすすめ15選｜学生は完全無料" width="520" height="300" />
                                    </noscript>
                                </p>
                                <div class="cardtype__article-info">
                                    <h3>内定にさらに一歩近づこう！ 就活支援サービスおすすめ15選</h3>
                                </div>
                            </a>
                        </article>
                    </div>

                    <div class="article__item">
                        <article class="cardtype__article">
                            <a class="cardtype__link" href="https://reashu.com/category/%e5%b0%b1%e6%b4%bb%e3%82%b5%e3%82%a4%e3%83%88/" data-wpel-link="internal" target="_blank" rel="noopener noreferrer">

                                <p class="cardtype__img">
                                    <img loading="lazy" class="lazy alignnone size-thumb-520 wp-image-3370" src="https://reashu.com/wp-content/uploads/2020/02/d60865890e72ece3d5c6e94107f110ec.png" alt="【内定者が選んだ】就活サイトおすすめ30選！ 就活生はみんな登録してる！？" width="520" height="300" />
                                    <noscript>
                                        <img loading="lazy" class="alignnone size-thumb-520 wp-image-3370" src="https://reashu.com/wp-content/uploads/2020/02/d60865890e72ece3d5c6e94107f110ec.png" alt="【内定者が選んだ】就活サイトおすすめ30選！ 就活生はみんな登録してる！？" width="520" height="300" />
                                    </noscript>
                                </p>

                                <div class="cardtype__article-info">
                                    <h3>就活生はみんな登録してる！？ 就活サイトおすすめ30選</h3>
                                </div>
                            </a>
                        </article>
                    </div>

                </div>

            </section>




        </div>

        <div class="sidebar">
            <img src="/img/sidebar.png" class="sidebarimg" alt="サイドバー__就活の教科書">
        </div>

    </div>

    <?php include($_SERVER['DOCUMENT_ROOT'] . "/php/parts/_footer.php"); ?>

    <!-- jquery↓↓↓↓  -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="/js/topPage.js"></script>
    <script src="/js/header.js"></script>
    <script src="/js/footer.js"></script>
    <script src="/js/card.js"></script>



</body>

</html>