<?php 
session_start();
$hour = $_SESSION['user_hour'];
$min = $_SESSION['user_min'];
?>
<!DOCTYPE html>
<html lang="ko" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel= "stylesheet" type="text/css" href="style/font.css">
    <link rel= "stylesheet" type="text/css" href="style/timer.css">
    <meta charset="UTF-8" />
    <title>IWJGH Project</title>
</head>
<body>
    <div>
      <h1>IWJGH Project - 칼퇴 타이머</h1>
      <hr />
      <h2>당신의 목표 퇴근시간을 입력하세요.</h2>
      <h4>あなたが目標とした時間の一時間前からタイマーが赤に変わります。</h4>
      <h4>Таймер становится красным после 1 часа до того, как вы нацелились.</h4>
      <h4>현재 테스트 중인 기능입니다.</h4>
      <h4>혹시 꼬우시다면 github 이슈에 <highlight>murikubo</highlight>를 언급.</h4>
      <h4>혹시 서버가 터지셨다면 <highlight>qkdpdhfkznak@gmail.com</highlight>에 연락 바람. </h4>
      <h4>혹시...꼬우신가요...?</h4>
      <h4>꼬우면...아시죠...??</h4>
      <h4>TEST Ver. - 2017.11.08_02</h4>  

      <!-- 이후 어떤 것이던 수정 후 브라우저 캐시 적용 확인을 위해 위의 버전을 수정해주세요. -->
      <!-- <양식> TEST ver. - 년도.월.일_그 날의 x번째 수정 -->
      <div class="serval_says_korega_warp_nano_sugoi">
        <div class=".kaban_says_serval_chan_korewa_minus_dayo">
          <!-- <button id="test_bt">Test Button</button> -->
        <form>
          오전<input type="radio" name="gozen_gogou" value="AM">
          오후<input type="radio" name="gozen_gogou" value="PM" checked>
          <input name="hour" type="number" id="want_time_hour" class="time_input" step="24" autofocus value="<?php echo $hour?>">시
          <input name="min" type="number" id="want_time_min" class="time_input" step="60"  value="<?php echo $min?>">분
        </form>
      </div>
    </div>
      <div class="center" align="center"> 
        <div class="clock center" id="clock">
        </div>
      </div>
    </div>
</body>
  <footer>
    <h5>I Just Want Go Home project</h5>
    <h3><a href="http://maware.dothome.co.kr/">서버 릴리즈 사이트 연결</a></h3>
    <h3><a href="./index.html">프로젝트 목록로 돌아가기</a></h3>
    <h5><a href="https://skyaria2016.github.io/table">?????</a></h5>
    <h5>
      Main Designer / coder - <a href="https://github.com/murikubo">Murikubo</a><br>
      Main Server Manager - <a href="https://github.com/lunch1019">lunch1019</a>
    </h5>
    <div class="party_wrap">
      <div class="party_wrap_wrap">  
        <button id="party_time" class="party_button">PARTY TIME</button><br>
        <button id="party_time_done" class="party_button">PARTY IS DONE</button>
      </div>
    </div>
  </footer>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/timer.js"></script>
</html>
