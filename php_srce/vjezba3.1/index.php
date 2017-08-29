<!DOCTYPE html>
<html>
   <head>
     <meta charset="utf-8">
     <title>3. Operatori usporedbe, logički operatori i
uvjetne struktur</title>
   </head>
   
   <body>
   <?php
   $a = 11;
   $b = 15;

   if ($a < 10 and $b < 10) {
       echo "Brojevi a i b su manji od 10!";
    } else if ($a < 10 or $b < 10) {
        echo "Samo jedan od brojeva a i b je manji od 10!";
    } else {
        echo "Nijedan od brojeva a i b njie manji od 10!";
    }

   ?>
   </body>
   
</html>
