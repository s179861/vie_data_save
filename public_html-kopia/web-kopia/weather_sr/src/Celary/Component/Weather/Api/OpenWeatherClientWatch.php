<?php

	namespace Celary\Component\Weather\Api;

	use Symfony\Component\Stopwatch\Stopwatch;
	
	class OpenWeatherClientWatch extends OpenWeatherClient {

		private $watch;
		private $times = 0;

		function __construct($city) {
			
			parent::__construct($city);
			$this->watch = new Stopwatch();

		}

		function getData() {
			
			$event = $this->watch->start('pomiar');
			parent::getData();
			$event = $this->watch->stop('pomiar');
			$this->times = $event->getDuration()/1000;

		}
		
		function displayTime() {
			
			echo $this->times;
			
		}

	}
