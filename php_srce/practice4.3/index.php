<!DOCTYPE html>
<html>
   <head>
     <meta charset="utf-8">
     <title>4.Polja</title>
   </head>

   <body>
   <?php
   $ocjene = array(
       "Ivica"=> array(
           "Hrvatski" => 4,
           "Matematika" => 5,
           "Povijest" => 4),
        "Tomica"=> array(
            "Hrvatski" => 5,
            "Matematika" => 5,
            "Povijest" => 4),
        "Perica"=> array(
            "Hrvatski" => 5,
            "Matematika" => 3,
            "Povijest" => 4)
        );
        echo "<br/>";
    //echo $ocjene ["Ivica"]["Hrvatski"]; echo "<br/>";
    $prosjekIvica = ($ocjene["Ivica"]["Hrvatski"]+$ocjene["Ivica"]["Matematika"]+$ocjene["Ivica"]["Povijest"])/3;
    $prosjekTomica = ($ocjene["Tomica"]["Hrvatski"]+$ocjene["Tomica"]["Matematika"]+$ocjene["Tomica"]["Povijest"])/3;
    $prosjekPerica = ($ocjene["Perica"]["Hrvatski"]+$ocjene["Perica"]["Matematika"]+$ocjene["Perica"]["Povijest"])/3;


   
   
   ?>

<table border="3" cellpadding="7">
    <tr>
        <th></th>
        <th>Hrvatski</th>
        <th>Matematika</th>
        <th>Povijest</th>
        <th>Prosjek</th>
    </tr>
    <tr>
        <th>Ivica</th>
        <td><?php echo $ocjene["Ivica"]["Hrvatski"] ?></td>
        <td><?php echo $ocjene["Ivica"]["Matematika"] ?></td>
        <td><?php echo $ocjene["Ivica"]["Povijest"] ?></td>
        <td><?php echo $prosjekIvica ?></td>
    </tr>
    <tr>
        <th>Tomica</th>
        <td><?php echo $ocjene["Tomica"]["Hrvatski"] ?></td>
        <td><?php echo $ocjene["Tomica"]["Matematika"] ?></td>
        <td><?php echo $ocjene["Tomica"]["Povijest"] ?></td>
        <td><?php echo $prosjekTomica ?></td>
    </tr>
    <tr>
        <th>Perica</th>
        <td><?php echo $ocjene["Perica"]["Hrvatski"] ?></td>
        <td><?php echo $ocjene["Perica"]["Matematika"] ?></td>
        <td><?php echo $ocjene["Perica"]["Povijest"] ?></td>
        <td><?php echo $prosjekPerica ?></td>
    </tr>
</table>
  
   </body>

</html>
