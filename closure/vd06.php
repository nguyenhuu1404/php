<?php
namespace QHOnline;
class Demo{
	public function test(){
		//lay cac doi so ma nguoi dung truyen vao
		$params = func_get_args();
		echo "Call Test ";
		echo "<pre>";
		print_r($params);
		echo "</pre>";
	}
	public function test2($param1, $param2) {
		echo "Call test 2 with $param1 $param2";
	}
}
//goi mot class, ten class theo namespace or khong, ten function, cac doi so
call_user_func_array(array('QHOnline\Demo','test'),array('one','two','three'));

call_user_func_array(array('QHOnline\Demo','test2'),array('one','two'));