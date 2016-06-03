<?php
if(isset($data['error'])){
	echo "<ul>";
	foreach($data['error'] as $loi){
		echo "<li>$loi</li>";
	}
	echo "</ul>";
}
?>
<form action="index.php?controller=user&action=edit&uid=<?php echo $data['data']['id'];?>" method="post">
Level: <select name="level">
	<option value="1" <?php if($data['data']['level'] == 1) echo "selected='selected'"; ?> >Member</option>
    <option value="2" <?php if($data['data']['level'] == 2) echo "selected='selected'"; ?> >Administrator</option>
</select><br />
Username: <input type="text" name="txtuser" size="25" value="<?php echo $data['data']['username'];?>" /><br />
Password: <input type="password" name="txtpass" size="25" /><br />
Re-Password: <input type="password" name="txtpass2" size="25" /><br />
<input type="submit" name="ok" value="Submit" />
</form>