<?php
class User extends Mysqli{
	public function __construct(){
		parent::__construct("localhost","root","","project");
	}
	public function listAllUser(){
		$result=$this->query("select * from user");
		while($row=$result->fetch_assoc()){
			$data[]=$row;
		}
		return $data;
	}
	public function listUserByLevel($lv){
		$statment=$this->prepare("select * from user where level=?");
		$statment->bind_param("i",$lv);
		$statment->execute();
		$result=$statment->get_result();
		while($row=$result->fetch_assoc()){
			$data[]=$row;
		}
		$statment->close();
		return $data;
	}
}

$muser=new User;
$data=$muser->listUserByLevel(2);
echo "<pre>";
print_r($data);
echo "</pre>";
