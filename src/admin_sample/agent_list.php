<?php
session_start();
require(dirname(__FILE__) . "/dbconnect.php");

$stmt = $db->query('SELECT * FROM agents');
$agents = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<div>

</div>

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