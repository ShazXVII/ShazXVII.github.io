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
  if(isset($_GET["sendinn"]))
  {
    $fornavn=$_GET["fnavn"];
    $etternavn=$_GET["enavn"];
    $postnr=$_GET["postnr"];
  }
  else
  {
      echo "you failed;";
    }

  if ($kobling->connect_error){
    die("Noe gikk galt" . $kobling->connect_error);
    }

  $sql = "INSERT INTO kunder (fornavn, etternavn, postnr) VALUES ('" . $fornavn . "', '$etternavn', '$postnr');";

  if($kobling->query($sql) == TRUE) {
    echo "Ny post lagt til <br>";
  }
  else {
    echo "feil: " . $sql . "<br>" . $kobling->error;
  }

  $sql = "SELECT fornavn, etternavn, postnr, poststed FROM kunder JOIN post using(postnr);";
  $result = $kobling->query($sql);
  //if ($result->num_row > 0) {
    while($row = $result->fetch_assoc()){
      echo $row['fornavn']. " " . $row['etternavn']. " " . $row['postnr']. " " . $row['poststed']. "<br>";
    }
  /*}
  else {
    echo "0 result";
  }*/
  $kobling->close();

   ?>
</body>
</html>
