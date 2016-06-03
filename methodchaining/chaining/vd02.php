<?php
Class Database extends Mysqli{
	protected $result;
	public function __construct(){
		parent::__construct('localhost','root','','zf2online');
	}
	public function get($table){
		$this->result=$this->query("select * from $table");
		return $this;
	}
	public function fetchAll(){
		$data=array();
		while($row=$this->result->fetch_assoc()){
			$data[]=$row;
		}
		return $data;
	}
}
$user=new Database;
$data=$user->get('users')->fetchAll();
echo "<pre>";
print_r($data);
echo "</pre>";