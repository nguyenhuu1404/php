<?php
class Demo{
	public function __construct(array $qho){
		//call_user_func($qho,0);
		echo "<pre>";
		print_r($qho);
		echo "</pre>";
	}
}

/*$demo=new Demo(function(){
	echo "Callback Function";
});*/

$a=array('one','two','three');
$demo=new Demo($a);
