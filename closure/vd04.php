<?php
class Demo{
	public $name="Kenny";
	public $job="Teacher";
	public $output;
	public function test($string){
		$this->output=function() use($string){
			return "Name: $this->name , Job: $this->job , Param: $string";
		};
		return $this->output();
	}
	public function __call($method,$param){
		if(is_callable(array($this,$method))){
			return call_user_func_array($this->$method,$param);
		}
	} 
	public function __invoke($param){
		return "Call Object as Function with Param: $param";
	}
}
$demo=new Demo;
echo $demo->test('QHOnline.Info');
echo $demo(999);