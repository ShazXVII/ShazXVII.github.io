<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="main.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script src="main.js"></script>
  <title>Document</title>
</head>
<?php
session_start();
?>
<body>
  <?php
  session_start();
  if (!isset($_SESSION['email'])) {
    echo '<div id="youneedto"><h2>You need to<span class="close">X</span></h2><button id="login">Login</button><p>or</p><button id="register">Register</button></div>';
  }
  ?>
  <div id="totallyhiddendiv"><h2>Register<span class="close">X</span></h2>
  <form id="submitform" action="register.php" method="post">
    email: <br><input type="text" name="email" value=""placeholder="example@example.com"> <br>
    first name: <br> <input type="text" name="fornavn" value="" placeholder="John"> <br>
    last name: <br> <input type="text" name="etternavn" value="" placeholder="Johnsen"> <br>
    password: <br> <input type="password" name="passord" value="" placeholder="password123" id="pass1"> <br>
    confirm password: <br> <input type="password" name="passordconf" value="" placeholder="password123" id="pass2"> <br>
    <button id="submit" type="submit" name="submit">Submit</button>
  </form> </div>
  <div id="totallyhiddendiv2"><h2>Login<span class="close">X</span></h2>
  <form id="submitform" action="login.php" method="post">
    email: <br><input type="text" name="loginemail" value=""placeholder="example@example.com"> <br>
    password: <br> <input type="password" name="loginpassword" value="" placeholder="password123" id="pass1"> <br>
    <button id="submit" type="submit" name="login">Submit</button>
  </form> </div>
  <div id="topimg"><h1>[Insert Name]</h1></div>
  <div class="para" id="about">
    <h2>[Insert Name]</h2>
    <p>[Insert Name] is a company which provides several forms of techincal assistance in the IT industry. We specialize in audio and video editing/producing, website and computer program writing, and we also offer rewriting / editing whatever you might be unsatisifed with.</p>
    <p>With access to a wide variety of tools we are able to help you with whatever media related task you might have. Some of these programs include Premiere, Audition, After Effects, Photoshop and Dreamweaver. We also specialize in HTML, CSS, SASS, Javascript, AHK and many more.</p>
  </div>
  <div class="midimg" id="firstimg"></div>
  <div class="para" id="media">
    <h2>[Media]</h2>
    <div class="underpara">
      <img src="https://upload.wikimedia.org/wikipedia/commons/c/cb/Adobe_After_Effects_CC_icon.svg" alt="">
      <p>With over 2 years of experience with After Effects we are certain that we are able to help you with your video, either you require explosions or matte tracking.</p>
    </div>
    <div class="underpara">
      <img src="https://upload.wikimedia.org/wikipedia/commons/4/40/Adobe_Premiere_Pro_CC_icon.svg" alt="">
      <p>With quick and efficient editing in Premiere, we are capable of editing your videos as soon as you might need it.</p>
    </div>
    <div class="underpara">
      <img src="http://wwwimages.adobe.com/content/dam/acom/en/products/elements-family/e14/el-to-ccpp/photoshop-cc.icon.svg" alt="">
      <p>With Photoshop we can help you with basically anything you would need. From touching up portraits to creating an image of a galaxy, the possibilites are endless.</p>
    </div>
  </div>
  <div class="midimg" id="secondimg"></div>
  <div class="para" id="programming">
    <h2>[Programming]</h2>
    <div class="underpara">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/200px-HTML5_logo_and_wordmark.svg.png" alt="">
      <p>With HTML we can design websites no matter how simple or complex you might need them.</p>
    </div>
    <div class="underpara">
      <img src="http://2015.cssday.it/img/confs/css/css3.png" alt="">
      <p>With CSS we style your website to your liking. By being efficient in CSS we can easily mold your website exactly the way you want it.</p>
    </div>
    <div class="underpara">
      <img src="http://javascriptsolution.com/wp-content/uploads/2016/06/javascript-shield-1.png" alt="">
      <p>By being proficient in Javascript we can make your website more flexible and beautiful.</p>
    </div>
    <div class="underpara">
      <img src="http://imagespng.com/Data/DownloadLogo/PHP-Logo-PNG-Picture.png" alt="">
      <p>PHP and MySQL gives us the opportunity to make your website dynamic and functional.</p>
    </div>
  </div>
  <div class="midimg" id="thirdimg"></div>
  <div id="navbar">
    <p id="pr" class="linkactive">[Premiere]</p>
    <p id="ph">[Photoshop]</p>
    <p id="ae">[After Effects]</p>
    <p id="dw">[Dynamic Website]</p>
    <p id="sw">[Static Website]</p>
    <p id="sh">[Software Help]</p>
  </div>
  <form id="mainform" action="basket.php" method="post">
  <div class="overpara">
    <div class="para" id="premiere">
      <h2>[Premiere Prices]</h2>
      <div class="underpara" id=""><h3>Video >= 5 Min</h3> <p>Edit a video up to 5 minutes.</p><h3>200kr/hr</h3><button id="vu5" type="submit" name="valuebtn" value="vu5"><b><?php session_start(); if (!isset($_SESSION['email'])) { echo "Login"; } else { echo "Buy"; } ?></b></button></div>
      <div class="underpara" id=""><h3>Video >= 10 Min</h3> <p>Edit a video up to 10 minutes.</p><h3>150kr/hr</h3><button id="vu10" type="submit" value="vu10" name="valuebtn"><b><?php session_start(); if (!isset($_SESSION['email'])) { echo "Login"; } else { echo "Buy"; } ?></b></button></div>
      <div class="underpara" id=""><h3>Video < 10 Min</h3> <p>Edit a video longer than 10 minutes.</p><h3>125kr/hr</h3><button id="vo10" type="submit" value="vo10" name="valuebtn"><b><?php session_start(); if (!isset($_SESSION['email'])) { echo "Login"; } else { echo "Buy"; } ?></b></button></div>
      <div class="underpara" id=""><h3>Re-edit Video</h3> <p>Re-edit a video.</p><h3>150kr/hr</h3><button id="vr10" type="submit" value="vr10" name="valuebtn" ><b><?php session_start(); if (!isset($_SESSION['email'])) { echo "Login"; } else { echo "Buy"; } ?></b></button></div>
    </div>
    <div class="para" id="photoshop">
      <h2>[Photoshop Prices]</h2>
      <div class="underpara" id=""><h3>Logo</h3> <p>Custom Logo.</p><h3>200kr/hr</h3><button id="cl" type="submit" name="cl"><b><?php session_start(); if (!isset($_SESSION['email'])) { echo "Login"; } else { echo "Buy"; } ?></b></button></div>
      <div class="underpara" id=""><h3>Logo touch-up</h3> <p>Touch up on an existing logo.</p><h3>150kr/hr</h3><button id="tl" type="submit" value="tl"name="valuebtn" ><b><?php session_start(); if (!isset($_SESSION['email'])) { echo "Login"; } else { echo "Buy"; } ?></b></button></div>
      <div class="underpara" id=""><h3>Portrait Touch-up</h3> <p>Touch up a portrait</p><h3>200kr/hr</h3><button id="tp" type="submit" value="tp"name="valuebtn" ><b><?php session_start(); if (!isset($_SESSION['email'])) { echo "Login"; } else { echo "Buy"; } ?></b></button></div>
      <div class="underpara" id=""><h3>Picture touch-up</h3> <p>Touch up an image.</p><h3>200kr/hr</h3><button id="ti" type="submit" value="ti" name="valuebtn" ><b><?php session_start(); if (!isset($_SESSION['email'])) { echo "Login"; } else { echo "Buy"; } ?></b></button></div>
    </div>
    <div class="para" id="aftereffects">
      <h2>[After Effects Prices]</h2>
      <div class="underpara" id=""><h3>Explosion</h3> <p>One explosion effect keyed into your footage.</p><h3>500kr/hr</h3><button id="oe" type="submit" value="oe" name="valuebtn" ><b><?php session_start(); if (!isset($_SESSION['email'])) { echo "Login"; } else { echo "Buy"; } ?></b></button></div>
      <div class="underpara" id=""><h3>Stabilizing</h3> <p>Stabilize your footage</p><h3>300kr/hr</h3><button id="sf" type="submit" value="sf" name="valuebtn" ><b><?php session_start(); if (!isset($_SESSION['email'])) { echo "Login"; } else { echo "Buy"; } ?></b></button></div>
    </div>
    <div class="para" id="dynamicwebsite">
      <h2>[Dynamic Website Prices]</h2>
    <div class="underpara" id=""><h3>Simple PHP</h3> <p>Website w/ simple PHP.</p><h3>400kr/hr</h3><button id="wsp" type="submit" value="wsp" name="valuebtn" ><b><?php session_start(); if (!isset($_SESSION['email'])) { echo "Login"; } else { echo "Buy"; } ?></b></button></div>
    <div class="underpara" id=""><h3>PHP + MySQL</h3> <p>PHP website with MySQL databases.</p><h3>800kr/hr</h3><button id="wspm" type="submit" value="wspm" name="valuebtn" ><b><?php session_start(); if (!isset($_SESSION['email'])) { echo "Login"; } else { echo "Buy"; } ?></b></button></div>
    <div class="underpara" id=""><h3>PHP + MySQL + Login</h3> <p>PHP website with MySQL databases and login system.</p><h3>1200kr/hr</h3><button id="wspml" type="submit" value="wspml" name="valuebtn" ><b><?php session_start(); if (!isset($_SESSION['email'])) { echo "Login"; } else { echo "Buy"; } ?></b></button></div>
    </div>
    <div class="para" id="staticwebsite">
      <h2>[Static Website Prices]</h2>
      <div class="underpara" id=""><h3>1 Page HTML + CSS</h3> <p>Custom one-page HTML and CSS website.</p><h3>200kr/hr + hosting</h3><button id="onehc" type="submit" value="onehc" name="valuebtn" ><b><?php session_start(); if (!isset($_SESSION['email'])) { echo "Login"; } else { echo "Buy"; } ?></b></button></div>
      <div class="underpara" id=""><h3>Multi-page HTML +CSS</h3> <p>Custom multi-page HTML and CSS website</p><h3>175kr/hr + hosting + 100kr/page</h3><button id="xhc" type="submit" value="xhc" name="valuebtn" ><b><?php session_start(); if (!isset($_SESSION['email'])) { echo "Login"; } else { echo "Buy"; } ?></b></button></div>
      <div class="underpara" id=""><h3>1 Page HTML + CSS + JS</h3> <p>Custom one-page HTML, CSS and Javascript website.</p><h3>275kr/hr + hosting</h3><button id="onehcj" type="submit" value="onehcj" name="valuebtn" ><b><?php session_start(); if (!isset($_SESSION['email'])) { echo "Login"; } else { echo "Buy"; } ?></b></button></div>
      <div class="underpara" id=""><h3>Multi-Page HTML + CSS + JS</h3> <p>Custom multi-page HTML, CSS and Javascript website.</p><h3>275kr/hr + hosting + 175kr/page</h3><button id="xhcj" type="submit" value="xhcj" name="valuebtn" ><b><?php session_start(); if (!isset($_SESSION['email'])) { echo "Login"; } else { echo "Buy"; } ?></b></button></div>
    </div>
    <div class="para" id="softwarehelp">
      <h2>[General Software Help]</h2>
      <div class="underpara" id=""><h3>General software help</h3> <p>Help with fixing software related problems.</p><h3>300kr/hr</h3><button id="sp" type="submit" name="sp" ><b><?php session_start(); if (!isset($_SESSION['email'])) { echo "Login"; } else { echo "Buy"; } ?></b></button></div>
    </div>
  </div>
    </form>
  <div class="midimg"id="fourthimg"></div>
  <div id="footer">
    <p>©Erik Skår - 2017</p>
  </div>
  <?php
  session_start();
  if (!isset($_SESSION['email'])) {
    echo '<script type="text/javascript"> $("button").click(function() {
      $("#youneedto").show();
    });
    $("#mainform").submit(function(e) {
      e.preventDefault();
    });
    </script>';
    $_SESSION['basketitem'] = "nothing";
    }
   ?>
</body>
</html>
