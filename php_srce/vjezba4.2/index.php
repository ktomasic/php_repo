<!DOCTYPE html>
<html>
   <head>
     <meta charset="utf-8">
     <title>4.Polja</title>
   </head>

   <body>
   <?php
    
    $ocjena = array("Hrvatski"=> 4, "Matematika"=> 5, "Povijest"=> 4);
    $prosjek = ($ocjena["Hrvatski"]+$ocjena["Matematika"]+$ocjena["Povijest"])/3;


   echo "Hrvatski: {$ocjena["Hrvatski"]}<br />";
   echo "Matematika: {$ocjena["Matematika"]}<br />";
   echo "Povijest: {$ocjena["Povijest"]}<br />";
   echo "Prosjek je: ".$prosjek;
   
   ?>
   </body>

</html>
