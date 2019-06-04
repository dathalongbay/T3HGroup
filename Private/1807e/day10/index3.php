<?php
/*
 * Kieu du lieu int
 */
$int = 3;
var_dump($int);

/*
 * Kiểu dữ liệu float
 */
$float = 1.4567;
echo '<br>';
var_dump($float);

/*
 * Kiểu dữ liệu chuỗi
 */
$string = 'hello php';
echo '<br>';
var_dump($string);

/**
 * Kiểu dữ liệu boolean
 */
$boolean_true = true;
echo '<br>';
var_dump($boolean_true);
echo '<br>';
$boolean_false = false;
var_dump($boolean_false);

/**
 * Kiểu dữ liệu dạng mảng
 */
$array = array(1,2,3,4,5,6,7,8,9,10);
echo '<br>';
var_dump($array);

echo '<pre>';
print_r($array);
echo '</pre>';

/**
 * kiểu dữ liệu null
 */
$null = null;
echo '<br>';
var_dump(null);

/**
 * khai báo 1 hằng số
 */
define('APP_NAME', 'Ứng dụng PHP');
echo '<br>' . APP_NAME;




