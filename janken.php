<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>ゲーム</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="wrapxx">
      <?php

        $hands = array('<img src="./img/gu.png">','<img src="./img/choki.png">','<img src="./img/pa.png">');

        $pcHand = $hands[mt_rand(0,2)];

        switch(true){
          case $pcHand === '<img src="./img/gu.png">':
            $pcHandIndex = 0;
            break;
          case $pcHand === '<img src="./img/choki.png">':
            $pcHandIndex = 1;
            break;
          case $pcHand === '<img src="./img/pa.png">':
            $pcHandIndex = 2;
            break;
          default:
            echo "エラー";
            break;
        }

        echo '<p class="kakegoe"><img src="./img/kakegoe.png"></p>';

        $heardocsxx = <<< EOD
        <div class="result" style="display:none">
        $pcHand
        </div>
        EOD;
        echo $heardocsxx;


        if($_GET['userHand']==="gu"){
          $userHand = 0;
        }else if($_GET['userHand']==="choki"){
          $userHand = 1;
        }else{
          $userHand = 2;
        }
      ?>

      <div class="comment" style="display:none">
      <?php
      switch(true){
        case $pcHandIndex === 0 && $userHand === 1:
        case $pcHandIndex === 1 && $userHand === 2:
        case $pcHandIndex === 2 && $userHand === 0:
          echo "<p class='fin'>{$_GET['name']}さんの負けです！</p>";
          break;
        case $pcHandIndex === $userHand:
          echo "<p class='fin'>あいこです！</p>";
          echo '<a class="aiko" href="index.php">もう一度勝負！</a>';
          break;
        default:
          echo "<p class='fin kachi'>{$_GET['name']}さんの勝ちです！！</p>";
        break;
      }
      ?>
      </div>
    </div>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- js -->
    <script src='js/app.js'></script>
  </body>
</html>