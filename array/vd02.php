<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php
		$arr=array(
			"name" => "kenny",
			"email" => "kenny@qhonline.info",
			"website" => "qhonline.edu.vn"
		);
		$key=array_keys($arr);
		echo "<pre>";
		print_r($key);
		echo "</pre>";
		$value=array_values($arr);
		echo "<pre>";
		print_r($value);
		echo "</pre>";
		
		$file=file("account.txt");
		echo "<pre>";
		print_r($file);
		echo "</pre>";
		
	?>
</body>
</html>
