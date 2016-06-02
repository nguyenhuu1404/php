<?php
class Abc{
	public $a = 'public';
	protected $b = 'protected';
	private $c = 'private';
	
	public function test() {
		echo $this->a.'</br>';
		echo $this->b.'</br>';
		echo $this->c.'</br>';
	}
	
}
class Bcd extends Abc{
	public $f = 'bcd';
	public function test2() {
		$this->test();
		echo $this->f;
	}
}
$a = new Bcd;

echo $a->test2();