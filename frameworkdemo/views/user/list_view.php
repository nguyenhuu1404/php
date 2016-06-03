<table border="1" align="center" width="450">
	<tr>
    	<td>STT</td>
        <td>Username</td>
        <td>Level</td>
        <td>Edit</td>
        <td>Del</td>
    </tr>
    <?php
		$stt=0;
		foreach($data as $item){
			$stt++;
			echo "<tr>";
			echo "<td>$stt</td>";
			echo "<td>$item[username]</td>";
			if($item['level'] == 1){
				echo "<td>Member</td>";
			}else{
				echo "<td><font color='red'>Admin</font></td>";
			}
			echo "<td><a href='index.php?controller=user&action=edit&uid=$item[id]'>Edit</a></td>";
			echo "<td><a href='index.php?controller=user&action=del&uid=$item[id]'>Del</a></td>";			
			echo "</tr>";
		}
	?>
</table>