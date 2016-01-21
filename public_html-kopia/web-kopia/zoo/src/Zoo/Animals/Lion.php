<?php

	namespace Zoo\Animals;

	class Lion {

		private $name;

		public function __construct($name) {

			$this->name = $name;

		}
	
		public function speak() {

			echo "Lew $this->name daje głos";

		}

	}
