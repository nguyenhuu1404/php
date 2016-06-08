<?php
function demo($param){
	echo "call demo with Param 1: $param </br>";
}
call_user_func('demo', 9999);

$demo=function($param){
	echo "call demo with Param 2: $param </br>";
};

call_user_func($demo, 999);

call_user_func(function($param){
	echo "call demo with Param 3: $param </br>";
},999);

//2 doi so: doi so 1 la ham call back, doi so thu 2 la doi so, cac param tuong ung voi so ptu trong array
call_user_func_array(function($param1,$param2){
	echo "call demo with Param 4: $param1 and $param2 </br>";
},array('one','two'));