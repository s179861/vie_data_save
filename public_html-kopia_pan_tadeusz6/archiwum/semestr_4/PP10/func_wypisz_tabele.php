<?php
	function wypisz_tabele($wynik_zapytania,$naglowek) {
		echo '<table border="1">';
		if($naglowek==true) {
			echo '<tr>';
			for($i=0;$i<pg_numfields($wynik_zapytania);$i++) {
				echo '<td>'.pg_field_name($wynik_zapytania,$i).'</td>';
			}
			echo '</tr>';
		}
		for($i=0;$i<pg_numrows($wynik_zapytania);$i++) {
			echo '<tr>';
			for($j=0;$j<pg_numfields($wynik_zapytania);$j++) {
				echo '<td>'.pg_result($wynik_zapytania,$i,$j).'</td>';
			}
			echo '</tr>';
		}
		echo '</table>';
	}
?>
