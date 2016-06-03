<?php
session_start();
if($_SESSION['ses_level'] != 2){
	header("location:bt03.php");
	exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<table width="400" align="center" border="1">
    	<tr>
        	<td align="center" colspan="5"><a href='add.php'>Add A User</a></td>
        </tr>
    	<tr>
        	<td>STT</td>
            <td>Username</td>
            <td>Level</td>
            <td>Edit</td>
            <td>Del</td>
        </tr>
        <?php
			$file=file("account.txt");
			foreach($file as $item){
				$arr[]=explode("|",$item);
			}
			$stt=0;
			foreach($arr as $data){
				$stt++;
				echo "<tr>";
				echo "<td>$stt</td>";
				echo "<td>$data[1]</td>";
				if($data[4] == 1){
					echo "<td>Member</td>";
				}else{
					echo "<td><font color='red'>Admin</font></td>";
				}
				echo "<td><a href='edit.php?uid=$data[0]'>Edit</a></td>";
				echo "<td><a href='del.php?uid=$data[0]'>Del</a></td>";
				echo "</tr>";
			}
		?>
    </table>
</body>
</html>
