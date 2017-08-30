<!DOCTYPE html>
<html>
   <head>
     <meta charset="utf-8">
     <title>6. Funkcije</title>
   </head>

   <body>
   <?php
   require("prosjek.php");
    $ocjene = array(
      "Ivica"=> array(
          "Hrvatski" => 4,
          "Matematika" => 5,
          "Povijest" => 4),
      "Tomica"=> array(
          "Hrvatski" => 5,
          "Matematika" => 5,
          "Povijest" => 4),
      "Perica"=> array(
          "Hrvatski" => 5,
          "Matematika" => 3,
          "Povijest" => 4)
      );
      echo "<br/>";
  ?>
  <table border="3" cellpadding="7">
  <tr>
      <th></th>
      <th>Hrvatski</th>
      <th>Matematika</th>
      <th>Povijest</th>
      <th>Prosjek</th>
  </tr>
  <?php
      foreach ($ocjene as $ime => $ucenik){
          echo "<tr>";
          echo "<th>$ime</th>";
          foreach ($ucenik as $ocjena) {
            echo "<td>$ocjena</td>";
          }
        echo "<td>" . Prosjek($ucenik) . "</td>";
        echo "</tr>";
      }

   ?>
  
   </body>

</html>
