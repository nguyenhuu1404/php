<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php
		$dom=new DOMDocument();
		$dom->load("practiceDOM.xml");
		$emp=$dom->getElementsByTagName("EMPLOYEE");
		foreach($emp as $item){
			$name=$item->getElementsByTagName("NAME")->item(0)->nodeValue;
			$position=$item->getElementsByTagName("POSITION")->item(0)->nodeValue;
			$salary=$item->getElementsByTagName("SALARY")->item(0)->nodeValue;
			$id=$item->getAttribute("ID");
			echo "Name: $name($id) <br />";
			echo "Position: $position<br />";
			echo "Salary: $salary<br />";
			echo "<hr />";
		}
	?>
</body>
</html>
