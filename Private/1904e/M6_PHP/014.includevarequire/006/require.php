<?php

/**
 * Câu lệnh include "đường dẫn của file";
 * thì có thể sử dụng những hàm hoặc class hoặc biến hoặc hằng số của file các bạn vừa nạp
 */
require "functions1.php";

$cv = tinhchuvihinhtron(3);


/**
 * gặp thông báo lỗi
 * Fatal error: Uncaught Error: Call to undefined function tinhchuvihinhtron() in C:\xampp\htdocs\1901ephp1\day7\napinclude\index.php:4 Stack trace: #0 {main} thrown in C:\xampp\htdocs\1901ephp1\day7\napinclude\index.php on line 4
 */
echo "Chu vi : " , $cv;
