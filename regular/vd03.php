<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	$file=file_get_contents("data.html");
	$start="<p id=\"test\">";
	$end="<\/p>";
	$rule="/(?<=$start).*(?=$end)/";//lay du lieu ben trong the
	preg_match($rule,$file,$result);
	echo "<pre>";
	print_r($result);
	echo "</pre>";
?>
</body>
</html>
