<?php
	if(isset($_POST['ok'])){
		$t=$_POST['txttitle'];
		$a=$_POST['txtauthor'];
		$i=$_POST['txtinfo'];
		$f=$_POST['txtfull'];
		move_uploaded_file($_FILES['img']['tmp_name'],"data/".$_FILES['img']['name']);
		$img="data/".$_FILES['img']['name'];
		if($t && $a && $i && $f && $img){
			$conn=mysql_connect("localhost","root","");
			mysql_select_db("xml32",$conn);
			$sql="insert into news(news_title,news_author,news_info,news_full,news_img) values('$t','$a','$i','$f','$img')";
			mysql_query($sql);
			echo "<h1>Them tin tuc thanh cong</h1>";
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
body{
font:12px verdana;
}

label{
float:left;
width:120px;
padding-left:25px;
font-weight:900;
margin-top:3px;
}

input, textarea{
border:1px solid #0099FF;
margin-bottom:3px;
}

legend{
font-weight:900;
color:#0099FF;
}

fieldset{
width:450px;
border:1px solid #0099FF;
margin:5px;
}
</style>
<title>Untitled Document</title>
</head>

<body>
<form action="add.php" method="post" enctype="multipart/form-data">
<fieldset>
<legend>Member Register</legend>
	<label>Title:</label> <input type="text" name="txttitle" size="30" /><br />
    <label>Author:</label> <input type="text" name="txtauthor" size="30" /><br />
    <label>Info:</label> <textarea name="txtinfo" cols="30" rows="5"></textarea><br />
    <label>Full:</label> <textarea name="txtfull" cols="30" rows="15"></textarea><br />
    <label>Images:</label> <input type="file" name="img" size="30" /><br />
    <label>&nbsp;</label><input type="submit" name="ok" value="Submit" />
</fieldset>    
</form>
</body>
</html>
