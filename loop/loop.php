<?php 
echo "<table>";
echo "<tr>";
for($a =2; $a<=10; $a++){
	echo "<td>";
	for($b = 1; $b<=10; $b++){
		echo "$a x $b = ".$a*$b.'<br/>';
	}
	echo "</td>";
}
echo "</tr>";
echo "</table>";
?>