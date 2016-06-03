<?php
$data="";
if(isset($_POST['ok'])){
	$u=$p="";
	$valid=new Helper_Validate;
	$valid->notEmpty($_POST['txtuser'],$lang['notempty_user']);
	$valid->notEmpty($_POST['txtpass'],$lang['notempty_pass']);
	$valid->notMatches($_POST['txtpass'],$_POST['txtpass2'],$lang['notmatches_pass']);	
	if($valid->isValid() == FALSE){
		$data['error']=$valid->getMessage();
	}else{
		$u=$_POST['txtuser'];
		$p=$_POST['txtpass'];
		$l=$_POST['level'];
		$muser=new Model_User;
		if($muser->checkUsername($u) == FALSE){
			$data['error'][]=$lang['registered_user'];
		}else{
			$data=array(
				"username" => $u,
				"password" => $p,
				"level"    => $l
			);
			$muser->insertUser($data);
			redirect(BASEURL."/index.php?controller=user&action=list");
		}
	}
}
loadview("user/add_view",$data);