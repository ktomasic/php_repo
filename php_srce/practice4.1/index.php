<!DOCTYPE html>
<html>
   <head>
     <meta charset="utf-8">
     <title>4.Polja</title>
   </head>

   <body>
   <?php
    
    //$ocjena = array("Hrvatski"=> 4, "Matematika"=> 5, "Povijest"=>4);
    //$prosjek = ($ocjena["Hrvatski"]+$ocjena["Matematika"]+$ocjena["Povijest"])/3;

   $ocjene = array(4,5,4);
   $prosjek = ($ocjene[0]+$ocjene[1]+$ocjene[2])/3;

   echo "Hrvatski: ". $ocjene [0];echo "<br/>";
   echo "Matematika: ". $ocjene [1];echo "<br/>";
   echo "Povijest: ".$ocjene[2];echo "<br/>";
   echo "Prosjek je: ".$prosjek;
   
   ?>
   </body>

</html>
