<?php
$db= new Mysqli('localhost','root','','project');
$result=$db->query('select * from user');
echo $result->num_rows;
while($data=$result->fetch_assoc()){
echo "<pre>";
print_r($data);
echo "</pre>";
}
echo $db->escape_string("day la noi dung 'kiem soat'");