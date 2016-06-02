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
$a = new Abc;

echo $a->test();