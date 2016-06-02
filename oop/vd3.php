<?php
class Abc{
	public function __construct() {
		echo 'hello'.'</br>';
	}
	public function test() {
		echo 'test'.'</br>';
	}
	public function __destruct() {
		echo 'Good bye'.'</br>';
	}
}

$a = new Abc;
echo $a->test();
echo 'hehe';
?>
<?php 
echo 'he';
?>