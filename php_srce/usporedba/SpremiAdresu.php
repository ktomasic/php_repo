<html>
<head>
    <title>Adresar</title>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1250" />
</head>
<body>
<h2>Spremljena adresa</h2>
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
	
	echo "Ime: $ime<br/>";
	echo "Adresa: $adresa<br/>";
	echo "Grad: $grad<br/>";
	echo "Spol: $spol<br/>";
	echo "Prijatelj: $prijatelj<br/>";
	
	// spremi vrijednosti u datoteku
	$datoteka = fopen("Adresar.txt", 'a');
	fwrite($datoteka, "\n$ime\n$adresa\n$grad\n$spol\n$prijatelj");
	fclose($datoteka);
  
?>
  <br/>
  <a href="UnosAdrese.htm">Unos nove adrese</a>
  &nbsp;
  <a href="PregledAdresa.php">Pregled adresa</a>
</body>
</html>