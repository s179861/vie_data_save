<html>
<head>
	<meta charset="UTF-8"/>
</head>

<?php

	require_once 'vendor/autoload.php';
		
	use Celary\Mysql\Connect;
	use Celary\Mysql\Load;
	use Celary\Components\Converter;
	use Celary\Components\ToText;
	use Celary\Components\ToXML;
	use Celary\Components\ToJSON;
	use Celary\Components\ToVCARD;
	
	$con = new Connect();
	$con = $con->polacz();
	
	$dane = new Load($con);
	$tablica = $dane->pobierz(1);
	/*if($tablica != false) {
		echo $tablica[1];
	}*/
	
	

?>