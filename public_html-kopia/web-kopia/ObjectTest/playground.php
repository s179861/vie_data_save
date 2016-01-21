<?php

	require_once 'vendor/autoload.php';

	use Rcel\Company\Worker;
	use Rcel\Company\Boss;

	$bob = new Worker('Bob');
	$boss = new Boss($bob);

	$boss->work();
