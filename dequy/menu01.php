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

echo "<pre>";
print_r($data);
echo "</pre>";

function dequy($data,$parent=0,$text="--",$select=0){
	foreach($data as $k=>$value){
		if($value['parent'] == $parent){
			$id=$value['id'];
			if($select != 0 && $id == $select){
				echo "<option value='#' selected='selected'>".$text.$value['name']."</option>";
			}else{
				echo "<option value='#'>".$text.$value['name']."</option>";
			}
			unset($data[$k]);
			dequy($data,$id,$text."--",$select);
		}
	}
}
echo "<select name='cate'>";
dequy($data,0,"--",7);
echo "</select>";
/*foreach($data as $value){
	if($value['parent'] == 0){
		echo $value['name']."<br />";
		$id=$value['id'];
		dequy($data,$id);
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
*/