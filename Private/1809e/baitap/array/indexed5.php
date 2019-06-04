<?php
/**
 * Dùng vòng lặp foreach để in ra key và value của mảng sau
 * Sau đó dùng lệnh unset để hủy phần từ có key là 2 và def
 * Sau đó in ra mảng mới bằng lệnh foreach
 */

$students = array();
$students[0] = 'A';
$students[1] = 'B';
$students[2] = 'C';
$students[3] = 'D';
$students[4] = 'E';
$students['abc'] = 'F';
$students['def'] = 'G';