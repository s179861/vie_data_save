<?php
	
	namespace RCel\BookReader\Infrastructure;
	
	class InMemoryBookShelf implements BookShelf {
		public function getBook($title) {
			$book = new Book($title, [
				new Page('1 Podczas sykonywania zadania pamiêtaj o utworzeniu repozytorium, oraz bie¿¹cej rejestracji zmain w projekcie. Przygotuj model samochodu. W procesie ekstrakcji wiedzy domenowej uzyska³eœ informacje, i¿ samochód potrafi, przejechaæ dystans. We wstêpnym procesie developmentu powsta³a klasa abstrakcyjna SafetyCar przedstawiaj¹ca siê nastêpuj¹ca:'),
				new Page('2 Podczas sykonywania zadania pamiêtaj o utworzeniu repozytorium, oraz bie¿¹cej rejestracji zmain w projekcie. Przygotuj model samochodu. W procesie ekstrakcji wiedzy domenowej uzyska³eœ informacje, i¿ samochód potrafi, przejechaæ dystans. We wstêpnym procesie developmentu powsta³a klasa abstrakcyjna SafetyCar przedstawiaj¹ca siê nastêpuj¹ca:'),
				new Page('3 Podczas sykonywania zadania pamiêtaj o utworzeniu repozytorium, oraz bie¿¹cej rejestracji zmain w projekcie. Przygotuj model samochodu. W procesie ekstrakcji wiedzy domenowej uzyska³eœ informacje, i¿ samochód potrafi, przejechaæ dystans. We wstêpnym procesie developmentu powsta³a klasa abstrakcyjna SafetyCar przedstawiaj¹ca siê nastêpuj¹ca:'),
				new Page('4 Podczas sykonywania zadania pamiêtaj o utworzeniu repozytorium, oraz bie¿¹cej rejestracji zmain w projekcie. Przygotuj model samochodu. W procesie ekstrakcji wiedzy domenowej uzyska³eœ informacje, i¿ samochód potrafi, przejechaæ dystans. We wstêpnym procesie developmentu powsta³a klasa abstrakcyjna SafetyCar przedstawiaj¹ca siê nastêpuj¹ca:')
			]);
		}
	}