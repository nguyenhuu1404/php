<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	$dom=new DOMDocument();
	$dom->load("vd.xml");
	$title=$dom->getElementsByTagName("chapter_title")->item(2)->nodeValue;
	echo $title;
	$chap2=$dom->getElementsByTagName("chapter")->item(1);
	$att2=$chap2->getAttribute("codeid");
	echo $att2;
	$chap=$dom->getElementsByTagName("chapter");
	foreach($chap as $item){
		$title=$item->getElementsByTagName("chapter_title")->item(0)->nodeValue;
		echo $title;
		$att=$item->getAttribute("codeid");
		echo $att."<br />";
	}
?>
</body>
</html>
