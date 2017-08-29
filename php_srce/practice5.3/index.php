<!DOCTYPE html>
<html>
   <head>
     <meta charset="utf-8">
     <title>5. Petlje</title>
   </head>

   <body>
 <?php
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
            $zbroj = 0;
            foreach ($ucenik as $ocjena) {
             echo "<td>$ocjena</td>";
             $zbroj += $ocjena;
            }
         echo "<td>" . $zbroj/3 . "</td>";
         echo "</tr>";
        }
?>
</table>
   </body>

</html>
