<?php

	namespace RCelary\Components\Aplikacja;

	use RCelary\Components\Figury\Figura2D;
	
	class KalkulatorPowierzchni {

		private $figura;

		function __construct(Figura2D $figura) {

			$this->figura = $figura;

		}

		public function obliczPowierzchnie() {

			return ($this->figura->getWysokosc() * $this->figura->getSzerokosc());

		}

	}
