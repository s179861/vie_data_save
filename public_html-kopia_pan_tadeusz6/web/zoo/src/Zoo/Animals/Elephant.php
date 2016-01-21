<?php

	namespace Zoo\Animals;

	class Elephant {

		private $name;

		public function __construct($name) {

			$this->name = $name;

		}
	
		public function speak() {

			echo "Słoń $this->name daje głos";

		}

	}
