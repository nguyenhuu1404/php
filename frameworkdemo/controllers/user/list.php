<?php
$muser= new Model_User;
$data=$muser->listAll();
loadview("user/list_view",$data);