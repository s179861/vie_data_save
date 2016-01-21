<?php
	function polacz() {
		return pg_connect("host=sbazy user=s179861 dbname=s179861 password=QHLdR5dy");
	}
?>
<html>
<head>
	<meta charset="UTF-8"/>
</head>
<body>
	Podaj dane nowego studenta:
	<form action="s179861cz2.php" method="POST"/>
		Imię:<input type="text" name="imie" size="30"/><br/>
		Nazwisko:<input type="text" name="nazwisko" size="30"/><br/>
		Data urodzenia:<input type="text" name="data" size="11" maxLength="10"/><br/>
	<?php
		$con = polacz();
		$query = "SELECT nr_grupy FROM grupy";
		$result = pg_exec($con,$query);
		echo 'Grupa:<select name="grupa">';
		for($i = 0 ; $i < pg_numrows($result) ; $i++) {
			$val = pg_result($result,$i,0);
			echo '<option value="'.$val.'"/>'.$val.'</br>';
		} 
		echo '</select></br>';
	?>		
	<input type="submit" value="Dodaj studenta"/>
	</form>
</body>
</html>
