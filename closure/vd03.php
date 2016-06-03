<?php
$a=range(1,5);
/*$data=array();
foreach($a as $val){
	$data[]= $val * 3;
}*/
$callback=function($num){
	return $num * 3;
};
$data=array_map($callback,$a);
echo "<pre>";
print_r($data);
echo "</pre>";
