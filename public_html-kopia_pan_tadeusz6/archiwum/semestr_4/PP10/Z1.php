<?php
	function polacz() {
		include "h.php";
		return pg_connect("host=sbazy user=s179861 dbname=s179861 password=$h");
	}
	
	function wypisz_tabele($nazwa_tabeli) {
		$zapytanie = "select * from $nazwa_tabeli";
		$wynik_zapytania = pg_exec(polacz(),$zapytanie);
		
		echo '<table border="1">';
		echo '<tr>';
		for($i=0;$i<pg_numfields($wynik_zapytania);$i++) {
			echo '<td>'.pg_field_name($wynik_zapytania,$i).'</td>';
		}
		echo '</tr>';
		for($i=0;$i<pg_numrows($wynik_zapytania);$i++) {
			echo '<tr>';
			for($j=0;$j<pg_numfields($wynik_zapytania);$j++) {
				echo '<td>'.pg_result($wynik_zapytania,$i,$j).'</td>';
			}
			echo '</tr>';
		}
		echo '</table>';
	}
	
	wypisz_tabele("studenci");
?>
