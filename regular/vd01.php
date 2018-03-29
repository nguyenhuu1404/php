<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<form action="vd01.php" method="post">
    Email: <input type="text" name="txtmail" size="25" /><br />
    <input type="submit" name="ok" value="Submit" />
    </form>
    <?php
		if(isset($_POST['ok'])){
			//kí tự đầu tiên của chuỗi phải là chữ, có thế là chữ hoa or chữ thường, các kí tự tiếp theo có thể là chữ hoa, chữ thường, số, dấu chấm, dầu _, (dấu + là bắt buộc phải có) tiếp theo đến kí tự đặc biệt @(\@), sau @ ít nhất là 3 kí tự, đến kí tự đặc biệt ., sau dấu chấm là các kí tự có thế là hoa thường từ 2 -> 8 kí tự
			$rule="/^[a-zA-Z]{1}[a-zA-Z0-9._]+\@[a-zA-Z0-9]{3,}\.[a-zA-Z.]{2,8}$/";
			if(preg_match($rule,$_POST['txtmail'])){
				echo "Email hợp lệ";
			}else{
				echo "Email không hợp lệ";
			}
		}
	?>
</body>
</html>
