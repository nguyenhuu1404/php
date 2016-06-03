<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
	$ds=Array(
			"001" => array(
					"name"  => "Kenny",
					"address"=> "123 Le Loi",
					"phone"  => "0903087580",
					"point"   => array(
							"sub1" => "10",
							"sub2" => "10",
							"sub3" => "10",
							),
					),
			"002" => array(
					"name"  => "Jiro",
					"address"=> "115 Thanh Thai",
					"phone"  => "090545181",
					"point"   => array(
							"sub1" => "8",
							"sub2" => "8",
							"sub3" => "9",
							),
					),
			"003" => array(
					"name"  => "Lena",
					"address"=> "23 Su Van Hanh",
					"phone"  => "090847674",
					"point"   => array(
							"sub1" => "6",
							"sub2" => "3",
							"sub3" => "7",
							),
					),
			"004" => array(
					"name"  => "Vicky",
					"address"=> "21/10 Dong Khoi",
					"phone"  => "0909021342",
					"point"   => array(
							"sub1" => "6",
							"sub2" => "7",
							"sub3" => "8",
							),
					),															
	);
	echo "<pre>";
	print_r($ds);
	echo "</pre>";
	

?>
	<table border="1">
		<tr>
        	<td>SVID</td>
            <td>SVNAME</td>
            <td>SVAddress</td>
            <td>SVPhone</td>
            <td>Sub01</td>
            <td>Sub02</td>
            <td>Sub03</td>
            <td>Final</td>
        </tr>
        <?php
			foreach($ds as $k => $v){
				echo "<tr>";
				echo "<td>$k</td>";
				echo "<td>$v[name]</td>";
				echo "<td>$v[address]</td>";
				echo "<td>$v[phone]</td>";
				echo "<td>".$v['point']['sub1']."</td>";
				echo "<td>".$v['point']['sub2']."</td>";				
				echo "<td>".$v['point']['sub3']."</td>";	
				$dtb=($v['point']['sub1'] + $v['point']['sub2']	+ $v['point']['sub3'])/3;
				echo "<td>$dtb</td>";
				echo "</tr>";	
			}
		?>
	</table>
</body>
</html>
