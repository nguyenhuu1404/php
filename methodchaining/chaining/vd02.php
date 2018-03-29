<?php
Class Database extends Mysqli{
	protected $result;
	public function __construct(){
		//ket noi database voi mysqli
		parent::__construct('localhost','root','','zf2online');
	}
	public function get($table){
		$this->result = $this->query("select * from $table");
		return $this;
	}
	public function fetchAll(){
		$data=array();
		//fetch_assoc do du lieu ra mot mang khi chay xong mot cau query;
		while($row = $this->result->fetch_assoc()){
			$data[]=$row;
		}
		return $data;
	}
}
$user = new Database;
$data = $user->get('users')->fetchAll();
echo "<pre>";
print_r($data);
echo "</pre>";
//phan biet thuoc tinh va bien trong ham
//thuoc tinh thi cac ham se truy suat duoc, con bien trong ham chi trong ham moi su dung duoc
