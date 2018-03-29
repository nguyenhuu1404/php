<?php
session_start();
require "class.php";
require "user.php";
$loi="";
if(isset($_POST['ok'])){
	$u=$p="";
	if($_POST['txtuser'] == NULL){
		$loi[]= "Please enter your username";
	}else{
		$u=$_POST['txtuser'];
	}
	if($_POST['txtpass'] == NULL){
		$loi[]="Please enter your password";
	}else{
		$p=$_POST['txtpass'];
	}
	if($u && $p){
		$muser= new User;
		$muser->set_username($u);
		$muser->set_password($p);
		$data=$muser->check_login();
		if($data == FALSE){
			$loi[]="Wrong username or password";
		}else{
			$_SESSION['ses_username']=$data['username'];
			$_SESSION['ses_level']=$data['level'];
			header("location:index.php");
			exit();
		}
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php
		if($loi!=""){
			echo "<ul>";
			foreach($loi as $err){
				echo "<li>$err</li>";
			}
			echo "</ul>";
		}
	?>
	<form action="login.php" method="post">
    Username: <input type="text" name="txtuser" size="25" /><br />
    Password: <input type="password" name="txtpass" size="25" /><br />
    <input type="submit" name="ok" value="Submit" />
    </form>
</body>
</html>
