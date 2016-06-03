<?php
class database{
	private $hostname="localhost";
	private $userhost="root";
	private $passhost="";
	private $dbname="mvc";
	private $conn=NULL;
	private $result=NULL;
	public function connect(){
		
		$this->conn = mysqli_connect($this->hostname, $this->userhost, $this->passhost, $this->dbname);
		// Check connection
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		// Change character set to utf8
		mysqli_set_charset($this->conn,"utf8");
	}
	public function disconnect(){
		if($this->conn){
			mysqli_close($this->conn);
		}
	}
	public function query($sql){
		if(!mysqli_query($this->conn, $sql)){
			 echo("Error description: " . mysqli_error($this->conn));
		}else {
			$this->result = mysqli_query($this->conn, $sql);
		}
	}
	public function num_rows(){
		if($this->result){
			$row = mysqli_num_rows($this->result);
		}else{
			$row=0;
		}
		return $row;
	}
	public function fetch(){
		if($this->result){
			$data=mysql_fetch_assoc($this->result);
		}else{
			$data=0;
		}
		return $data;
	}
	
}
//lazy load autoload duoc goi khi ta khoi tao mot doi tuong
function __autoload($url){
	$url=strtolower($url);
	require "models/$url.php";
}
/*
$db=new database;
$db->connect();
$sql="select * from user order by id desc";
$db->query($sql);
$row=$db->num_rows();
echo $row;
while($data=$db->fetch()){
	echo "<pre>";
	print_r($data);
	echo "</pre>";
	echo $data['username'];
}
*/
?>