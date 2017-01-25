<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ayylmao</title>
</head>
<body>
  <?php
  $server = "localhost";
  $bruker = "ersk";
  $passord = "2gtur1";
  $database = "ersk";  $kobling = new mysqli($server, $bruker, $passord, $database);
  if ($kobling->connect_error){
    die("Noe gikk galt" . $kobling->connect_error);
    }


  $sql = "SELECT fornavn, etternavn, email, comment, type FROM service";
  $result = $kobling->query($sql);
  //if ($result->num_row > 0) {
    while($row = $result->fetch_assoc()){
      echo $row['fornavn']. " " . $row['etternavn']. " " . $row['email']. " " . $row['comment']. " " . $row['type'] "<br>";
    }
  /*}
  else {
    echo "0 result";
  }*/
  $kobling->close();

   ?>
</body>
</html>

</body>
</html>
