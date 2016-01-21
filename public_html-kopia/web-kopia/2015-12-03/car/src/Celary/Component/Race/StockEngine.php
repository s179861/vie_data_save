<?php

namespace Celary\Component\Race;

class StockEngine implements Engine {
	
	const HP = 120;
	
	protected $hp;
	
	public function __construct() {
		
		$this->hp = 0;
	
	}
	
	public function start() {
	
		$this->hp = self::HP;
	
	}
	
    public function hp(){
		
		return $this->hp;
		
	}
	
    public function stop() {
		
		$this->hp = 0;
		
	}
	
}