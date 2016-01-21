<html>
<head>
	<meta charset="UTF-8"/>
</head>

<?php

	require_once 'vendor/autoload.php';
		
	use Celary\Component\Race\RaceCar;
	use Celary\Component\Race\StockEngine;
	use Celary\Component\Race\TurboEngine;
	
	$stockEngine = new StockEngine();
	$raceCar = new RaceCar($stockEngine);
	
	$telemetria = $raceCar->telemetry();
	echo 'V: '.$telemetria->v()."<br/>";
	echo 'ACC: '.$telemetria->acceleration()."<br/>";
	
	$turboEngine = new TurboEngine();
	$raceCar = new RaceCar($turboEngine);
	
	$telemetria = $raceCar->telemetry();
	echo 'V: '.$telemetria->v()."<br/>";
	echo 'ACC: '.$telemetria->acceleration()."<br/>";