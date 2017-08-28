<!DOCTYPE html>
<html>
   <head>
     <meta charset="utf-8">
     <title>5. Petlje</title>
   </head>

   <body>
   <?php
/* -----------------WHILE petlja
    $i = 0;
    while ($i < 10) {
        echo $i . " ";
        $i++;
    }
*/
/*  ---------------DO-WHILE petlja
    $i = 0;
    do {
        echo $i . " ";
        $i++;
    } while ($i < 100);
*/
/*---------------------FOR petlja
    for ($i=0; $i <10 ; $i++) { 
        echo $i . " ";
    }
*/
/*-------------------FOREACH petlja

    $gradovi = array("Zagreb", "Split", "Rijeka");
    foreach ($gradovi as $grad) {
        echo $grad . " ";
        echo "<br/>";
    }
    
    ---------------------------ispis ključa polja

    $post_br = array("Zagreb"=>10000 ,"Split"=>21000, "Rijeka"=>51000);
    foreach ($post_br as $naziv => $broj) {
        echo "$naziv $broj <br/> ";
    }
*/
    $brojevi = array(0,1,2,3,4);
    foreach ($brojevi as &$broj) {
       echo $broj++;
       echo "<hr/>";
       echo $broj;
       
    }

   ?>
  
   </body>

</html>
