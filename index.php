<?php 
$a = '{"t":{"1":"","2":"","3":"","4":""},"content_full":"[1]: M\u1eb9 em l\u00e0 ng\u01b0\u1eddi ch\u0103m s\u00f3c cho c\u1ea3 gia \u0111\u00ecnh. [2]: B\u00fat ch\u00ec, th\u01b0\u1edbc k\u1ebb l\u00e0 nh\u1eefng \u0111\u1ed3 d\u00f9ng h\u1ecdc t\u1eadp h\u1eefu \u00edch. [3]: M\u1eb9 em [4]: B\u00fat ch\u00ec, th\u01b0\u1edbc k\u1ebb"}';
$b = json_decode($a);
echo '<pre>';
print_r($b);
?>