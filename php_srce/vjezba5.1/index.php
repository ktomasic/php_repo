<!DOCTYPE html>
<html>
   <head>
     <meta charset="utf-8">
     <title>5. Petlje</title>
   </head>

   <body>
   <table border="3" cellpadding = "10">
   <?php
    for ($i=1; $i < 11; $i++) { 
        echo "<tr>";
        for ($j=1; $j <=10 ; $j++) { 
            echo "<td>";
            echo $i*$j;
            echo "</td>";
        }
        echo "<tr/>";

    }
   ?>
   </table>
   </body>

</html>
