<!DOCTYPE html>
<html>
   <head>
     <meta charset="utf-8">
     <title>5. Petlje</title>
   </head>

   <body>
    <?php
     $ocjene = array("Hrvatski"=> 4, "Matematika"=> 5, "Povijest"=> 4);
    $zbroj=0; 
    foreach ($ocjene as $predmet => $ocjena) {
      echo "$predmet -> $ocjena ";
      echo"<br/>";
      $zbroj+=$ocjena;
    }
    echo"<br/>";
    echo "Prosjek je -> ".($zbroj/3);
   
    ?>
   </body>

</html>
