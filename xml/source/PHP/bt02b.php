<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php
		$dom_tygia=new DOMDocument();
		$dom_tygia->load("http://www.vietcombank.com.vn/ExchangeRates/ExrateXML.aspx");
		$tygia=$dom_tygia->getElementsByTagName("Exrate")->item(17);
		$usd=$tygia->getAttribute("Sell");
		$xml=new DOMDocument();
		$xml->load("practiceDOM.xml");
		$emp=$xml->getElementsByTagName("EMPLOYEE");
		foreach($emp as $item){
			$name=$item->getElementsByTagName("NAME")->item(0)->nodeValue;
			$sal=$item->getElementsByTagName("SALARY")->item(0)->nodeValue;
			$tien=$sal * $usd;
			if($tien > 5000000){
				$luong=($tien - ($tien - 5000000)*0.05) * 12 + $tien;
			}else{
				$luong=$tien * 13;
			}
			echo "Name: $name <br />";
			echo "Salary: $luong ($sal/month)<br />";
			echo "<hr />";
		}
	?>
</body>
</html>
