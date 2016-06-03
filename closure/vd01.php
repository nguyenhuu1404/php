<?php
$e=function($a){
	if($a % 2 == 0){
		return "Chan";
	}else{
		return "Le";
	}
};
$test=function($param,$param2,$param3=300) use ($e){
	echo $e($param);
	echo "QHOnline.Info - Param: $param , $param2, $param3 ";
};
$test(101,200,500);