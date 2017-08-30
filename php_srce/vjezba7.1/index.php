<!DOCTYPE html>
<html>
   <head>
     <meta charset="utf-8">
     <title>Moja Prva Stranica</title>
   </head>

   <body>
   <?php
   $trenutnoVrijeme = date("d.m.Y H:i:s");
   echo "Trenutno vrijeme: $trenutnoVrijeme <br/>";

   $polje = explode(" ", $trenutnoVrijeme);
   echo "Datum: $polje[0] <br/>";
   echo "Vrijeme: $polje[1] <br/>";

   $polje_datum = explode(".", $polje[0]);
   $dan = $polje_datum[0];
   $mjesec = $polje_datum[1];
   $godina = $polje_datum[2];
   echo "Dan: $dan <br/>";
   echo "Mjesec: $mjesec <br/>";
   echo "Godina: $godina <br/>";

   $polje_vrijeme = explode(":", $polje[1]);
   $sat = $polje_vrijeme[0];
   $minuta = $polje_vrijeme[1];
   $sekunda = $polje_vrijeme[2];
   echo "Sat: $sat <br/>";
   echo "Minuta: $minuta <br/>";
   echo "Sekunda: $sekunda <br/>";

   if (checkdate($mjesec,$dan,$godina))
   {
   echo "Datum je ispravan. <br/>";
   echo "Vremenska oznaka je ";
   echo mktime($sat,$minuta,$sekunda,$mjesec,$dan,$godina);
   }
   
   ?>
  
   </body>

</html>
