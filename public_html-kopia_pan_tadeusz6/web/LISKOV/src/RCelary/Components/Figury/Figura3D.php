<?php

	namespace RCelary\Components\Figury;

	class Figura3D extends Figura2D {

		private $dlugosc;

		function __construct($wysokosc,$szerokosc,$dlugosc) {

			parent::__construct($wysokosc,$szerokosc);
			$this->dlugosc = $dlugosc;

		}

		function getDlugosc() {

			return $this->dlugosc;

		}

	}
