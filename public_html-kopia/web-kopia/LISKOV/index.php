<?php

	require_once 'vendor/autoload.php';

	use RCelary\Components\Aplikacja\KalkulatorPowierzchni;
	use RCelary\Components\Figury\Figura2D;
	use RCelary\Components\Figury\Figura3D;

	$figura2d = new Figura2D(10,5.5);
	$kalkulator = new KalkulatorPowierzchni($figura2d);
	echo $kalkulator->obliczPowierzchnie();

	echo '<br/>';

	$figura3d = new Figura3D(5,7,11);
	$kalkulator = new KalkulatorPowierzchni($figura3d);
	echo $kalkulator->obliczPowierzchnie();
