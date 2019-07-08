<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>


<?php
// cách khai báo mảng kiểu 1
/**
 * áp dụng cho mảng chỉ số
 * mảng chỉ số sẽ tự tạo key khi truyền value của phần tử
 */
$cities = array("hà nội", "thanh hoá", "nghệ an","hà tĩnh", "hồ chí minh");


// cách số 2
/**
 * khai báo key cho mảng chỉ số
 */
$cities = array(0 => "hà nội",1 => "thanh hoá",2 => "nghệ an",3 => "hà tĩnh",4 => "hồ chí minh");

// cách số 3
$cities = array();
$cities[] = "hà nội";
$cities[] = "thanh hoá";
$cities[] = "nghệ an";
$cities[] = "hà tĩnh";
$cities[] = "hồ chí minh";

// cách số 4
$cities = array();
$cities[0] = "hà nội";
$cities[1] = "thanh hoá";
$cities[2] = "nghệ an";
$cities[3] = "hà tĩnh";
$cities[4] = "hồ chí minh";
?>
</body>
</html>