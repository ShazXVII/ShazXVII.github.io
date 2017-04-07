<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="main2.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <title>Document</title>
</head>
<body>
  <div id="header">

  </div>
  <div id="main">
    <h1>Lekseplan</h1>
    <?php
    $server = "localhost";
    $bruker = "ersk";
    $passord = "2gtur1";
    $database = "ersk";
    $kobling = new mysqli($server, $bruker, $passord, $database);

//Sjekker om alt gikk bra
if ($kobling->connect_error) {
	die("Noe gikk galt " . $kobling->connect_error);
      }

//Her er SQL-spørringen
$sql = "SELECT * FROM planx ORDER BY dato DESC";
$result = $kobling->query($sql);

// Her skrives innholdet fra spørringen ut
if ($result->num_rows > 0) {
  echo "<table>";
  echo "<tr><th>Dato</th><th>Dag</th><th>Fag</th><th>Blokk</th><th>Info</th></tr>";
   while($row = $result->fetch_assoc()) {
     $splow=$row["dato"];
      $parts=explode('-', $splow);
       echo "<tr><td>" . $parts[2] . "/" . $parts[1]."</td><td>" . $row["day"]. "</td><td>" . $row["subject"]. "</td><td>". $row["block"]. "</td><td>". $row["info"]. "</td></tr>";

     }
  echo "</table>";
}
else {
	 echo "0 results";
}

$kobling->close();
    ?>
  </div>
  <script type="text/javascript">
  </script>
</body>
</html>
