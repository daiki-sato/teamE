<?php
require(dirname(__FILE__) . "/check.php");

//new_agent.phpの値を取得
$agent_name = $_SESSION['agent_name'];
$image_url = $_SESSION['image_url'];
$overview = $_SESSION['overview'];
$upper_limit = $_SESSION['upper_limit'];
$deadline = $_SESSION['deadline'];
$button_type = $_SESSION['button_type'];
$pickup = $_SESSION['pickup'];
$star = $_SESSION['star'];
$official_link = $_SESSION['official_link'];
$article_link = $_SESSION['article_link'];
$tag_ids = $_SESSION['tag'];
$memo = $_SESSION['memo'];
$status = $_SESSION['status'];
$id = $_SESSION['id'];

if (isset($id)) {
    try {
        $sql = "UPDATE `agents` 
                SET `agent_name` = :agent_name, `image_url` = :image_url, `overview` = :overview, `upper_limit` = :upper_limit, `deadline` = :deadline, `button_type` = :button_type, `pickup` = :pickup, `star` = :star, `official_link` = :official_link, `article_link` = :article_link, `memo` = :memo, `status` = :status
                WHERE id = :id";
        $stmt = $db->prepare($sql);
        $params = array(
            ':agent_name' => $agent_name,
            ':image_url' => $image_url,
            ':overview' => $overview,
            ':upper_limit' => $upper_limit,
            ':deadline' => $deadline,
            ':button_type' => $button_type,
            ':pickup' => $pickup,
            ':star' => $star,
            ':official_link' => $official_link,
            ':article_link' => $article_link,
            ':memo' => $memo,
            ':status' => $status,
            ':id' => $id
        );
        $stmt->execute($params); //挿入する値が入った変数をexecuteにセットしてSQLを実行
        echo '<p>エージェント情報を更新しました。</p>';
    } catch (PDOException $e) {
        exit('エージェント情報を更新できませんでした。' . $e->getMessage());
    }
    try {
        //組み立て
        foreach ($tag_ids as $tag_id) {
            $sql  = 'DELETE FROM `agent_tag_table` WHERE `agent_id` = ?;
                     INSERT INTO `agent_tag_table` (`agent_id`, `tag_id`) VALUES (?, ?)';
            //実行
            $sth = $db->prepare($sql);
            $sth->execute(array($id,$id,$tag_id));
        }
        echo '<p>タグ情報を更新しました。</p>';
    } catch (PDOException $e) {
        exit('タグ情報を更新できませんでした。' . $e->getMessage());
    }
} else {
    try {
        // agentsテーブル用sql
        $sql = "INSERT INTO `agents` (`agent_name`, `image_url`, `overview`, `upper_limit`, `deadline`, `button_type`, `pickup`, `star`, `official_link`, `article_link`, `memo`, `status`) 
            VALUES(:agent_name, :image_url, :overview, :upper_limit, :deadline, :button_type, :pickup, :star, :official_link, :article_link, :memo, :status)";
        // INSERT文を変数に格納。:nameや:categoryはプレースホルダという、値を入れるための単なる空箱
        $stmt = $db->prepare($sql); //挿入する値は空のまま、SQL実行の準備をする
        $params = array(
            ':agent_name' => $agent_name,
            ':image_url' => $image_url,
            ':overview' => $overview,
            ':upper_limit' => $upper_limit,
            ':deadline' => $deadline,
            ':button_type' => $button_type,
            ':pickup' => $pickup,
            ':star' => $star,
            ':official_link' => $official_link,
            ':article_link' => $article_link,
            ':memo' => $memo,
            ':status' => $status
        ); // 挿入する値を配列に格納する
        $stmt->execute($params); //挿入する値が入った変数をexecuteにセットしてSQLを実行
        echo '<p>登録しました。</p>'; // 登録完了のメッセージ
    } catch (PDOException $e) {
        exit('新規エージェントを登録できませんでした。' . $e->getMessage());
    }

    try {
        $agent_id = $db->lastInsertId();
        //組み立て
        foreach ($tag_ids as $tag_id) {
            $sql  = 'INSERT INTO `agent_tag_table` (`agent_id`, `tag_id`) VALUES (?, ?)';
            //実行
            $sth = $db->prepare($sql);
            $sth->execute(array($agent_id, $tag_id));
        }
        echo '<p>登録しました。</p>';
    } catch (PDOException $e) {
        exit('タグ名を登録できませんでした。' . $e->getMessage());
    }
}
