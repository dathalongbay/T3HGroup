<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db1";

// tạo 1 kết nối đến CSDL
$connection = mysqli_connect($servername, $username, $password, $dbname);
if (!$connection) {
    die("không thể kết nối đến csdl");
}

echo "kết nối đến CSDL thành công";
