<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"/>
    <title>현질 계산기</title>
  </head>
  <style media="screen">

    @font-face {
      font-family: "Washington";
      src: url(res/font/WashingtonBoldDynamic.otf);
      font-display: swap;
    }

    @font-face {
      font-family: "Dodam";
      src: url(res/font/Typo_DodamM.ttf);
      font-display: swap;
    }

    * {margin: 0;}
    html, body {height:100%; width:100%;}
    body{
      display: grid;
      grid-template-rows: 1fr 10fr 9fr 2fr;
      background: white;
      font-family: 'Dodam', 'Washington';

    }

    .header{
      background: white;
      border-bottom: 1px gray solid;
    }

    .itmTab{
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      position:relative;
      background: white;
      overflow: scroll;
      border-bottom: 1px gray solid;
    }

    .itm {
      display: grid;
      position:relative;
      background-image: url('res/img/itm_border.png');
      background-repeat: no-repeat;
      background-size: 100% 100%;
      grid-template-rows: 5fr 1fr;
      width: 100%;
      height: 100%;
    }

    .itmImg {
      margin: auto;
      height: 60%;
      width: auto;
    }

    .itmName {
      background-color: white;
      text-align: center;
      margin-left: auto;
      margin-right: auto;
    }

    .invTab{
      position:relative;
      background: white;
      border-bottom: 1px gray solid;
    }

    .priTab{
      display: grid;
    }

    .actPri{
      display: grid;
      position: relative;
      grid-template-columns: 1fr 1fr 1fr;
    }

    .prices{
      display: grid;
      grid-template-columns: 1fr 3fr;
    }

    .icon {
      height: 50%; width: auto;
      text-align: center;
      margin-top: auto;
      margin-bottom: auto;
    }

    .res{
      color: black;
      border: none;
      background: transparent;
      margin: auto;
      text-align: left;
      font-family: 'Washington';
      font-size: 80%
    }

    h1 {
      margin: 1%;
      font-weight: normal;
      color: black;
      text-align: center;
    }

  </style>
  <script type="text/javascript">
    const w = 50; t = 3; c = 3450;
  </script>
  <body>
    <div class="header">
      <h1 style="font-size: 170%;">현질 계산기</h1>
    </div>
    <div class="itmTab">

      <div class="itm">
        <img class="itmImg" src="res\img\KeyD.png">
        <div class="itmName">
          다이아 키
        </div>
      </div>
      <div class="itm">
        <img class="itmImg" src="res\img\KeyD.png">
        <div class="itmName">
          다이아 키
        </div>
      </div>
      <div class="itm">
        <img class="itmImg" src="res\img\KeyD.png">
        <div class="itmName">
          다이아 키
        </div>
      </div>
      <div class="itm">
        <img class="itmImg" src="res\img\KeyD.png">
        <div class="itmName">
          다이아 키
        </div>
      </div>
      <div class="itm">
        <img class="itmImg" src="res\img\KeyD.png">
        <div class="itmName">
          다이아 키
        </div>
      </div>
      <div class="itm">
        <img class="itmImg" src="res\img\KeyD.png">
        <div class="itmName">
          다이아 키
        </div>
      </div>
      <div class="itm">
        <img class="itmImg" src="res\img\KeyD.png">
        <div class="itmName">
          다이아 키
        </div>
      </div>
      <div class="itm">
        <img class="itmImg" src="res\img\KeyD.png">
        <div class="itmName">
          다이아 키
        </div>
      </div>
      <div class="itm">
        <img class="itmImg" src="res\img\KeyD.png">
        <div class="itmName">
          다이아 키
        </div>
      </div>
      <div class="itm">
        <img class="itmImg" src="res\img\KeyD.png">
        <div class="itmName">
          다이아 키
        </div>
      </div>

      <?php
        $itmDat = fopen('res/data/item.txt', 'r');
        while(!feof($itmDat)) {
          $itmArray = fgetcsv($itmDat, 1000, ",");
          echo '
            <div class="itm">
              <img class="itmImg" src="res/img/'.$itmArray[0].'.png">
              <div class="itmName">
                '.$itmArray[1].'
              </div>
            </div>
          ';
        }
       ?>

    </div>
    <div class="invTab">
      <div class="invItm">

      </div>
      <div class="invCurr">

      </div>
    </div>
    <div class="priTab">
      <div class="actPri">
        <div class= "prices"><img class="icon" src="res\img\CurrencyT.png"><input class="res" type="text" value="1,720,200" readonly/></div>
        <div class= "prices"><img class="icon" src="res\img\CurrencyC.png"><input class="res" type="text" value="1,720,200" readonly/></div>
        <div class= "prices"><img class="icon" src="res\img\CurrencyW.png" style="height: 40%"><input class="res" type="text" value="1,720,200" readonly/></div>
      </div>
    </div>
  </body>
</html>
