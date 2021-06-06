<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>申し込みフォーム1</title>
  <link rel="stylesheet" href="/css/style.css">
<body>

  <?php include($_SERVER['DOCUMENT_ROOT']."/php/parts/_header.php"); ?>

  <h1 class="entry-title">&emsp;お申し込み&emsp;</h1>

  <div class="entry-container">

    <div class="entry-page__top">
    　<div class="entry-page__title">
      　<div class="entry-page__title-triangle"></div>
      　<h1 class="entry-page__title-text">基本情報をご入力ください</h1>
    　</div>
    
    　<div class="entry-page__whereareyouat">
      <div class="whereareyouat__icon">
        <span class="whereareyouat__valid">
          <span class="whereareyouat__valid-number">1</span>
        </span>
      </div>
      <div class="whereareyouat__icon">
        <span class="whereareyouat__invalid">
          <span class="whereareyouat__invalid-number">2</span>
        </span>
      </div>
      <div class="whereareyouat__icon">
        <span class="whereareyouat__invalid">
          <span class="whereareyouat__invalid-number">3</span>
        </span>
      </div>
    　</div>
    </div>
  
    <div class="entry-area">
    <form id="main_contact" method="post" action="confirm.php">
    <div class="form-group">
      <label for="familyname" class="entry-label">お名前</label>
      <div class="inputarea">
        <!-- <span class="error"><?php echo h( $error_familyname ); ?></span> -->
        <input type="text" class="form-control validate max50 required" id="familyname" name="familyname" placeholder="高橋" value="<?php echo h($familyname); ?>">
        <label for="firstname"></label>
        <span class="error"><?php echo h( $error_firstname ); ?></span>
        <input type="text" class="form-control validate max50 required" id="firstname" name="firstname" placeholder="日菜" value="<?php echo h($firstname); ?>">
      </div>
    </div>

    <div class="form-group">
      <label for="familyfurigana" class="entry-label">フリガナ（カタカナ）</label>
      <div class="inputarea">
        <span class="error"><?php echo h( $error_familyfurigana ); ?></span>
        <input type="text" class="form-control validate max50 required" id="familyfurigana" name="familyfurigana" placeholder="たかはし" value="<?php echo h($familyfurigana); ?>">
        <label for="firstfurigana"></label>
        <span class="error"><?php echo h( $error_firstfurigana ); ?></span>
        <input type="text" class="form-control validate max50 required" id="firstfurigana" name="firstfurigana" placeholder="ひな" value="<?php echo h($firstfurigana); ?>">
      </div>
    </div>

    <div class="form-group">
      <label for="year" class="entry-label">生年月日</label>
      <div class="inputarea">
        <span class="error"><?php echo h( $year ); ?></span>
        <select class="form-control validate max50 required" id="year" name="year" placeholder="年" value="<?php echo h($year); ?>">
        <option value='' disabled selected style='display:none;'>年</option>
        <option value="1995">1995</option>
        <option value="1996">1996</option>
        <option value="1997">1997</option>
        <option value="1998">1998</option>
        <option value="1999">1999</option>
        <option value="2000">2000</option>
        <option value="2001">2001</option>
        <option value="2002">2002</option>
        <option value="2003">2003</option>
        <option value="2004">2004</option>
        <option value="2005">2005</option>
        </select>
      
        <label for="month">
          <span class="error"><?php echo h( $month ); ?></span>
        </label>
        <select class="form-control validate max50 required" id="month" name="month" placeholder="月" value="<?php echo h($month); ?>">
          <option value='' disabled selected style='display:none;'>月</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
        </select>

        <label for="day">
          <span class="error"><?php echo h( $day ); ?></span>
        </label>
        <select class="form-control validate max50 required" id="day" name="day" value="<?php echo h($day); ?>">
          <option value='' disabled selected style='display:none;'>日</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label for="sex" class="entry-label">性別</label>
        <span class="error"><?php echo h( $sex ); ?></span>
      <div class="inputarea">
        <select class="form-control validate max50 required" id="sex" name="sex" value="<?php echo h($sex); ?>">
          <option value="男性">男性</option>
          <option value="女性">女性</option>
          <option value="その他">その他</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label for="prefecture" class="entry-label">お住まい</label>
        <span class="error"><?php echo h( $prefecture ); ?></span>
      <div class="inputarea">
        <select class="form-control validate max50 required" id="prefecture" name="prefecture" value="<?php echo h($prefecture); ?>">
        <option value='' disabled selected style='display:none;'>都道府県を選択してください</option>
        <option value="北海道">北海道</option>
        <option value="青森県">青森県</option>
        <option value="岩手県">岩手県</option>
        <option value="宮城県">宮城県</option>
        <option value="秋田県">秋田県</option>
        <option value="山形県">山形県</option>
        <option value="福島県">福島県</option>
        <option value="茨城県">茨城県</option>
        <option value="栃木県">栃木県</option>
        <option value="群馬県">群馬県</option>
        <option value="埼玉県">埼玉県</option>
        <option value="千葉県">千葉県</option>
        <option value="東京都" selected>東京都</option>
        <option value="神奈川県">神奈川県</option>
        <option value="新潟県">新潟県</option>
        <option value="富山県">富山県</option>
        <option value="石川県">石川県</option>
        <option value="福井県">福井県</option>
        <option value="山梨県">山梨県</option>
        <option value="長野県">長野県</option>
        <option value="岐阜県">岐阜県</option>
        <option value="静岡県">静岡県</option>
        <option value="愛知県">愛知県</option>
        <option value="三重県">三重県</option>
        <option value="滋賀県">滋賀県</option>
        <option value="京都府">京都府</option>
        <option value="大阪府">大阪府</option>
        <option value="兵庫県">兵庫県</option>
        <option value="奈良県">奈良県</option>
        <option value="和歌山県">和歌山県</option>
        <option value="鳥取県">鳥取県</option>
        <option value="島根県">島根県</option>
        <option value="岡山県">岡山県</option>
        <option value="広島県">広島県</option>
        <option value="山口県">山口県</option>
        <option value="徳島県">徳島県</option>
        <option value="香川県">香川県</option>
        <option value="愛媛県">愛媛県</option>
        <option value="高知県">高知県</option>
        <option value="福岡県">福岡県</option>
        <option value="佐賀県">佐賀県</option>
        <option value="長崎県">長崎県</option>
        <option value="熊本県">熊本県</option>
        <option value="大分県">大分県</option>
        <option value="宮崎県">宮崎県</option>
        <option value="鹿児島県">鹿児島県</option>
        <option value="沖縄県">沖縄県</option>
        </select>
      </div>
    </div>
    
    </form>
    </div>
  
    <div class="compare__box">
    <div class="compare__title">
        <p class="compare__title-text">よく比較・検討されているエージェント</p>
        <p class="compare__title-text2">内定者は平均5エージェントから話を聞いています！</p>
    </div>
    <div class="compare__contents">
      <!-- cardが入ります -->
    </div>
    </div>
  
    <div class="entry__buttons">

    <div class="entry__submitbutton">
      <p>
        <span>次へ</span>
      </p>
    </div>

    <div class="entry__cancelbutton">
      <p>
        <span>申し込みをキャンセルする<br>(入力情報は保存されません)</span>
      </p>
    </div>

    </div>

    <div>
      <details class="confirmlist__box">
        <summary class="confirmlist__title">資料請求リスト</summary>
        <div class="card"><p>card入れる</p></div>
      </details>
    </div>
  
  </div>

<script src="/js/thanks.js"></script>
</body>
</html>