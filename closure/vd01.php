<?php
$e=function($a){
	if($a % 2 == 0){
		return "Chan";
	}else{
		return "Le";
	}
};
//viet theo lambda: gan bien = mot function, khi goi thi ten bien cong dau dong mo ngoac()
//co the chuyen cac doi so param

//su dung cu phap use cho closure
//bien $e co the la mot chuoi, mot so or mot ham
$test=function($param,$param2,$param3=300) use ($e){
	echo $e($param).'</br>';
	echo "QHOnline.Info - Param: $param , $param2, $param3 ";
};

$test(101,200,500);
//kq: 
// Le
// "QHOnline.info ...."