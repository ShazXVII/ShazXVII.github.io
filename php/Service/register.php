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
  // Her deklareres systemvariabler vi skal bruke mot MySQL-basen.
  $server = "localhost";
  $bruker = "ersk";
  $passord = "2gtur1";
  $database = "ersk";

  // Oppretter kopling med database
  $kobling = new mysqli($server, $bruker, $passord, $database);

  //Overfører variabler fra skjema i reg_kunder.php til dette skriptet
  if(isset($_POST["submit"])) {
  	$firstname=$_POST["fornavn"];
  	$lastname=$_POST["etternavn"];
  	$email=$_POST["email"];
    $passord1=$_POST["passord"];
    $passord2= hash("sha256", $passord1);
    $passordconf1=$_POST["passordconf"];
    $passordconf2= hash("sha256", $passordconf1);
  	}
  if ($passord2 != $passordconf2) {
    echo "passwords dont match";
  } else {
    // Hvis noe gikk galt, lager denne en feilmelding. Uten denne, får du ingen :-)
    if ($kobling->connect_error) 	{
      die("Noe gikk galt " . $kobling->connect_error);
      }

    // SQL-spørring. Helt samme syntax som da vi skrev spørringen inn i kommandolinja
    $sql = "INSERT INTO users (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$passord2');";

    // Sjekker om alt gikk bra. Feilmelding ellers.
    if ($kobling->query($sql) == TRUE) {
      echo "Ny post lagt til <br>";
      echo "$passord2 <br>";
      echo "$passord1 <br>";
      }
      else {
        echo "Feil: " . $sql . "<br>" . $kobling->error;
      }
  }


  // Kopling lukkes.
  $kobling->close();
  /*echo "$passord2 <br>";
  echo "$email <br>";
  echo "$firstname<br>";
  echo "$lastname<br>";
  echo "$passord1";
*/
  ?>
</body>
</html>
