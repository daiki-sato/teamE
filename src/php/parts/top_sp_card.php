<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>top_sp_card</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/top_sp_card.css">
  </head>
  
  
  
  <body>
    
    
    <?php function part_sp_card($thanksPage_recommended__image,
                                $thanksPage_recommended__agant_name,
                                $thanksPage_recommended__hashtag,
                                $thanksPage_recommended__stars_rating,
                                $thanksPage_recommended__contents_explanation,
                                $thanksPage_recommended_button__submit) { ?>

    
          <div class="thanksPage-reccomended__contents--parent">
            <div class="thanksPage-recommended__contents-summary">

              <div class="thanksPage-recommended__contents-summary--left">
                <img src="<?php echo $thanksPage_recommended__image?>" class="thanksPage-recommended__image" alt="エージェント画像が入ります">
              </div>

              <div class="thanksPage-recommended__contents-summary--right">    
                <p class="thanksPage-recommended__agant-name--box">
                  <a href="#" class="thanksPage-recommended__agant-name"><?php echo $thanksPage_recommended__agant_name?></a>
                </p>
                <p class="thanksPage-recommended__hashtag">
                  <? echo $thanksPage_recommended__hashtag?>
                </p>
                <p class="thanksPage-recommended__stars">
                  <span class="thanksPage-recommended__stars-rating" data-rate="3"></span>&ensp;<? echo $thanksPage_recommended__stars_rating?>
                </p>
              </div>

            </div>

            <div class="thanksPage-recommended__contents-explanation">
              <? echo $thanksPage_recommended__contents_explanatio?>
            </div>

            <div class="thanksPage-recommended-buttons">
              <p>
                <span class="thanksPage-recommended-button__article">解説記事</span>
              </p>
              <p id="submitbutton" onClick='showDialog()'>
                <span class="thanksPage-recommended-button__submit"><? echo $thanksPage_recommended_button__submit?></span>
              </p>

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

    <?php } ?>








</body>
</html>