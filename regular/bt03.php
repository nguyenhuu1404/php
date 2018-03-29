<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php
		//đọc toàn bộ website với hàm file_get_contents();
		$file=file_get_contents("http://www.eximbank.com.vn/WebsiteExrate2012/Gold_vn_2012.aspx");
		$start="<span id=\"GoldRateRepeater_ctl01_lblCSHBUYRT\">";
		$start2="<span id=\"GoldRateRepeater_ctl01_lblCSHSELLRT\">";
		$end="<\/span>";
		//quét dữ liệu bắt đầu bằng start, .* bất kì cái gì, (.*) bóc tách dữ liệu tương ứng với .* để trả về result, usU để bỏ qua xuống dòng
		$rule="/$start(.*)$end.*$start2(.*)$end/msU";
		preg_match($rule,$file,$result);
		echo "<pre>";
		print_r($result);
		echo "</pre>";
	?>
</body>
</html>
