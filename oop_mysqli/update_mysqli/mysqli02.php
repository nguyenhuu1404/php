<?php
$db= new Mysqli('localhost','root','','project');
$statment=$db->prepare('select * from user where id=?');
$id=85;
$statment->bind_param('i',$id);
$statment->execute();
$result=$statment->get_result();
$data=$result->fetch_assoc();
echo "<pre>";
print_r($data);
echo "</pre>";
$statment->close();

$statment=$db->prepare("insert into user(username,password,level) values(?,?,?)");
$user="kenny2222";
$pass="12345";
$level=2;
$statment->bind_param('ssi',$user,$pass,$level);
$statment->execute();
echo "Done";
$statment->close();

?>