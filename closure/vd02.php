<?php
$name="jacky";
function demo(){
	$name="Bibi";
	$fun=function() use (&$name){
		$name="Kenny";
	};
	$fun();
	echo $name;
}

demo();