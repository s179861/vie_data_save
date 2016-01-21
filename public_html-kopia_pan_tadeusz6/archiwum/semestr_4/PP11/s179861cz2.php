<?php
	function polacz() {
		include "h.php";
		return pg_connect("host=sbazy user=s179861 dbname=s179861 password=QHLdR5dy");
	}
	
?>
<html>
<head>
	<meta charset="UTF-8"/>
</head>
<body>
	<?php
		$con = polacz();
		$query = "INSERT INTO studenci (nazwisko,imie,data_urodzenia,nr_grupy) VALUES ('".$_POST[nazwisko]."','".$_POST[imie]."','".$_POST[data]."','".$_POST[grupa]."')";
		$result = pg_exec($con,$query);
		$work = pg_affected_rows($result);
		if($work == '') {
			echo 'Nie udało się dodać nowego studenta';
		} 
		else {
			echo 'Dodano nowego studenta<br/>';
			$query = "SELECT * FROM studenci";
			$result = pg_exec($con,$query);
			$row = pg_numrows($result);
			$row--;
			echo 'Id studenta:'.pg_result($result,$row,0).'<br/>';
			echo 'Imię:'.pg_result($result,$row,2).'<br/>';
			echo 'Nazwisko:'.pg_result($result,$row,1).'<br/>';
			echo 'Data urodzenia:'.pg_result($result,$row,3).'<br/>';
			echo 'Numer grupy:'.pg_result($result,$row,4).'<br/>';
		}
	?>
</body>
</html>
