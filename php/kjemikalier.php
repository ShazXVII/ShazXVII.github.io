<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ayylmao</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="kjemikalier.css" media="screen" title="no title">
</head>
<body>
  <h1>Kjemikalier</h1>
  <?php
  $server = "localhost";
  $bruker = "ersk";
  $passord = "2gtur1";
  $database = "it01";  $kobling = new mysqli($server, $bruker, $passord, $database);

  $sql = "SELECT navn, smeltepunkt, skap, id FROM kjemikalier";
  $result = $kobling->query($sql);
  //if ($result->num_row > 0) {
  echo "<table>";
  echo "<tr><th>Navn</th><th>Smeltepunkt</th><th>Skap</th><th>Id</th></tr>";
    while($row = $result->fetch_assoc()){
      echo "<tr><td>" . $row['navn']. "</td><td>" . $row['smeltepunkt']. "</td><td>" . $row['skap']. "</td><td>" . $row['id']. "</td></tr>";
    }
  echo "</table>";
  /*}
  else {
    echo "0 result";
  }*/
  $kobling->close();

   ?>
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
