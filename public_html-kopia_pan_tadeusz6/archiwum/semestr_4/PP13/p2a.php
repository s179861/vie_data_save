<html>
<head>
	<meta charset="UTF-8"/>
</head>
<body>
	<?php
		include "h.php";
		$query = "SELECT imie,nazwisko,katedra FROM pracownicy LEFT JOIN wykladowcy ON pracownicy.id_pracownika=wykladowcy.id_wykladowcy WHERE id_pracownika=".$_POST[id];
		$con = pg_connect("host=sbazy dbname=s179861 user=s179861 password=$h");
		$result = pg_exec($con,$query);
	
		$tekst = pg_result($result,0,0).' '.pg_result($result,0,1);
		if (pg_result($result,0,2) != '') {
			$tekst = $tekst.' '.pg_result($result,0,2);
		}
		
		$f = fopen("./dane.txt","w");
		fwrite($f,$tekst);
		fclose($f);

		echo 'Dane pracownika o id = '.$_POST[id].' zostały wpisane do pliku dane.txt';
	?>
</body>
</html>
