<?php
namespace My\Application\Qhonline;
use My\Application\qhonline2 as qhonline2;
//nap file php
require "c.php";
class ABC{
	public function __construct(){
		echo "Hello";
	}
}

CONST RED="Mau Do";
//khai bao lop BCD  trong file c.php
$a=new qhonline2\BCD;
$a->demo();
echo __NAMESPACE__;