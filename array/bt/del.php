<?php
$id=$_GET['uid'];
$file=file("account.txt");
foreach($file as $k => $item){
	$dataid=substr($item,0,strpos($item,"|"));
	if($id  == $dataid){
		$file[$k]="";
		break;
	}
}
file_put_contents("account.txt",$file);
header("location:index.php");
exit();
?>