<!DOCTYPE html>
<html>
   <head>
     <meta charset="utf-8">
     <title>Prosjek vrijednosti iz polja</title>
   </head>

   <body>
   <?php
   function Prosjek ($polje) {
     $zbroj = 0;
     $i = 0;
     foreach ($polje as $broj ) {
       $zbroj += $broj;
       $i++;
     }
     $prosjek = $zbroj/$i;
     return $prosjek;

   }



   ?>
  
   </body>

</html>
