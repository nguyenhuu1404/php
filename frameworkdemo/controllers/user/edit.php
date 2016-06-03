<?php
$data="";
$id=$_GET['uid'];
$muser=new Model_User;

if(isset($_POST['ok'])){
	$u=$p="";
	if($_POST['txtuser'] == NULL){
		$data['error'][]="Please Enter Your username";
	}else{
		$u=$_POST['txtuser'];
	}
	if($_POST['txtpass'] != $_POST['txtpass2']){
		$data['error'][]="Your password and repassword are not matches";
	}else{
		if($_POST['txtpass'] != ""){
			$p=$_POST['txtpass'];
		}else{
			$p="none";
		}
	}
	$l=$_POST['level'];
	if($u && $p && $l){
		if($muser->checkUsername($u,$id) == FALSE){
			$data['error'][]="Your username has been registered, please try again";
		}else{
			$data_update=array(
					"username" => $u,
					"level"    => $l,
			);
			if($p != "none"){
				$data_update['password']=$p;
			}
			$muser->updateUser($data_update,$id);
			redirect("index.php?controller=user&action=list");
		}
	}	
}
$data['data']=$muser->getUserById($id);
loadview("user/edit_view",$data);