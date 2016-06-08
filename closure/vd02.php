<?php
$name="jacky";
function demo(){
	$name="Bibi";
	$fun=function() use (&$name){
		$name="Kenny";
	};
	$fun();
	echo $name;
}

demo();
// ket qua la Kenny
// bien $nam ngoai ham or anh huong gi den bien name trong ham
//trong ham, bien name duoc gan = Bibi, trong ham nua bien $name duoc gan = Kenny
//do co tham chieu nen bien $name ngoai ham luc nay se thay doi tu Bibi->Kenny
//echo $name -> Kenny

