<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	if(isset($_POST['ok'])){
		$islogin=TRUE;
		$file=file("account.txt");
		foreach($file as $item){
			$arr[]=explode("|",$item);
		}
		foreach($arr as $v)	{
			if($v[1] == $_POST['txtuser'] && $v[2] == $_POST['txtpass']){
				$_SESSION['ses_username']=$v[1];
				$_SESSION['ses_level'] = $v[4];
				header("location:index.php");
				exit();
			}else{
				$islogin=FALSE;
			}
		}
		
		if($islogin == FALSE){
			echo "Wrong username or password";
		}
	}
?>
	<form action="bt03.php" method="post">
    Username: <input type="text" name="txtuser" size="25" /><br />
    Password: <input type="password" name="txtpass" size="25" /><br />
    <input type="submit" name="ok" value="Login" />
    </form>
</body>
</html>
