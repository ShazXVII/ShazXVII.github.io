<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ayylmao</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="kjemikalier.css" media="screen" title="no title">
</head>
<body>
  <h1>FOLK OG POSTNUMMER </h1>

  <?php
  $server = "localhost";
  $bruker = "ersk";
  $passord = "2gtur1";
  $database = "ersk";  $kobling = new mysqli($server, $bruker, $passord, $database);

  $sql = "SELECT * FROM kunder";
  $result = $kobling->query($sql);
  //if ($result->num_row > 0) {
  echo "<table>";
  echo "<tr><th> </th><th>ID</th><th>Navn</th><th>postnr</th><th> </th></tr>";
    while($row = $result->fetch_assoc()){
      echo "<tr><form class='' action='redirect.php' method='post'><td><button type='submit' name='delete' value='$row[id]'>X</button></td><td>" . $row['id']. "</td><td>" . "<input type='text' name='fornavn' value='$row[fornavn]'>". " " . "<input type='text' name='etternavn' value='$row[etternavn]'>". "</td><td>" . "<input type='text' name='postnr' value='$row[postnr]'>". "</td><td><button type='submit' name='edit' value='$row[id]'>Edit</button></td></form></tr>";
    }
  echo "<form action='redirect.php' method='post'><tr><td></td><td></td><td><input type='text' name='fornavn' placeholder='fornavn'><input type='text' name='etternavn' placeholder='etternavn'></td><td><input type='text' name='postnr' placeholder='postnr'></td><td><button type='submit' name='add'>Add</button></td></form></tr></table>";
  $kobling->close();
   ?>
   <form action="redirect.php" method="post"><button type="submit" name="reset">Reset ID</button></form>
   <script type="text/javascript">
   $('th').click(function(){
    var table = $(this).parents('table').eq(0)
    var rows = table.find('tr:gt(0)').toArray().sort(comparer($(this).index()))
    this.asc = !this.asc
    if (!this.asc){rows = rows.reverse()}
    for (var i = 0; i < rows.length; i++){table.append(rows[i])}
})
function comparer(index) {
    return function(a, b) {
        var valA = getCellValue(a, index), valB = getCellValue(b, index)
        return $.isNumeric(valA) && $.isNumeric(valB) ? valA - valB : valA.localeCompare(valB)
    }
}
function getCellValue(row, index){ return $(row).children('td').eq(index).html() }
   </script>
</body>
</html>
