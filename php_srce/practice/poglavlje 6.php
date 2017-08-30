<!DOCTYPE html>
<html>
   <head>
     <meta charset="utf-8">
     <title>Moja Prva Stranica</title>
   </head>

   <body>
   <?php
/*
   function Mnozenje ($a,$b){
       echo $a*$b;
   }

   Mnozenje(4,17);
*/
/*
   function Povecaj(&$a) {
       $a++;
       echo "Vrijednost u funkciji: $a <br/>";
   }

    $a = 1;
    $b = &$a;
    echo "$a $b <br/>";
    $a++;
    echo "$a $b <br/>";
    $b++;
    echo "$a $b <br/>";

    $broj = 2;
    Povecaj($broj);
    echo "Vrijednost nakon povratka iz funkcije: $broj";
*/
/*     
    function Mnozi($a, $b) {
        return $a * $b;
          }
    function Kvadriraj($a) {
        return Mnozi($a, $a);
        }
        $c = Kvadriraj(5);
        echo $c;
*/
/*    ---------------------------------Faktorijeli--funkcija poziva samu sebe--rekurzivna funkcija
        function Faktorijel($n) {
            if ($n == 0 || $n == 1) {
                return 1;
            } else {
                return $n * Faktorijel($n-1);
            }
        }

        echo Faktorijel (20);
*/ 
    echo $_SERVER["SERVER_ADDR"];
    echo "<br/>";
    echo $_SERVER["SERVER_PORT"];


   ?>
  
   </body>

</html>
