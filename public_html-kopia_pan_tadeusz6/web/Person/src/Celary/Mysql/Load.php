<?php

	namespace Celary\Mysql;

	class Load {

		private $polaczenie;

		function __construct($polaczenie) {
			$this->polaczenie = $polaczenie;
		}
		
		function pobierz($id) {

			$zapytanie = "SELECT * FROM Person WHERE id=".$id;
			$wynik = mysql_query($zapytanie,$this->polaczenie);
			if($tablica = mysql_fetch_row($wynik)) {
				return $tablica;
			} else {
				return false;
			}
			

		}
		
	}
