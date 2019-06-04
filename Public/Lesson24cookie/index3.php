<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1>Xóa cookie</h1>
<pre>
    Để xóa cookie bạn cần đặt thời gian quá hạn của nó đã qua
    ví đụ đã qua 1 giờ
    time() sẽ lấy ra thời gian hiện tại
    còn time() - 3600 sẽ lấy ra thời gian cách đây 1 giờ
</pre>

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

// xóa cookie
setcookie("username", "", time() - 3600);

/**
 * In ra cookie sau khi xóa
 */
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
?>


</body>
</html>