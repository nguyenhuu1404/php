<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
	$quest=array(
		"1" => "Vì sao phải học lập trình PHP ?",
		"2" => "Nếu bạn có 50 triệu, bạn sẽ làm gì ?",
		"3" => "Lập trình web có thể giúp bạn giàu hay không ?"
	);
	
	$ans=array(
				"1" => array(
							array(
								"point" => "5",
								"answer" => "Để có việc làm"
							),
							array(
								"point" => "3",
								"answer" => "Để có làm đồ án trên trường"
							),
							array(
								"point" => "1",
								"answer" => "Học cho vui"
							),
				),
				"2" => array(
							array(
								"point" => "8",
								"answer" => "Đầu tư vào kinh doanh"
							),
							array(
								"point" => "5",
								"answer" => "Đi du lịch"
							),
							array(
								"point" => "3",
								"answer" => "Mua sắm iphone 5"
							),
				),
				"3" => array(
						array(
							"point" => "3",
							"answer" => "Làm web không đủ ăn"
						),
						array(
							"point" => "8",
							"answer" => "Làm web có thể giàu nếu chịu khó học tập"
						),
						array(
							"point" => "5",
							"answer" => "Làm web không bao giờ đói"
						),
				),
				
	
	);
	echo "<pre>";
	print_r($quest);
	echo "</pre>";
	echo "<pre>";
	print_r($ans);
	echo "</pre>";	
?>
	<form action="xl_bt02.php" method="post">
<?php	
	foreach($quest as $k=>$v){
		echo $v."<br />";
		foreach($ans[$k] as $k2=>$v2){
			echo "<input type='radio' name='$k' value='$v2[point]' />".$v2['answer']."<br />";
		}
	}
?>
	<input type="submit" name="ok" value="Submit" />
	</form>
</body>
</html>
