<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	$xml=simplexml_load_file("http://vnexpress.net/rss/tin-moi-nhat.rss");
	$item=$xml->channel->item;
	$count=0;
	foreach($item as $data){
		echo $data->title."<br />";
		echo $data->description."<br />";
		echo "<hr />";
		$count++;
		if($count == 10){
			break;
		}
	}
?>
</body>
</html>
