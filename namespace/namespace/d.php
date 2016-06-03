<?php
use My\Application as Myapp;
//goi den namespace
$a = new Myapp\ABC;
$a->test();

//auto load file ABC.php khi khởi tạo class ABC trong file ABC.php
function __autoload($class){
	$name=str_replace("\\","/",$class);
	require "$name.php";
}
