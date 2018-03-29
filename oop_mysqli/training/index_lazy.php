<?php
session_start();
require "class.php";
require "function.php";

if($_SESSION['ses_level'] != 2){
	header("location:login.php");
	exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
td{
font:12px verdana;
text-align:center;
border:1px solid #0099FF;
}

.title{
background:#0099FF;
color:#FFFFFF;
font-weight:bold;
}

a{
color:#0099FF;
text-decoration:none;
}

a:hover{
color:#FF6600;
}

a.title{
color: #FFFFFF;
}
</style>
<script language="javascript">
function xacnhan(){
	if(!window.confirm("Do you want delete this user ?")){
		return false;
	}
}
</script>
</head>

<body>
    <table width="450" align="center">
    	<tr>
        	<td colspan="5" class="title">Welcome back, <?php echo $_SESSION['ses_username'];?></td>
        </tr>
    	<tr>
        	<td colspan="5"><a href='add_user.php'>Add A User</a> - <a href='logout.php'>Logout</a></td>
        </tr>
    	<tr>
        	<td class="title">STT</td>
            <td class="title">Username</td>
            <td class="title">Level</td>
            <td class="title">Edit</td>
            <td class="title">Del</td>
        </tr>
        <?php
			$stt=0;
			$muser= new User;
			$data=$muser->listall();
			foreach($data as $item){
				$stt++;
				echo "<tr>";
				echo "<td>$stt</td>";
				echo "<td>$item[username]</td>";
				if($item['level'] == 2){
					echo "<td><font color='red'>Admin</font></td>";
				}else{
					echo "<td>Member</td>";
				}
				echo "<td><a href='edit_user.php?uid=$item[id]'>Edit</a></td>";
				echo "<td><a href='del_user.php?uid=$item[id]' onclick='return xacnhan();'>Del</a></td>";
				echo "</tr>";
			}

		?>
    </table>
</body>
</html>
