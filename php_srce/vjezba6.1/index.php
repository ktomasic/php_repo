<!DOCTYPE html>
<html>
   <head>
     <meta charset="utf-8">
     <title>6. Funkcije</title>
   </head>

   <body>
    <?php
    function Prosjek($a,$b,$c) {
        return ($a+$b+$c)/3;
    }
    
    $a = 3;
    $b = 4;
    $c = 4;

    echo "Prosjek zbrojenih brojeva " . $a .", " . $b . " i ". $c . " je ".  Prosjek($a,$b,$c);
    ?>
  
   </body>

</html>
