<?php

namespace Celary\Component\Garage;

class Car extends SafeCar
{

    protected function go(){
		
		echo 'I am starting the engine';
		echo 'brrr brr brrrr';
		
	}

}