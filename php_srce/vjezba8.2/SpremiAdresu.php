<!DOCTYPE html>
<html>
   <head>
     <meta charset="utf-8">
     <meta http-equiv="Content-Type" content="text/html"/>
     <title>Adresar</title>
   </head>

   <body>
    <h2>Spremljene adrese</h2>
    
    <?php
      $ime = $_POST['ime'];
      $adresa = $_POST ['adresa'];
      $grad = $_POST ['grad'];
      //$spol = $_GET ['spol'];
      //$prijatelj = $_GET ['prijatelj'];
      if (isset($_POST['spol'])) {
        if ($_POST['spol'] == "M")
          $spol = "muški";
        else
          $spol = "ţenski";
      } else
      $spol = "";
      
      if (isset($_POST['prijatelj']))
      $prijatelj = "da";
      else
      $prijatelj = "ne";

      
      echo "Ime: $ime <br/>";
      echo "Adresa: $adresa <br/>";
      echo "Grad: $grad <br/>";
      echo "Spol: $spol <br/>";
      echo "Prijatelj: $prijatelj <br/>";
    
    
    ?>
   </body>

</html>
