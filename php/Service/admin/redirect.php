<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="refresh" content="2; url=index.php" />
  <title>Document</title>
</head>
<body>
  <?php
  $server = "localhost";
  $bruker = "ersk";
  $passord = "2gtur1";
  $database = "ersk";

  // Create connection
  $kobling = new mysqli($server, $bruker, $passord, $database);
  // Check connection
  if ($kobling->connect_error) {
      die("Connection failed: " . $kobling->connect_error);
  }

  $result = $kobling->query($sql);
$sql = "DELETE FROM service WHERE id=1; SET  @num := 0; UPDATE your_table SET id = @num := (@num+1); ALTER TABLE your_table AUTO_INCREMENT =1;";

  $kobling->close();

  ?>
</body>
</html>
