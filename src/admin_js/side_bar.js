
    let newpublishes = document.getElementsByClassName("newpublish");
    newpublishes = Array.from(newpublishes);
    newpublishes.forEach(function(newpublish) {
      
        newpublish.onclick = function() {
          //   画面遷移
          window.location.href = '../admin/newagent.php'; // 通常の遷移
          console.log(newpublish);
        };
    });

    let infosettings = document.getElementsByClassName("infosetting");
    infosettings = Array.from(infosettings);
    infosettings.forEach(function(infosetting) {
      
        
        infosetting.onclick = function() {
          //   画面遷移
          window.location.href = '../admin/infosetting.php'; // 通常の遷移
          console.log(newpublish);
                
        };
    });
  
    let tagsettings = document.getElementsByClassName("tagsetting");
    tagsettings = Array.from(tagsettings);
    tagsettings.forEach(function(tagsetting) {
        
        tagsetting.onclick = function() {
          //   画面遷移
          window.location.href = '../admin/tagmanage.php'; // 通常の遷移
          console.log(tagsetting);
        };
    });



