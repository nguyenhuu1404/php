<?php
class Event{
	public static $event=array();
	public function attach($name,$callback,$param=0){
		self::$event[$name] = array(
				'callback' => $callback,
				'param'    => $param,
			);
	}
	public function trigger($name){
		if(isset(self::$event[$name])){
			call_user_func(self::$event[$name]['callback'],self::$event[$name]['param']);
		}else{
			die('Khong ton tai su kien nay');
		}
	}
}

$event=new Event;
$event->attach('created',function($param){
	echo "Event created call with Param: $param";
},999);

$event->trigger('created');