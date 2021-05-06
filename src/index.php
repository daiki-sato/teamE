<?php
session_start();
require(dirname(__FILE__) . "/dbconnect.php");

$stmt = $db->query('SELECT id, agent_name FROM agents');
$agents = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>掲載情報一覧</title>
</head>
<ul>
    <?php foreach($agents as $key => $agent): ?>
        <li>
            <?= $agent["id"]; ?>:<?= $agent["agent_name"]; ?>
        </li>
    <?php endforeach; ?>
    <a href="/admin/index.php">管理者ページ</a>
</ul>
<body>
</body>

</html>