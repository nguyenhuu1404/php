<?php
$id=$_GET['data'];
$conn=mysql_connect("localhost","root","");
mysql_select_db("xml32",$conn);
$sql="select * from news where news_id='$id'";
$query=mysql_query($sql);
$data=mysql_fetch_assoc($query);
header("content-type:text/xml");
echo "<?xml version='1.0' encoding='utf-8'?>";
echo "<news>";
echo "<title>$data[news_title]</title>";
echo "<info>$data[news_info]</info>";
echo "<img>$data[news_img]</img>";
echo "</news>";
?>