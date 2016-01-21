<html>
<head>
	<meta charset="UTF-8"/>
</head>

<?php

	require_once 'vendor/autoload.php';

	use Zoo\Zoo;
	use Zoo\Animals\Lion;
	use Zoo\Animals\Elephant;
	use Zoo\Animals\Giraffe;

	$zoo = new Zoo(array( 'żyrafa' => new Giraffe('Anna'), 'słoń' => new Elephant('Kamil'), 'lew' => new Lion('Andrzej')));
	$zoo->animals['żyrafa']->speak();
	echo '<br/>';
	$zoo->animals['słoń']->speak();
	echo '<br/>';
	$zoo->animals['lew']->speak();
