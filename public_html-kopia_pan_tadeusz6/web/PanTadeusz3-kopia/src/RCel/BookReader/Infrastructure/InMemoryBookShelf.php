<?php
	
	namespace RCel\BookReader\Infrastructure;
	
	class InMemoryBookShelf implements BookShelf {
		public function getBook($title) {
			$book = new Book($title, [
				new Page('1 Podczas sykonywania zadania pami�taj o utworzeniu repozytorium, oraz bie��cej rejestracji zmain w projekcie. Przygotuj model samochodu. W procesie ekstrakcji wiedzy domenowej uzyska�e� informacje, i� samoch�d potrafi, przejecha� dystans. We wst�pnym procesie developmentu powsta�a klasa abstrakcyjna SafetyCar przedstawiaj�ca si� nast�puj�ca:'),
				new Page('2 Podczas sykonywania zadania pami�taj o utworzeniu repozytorium, oraz bie��cej rejestracji zmain w projekcie. Przygotuj model samochodu. W procesie ekstrakcji wiedzy domenowej uzyska�e� informacje, i� samoch�d potrafi, przejecha� dystans. We wst�pnym procesie developmentu powsta�a klasa abstrakcyjna SafetyCar przedstawiaj�ca si� nast�puj�ca:'),
				new Page('3 Podczas sykonywania zadania pami�taj o utworzeniu repozytorium, oraz bie��cej rejestracji zmain w projekcie. Przygotuj model samochodu. W procesie ekstrakcji wiedzy domenowej uzyska�e� informacje, i� samoch�d potrafi, przejecha� dystans. We wst�pnym procesie developmentu powsta�a klasa abstrakcyjna SafetyCar przedstawiaj�ca si� nast�puj�ca:'),
				new Page('4 Podczas sykonywania zadania pami�taj o utworzeniu repozytorium, oraz bie��cej rejestracji zmain w projekcie. Przygotuj model samochodu. W procesie ekstrakcji wiedzy domenowej uzyska�e� informacje, i� samoch�d potrafi, przejecha� dystans. We wst�pnym procesie developmentu powsta�a klasa abstrakcyjna SafetyCar przedstawiaj�ca si� nast�puj�ca:')
			]);
		}
	}