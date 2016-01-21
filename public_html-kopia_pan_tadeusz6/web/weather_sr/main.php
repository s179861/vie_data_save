<html>
<head>
	<meta charset="UTF-8"/>
</head>

<?php

	require_once 'vendor/autoload.php';
		
	use Celary\Component\Weather\Api\OpenWeatherClient;
	use Celary\Component\Weather\Api\OpenWeatherClientWatch;
	use Celary\Component\Weather\Api\OpenWeatherClientWatchCache;

	//$city = $_GET['miasto'];
	$city = 'london';
	
	$client = new OpenWeatherClient($city);

	$client->getData();
	echo "Temperatura wynosi: ";
	$client->displayTemperature();
	echo " stopni celcjusza.";
	
	echo "<br/>";
	
	$client = new OpenWeatherClientWatch($city);

	$client->getData();
	echo "Temperatura wynosi: ";
	$client->displayTemperature();
	echo " stopni celcjusza. Czas pobrania: ";
	$client->displayTime();
	echo " sekund.";
	
	echo "<br/>";
	
	$client = new OpenWeatherClientWatchCache($city);

	$client->getDataCache();
	echo "Temperatura wynosi: ";
	$client->displayTemperature();
	echo " stopni celcjusza.";
