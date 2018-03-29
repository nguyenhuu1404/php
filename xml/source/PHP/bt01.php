<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<table border="1" width="450" align="center">
    	<tr>
    		<td>Name</td>
            <td>Code</td>
            <td>Buy</td>
            <td>Sell</td>
            <td>Transfer</td>
        </tr>
	<?php
		$dom=new DOMDocument();
		$dom->load("http://www.vietcombank.com.vn/ExchangeRates/ExrateXML.aspx");
		$exrate=$dom->getElementsByTagName("Exrate");
		foreach($exrate as $item){
			$name=$item->getAttribute("CurrencyName");
			$code=$item->getAttribute("CurrencyCode");
			$buy=$item->getAttribute("Buy");
			$sell=$item->getAttribute("Sell");
			$trans=$item->getAttribute("Transfer");
			echo "<tr>";
			echo "<td>$name</td>";
			echo "<td>$code</td>";
			echo "<td>$buy</td>";
			echo "<td>$sell</td>";
			echo "<td>$trans</td>";
			echo "</tr>";			
		}
	?>
    </table>
</body>
</html>
