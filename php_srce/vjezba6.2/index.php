<!DOCTYPE html>
<html>
   <head>
     <meta charset="utf-8">
     <title>6. Funkcije</title>
   </head>

   <body>
   <?php
    $ocjena = array("Hrvatski"=> 4, "Matematika"=> 5, "Povijest"=> 4);
    require ("prosjek.php");

    $prosjek = Prosjek($ocjena["Hrvatski"], $ocjena["Matematika"], $ocjena["Povijest"]);
    
    echo "Hrvatski: {$ocjena["Hrvatski"]}<br />";
    echo "Matematika: {$ocjena["Matematika"]}<br />";
    echo "Povijest: {$ocjena["Povijest"]}<br />";
    echo "Prosjek je: ".$prosjek;



   ?>
  
   </body>

</html>
