<?php
namespace QHOnline;
class Demo{
	public function test(){
		$params=func_get_args();
		echo "Call Test ";
		echo "<pre>";
		print_r($params);
		echo "</pre>";
	}
}

call_user_func_array(array('QHOnline\Demo','test'),array('one','two','three'));