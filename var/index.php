<?php 
echo 'dấu " " '. "có thể nội suy biến, chứa được dấu '"."<br/>";
echo "dấu ' ' ". 'không thể nội suy biến, chứa được dấu ""'.'<br/>';
echo 'biến nội suy là biến có thể nằm trong chuỗi'.'<br/>';
echo "Mac's".'"$ la tat ca"'.'<br/>';
$a='hello';
$$a='xinchao';
$$$a='goodbye';
echo $xinchao.'<br/>';
echo 'biến được đọc tuần tự từ trên xuống'.'<br/>';
define('A', 500);

?>