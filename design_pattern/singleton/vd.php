<?php
class QHOnline{
	public static $count=0;
	public static $instance;
	protected function __construct(){
		self::$count++;
		echo "QHOnline Class Call";
	}
	public static function getInstance(){
		if(self::$instance === null){
			$qho=self::$instance = new QHOnline;
			return $qho;			
		}

	}
	public function test(){
		echo "Hello";
	}
	protected function __clone(){

	}
}
/*$qho=new QHOnline;
$qho2=new QHOnline;*/
$qho=QHOnline::getInstance();
//$qho2=QHOnline::getInstance();
$qho2=clone $qho;
$qho->test();
echo "<br />".QHOnline::$count;