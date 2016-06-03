<?php
class Model_User extends Model{
	protected $_table="user";
	public function listAll(){
		$this->getData($this->_table);
		return $this->fetchAll();
	}
	public function deleteUser($id){
		$this->where("id='$id'");
		$this->delete($this->_table);
	}
	public function insertUser($data){
		$this->insert($this->_table,$data);
	}
	public function checkUsername($username,$id=""){
		if($id != ""){
			$this->where("username='$username' and id != '$id'");
		}else{
			$this->where("username='$username'");
		}
		$this->getData($this->_table);
		if($this->num_rows() == 0){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	public function getUserById($id){
		$this->where("id='$id'");
		$this->getData($this->_table);
		return $this->fetch();
	}
	public function updateUser($data,$id){
		$this->where("id='$id'");
		$this->update($this->_table,$data);
	}
}