<?php
	include "func_polacz.php";
	include "func_wypisz_tabele.php";
	$con = polacz();
	$query = "select * from studenci";
	$wynik = pg_exec($con,$query);
	wypisz_tabele($wynik,true);
?>
