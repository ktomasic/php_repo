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
        $adresa = $_POST['adresa'];
        $grad = $_POST['grad'];	
          
        if (isset($_POST['spol']))
        {	
          if ($_POST['spol'] == "M")
            $spol = "muški";
          else
            $spol = "ženski";
        }
        else
          $spol = "";

        if (isset($_POST['prijatelj']))
          $prijatelj = "da";
        else
          $prijatelj = "ne";	

        echo "Ime: $ime <br/>";
        echo "Adresa: $adresa <br/>";
        echo "Grad: $grad <br/>";
        echo "Spol: $spol <br/>";
        echo "Prijatelj: $prijatelj<br/>";

        // spremi vrijednosti u datoteku
        $datoteka = fopen("vjezba9.1/Adresar.txt", 'a');
        if($datoteka) {
        fwrite($datoteka, "\n$ime\n$adresa\n$grad\n$spol\n$prijatelj");
        fclose($datoteka);
      }
        
    ?>
   </body>

</html>
