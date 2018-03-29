<?php
session_start();
$loi="";
$id=$_GET['uid'];
require "class.php";
require "user.php";
if($_SESSION['ses_level'] != 2){
	header("location:login.php");
	exit();
}
$muser=new User;

if(isset($_POST['ok'])){
	$u=$p="";
	if($_POST['txtuser'] == NULL){
		$loi[]="Please enter your username";
	}else{
		$u=$_POST['txtuser'];
	}
	if($_POST['txtpass'] != $_POST['txtpass2']){
		$loi[]="Your password and repassword are not matches";
	}else{
		if($_POST['txtpass'] != NULL){
			$p=$_POST['txtpass'];
		}else{
			$p="none";
		}
	}
	$l=$_POST['level'];
	if($u && $p && $l){
		$muser->set_username($u);
		$muser->set_password($p);
		$muser->set_level($l);
		if($muser->check_username($id) == FALSE){
			$loi[]="Your username has been registered, please try again";
		}else{
			$muser->update_user($id);
			header("location:index.php");
			exit();
		}
	}
}
$data=$muser->get_userdata($id);


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
	<form action="edit_user.php?uid=<?php echo $data['id'];?>" method="post">
    Level: <select name="level">
    	<option value="1" <?php if($data['level'] == 1) echo "selected='selected'";?> >Member</option>
        <option value="2" <?php if($data['level'] == 2) echo "selected='selected'";?>>Administrator</option>
    </select><br />
    Username: <input type="text" name="txtuser" size="25" value="<?php echo $data['username'];?>" /><br />
    Password: <input type="password" name="txtpass" size="25" /><br />
    Re-Password: <input type="password" name="txtpass2" size="25" /><br />    
    <input type="submit" name="ok" value="Submit" />
    </form>

</body>
</html>
