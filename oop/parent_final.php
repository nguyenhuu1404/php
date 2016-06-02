<?php
class Abc{
	public $name = 'cha';
	public function test() {
		echo $this->name;
	}
}
class Bcd extends Abc{
	public $job = 'con';
	public function test() {
		parent::test();
		echo $this->job;
	}
}

$a = new Bcd;
$a->test();