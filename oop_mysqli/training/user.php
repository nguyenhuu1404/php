<?php
class user extends database{
	public $_username;
	public $_password;
	public $_level;
	public function __construct(){
		$this->connect();
	} 
	public function set_username($user){
		$this->_username=$user;
	}
	public function get_username(){
		return $this->_username;
	}
	public function set_password($pass){
		$this->_password=$pass;
	}
	public function get_password(){
		return $this->_password;
	}
	public function set_level($l){
		$this->_level=$l;
	}
	public function get_level(){
		return $this->_level;
	}
	public function check_login(){
		$sql="select * from user where username='".$this->get_username()."' and password='".$this->get_password()."'";
		$this->query($sql);
		if($this->num_rows() == 0){
			return FALSE;
		}else{
			return $this->fetch();
		}
	}
	public function listall(){
		$sql="select * from user order by id desc";
		$this->query($sql);
		if($this->num_rows() == 0){
			$data=0;
		}else{
			while($row=$this->fetch()){
				$data[]=$row;
			}
		}
		return $data;
	}
	public function insert_user(){
		$sql="insert into user(username,password,level) values('".$this->get_username()."','".$this->get_password()."','".$this->get_level()."')";
		$this->query($sql);
	}
	public function check_username(){
		$sql="select * from user where username='".$this->get_username()."'";
		$this->query($sql);
		if($this->num_rows()==0){
			return TRUE;
		}else{
			return FALSE;
		}
	}
}