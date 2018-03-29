<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
.song{
font-size:12px;
font-family:Tahoma;
background:#DFEFDC;
border:1px solid #FF6600;
padding:5px;
width:450px;
margin-bottom:5px;
}

a{
color:#FF3300;
text-decoration:none;
}
</style>
<script language="javascript" src="jquery.js"></script>
<script>
$(document).ready(function(){
	$("a.playsong").click(function(){
		id=this.getAttribute("id");
		$.ajax({
			url:"play.php",
			type:"get",
			async:true,
			data:"url="+id,
			success:function(kq){
				$("#ketqua").html(kq);
				$("#lyric").hide();
			}
		})
	})
	
	$("a#showlyric").live("click",function(){
		$("#lyric").slideToggle();
	})
	
})
</script>
</head>

<body>
	<?php
		$file=file_get_contents("http://mp3.zing.vn");
		$start="<div class=\"zing-top-song-item";
		$end="<\/div>";
		$rule="/$start.*<a href=\"(.*)\".*>(.*)<\/a>.*<a.*>(.*)<\/a>.*$end/msU";
		preg_match_all($rule,$file,$result);
		/*echo "<pre>";
		print_r($result);
		echo "</pre>";*/
		foreach($result[2] as $k=>$ten){
			$link=$result[1][$k];
			$casi=$result[3][$k];
			echo "<div class='song'><a href='#' id='$link' class='playsong'>$ten</a> - $casi </div>";
		}
	?>
    <div id="ketqua"></div>
</body>
</html>
