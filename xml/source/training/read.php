<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
body{
font:12px Verdana, Arial, Helvetica, sans-serif;
}

.news{
padding:5px;
width:450px;
border:1px solid #CCCCCC;
margin-bottom:5px;
}

.news h3{
font-size:12px;
margin-bottom:5px;
}

.news img{
border:1px solid #CCCCCC;
padding:2px;
margin:0px 5px 5px 0px;
}

a{
text-decoration:none;
color:#666666;
}

a:hover{
color:#0099FF;
}

.cls{
clear:left;
}

</style>
</head>

<body>
	<?php
		$id=$_GET['nid'];
		$name=md5(md5(md5("qhonline.info")));
		$xml=simpleXML_load_file("cache/$name.xhtml");
		$news=$xml->news;
		foreach($news as $item){
			$nid=$item['newsid'];
			if($nid == $id){		
				$title=$item->title;
				$full=$item->full;
				$img=$item->image;
				$full=str_replace("\n","<br />",$full);
				echo "<div class='news'>";
				echo "<h3>$title</h3>";
				echo "<img src='$img' width='150' align='left' />";
				echo $full;
				echo "<div class='cls'></div>";			
				echo "</div>";
				break;
			}

		}
	?>
</body>
</html>
