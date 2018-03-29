<?php
//type hinting hay con goi la du lieu goi y, no rang buoc du lieu truyen vao
class QHOnline{
	public function test(){
		return "QHOnline - PHP Training";
	}
}
class Demo{
	public $content;
	public function __construct(QHOnline $qho){
		$this->content=$qho;
	}
}
$qho=new QHOnline;
$demo=new Demo($qho);
echo $demo->content->test();