<?php
function __autoload($url) {
	require "$url.php";
}
//khởi tạo đối tượng Abc thì tên đối tượng sẽ được truyền vào hàm autoload,và require class abc vào
$a = new Abc;
$a->test();