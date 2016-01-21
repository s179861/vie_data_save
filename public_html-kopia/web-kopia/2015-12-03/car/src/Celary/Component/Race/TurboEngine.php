<?php

namespace Celary\Component\Race;

class TurboEngine implements Engine {
	
	const HP = 120;
	const TURBO_ADDITIONAL_HP = 80;
	
	protected $hp;
	
	public function __construct() {
		
		$this->hp = 0;
	
	}
	
	public function start() {
		
		$this->hp = self::HP + self::TURBO_ADDITIONAL_HP;
		
	}
	
    public function hp(){
		
		return $this->hp;
		
	}
	
    public function stop() {
		
		$this->hp = 0;
		
	}
	
}