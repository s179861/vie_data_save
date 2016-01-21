<?php
	function polacz() {
		include "h.php";
		return pg_connect("host=sbazy user=s179861 dbname=s179861 password=$h");
	}
?>
