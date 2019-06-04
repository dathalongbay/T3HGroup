<?php
// khai báo mảng kết hợp
// key của nó có thể là 1 số hoặc 1 chuỗi
// chú ý chuỗi không nên có dấu và không nên sử dụng khoảng cách
// ha_noi không nên viết là ha noi
$ass = array();
$ass['ha_noi'] = 10000000;
$ass['HCM'] = 12000000;
$ass['da_nang'] = 20000000;
$ass[1] = 20000000;
$ass[100] = 20000000;
$ass[999] = 20000000;
echo '<br> Mảng kết hợp';
echo '<pre>';
print_r($ass);
echo '</pre>';
// truy cập vào 1 phần tử
echo $ass['ha_noi'];
