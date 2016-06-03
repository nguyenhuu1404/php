<?php
	//echo loi
	if($loi != ""){
		echo "<ul>";
		foreach($loi as $err){
			echo "<li>$err</li>";
		}
		echo "</ul>";
	}
?>
<form action="index.php?controller=user&action=add" method="post">
Level: <select name="level">
	<option value="1">Member</option>
    <option value="2">Administrator</option>
</select><br />
Username: <input type="text" name="txtuser" size="25" /><br />
Password: <input type="password" name="txtpass" size="25" /><br />
<input type="submit" name="ok" value="Submit" />
</form>