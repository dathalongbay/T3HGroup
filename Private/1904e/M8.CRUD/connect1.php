<?php
$servername = "localhost";
$username = "root1";
$password = "";

// tạo 1 kết nối đến CSDL
$connection = new mysqli($servername, $username, $password);
if ($connection->connect_error) {
    die("không thể kết nối đến csdl");
}

echo "kết nối đến CSDL thành công";
