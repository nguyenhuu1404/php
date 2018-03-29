<?php
$data=array(
	array(
		"id" => "1",
		"name"=>"Menu 1",
		"parent" => "0"
	),
	array(
		"id" => "2",
		"name"=>"Menu 2",
		"parent" => "0"
	),
	array(
		"id" => "3",
		"name"=>"Menu 3",
		"parent" => "0"
	),
	array(
		"id" => "4",
		"name"=>"Menu 1.1",
		"parent" => "1"
	),			
	array(
		"id" => "5",
		"name"=>"Menu 1.2",
		"parent" => "1"
	),
	array(
		"id" => "6",
		"name"=>"Menu 2.1",
		"parent" => "2"
	),
	array(
		"id" => "7",
		"name"=>"Menu 2.2",
		"parent" => "2"
	),		
	array(
		"id" => "8",
		"name"=>"Menu 1.2.1",
		"parent" => "5"
	),	
);

foreach($data as $value){
	if($value['parent'] == 0){
		echo $value['name']."<br />";
		$id=$value['id'];
		
		foreach($data as $value2){
			if($value2['parent'] == $id){
				echo "--".$value2['name']."<br />";
				$id2=$value2['id'];
				foreach($data as $value3){
					if($value3['parent'] == $id2){
						echo "----".$value3['name']."<br />";
					}
				}
			}
		}

	}
}
