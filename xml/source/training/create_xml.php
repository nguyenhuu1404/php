<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("xml32",$conn);
		
		$dom=new DOMDocument("1.0","utf-8");
		$cate=$dom->createElement("Categorie");
		$dom->appendChild($cate);
		
		$sql="select * from news order by news_id DESC";
		$query=mysql_query($sql);
		while($data=mysql_fetch_assoc($query)){
			$news=$dom->createElement("news");
			$cate->appendChild($news);
			
			$newsid=$dom->createAttribute("newsid");
			$news->appendChild($newsid);
			$vnewsid=$dom->createTextNode($data['news_id']);
			$newsid->appendChild($vnewsid);
			
			$title=$dom->createElement("title",$data['news_title']);
			$news->appendChild($title);
			
			$author=$dom->createElement("author",$data['news_author']);
			$news->appendChild($author);
			
			$info=$dom->createElement("info",$data['news_info']);
			$news->appendChild($info);
			
			$full=$dom->createElement("full");
			$news->appendChild($full);
			
			$vfull=$dom->createCDATASection($data['news_full']);
			$full->appendChild($vfull);
			
			$image=$dom->createElement("image",$data['news_img']);
			$news->appendChild($image);
			
		}
			$name=md5(md5(md5("qhonline.info")));
			$dom->save("cache/$name.xhtml");
			echo "Tạo cache thành công";
	?>
</body>
</html>
