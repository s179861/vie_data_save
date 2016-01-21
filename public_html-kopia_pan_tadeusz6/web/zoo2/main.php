<html>
<head>
	<meta charset="UTF-8"/>
</head>

<?php

	require_once 'vendor/autoload.php';

	use Zoo\Zoo;
	use Zoo\Animals\Animal;
	
	$zoo = new Zoo(array( 'żyrafa' => new Animal('żyrafa'), 'słoń' => new Animal('słoń'), 'lew' => new Animal('lew')));
	$zoo->animals['żyrafa']->speak();
	echo '<br/>';
	$zoo->animals['słoń']->speak();
	echo '<br/>';
	$zoo->animals['lew']->speak();
