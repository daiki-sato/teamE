<?php
//セッションを開始
session_start();
//エスケープ処理やデータをチェックする関数を記述したファイルの読み込み
require '../libs/functions.php';
require  "../dbconnect.php";

//お問い合わせ日時を日本時間に
date_default_timezone_set('Asia/Tokyo');

//POSTされたデータをチェック
$_POST = checkInput($_POST);
//固定トークンを確認（CSRF対策）
if (isset($_POST['ticket'], $_SESSION['ticket'])) {
  $ticket = $_POST['ticket'];
  if ($ticket !== $_SESSION['ticket']) {
    //トークンが一致しない場合は処理を中止
    die('Access denied');
  }
} else {
  //トークンが存在しない場合（入力ページにリダイレクト）
  //die( 'Access Denied（直接このページにはアクセスできません）' );  //処理を中止する場合
  $dirname = dirname($_SERVER['SCRIPT_NAME']);
  $dirname = $dirname == DIRECTORY_SEPARATOR ? '' : $dirname;
  $url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['SERVER_NAME'] . $dirname . '/contact.php';
  header('HTTP/1.1 303 See Other');
  header('location: ' . $url);
  exit; //忘れないように
}

//変数にエスケープ処理したセッション変数の値を代入
$familyname = h($_SESSION['familyname']);
$firstname = h($_SESSION['firstname']);
$familyfurigana = h($_SESSION['familyfurigana']);
$firstfurigana =  h($_SESSION['firstfurigana']);
$year = h($_SESSION['year']);
$month = h($_SESSION['month']);
$day = h($_SESSION['day']);
$sex = h($_SESSION['sex']);
$prefecture = h($_SESSION['prefecture']);
$university = h($_SESSION['university']);
$department = h($_SESSION['department']);
$subject = h($_SESSION['subject']);
$graduationyear = h($_SESSION['graduationyear']);
$worklocation = h($_SESSION['worklocation']);
$tel = h($_SESSION['tel']);
$email = h($_SESSION['email']);
$body = h($_SESSION['body']);

//スプシのwebURL
$url = 'https://script.google.com/macros/s/AKfycbzG463t0aRICPhbL2YJlby0wWsdX37gfeRAC1JNG41l6czDrpRFV7AYZuzc4SNikuzdaA/exec';
// すぷしに持っていくデータの設定
$data = array(
  'familyname' => $familyname,
  'firstname' => $firstname,
  'familyfurigana' => $familyfurigana,
  'firstfurigana' => $firstfurigana,
  'year' => $year,
  'month' => $month,
  'day' => $day,
  'sex' => $sex,
  'prefecture' => $prefecture,
  'university' => $university,
  'department' => $department,
  'subject' => $subject,
  'graduationyear' => $graduationyear,
  'worklocation' => $worklocation,
  'tel' => $tel,
  'email' => $email,
  'body' => $body
);

// リクエスト情報の設定
$context = array(
  'http' => array(
    'method'  => 'POST',
    'header'  => implode("\r\n", array('Content-Type: application/x-www-form-urlencoded',)),
    'content' => http_build_query($data)
  )
);
// リクエストの実装
$response_json = file_get_contents($url, false, stream_context_create($context));
// jsonの文字列をPHPで扱いやすくしている
$response_data = json_decode($response_json);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>サンクスページ_sp</title>
  <link rel="stylesheet" href="/css/style.css">
</head>

