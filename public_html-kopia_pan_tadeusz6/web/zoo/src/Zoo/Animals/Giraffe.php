<?php

	namespace Zoo\Animals;

	class Giraffe {

		private $name;

		public function __construct($name) {

			$this->name = $name;

		}
	
		public function speak() {

			echo "Żyrafa $this->name daje głos";

		}

	}
