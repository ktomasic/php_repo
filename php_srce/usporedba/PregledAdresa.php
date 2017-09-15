<html>
<head>
    <title>Adresar</title>
   	<meta http-equiv="Content-Type" content="text/html; charset=windows-1250">
</head>
<body>
	<h2>Pregled adresa</h2>
	<table border="1">
		<tr>
			<th>Ime</th>
			<th>Adresa</th>
			<th>Grad</th>
			<th>Spol</th>
			<th>Prijatelj</th>
		</tr>
	<?php 
		$datoteka = fopen("Adresar.txt", "r");
		if ($datoteka)
		{
		  // �itanje iz datoteke
		  fgets($datoteka);      
      while (!feof($datoteka))
      {
        $ime = fgets($datoteka);
        $adresa = fgets($datoteka);
        $grad = fgets($datoteka);
        $spol = fgets($datoteka);
        $prijatelj = fgets($datoteka);
		 	
        echo "<tr>";
        echo "<td>$ime</td>";
        echo "<td>$adresa</td>";
        echo "<td>$grad</td>";
        echo "<td>$spol</td>";
        echo "<td>$prijatelj</td>";
        echo "</tr>";
      }
      fclose($datoteka);
		}
	?>
	</table>
<br/>
<a href="UnosAdrese.htm">Unos nove adrese</a>
</body>
</html>