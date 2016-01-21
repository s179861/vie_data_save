<?php

	namespace RCelary\Components\Figury;

	class Figura2D {

		private $wysokosc;
		private $szerokosc;

		function __construct($wysokosc,$szerokosc) {

			$this->wysokosc = $wysokosc;
			$this->szerokosc = $szerokosc;

		}

		function getWysokosc() {

			return $this->wysokosc;

		}

		function getSzerokosc() {

			return $this->szerokosc;

		}

	}
