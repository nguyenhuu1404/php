<?php
class User extends database{
	protected $_username;
	protected $_password; 
	protected $_level; 
	public function __construct(){
		$this->connect();
	}
	public function setUsername($user){
		$this->_username=$user;
	}
	public function getUsername(){
		return $this->_username;
	}
	public function setPassword($pass){
		$this->_password=$pass;
	}
	public function getPassword(){
		return $this->_password;
	}
	public function setLevel($level){
		$this->_level=$level;
	}
	public function getLevel(){
		return $this->_level;
	}
	public function insert_user(){
		$sql="insert into user(username,password,level) values('".$this->getUsername()."','".$this->getPassword()."','".$this->getLevel()."')";
		$this->query($sql);
	}
}