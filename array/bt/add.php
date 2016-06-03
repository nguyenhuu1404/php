<?php
if(isset($_POST['ok'])){
	$u=$_POST['txtuser'];
	$p=$_POST['txtpass'];
	$e=$_POST['txtemail'];
	$l=$_POST['level'];
	if($u && $p  && $l && $e){
		$file=file("account.txt");
		$end=end($file);
		$id=substr($end,0,strpos($end,"|"));
		$id++;
		$file[]="$id|$u|$p|$e|$l\r\n";
		file_put_contents("account.txt",$file);
		header("location:index.php");
		exit();
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
	<form action="add.php" method="post">
    Level: <select name="level">
    	<option value="1">Member</option>
        <option value="2">Administrator</option>
    </select><br />
    Username: <input type="text" name="txtuser" size="25" /><br />
    Password: <input type="password" name="txtpass" size="25" /><br />
    Email: <input type="text" name="txtemail" size="25" /><br />    
    <input type="submit" name="ok" value="Submit" />
    </form>
</body>
</html>
