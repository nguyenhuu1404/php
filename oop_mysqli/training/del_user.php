<?php
session_start();
$loi="";
$id=$_GET['uid'];
require "class.php";
require "user.php";
if($_SESSION['ses_level'] != 2){
	header("location:login.php");
	exit();
}
$muser= new User;
$muser->delete_user($id);
header("location:index.php");
exit();
?>