<?php
function wd(Ss) {
	include "h.php";
	$con = pg_connect("host=sbazy user=s179861 dbname=s179861 password=$h"); 
	$r=pg_exec($con,$s);

	$lw=pg_numrows($r);
	$lk=pg_numfields($r);

	print "<table border='3'>";
	for($i=0;$i<$lk;$i++) {
		print "<th>".pg_field_name($r,0)."</th>";
	}
	for($j=0;$j<$lw;$j++) {
		print "<tr>";
		for($i=0;$i<$lk;$i++) {
			print "<td>";
			print pg_result($r,$j,$i);
			print "</td>";
		}
		print "</tr>";
	}
	print "</table";
}
?>
