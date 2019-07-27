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

<h1>Xoá toàn bộ các session</h1>

<?php
/**
 * Tạo ra 2 biến session trong PHP
 */
$_SESSION["user_name"] = "admin";
$_SESSION["user_email"] = "admin@gmail.com";
/**
 * Hoặc gán 1 biến vào $_SESSION
 */
$location = "hà nội";
$_SESSION["user_location"] = $location;

echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>

<?php
// huỷ toán bộ session trong PHP
session_unset();
session_destroy();
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>

</body>
</html>