<html>
<head>
	<meta charset="UTF-8"/>
</head>

<?php

	require_once 'vendor/autoload.php';
		
	use Celary\Component\Garage\SafeCar;
	use Celary\Component\Garage\Car;
	use Celary\Component\Garage\FlinstoneCar;
	
	$car = new Car();
	$flinstoneCar = new FlinstoneCar();
	
	if($car instanceof SafeCar) {
		$car->drive(200);
	}
	echo "\n";
	if($flinstoneCar instanceof SafeCar) {
		$flinstoneCar->drive(200);
	}