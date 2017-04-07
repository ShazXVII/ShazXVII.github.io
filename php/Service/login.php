<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
  session_start();

  define('DB_HOST', 'LOCALHOST');
	define('DB_NAME', 'ersk');
	define('DB_USER', 'ersk');
	define('DB_PASSWORD', '2gtur1');

	$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
	$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

	$ID = $_POST['loginemail'];
	$pass2 = $_POST['loginpassword'];
	$password = hash("sha256", $pass2);

	if(isset($_POST['login'])){
		if(isset($ID)){
			$query = mysql_query("SELECT * FROM users where email = '" . $_POST['loginemail'] . "' AND password = '$password'") or die("riperino" . mysql_error());
			$row = mysql_fetch_array($query);
			if(!empty($row['email']) AND !empty($row['password'])){
				$_SESSION['email'] = $row['email'];
				header("location: http://192.168.128.22/~ersk/php/Service/index.php");
				exit;
			} else {
			  echo "wrong password fgt";
			}
    }
  }
   ?>
</body>
</html>
