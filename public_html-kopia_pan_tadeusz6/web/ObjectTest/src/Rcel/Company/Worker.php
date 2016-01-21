<?php

	namespace Rcel\Company;

	class Worker {
		
		private $name;

		public function __construct($name) {
		
			$this->name = $name;

		}

		public function work() {
			
			echo 'I am working...';

		}

	}
