<?php
class Demo{
	public $content;
	public function __construct(){
		$this->content="Call Data";
	}
}

function test(Demo $qho){
	echo $qho->content;
}
$demo=new Demo;
test($demo);