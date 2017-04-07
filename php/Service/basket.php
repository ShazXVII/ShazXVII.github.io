<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="basket.css">
  <title>Shopping Cart</title>
</head>
<?php
 ?>
<body>
  <div id="outcart">
    <h1>Welcome <?php session_start(); echo $_SESSION['email']; ?></h1>
    <h1>Add more items to your cart:</h1>
    <form class="" action="basket.php" method="post">
    <div class="para" id="premiere">
      <div class="underpara" id=""><h3>Video >= 5 Min</h3> <p>Edit a video up to 5 minutes.</p><h3>200kr/hr</h3><button id="vu5" type="submit" name="add2cartbtn" value="vu5"><b>Buy</b></button></div>
      <div class="underpara" id=""><h3>Video >= 10 Min</h3> <p>Edit a video up to 10 minutes.</p><h3>150kr/hr</h3><button id="vu10" type="submit" value="vu10" name="add2cartbtn"><b>Buy</b></button></div>
      <div class="underpara" id=""><h3>Video < 10 Min</h3> <p>Edit a video longer than 10 minutes.</p><h3>125kr/hr</h3><button id="vo10" type="submit" value="vo10" name="add2cartbtn"><b>Buy</b></button></div>
      <div class="underpara" id=""><h3>Re-edit Video</h3> <p>Re-edit a video.</p><h3>150kr/hr</h3><button id="vr10" type="submit" value="vr10" name="add2cartbtn" ><b>Buy</b></button></div>
    </div>
    <div class="para" id="photoshop">
      <div class="underpara" id=""><h3>Logo</h3> <p>Custom Logo.</p><h3>200kr/hr</h3><button id="cl" type="submit" value="cl" name="add2cartbtn"><b>Buy</b></button></div>
      <div class="underpara" id=""><h3>Logo touch-up</h3> <p>Touch up on an existing logo.</p><h3>150kr/hr</h3><button id="tl" type="submit" value="tl"name="add2cartbtn" ><b>Buy</b></button></div>
      <div class="underpara" id=""><h3>Portrait Touch-up</h3> <p>Touch up a portrait</p><h3>200kr/hr</h3><button id="tp" type="submit" value="tp"name="add2cartbtn" ><b>Buy</b></button></div>
      <div class="underpara" id=""><h3>Picture touch-up</h3> <p>Touch up an image.</p><h3>200kr/hr</h3><button id="ti" type="submit" value="ti" name="add2cartbtn" ><b>Buy</b></button></div>
    </div>
    <div class="para" id="aftereffects">
      <div class="underpara" id=""><h3>Explosion</h3> <p>One explosion effect keyed into your footage.</p><h3>500kr/hr</h3><button id="oe" type="submit" value="oe" name="add2cartbtn" ><b>Buy</b></button></div>
      <div class="underpara" id=""><h3>Stabilizing</h3> <p>Stabilize your footage</p><h3>300kr/hr</h3><button id="sf" type="submit" value="sf" name="add2cartbtn" ><b>Buy</b></button></div>
    </div>
    <div class="para" id="dynamicwebsite">
    <div class="underpara" id=""><h3>Simple PHP</h3> <p>Website w/ simple PHP.</p><h3>400kr/hr</h3><button id="wsp" type="submit" value="wsp" name="add2cartbtn" ><b>Buy</b></button></div>
    <div class="underpara" id=""><h3>PHP + MySQL</h3> <p>PHP website with MySQL databases.</p><h3>800kr/hr</h3><button id="wspm" type="submit" value="wspm" name="add2cartbtn" ><b>Buy</b></button></div>
    <div class="underpara" id=""><h3>PHP + MySQL + Login</h3> <p>PHP website with MySQL databases and login system.</p><h3>1200kr/hr</h3><button id="wspml" type="submit" value="wspml" name="add2cartbtn" ><b>Buy</b></button></div>
    </div>
    <div class="para" id="staticwebsite">
      <div class="underpara" id=""><h3>1 Page HTML + CSS</h3> <p>Custom one-page HTML and CSS website.</p><h3>200kr/hr + hosting</h3><button id="onehc" type="submit" value="onehc" name="add2cartbtn" ><b>Buy</b></button></div>
      <div class="underpara" id=""><h3>Multi-page HTML +CSS</h3> <p>Custom multi-page HTML and CSS website</p><h3>175kr/hr + hosting + 100kr/page</h3><button id="xhc" type="submit" value="xhc" name="add2cartbtn" ><b>Buy</b></button></div>
      <div class="underpara" id=""><h3>1 Page HTML + CSS + JS</h3> <p>Custom one-page HTML, CSS and Javascript website.</p><h3>275kr/hr + hosting</h3><button id="onehcj" type="submit" value="onehcj" name="add2cartbtn" ><b>Buy</b></button></div>
      <div class="underpara" id=""><h3>Multi-Page HTML + CSS + JS</h3> <p>Custom multi-page HTML, CSS and Javascript website.</p><h3>275kr/hr + hosting + 175kr/page</h3><button id="xhcj" type="submit" value="xhcj" name="add2cartbtn" ><b>Buy</b></button></div>
    </div>
    <div class="para" id="softwarehelp">
      <div class="underpara" id=""><h3>General software help</h3> <p>Help with fixing software related problems.</p><h3>300kr/hr</h3><button id="sp" type="submit" name="removebtn" value="sp" ><b>Buy</b></button></div>
    </div>
  </form>
  </div>
  <div id="incart">
    <h1>Your cart:</h1> <form class="" action="thanksfam.php" method="post"> <input type="text" name="comment" value="" placeholder="comment"><button type="submit" name="buy" value="">Confirm purchase</button></form>
    <form class="" action="basket.php" method="post">
    <?php
      session_start();
      $_SESSION['basketitem'] = $_POST['valuebtn'];
      $array = array('vu5' => '<div class="underpara" id=""><h3>Video >= 5 Min</h3> <p>Edit a video up to 5 minutes.</p><h3>200kr/hr</h3><button id="vu5" type="submit" name="removebtn" value="vu5"><b>Remove</b></button></div>', 'vu10'=> '<div class="underpara" id=""><h3>Video >= 10 Min</h3> <p>Edit a video up to 10 minutes.</p><h3>150kr/hr</h3><button id="vu10" type="submit" value="vu10" name="removebtn"><b>Remove</b></button></div>', 'vo10' => '<div class="underpara" id=""><h3>Video < 10 Min</h3> <p>Edit a video longer than 10 minutes.</p><h3>125kr/hr</h3><button id="vo10" type="submit" value="vo10" name="removebtn"><b>Remove</b></button></div>', 'vr10' => '<div class="underpara" id=""><h3>Re-edit Video</h3> <p>Re-edit a video.</p><h3>150kr/hr</h3><button id="vr10" type="submit" value="vr10" name="removebtn" ><b>Remove</b></button></div>', 'cl' => '<div class="underpara" id=""><h3>Logo</h3> <p>Custom Logo.</p><h3>200kr/hr</h3><button id="cl" type="submit" name="removebtn" value="cl"><b>Remove</b></button></div>', 'tl' => '<div class="underpara" id=""><h3>Logo touch-up</h3> <p>Touch up on an existing logo.</p><h3>150kr/hr</h3><button id="tl" type="submit" value="tl"name="removebtn" ><b>Remove</b></button></div>', 'tp' => '<div class="underpara" id=""><h3>Portrait Touch-up</h3> <p>Touch up a portrait</p><h3>200kr/hr</h3><button id="tp" type="submit" value="tp"name="removebtn" ><b>Remove</b></button></div>', 'ti' => '<div class="underpara" id=""><h3>Picture touch-up</h3> <p>Touch up an image.</p><h3>200kr/hr</h3><button id="ti" type="submit" value="ti" name="add2cartbtn" ><b>Buy</b></button></div>', 'oe' => '<div class="underpara" id=""><h3>Explosion</h3> <p>One explosion effect keyed into your footage.</p><h3>500kr/hr</h3><button id="oe" type="submit" value="oe" name="removebtn" ><b>Remove</b></button></div>', 'sf' => '<div class="underpara" id=""><h3>Stabilizing</h3> <p>Stabilize your footage</p><h3>300kr/hr</h3><button id="sf" type="submit" value="sf" name="removebtn" ><b>Remove</b></button></div>', 'wsp' => '<div class="underpara" id=""><h3>Simple PHP</h3> <p>Website w/ simple PHP.</p><h3>400kr/hr</h3><button id="wsp" type="submit" value="wsp" name="removebtn" ><b>Remove</b></button></div>', 'wspm' => '<div class="underpara" id=""><h3>PHP + MySQL</h3> <p>PHP website with MySQL databases.</p><h3>800kr/hr</h3><button id="wspm" type="submit" value="wspm" name="removebtn" ><b>Remove</b></button></div>', 'wspml' => '<div class="underpara" id=""><h3>PHP + MySQL + Login</h3> <p>PHP website with MySQL databases and login system.</p><h3>1200kr/hr</h3><button id="wspml" type="submit" value="wspml" name="removebtn" ><b>Remove</b></button></div>', 'onehc' => '<div class="underpara" id=""><h3>1 Page HTML + CSS</h3> <p>Custom one-page HTML and CSS website.</p><h3>200kr/hr + hosting</h3><button id="onehc" type="submit" value="onehc" name="removebtn" ><b>Remove</b></button></div>', 'xhc' => '<div class="underpara" id=""><h3>Multi-page HTML +CSS</h3> <p>Custom multi-page HTML and CSS website</p><h3>175kr/hr + hosting + 100kr/page</h3><button id="xhc" type="submit" value="xhc" name="removebtn" ><b>Remove</b></button></div>', 'onehcj' => '<div class="underpara" id=""><h3>1 Page HTML + CSS + JS</h3> <p>Custom one-page HTML, CSS and Javascript website.</p><h3>275kr/hr + hosting</h3><button id="onehcj" type="submit" value="onehcj" name="removebtn" ><b>Remove</b></button></div>', 'xhcj' => '<div class="underpara" id=""><h3>Multi-Page HTML + CSS + JS</h3> <p>Custom multi-page HTML, CSS and Javascript website.</p><h3>275kr/hr + hosting + 175kr/page</h3><button id="xhcj" type="submit" value="xhcj" name="removebtn" ><b>Remove</b></button></div>', 'sp' => '<div class="underpara" id=""><h3>General software help</h3> <p>Help with fixing software related problems.</p><h3>300kr/hr</h3><button id="sp" type="submit" value="sp" name="removebtn" ><b>Remove</b></button></div>');
      if (!isset($_SESSION['printarray'])) {
        $_SESSION['printarray'] = array();
      }
      $_SESSION['printarray'][] = $_SESSION['basketitem'].$_POST['add2cartbtn'];
      $count = count($_SESSION['printarray']);
      for ($i=0; $i <$count ; $i++) {
        echo $array[$_SESSION['printarray'][$i]];
      }

      if (isset($_POST['removebtn'])) {
          unset($array[$_POST['removebtn']]);
      }
     ?>
     </form>
  </div>

</body>
</html>
<!--
