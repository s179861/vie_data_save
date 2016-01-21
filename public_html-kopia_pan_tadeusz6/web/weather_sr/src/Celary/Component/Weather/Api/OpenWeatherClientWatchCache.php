<?php

	namespace Celary\Component\Weather\Api;
	
	class OpenWeatherClientWatchCache extends OpenWeatherClientWatch {

		private $isInCache = false;
		private $city;
	
		function __construct($city) {
			
			parent::__construct($city);
			$this->city = $city;
			
		}

		function getDataCache() {
			
			$file = fopen("data.txt","r");
			while(!feof($file)) {
				$line = fgets($file);
				$part = explode(":",$line);
				if($part[0] == $this->city) {
					$timestamp = time() - $part[2];
					$minutes = $timestamp/600;
					if($minutes < 10) {
						$this->temperature = $part[1];
						$this->isInCache = true;
					}
				}
			}

			if(!$this->isInCache) {
				parent::getData();
				$file = fopen("data.txt","a");
				$line = $this->city.':'.$this->temperature.':'.time()."\r\n";
				fwrite($file,$line);
			}
			
		}

	}
