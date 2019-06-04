<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1>chỉnh sửa cookie trong PHP</h1>

<?php
/**
 * Khởi tạo cookie
 */
$cookie_name = "username";
$cookie_value = "admin";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

/**
 * In ra cookie trước chỉnh sửa
 */
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";


/**
 * Dùng chính hàm setcookie() để chỉnh sửa cookie
 */
$cookie_value = "moderator";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

/**
 * In ra cookie sau chỉnh sửa
 */
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
?>
</body>
</html>