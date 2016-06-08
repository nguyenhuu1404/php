<?php
function demo(){
	//lay tat ca cac doi so 
	$params=func_get_args();
	//dem tat cac cac doi so
	echo func_num_args();
	echo "<pre>";
	print_r($params);
	echo "</pre>";
	//echo "Gia tri $a , $a2, $a3,$a4";
}
demo(5,10,15,20);