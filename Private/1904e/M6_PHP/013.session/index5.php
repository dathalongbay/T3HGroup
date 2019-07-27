<?php
// khởi động session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Chỉnh sửa session trong PHP</h1>

<?php
// tạo session
$_SESSION["user_name"] = "admin";

// Xem tất cả cả session đang hoạt động
echo "<br>In ra session trước khi sửa";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

// sửa session
$_SESSION["user_name"] = "mod";

// Xem tất cả cả session đang hoạt động
echo "<br>In ra session sau khi sửa";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>
</body>
</html>