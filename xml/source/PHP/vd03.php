<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php
		$xml=simpleXML_load_file("vd.xml");
		$chap_t2=$xml->info->chapter[1]->chapter_title;
		echo $chap_t2."<br />";
		$att_chap3=$xml->info->chapter[2]['codeid'];
		echo $att_chap3."<br />";
		$chap=$xml->info->chapter;
		foreach($chap as $item){
			echo $item->chapter_title."<br />";
			echo $item->chapter_rating."<br />";
			echo $item['codeid']."<br />";
		}
	?>
</body>
</html>
