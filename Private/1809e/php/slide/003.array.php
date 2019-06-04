<?php
// khai báo mảng index
// key của nó đều là số nguyên
$index_array = array();
// khai báo các phần tử trong mảng
$index_array[0] = 'ha noi';
$index_array[1] = 'ho chi minh';
$index_array[2] = 'da nang';
$index_array[3] = 'thanh hoa';
$index_array[4] = 'nghe an';
echo '<br> mảng index key đều là sô nguyên ';
echo '<pre>';
print_r($index_array);
echo '</pre>';

// truy cập vào 1 key
echo $index_array[4];