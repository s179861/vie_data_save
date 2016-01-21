<?php

	namespace Zoo\Animals;

	class Animal {

		private $type;

		public function __construct($type) {

			$this->type = $type;

		}
	
		public function speak() {

			echo "Zwierze $this->type daje głos";

		}

	}
