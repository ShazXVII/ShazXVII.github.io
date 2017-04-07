<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="refresh" content="2; url=http://192.168.128.22/~ersk/php/kjemikalier.php" />
  <title>Redirect</title>
</head>
<body>
  <?php
  $server = "localhost";
  $bruker = "ersk";
  $passord = "2gtur1";
  $database = "ersk";  $kobling = new mysqli($server, $bruker, $passord, $database);
  if (isset($_POST['edit'])) {
    $id= $_POST['edit'];
    $fornavn = $_POST['fornavn'];
    $etternavn = $_POST['etternavn'];
    $postnr = $_POST['postnr'];
    echo "edit" . $id . $fornavn . $etternavn;
    $sql = "UPDATE kunder SET fornavn = '$fornavn', etternavn = '$etternavn', postnr = '$postnr' WHERE id = '$id';";
    if ($kobling->query($sql) == TRUE) {
  	echo "redigert";
  	}
  	else {
  		echo "Feil: " . $sql . "<br>" . $kobling->error;
  	}
  }
  elseif (isset($_POST['add'])) {
    $fornavn = $_POST['fornavn'];
    $etternavn = $_POST['etternavn'];
    $postnr = $_POST['postnr'];
    $sql = "INSERT INTO kunder (fornavn, etternavn, postnr) VALUES ('$fornavn', '$etternavn', '$postnr');";
    if ($kobling->query($sql) == TRUE) {
  	echo  $fornavn . $etternavn . $postnr . "redigert";
  	}
  	else {
  		echo "Feil: " . $sql . "<br>" . $kobling->error;
  	}
  }
  elseif (isset($_POST['delete'])) {
    $id = $_POST['delete'];
    echo "delete" . $id;
    $sql = "DELETE FROM kunder WHERE id='$id';";
    if ($kobling->query($sql) == TRUE) {
  	echo "Fjernet";
  	}
  	else {
  		echo "Feil: " . $sql . "<br>" . $kobling->error;
  	}
  }
  elseif (isset($_POST['reset'])) {
    $sql = "SET  @num := 0;";
    $result = $kobling->query($sql);
    $sql = "UPDATE kunder SET id = @num := (@num+1);";
    $result = $kobling->query($sql);
    $sql = "ALTER TABLE kunder AUTO_INCREMENT =1;";
    $result = $kobling->query($sql);
    if ($kobling->query($sql) == TRUE) {
  	echo "it wurkd";
  	}
  	else {
  		echo "Feil: " . $sql . "<br>" . $kobling->error;
  	}
  }


   ?>
</body>
</html>
