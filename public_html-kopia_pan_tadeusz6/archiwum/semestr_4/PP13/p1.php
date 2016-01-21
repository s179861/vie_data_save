<html>
<head>
	<meta charset="UTF-8"/>
</head>
<body>
	<form>
	
	<?php
		include "h.php";
		$con = pg_connect("host=sbazy dbname=s179861 user=s179861 password=$h");
		$query = "SELECT nazwisko FROM studenci WHERE id_studenta=5";
		$result = pg_exec($con,$query);
		$nazwisko = pg_result($result,0,0);
		echo '<input type="text" value="'.$nazwisko.'"/>';
	?>
	
	</form>
</body>
</html>
