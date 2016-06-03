<?php
$loi="";
//kiem tra xem du lieu da nhap chua
if(isset($_POST['ok'])){
	$u=$p="";
	if($_POST['txtuser'] == NULL){
		$loi[]="Please enter your username";
	}else{
		$u=$_POST['txtuser'];
	}
	if($_POST['txtpass'] == NULL){
		$loi[]="Please enter your password";
	}else{
		$p=$_POST['txtpass'];
	}
	$l=$_POST['level'];
	if($u && $p && $l){
		//co ham autoload nen khi khoi tao doi tuong User, file use da dc require vao, xu li o ham autoload trong file class.php
		$muser= new User;
		$muser->setUsername($u);
		$muser->setPassword($p);
		$muser->setLevel($l);
		$muser->insert_user();
		$loi[]="Insert Thanh cong";
	}
}
//requier view
require "views/user/add_view.php";
?>