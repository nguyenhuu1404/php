<?php
define("BASEURL","http://localhost/mvc");
require "language/lang_vn.php";
require "library/function.php";
require "library/database.php";
if(isset($_GET['controller'])){
	switch($_GET['controller']){
		case "user":
		require "controllers/user/controller.php";
		break;
	}
}else{

}
