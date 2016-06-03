<script language="javascript" src="jquery.js"></script>
<script language="javascript">
$(document).ready(function(){
	$("#viewmenu ul:not('.menu:first')").hide();
	$("a.link").click(function(){
		li=$(this).parent();
		ul=li.find("ul:first").slideToggle();
	})
})
</script>
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

$newarr=array();

foreach($data as $value){
	$pa=$value['parent'];
	$newarr[$pa][]=$value;
}

echo "<pre>";
print_r($newarr);
echo "</pre>";

function dequy($data,$parent=0){
	if(isset($data[$parent])){
		echo "<ul class='menu'>";
		foreach($data[$parent] as $k=>$value){
			echo "<li>";
			$id=$value['id'];
			if(isset($data[$id])){
				echo "<a href='javascript:void()' class='link'>".$value['name']."</a>";
			}else{
				echo "<a href='#view$id'>".$value['name']."</a>";
			}
			unset($data[$k]);
			dequy($data,$id);
			echo "</li>";
		}
		echo "</ul>";
	}
}
echo "<div id='viewmenu'>";
dequy($newarr);
echo "</div>";
/*
foreach($newarr[0] as $value2){
	echo $value2['name']."<br />";
	$id=$value2['id'];
	if(isset($newarr[$id])){
		foreach($newarr[$id] as $value3){
			echo "--".$value3['name']."<br />";
			$id=$value3['id'];
			if(isset($newarr[$id])){
				foreach($newarr[$id] as $value4){
					echo "----".$value4['name']."<br />";
				}
			}
		}
	}
}*/