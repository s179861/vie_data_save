<?php

namespace Celary\Component\Race;

class RaceCar implements TelemetryCar {
	
	protected $engine;
	
	public function __construct($engine) {
		
		$this->engine = $engine;
		$this->engine->start();
	
	}
	
	public function telemetry() {
		
		$telemetry = new Telemetry(
			$this->currentV(),
			$this->currentAcc()
		);
		
		return $telemetry;
		
	}
	
	private function currentV() {
		
		return (100 + $this->engine->hp())/0.85;
		
	}
	
	private function currentAcc() {
		
		return (1 + $this->engine->hp()/200);
		
	}
	
}