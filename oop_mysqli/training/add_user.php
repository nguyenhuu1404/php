<?php
session_start();
$loi="";
require "class.php";
require "user.php";
if($_SESSION['ses_level'] != 2){
	header("location:login.php");
	exit();
}

if(isset($_POST['ok'])){
	$u= $p="";
	if($_POST['txtuser'] == NULL){
		$loi[]= "Please enter your username";
	}else{
		$u=$_POST['txtuser'];
	}
	if($_POST['txtpass'] == NULL){
		$loi[]="Please enter your password";
	}else{
		if($_POST['txtpass'] != $_POST['txtpass2']){
			$loi[]="Your password and repassword are not matches";
		}else{
			$p=$_POST['txtpass'];
		}
	}
	$l=$_POST['level'];
	if($u && $p && $l){
		$muser=new User;
		$muser->set_username($u);
		$muser->set_password($p);
		$muser->set_level($l);
		if($muser->check_username() == FALSE){
			$loi[]="Your username has been registered, please try again";
		}else{
			$muser->insert_user();
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
	<form action="add_user.php" method="post">
    Level: <select name="level">
    	<option value="1">Member</option>
        <option value="2">Administrator</option>
    </select><br />
    Username: <input type="text" name="txtuser" size="25" /><br />
    Password: <input type="password" name="txtpass" size="25" /><br />
    Re-Password: <input type="password" name="txtpass2" size="25" /><br />    
    <input type="submit" name="ok" value="Submit" />
    </form>

</body>
</html>
