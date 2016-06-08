<?php
//tao ra mot mang tu 5 phan tu voi gia tri tu 1 -> 5
$a=range(1,5);
echo "<pre>";
print_r($a);
echo "</pre>";
/*$data=array();
foreach($a as $val){
	$data[]= $val * 3;
}*/
//ap dung lambda
$callback=function($num){
	return $num * 3;
};
//ham array_map
//ho tro callback function
$data=array_map($callback, $a);
echo "<pre>";
print_r($data);
echo "</pre>";
