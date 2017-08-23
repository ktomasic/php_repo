<!DOCTYPE html>
<html>
   <head>
     <meta charset="utf-8">
     <title>Moja Prva Stranica</title>
   </head>

   <body>
   <?php

    $gradovi = array("Zagreb", "Split", "Rijeka", "Osijek");
    echo $gradovi[2];
    echo "<br/>";

/*  -----ili----
    $gradovi[0] = "Zagreb";
    $gradovi[1] = "Split";
    $gradovi[2] = "Rijeka";
    $gradovi[3] = "Osijek";
*/

    $post_br = array("Zagreb"=>10000, "Split"=>21000, "Rijeka"=>51000);
    echo $post_br["Rijeka"];
    echo "<br/>";
/*-----ili-----
    $post_br["Osijek"] = 31000;
*/

//-------------Dvodimenzinalna polja--------------------
/*
    $igra = array(array("O","O",""),
                  array("O","X","O"),
                  array("X","O","X"));

    echo $igra[0][2];
    $igra [0][2] = "X"; // popunjavenja polja 0 2 
    echo $igra[0][2];
*/  
    $igra = array("A" => array("O","O",""),
                  "B" =>array("O","X","O"),
                  "C" =>array("X","O","X"));
    echo $igra ["A"][1];

   ?>
  

   </body>

</html>
