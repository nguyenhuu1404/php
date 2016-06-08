<?php
$e = "hello word";
//de truyen mot bien tu ngoai ham vao trong ham ta dung tu khoa use
//cac xu li bien o trong ham khong thay doi bien ngoai ham
//muon bien ngoai ham thay doi ta phai them ky tu & truoc bien de tham chieu den bien ngoai ham
$test = function($param1, $param2, $param3 = 3)  use(&$e) {
	echo "test lambda and closure $param1 - $param2 - $param3".'</br>'; 
	$e = 1;
	echo "closure $e".'</br>';
};

$test(1, 2);
echo $e;