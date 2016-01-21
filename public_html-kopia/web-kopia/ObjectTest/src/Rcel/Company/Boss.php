<?php

	namespace Rcel\Company;

	class Boss {

		private $worker;

		public function __construct($worker) {

			$this->worker = $worker;

		}
	
		public function work() {

		$this->worker->work();

		}

	}
