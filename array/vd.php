<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	$arr=array(
		"person" => array(
			"name" => "kenny",
			"web"  => "qhonline.info"
		),
		"person2" => array(
			"name" => "jacky",
			"web"  => "qhonline.edu.vn"
		)
	);
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	echo $arr['person']['web'];
	$str="windy|kenny|jacky";
	$arr2=explode("|",$str);
	echo "<pre>";
	print_r($arr2);
	echo "</pre>";
	$str2=implode("-",$arr2);
	echo $str2;
	echo "<br />";
	$str3= serialize($arr);
	echo $str3;
	$arr3=unserialize($str3);
	echo "<pre>";
	print_r($arr3);
	echo "</pre>";
?>
</body>
</html>
