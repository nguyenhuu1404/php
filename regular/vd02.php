<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<form action="vd02.php" method="post">
    Phone: <input type="text" name="txtphone" size="25" /><br />
    <input type="submit" name="ok" value="Submit" />
    </form>
    <?php
		if(isset($_POST['ok'])){
			$rule="/^([0-9]{3}\.[0-9]{2}|\([0-9]{3}\)\.\([0-9]{2}\))\.[0-9]{7,9}$/";
			if(preg_match($rule,$_POST['txtphone'])){
				echo "Phone hợp lệ";
			}else{
				echo "Phone không hợp lệ";
			}
		}
	?>
</body>
</html>
