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
	$type= "Touch-up portrait";
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
  $kobling->close();

   ?>
</body>
</html>
