<?php
require "library/function.php";
//tuong tac co so du lieu
require "library/class.php";
//load cac file giao dien
//top
require "templates/bluesky/top.php";
//left
require "templates/bluesky/left.php";
//content
echo "<div id='info'>";
//điều hướng gọi file
if(isset($_GET['controller'])){

switch($_GET['controller']){
	case "news":
	require "controllers/news/controller.php";
	break;
	case "user":
	require "controllers/user/controller.php";
	break;
}	

}else{

}
echo "</div>";
//botton
require "templates/bluesky/bottom.php";

?>