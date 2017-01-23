
<body>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Confirmed</title>
</head>
<body>
  <?php
  $server = "localhost";
  $bruker = "ersk";
  $passord = "2gtur1";
  $database = "ersk";  
  $kobling = new mysqli($server, $bruker, $passord, $database);
  if(isset($_GET["submit"]))
  {
    $fornavn=$_GET["fName"];
    $etternavn=$_GET["lName"];
    $email=$_GET["email"];
	$comment=$_GET["comment"];
	$type= "Video under 5 minutes";
  }
  else
  {
      echo "you failed;";
    }

  if ($kobling->connect_error){
    die("Noe gikk galt" . $kobling->connect_error);
    }

  $sql = "INSERT INTO service (fornavn, etternavn, epost, comment, type) VALUES ('" . $fornavn . "', '$etternavn', '$email', '$comment', '$type');";

  if($kobling->query($sql) == TRUE) {
    echo "Ny post lagt til <br>";
  }
  else {
    echo "feil: " . $sql . "<br>" . $kobling->error;
  }

  $sql = "SELECT fornavn, etternavn, epost, comment, type FROM service";
  $result = $kobling->query($sql);
  //if ($result->num_row > 0) {
    while($row = $result->fetch_assoc()){
      echo $row['fornavn']. " " . $row['etternavn']. " " . $row['email']. " " . $row['comment']. " " . $row['type']. "<br>";
    }
  /*}
  else {
    echo "0 result";
  }*/
  $kobling->close();

   ?>
</body>
</html>
