<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php 
		$xml=new DOMDocument();
		$xml->load("practiceDOM.xml");
		$cus=$xml->getElementsByTagName("CUSTOMER");
		foreach($cus as $item){
			$first=$item->getElementsByTagName("FIRSTNAME")->item(0)->nodeValue;
			$last=$item->getElementsByTagName("LASTNAME")->item(0)->nodeValue;
			$id=$item->getAttribute("ID");
			echo "Name: $first $last ($id)<br />";
			$product=$item->getElementsByTagName("PRODUCT");
			foreach($product as $pro){
				$pro_name=$pro->getElementsByTagName("NAME")->item(0)->nodeValue;
				$pro_qua=$pro->getElementsByTagName("QUANTITY")->item(0)->nodeValue;
				$pro_price=$pro->getElementsByTagName("PRICE")->item(0)->nodeValue;
				echo "+ $pro_name - $pro_qua - $pro_price <br />";
			}
			echo "<hr />";
		}
	?>
</body>
</html>
