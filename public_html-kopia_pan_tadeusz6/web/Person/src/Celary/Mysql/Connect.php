<?php

	namespace Celary\Mysql;

	class Connect {

		private $baza = "s179861";
		private $user = "s179861";
		private $haslo = "G8sk5BwN";
		private $adres = "sbazy.uek.krakow.pl";

		function Polacz() {

			$polaczenie = mysql_connect($this->adres,$this->user,$this->haslo);
			if (!$polaczenie) {
				return false;
			}
	
			$zm2 = mysql_select_db($this->baza);
			if (!$zm2) {
				return false;
			} else {
				return $polaczenie;
			}

		}
		
	}

?>
