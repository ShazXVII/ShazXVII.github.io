
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ayylmao2</title>
  <link rel="stylesheet" href="main.css">
</head>
<body>
  <div class="header">
    <p>[INSERT NAME] admin tools</p>
  </div>
  <div class="btn">
  <form class="" action="redirect.php" method="POST">
  <button type="submit" name="button" value="ja" action="redirect.php">Start working</button>
  </form>
  </div>
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

$sql = "SELECT * FROM service";
$result = $kobling->query($sql);
echo "<table>";
echo "<tr><th>Kø</th><th>Fornavn</th><th>Etternavn</th><th>Email</th><th>Kommentar</th><th>Type</th></tr>";
while($row = $result->fetch_assoc()) {
  echo "<tr><td>" . $row["id"] . "</td><td>" . $row['fornavn']. "</td><td>" . $row['etternavn']. "</td><td>" . $row['epost']. "</td><td>" . $row['comment']. "</td><td>" . $row['type']. "</td></tr>";
}
echo "</table>";

$kobling->close();

?>

</body>
</html>
