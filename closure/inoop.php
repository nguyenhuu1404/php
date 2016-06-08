<?php
class Demo{
	public $name="Kenny";
	public $job="Teacher";
	public $output;
	
	//lambda closure
	public function test($string){
		//$ouput la mot phuong thuc vo dinh
		$this->output=function() use($string){
			return "Name: $this->name , Job: $this->job , Param: $string </br>";
		};
		return $this->output();
	}
	//phuong thuc call giup phan biet phuong thuc thuong va phuong thuc vo dinh
	//phuong thuc call duoc goi khi mot phuong thuc thuong duoc goi
	//neu su dung thuoc tinh la mot ham vo dinh
	public function __call($method,$param){
		//is_callable kiem tra xem gia tri ben trong cua no co phai la mot ham vo dinh hay khong
		if(is_callable(array($this,$method))){
			//call_user_func_array ho tro goi ham dua vao ten ham
			return call_user_func_array($this->$method,$param);
		}
	}
	//invoke cho phep goi doi tuong nhu mot function
	public function __invoke($param){
		return "Call Object as Function with Param: $param";
	}
	
}

$demo = new Demo;
echo $demo->test('QHOnline.Info');
//doi tuong demo duoc goi nhu mot function
echo $demo(999);
