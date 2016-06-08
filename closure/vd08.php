<?php
class Event{
	//luu tru su kien vao thuoc tinh tinh $event
	public static $event = array();
	//dang ki su kien: ten su kien, call back, param
	public function attach($name, $callback, $param=0){
		//event la mot mang: voi key la ten su kien, cac phan tu call back va param
		self::$event[$name] = array(
				'callback' => $callback,
				'param'    => $param,
			);
	}
	//goi su kien: ten su kien
	public function trigger($name){
		//kiem tra xem da ton tai su kien nay chua
		if(isset(self::$event[$name])){
			call_user_func(self::$event[$name]['callback'],self::$event[$name]['param']);
		}else{
			die('Khong ton tai su kien nay');
		}
	}
}

$event = new Event;
//dang ki su kien
$event->attach('created',function($param){
	echo "Event created call with Param: $param";
},999);

//goi su kien
$event->trigger('created');

//event manager gom 2 chuc nang la dang ki su kien va goi su kien