<?php
session_start();
require(dirname(__FILE__,2) . "/dbconnect.php");

//POSTされたデータを変数に格納
$agent_name = isset( $_POST[ 'agent_name' ] ) ? $_POST[ 'agent_name' ] : NULL;
$image = uniqid(mt_rand(), true);//ファイル名をユニーク化
$image .= '.' . substr(strrchr($_FILES['image_url']['name'], '.'), 1);//アップロードされたファイルの拡張子を取得
  $file = "images/$image";
    if (!empty($_FILES['image_url']['name'])) {//ファイルが選択されていれば$imageにファイル名を代入
        move_uploaded_file($_FILES['image_url']['tmp_name'], './images/' . $image);//imagesディレクトリにファイル保存
    }
$overview = isset( $_POST[ 'overview' ] ) ? $_POST[ 'overview' ] : NULL;
$upper_limit = !empty( $_POST[ 'upper_limit' ] ) ? $_POST[ 'upper_limit' ] : NULL;
$deadline = !empty( $_POST[ 'deadline' ] ) ? $_POST[ 'deadline' ] : NULL;
$button_type = isset( $_POST[ 'button_type' ] ) ? $_POST[ 'button_type' ] : NULL;
$pickup = !empty( $_POST[ 'pickup' ] ) ? $_POST[ 'pickup' ] : NULL;
$star = isset( $_POST[ 'star' ] ) ? $_POST[ 'star' ] : NULL;
$official_link = isset( $_POST[ 'official_link' ] ) ? $_POST[ 'official_link' ] : NULL;
$article_link = isset( $_POST[ 'article_link' ] ) ? $_POST[ 'article_link' ] : NULL;
$tag = isset( $_POST[ 'tag' ] ) ? $_POST[ 'tag' ] : NULL;
$memo = !empty( $_POST[ 'memo' ] ) ? $_POST[ 'memo' ] : NULL;
$status = isset( $_POST[ 'status' ] ) ? $_POST[ 'status' ] : NULL;

//POSTされたデータを整形（前後にあるホワイトスペースを削除）
$agent_name = trim( $agent_name );
$overview = trim( $overview );
if (!is_null($upper_limit))
  $upper_limit = trim( $upper_limit ) ;
if (!is_null($deadline))
  $deadline = trim( $deadline ) ;
$button_type = trim( $button_type );
$star = trim( $star );
$official_link = trim( $official_link );
$article_link = trim( $article_link );
if (!is_null($memo))
  $memo = trim( $memo ) ;
$status = trim( $status );

//POSTされたデータをセッション変数に保存
$_SESSION[ 'agent_name' ] = $agent_name;
$_SESSION[ 'image_url' ] = $file;
$_SESSION[ 'overview' ] = $overview;
$_SESSION[ 'upper_limit' ] = $upper_limit;
$_SESSION[ 'deadline' ] = $deadline;
$_SESSION[ 'button_type' ] = $button_type;
$_SESSION[ 'pickup' ] = $pickup;
$_SESSION[ 'star' ] = $star;
$_SESSION[ 'official_link' ] = $official_link;
$_SESSION[ 'article_link' ] = $article_link;
$_SESSION[ 'tag' ] = $tag;
$_SESSION[ 'memo' ] = $memo;
$_SESSION[ 'status' ] = $status;
?>

<div>
<p>会社名</p>
<?= $agent_name;?>

<p>写真</p>
<img src="<?= $file;?>">

<p>概要</p>
<?= $overview;?>

<p>掲載上限</p>
<?= $upper_limit;?>

<!-- <p>掲載順位</p> -->

<p>掲載期限</p>
<?= $deadline;?>

<p>申し込み形態</p>
<?php 
if($button_type === 0){
    echo "内部サイトタイプ";
}else{
    echo "外部サイトタイプ";
}
?>

<p>PICKUP状況</p>
<?php 
if($pickup === 0){
    echo "PICKUP対象";
}else{
    echo "PICKUP非対象";
}
?>

<p>星の数</p>
<?= $star;?>

<p>公式サイトリンク</p>
<a href="<?= $official_link;?>"><?= $official_link;?></a>

<p>詳細記事ページリンク</p>
<a href="<?= $article_link;?>"><?= $article_link;?></a>

<p>タグ</p>
<?php
try{
      $sql = 'SELECT tag_name
      FROM `tag_table`';
      if (count($tag) > 0){
        $sql .= 'WHERE id in (' . substr(str_repeat(',?', count($tag)), 1) . ')';
      }
      $stmt = $db->prepare($sql);
      $stmt->execute($tag);
      $tag_names = $stmt->fetchAll(PDO::FETCH_ASSOC);
      foreach($tag_names as $key => $tag_name){
        echo "#" . $tag_name["tag_name"] . " ";
       }
    }catch (PDOException $e){
      echo "tag_name error!" . $e->getMessage() . PHP_EOL;
      exit;
    }
    ?>

<p>メモ</p>
<?= $memo;?>

<p>掲載状況</p>
<?php 
if($status === 0){
    echo "掲載";
}else{
    echo "非掲載";
}
?>

<!-- var_dump($_FILES) -->
<!-- phpでサイトアップロードここまで-->

<form action="newagent_complete.php" method="post" class="confirm">
<button type="submit" class="btn btn-success">登録する</button>
  </form>
