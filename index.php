<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>php課題</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- phpのコードを記述 -->
    <div class="wrap">
    <h1>じゃんけんゲーム</h1>
      <?php
        function input(){
          $heardocs = <<< EOD
          <div class="selectHand">
            <form id="janken" method="GET" action="janken.php">
            <div class="nyuryoku">
              <input id="name" type="text" name="name" value="" placeholder="名前を入力" autocomplete="off">
              <br>
              <div class="message">
                <h2>▼<br><br>手をえらぶ</h2>
                <br>
                <p>※クリックすると勝負がはじまります</p>
              </div>
              </br>
              <div class="hands">
                <button name="userHand" value="gu"><img src="./img/gu.png" class="te"></button>
                <button class="te" name="userHand" value="choki"><img src="./img/choki.png" class="te"></button>
                <button class="te" name="userHand" value="pa"><img src="./img/pa.png" class="te"></button>
              </div>
            </div>
            </form>
          </div>
          EOD;
          echo $heardocs;
        };

        input();

      ?>
    </div>

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- js -->
    <script src='js/app.js'></script>
  </body>
</html>