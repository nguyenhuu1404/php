<?php
class QHOnline{
	public static $count=0;
	//cai dat doi tuong
	public static $instance;
	//Khóa khởi tạo đối tượng bằng cách gán cho phương thức construct là protected
	protected function __construct(){
		self::$count++;
		echo "QHOnline Class Call";
	}
	//khởi tạo đối tượng
	//phương thức getInstance phải là phương thức tĩnh để gọi nó không cần phải khởi tạo đối tượng
	public static function getInstance(){
		//Kiểm tra không tồn tại đối tượng thì mới khởi tạo
		if(self::$instance === null){
			$qho=self::$instance = new QHOnline;
			return $qho;			
		}

	}
	public function test(){
		echo "Hello";
	}
	//Khóa cơ chế clone() băng cách gán cho nó cơ chế protected
	protected function __clone(){

	}
}
/*$qho=new QHOnline;
$qho2=new QHOnline;*/
//Khởi tạo đối tượng qua phương thức tĩnh
$qho=QHOnline::getInstance();
//$qho2=QHOnline::getInstance();
//$qho2=clone $qho;
$qho->test();
echo "<br />".QHOnline::$count;