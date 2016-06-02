<?php
class Abc{
	public $name='huunv';
	public function test(){
		return $this->name;
	}
}

$a = new Abc;
echo $a->test();