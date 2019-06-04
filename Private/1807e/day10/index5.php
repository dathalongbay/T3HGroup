<?php
$month = date('m');
var_dump($month);
switch ($month) {
    case '01':
        echo 'thang 1';
        break;
    case '02':
        echo 'thang 2';
        break;
    case '08':
        echo 'thang 8';
        break;
    default:
        echo "THANG N";
}