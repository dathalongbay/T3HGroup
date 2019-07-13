<?php


$colors = array("red", "green", "blue");

echo "<pre>";
print_r($colors);
echo "</pre>";

/**
 * array_pop() gỡ bỏ phần tử cuối cùng mảng
 */

array_pop($colors);

echo "<pre>";
print_r($colors);
echo "</pre>";