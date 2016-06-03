<?php
function demo(){
	echo "Hello 123";
}
function debug($data) {
	echo '<pre>';
		print_r($data);
	echo '</pre>';
	die();
}
?>