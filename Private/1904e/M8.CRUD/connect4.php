<?php
$servername = "localhost";
$username = "root";
$password = "";

// tạo 1 kết nối đến MySQL
$connection = mysqli_connect($servername, $username, $password);
if (!$connection) {
    die("không thể kết nối đến csdl");
}

echo "kết nối đến CSDL thành công";
