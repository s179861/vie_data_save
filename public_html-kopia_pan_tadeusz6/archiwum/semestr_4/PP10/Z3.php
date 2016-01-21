<?php
	include "func_polacz.php";
	include "func_wypisz_tabele.php";
	$con = polacz();
	$a = "SELECT nazwisko,imie FROM studenci WHERE nr_grupy = 'DMIe1001'";
	$b = "SELECT nazwa_wykladu,nazwisko,imie,katedra
		FROM (wyklady INNER JOIN wykladowcy ON wyklady.id_wykladowcy=wykladowcy.id_wykladowcy)
		INNER JOIN pracownicy ON wykladowcy.id_wykladowcy=pracownicy.id_pracownika";
	$c = "SELECT nazwa_wykladu FROM (studenci INNER JOIN studenci_wyklady ON studenci.id_studenta=studenci_wyklady.id_studenta)
		INNER JOIN wyklady ON studenci_wyklady.id_wykladu=wyklady.id_wykladu
		WHERE imie='Kamil' AND nazwisko='Nowakowski'";
	//Zmienna d to samo co c, tylko podzapytaniem zamiast złącznieniem
	$d = "SELECT nazwa_wykladu FROM  studenci_wyklady INNER JOIN wyklady ON studenci_wyklady.id_wykladu=wyklady.id_wykladu WHERE id_studenta IN
		(SELECT id_studenta FROM studenci WHERE imie='Kamil' AND nazwisko='Nowakowski')";
	$result = pg_exec($con,$a);
	wypisz_tabele($result,true);
	echo '<br/>';
	$result = pg_exec($con,$b);
	wypisz_tabele($result,true);
	echo '<br/>';
	$result = pg_exec($con,$c);
	wypisz_tabele($result,true);
?>
