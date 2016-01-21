<?php

	$baza = "s179861";
	$user = "s179861";
	$haslo = "G8sk5BwN";
	$adres = "sbazy.uek.krakow.pl";

	$polaczenie = mysql_connect($adres,$user,$haslo);
	if (!$polaczenie) {
		echo "blad baza";
	}
	
	$zm2 = mysql_select_db($baza);
	if (!$zm2) {
		echo 'blad podejscia';
}
unset($zm2);	
?>
