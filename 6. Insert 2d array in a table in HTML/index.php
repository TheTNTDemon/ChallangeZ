<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Challenge 6 2DArray2Table</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    tr {
      border-bottom: 1px solid #ddd;
    }
</style>
</head>
<body>

<table>
  <tr>
    <th>Lastname</th>
    <th>Phone Number</th>
    <th>email</th>
  </tr>

  <?php
    $lijst = array (
      array("McNugget","+31 000000000","mcnugget1983@gmail.com"),
      array("Rogers","+31 000000001","rogers@mail.com"),
      array("Hendrix","+31 000000003","bobby@live.com"),
      array("Howards","+31 000000005","MLPLover724@mail.com"),
      array("Christ","+31 000000441","j.christ@outlook.com")
    );

    for ($x = 0; $x < count($lijst); $x++) {
      echo "<tr>";
      for ($y = 0; $y < count($lijst[$x]); $y++) {
        echo "<td>".$lijst[$x][$y]."</td>";
      }
      echo "</tr>";
    }
  ?>
</table>

</body>
</html>