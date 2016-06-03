<?php
/*function demo($param){
	echo "call demo with Param: $param";
}*/
/*$demo=function($param){
	echo "call demo with Param: $param";
};*/
/*call_user_func(function($param){
	echo "call demo with Param: $param";
},999);*/

call_user_func_array(function($param1,$param2){
	echo "call demo with Param: $param1 and $param2";
},array('one','two'));