<body>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/php/parts/_header.php"); ?>

  <div class="container">

    <div id='text' class="thanksPage-container">
      <!-- スプシに情報をおくれている　→　成功 -->
      <?php if ($response_data->status === 200) : ?>
        <div class="thanksPage-title__text">
          <h1 class="thanksPage-title__pagetop">Thanks!</h1>
          <h2 class="thanksPage-title__pagetop2">お申し込みありがとうございます</h2>
          <h3 class="thanksPage-title__pagetop3">お申し込み内容の確認についてのメールを送信しました。</h3>
        </div>
      <?php else : ?>
        <div class="thanksPage-title__text">
          <h1 class="thanksPage-title__pagetop">Sorry...</h1>
          <h2 class="thanksPage-title__pagetop2">申し訳ございませんが、送信に失敗しました。</h2>
          <h3 class="thanksPage-title__pagetop3">しばらくしてもう一度お試しになるか、メールにてご連絡ください。<br>ご迷惑をおかけして誠に申し訳ございません。</h3>
        </div>
      <?php endif; ?>


      <div class="thanksPage-title__alert--parent">
        <p class="thanksPage-title__alert--child">
          メールが届かない場合、まずは迷惑フォルダをご確認ください。<br>
          無い場合には、お手数ですが<br>
          就活の教科書△△△○○@□□.com<br>
          までお問い合わせください。
        </p>
      </div>

      <div class="thanksPage-recommended__title--parent">
        <div class="thanksPage-recommended__title--child">
          <div class="thanksPage-recommended__triangle"></div>
          <h4 class="thanksPage-recommended__text">あなたにおすすめのエージェント</h4>
          <div class="thanksPage-recommended__triangle"></div>
        </div>

        <?
        $agent_ids = h($_SESSION['agent']);
        if (isset($_POST['agent'])) {
          $agent_ids = array_merge($_SESSION['agent'], $_POST['agent']);
          $_SESSION['agent'] = $agent_ids;
        };

        // とってきたagentid以外のagentのカードを表示（無限ループ）
        try {
          $sql = 'SELECT id,agent_name,image_url,overview,star,official_link,article_link
           FROM `agents`';
          $sql .= 'WHERE agents.id  NOT IN ( ' . substr(str_repeat(',?', count($agent_ids)), 1) . ')';
          $sql .= 'LIMIT 0, 2';
          $stmt = $db->prepare($sql);
          $stmt->execute($agent_ids);
          $agents = $stmt->fetchAll(PDO::FETCH_ASSOC);
          var_dump($agents);
        } catch (PDOException $e) {
          echo "agents error!" . $e->getMessage() . PHP_EOL;
          exit;
        }
        ?>

        <!-- PC版内部サイト用エージェントのforeachここから-->
        <?php if (!is_null($agents)) : ?>
          <?php foreach ($agents as $index => $agent) : ?>
            <form method="post" action="thanks.php">
              <!-- PC版無限ループ用カード -->
              <div class="card-pc__container">

                <div class="card-pc__left">
                  <img src="<?= $agent["image_url"]; ?>" class="card-pc__img" alt="エージェント画像が入ります">
                </div>

                <div class="card-pc__right">

                  　　　　　　　<div class="card-pc__agent-top">
                    <p>
                      <a href="<?= $agent["offcial_link"]; ?>" class="card-pc__agant-name"><?= $agent["agent_name"]; ?></a>
                    </p>
                    <p class="card-pc__hashtag">
                      <?php
                      $stmt = $db->prepare('SELECT tag_name
                                              FROM `agent_tag_table`
                                              INNER JOIN `tag_table` ON agent_tag_table.tag_id = tag_table.id
                                              WHERE agent_id = ?
                                              ');
                      $stmt->execute(array($agent["id"]));
                      $tag_names = $stmt->fetchAll(PDO::FETCH_ASSOC);
                      foreach ($tag_names as $key => $tag_name) {
                        echo "#" . $tag_name["tag_name"] . " ";
                      }
                      ?>
                    </p>
                  </div>

                  <p class="card-pc__stars">
                    <span class="card-pc__stars-rating" data-rate="<?= $agent["star"]; ?>"></span>&ensp;<?= $agent["star"]; ?>
                  </p>

                  <div class="card-pc__agent-explanation">
                    <?= $agent["overview"]; ?>
                  </div>

                  <div class="card-pc__buttons">
                    <button id="articlebtn" class="card__button-article">
                      <a href="<?= $agent["article_link"]; ?>" data-wpel-link="internal" target="_blank" rel="noopener noreferrer">解説記事</a>
                    </button>

                    　<button id="continueapply" class="card-pc__button-submit">
                      <input type="hidden" name="agent[]" value="<?= $agent["id"]; ?>">
                      <input type="hidden" name="ticket" value="<?php echo h($ticket); ?>">
                      <input type="submit">
                      　 <p>続けて申し込む</p>
                      　</button>
                  </div>
                </div>
              </div>
      </div>
      <!-- PC版無限ループ用カードここまで -->
      </form>
    <?php endforeach; ?>
  <?php endif; ?>
  <!-- PC版内部サイト用エージェントのforeachここまで -->

  <!-- SP版内部サイト用エージェントのforeachここから -->
  <?php if (!is_null($agents)) : ?>
    <?php foreach ($agents as $index => $agent) : ?>
      <form method="post" action="thanks.php">
        <!-- SP版無限ループ用カード -->
        <div class="card-sp__container">
          <div class="card-sp-summary">

            <div class="card-sp-summary-left">
              <img src="<?= $agent["image_url"]; ?>" class="card-sp__image" alt="エージェント画像が入ります">
            </div>

            <div class="card-sp-summary-right">
              <p>
                <a href="<?= $agent["offcial_link"]; ?>" class="card-sp__agent-name"><?= $agent["agent_name"]; ?></a>
              </p>
              <p class="card-sp__hashtag">
                <?php
                $stmt = $db->prepare('SELECT tag_name
                                              FROM `agent_tag_table`
                                              INNER JOIN `tag_table` ON agent_tag_table.tag_id = tag_table.id
                                              WHERE agent_id = ?
                                              ');
                $stmt->execute(array($agent["id"]));
                $tag_names = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($tag_names as $key => $tag_name) {
                  echo "#" . $tag_name["tag_name"] . " ";
                }
                ?>
              </p>
              <p class="card-sp__stars">
                <span class="card-sp__stars-rating" data-rate="<?= $agent["star"]; ?>"></span>&ensp;<?= $agent["star"]; ?>
              </p>
            </div>

          </div>

          <div class="card-sp-explanation">
            <?= $agent["overview"]; ?>
          </div>

          <div class="card-sp-buttons">
            <button id="articlebtn" class="card-sp-button__article">
              <a href="<?= $agent["article_link"]; ?>" data-wpel-link="internal" target="_blank" rel="noopener noreferrer">解説記事</a>
            </button>



            <button id="continueapply" class="card-sp__button-submit">
              <input type="hidden" name="agent[]" value="<?= $agent["id"]; ?>">
              <input type="hidden" name="ticket" value="<?php echo h($ticket); ?>">
              <input type="submit" class="card-sp__button-submit">
              <p>続けて申し込む</p>
            </button>
          </div>
          <!-- SP版無限ループ用カードここまで -->
      </form>
    <?php endforeach; ?>
  <?php endif; ?>





  <!-- 申し込み完了モーダル -->
  <div id="modal" class="thanksPafe-container__hidden">
    <div class="thanksPage_modal-content">
      <div class="thanksPage_modal-body">
        <h4>申し込み完了！</h4>
      </div>
    </div>
  </div>
    </div>

  </div>
  </div>

  </div>


  <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="/js/thanks.js"></script>
  <script src="/js/header.js"></script>

</body>

</html>